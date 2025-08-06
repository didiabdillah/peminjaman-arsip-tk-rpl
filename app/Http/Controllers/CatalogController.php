<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Archive;
use App\Models\Borrowing;
use Illuminate\Support\Facades\Auth;

class CatalogController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $startReleasedYear = $request->start_released_year;
        $endReleasedYear = $request->end_released_year;

        $archives = Archive::with('borrowings')
            ->where('title', 'like', "%$keyword%");

        if ($startReleasedYear && $endReleasedYear) {
            $archives = $archives->whereBetween('created_at', [date('Y-m-d', strtotime($startReleasedYear . '-01-01')), date('Y-m-d', strtotime($endReleasedYear . '-12-31'))]);
        }else if ($startReleasedYear) {
            $archives = $archives->where('created_at', '>=', date('Y-m-d', strtotime($startReleasedYear . '-01-01')));
        }else if ($endReleasedYear) {
            $archives = $archives->where('created_at', '<=', date('Y-m-d', strtotime($endReleasedYear . '-12-31')));
        }

        $archivesCount = $archives->count();
        $archives = $archives->paginate(10);

        return view('pages.catalog.index', compact('archives', 'keyword', 'startReleasedYear', 'endReleasedYear', 'archivesCount'));
    }

    public function show($id)
    {
        $archive = Archive::findOrFail($id);

        return view('pages.catalog.show', compact('archive'));
    }

    public function requestBorrow($id)
    {
        $archive = Archive::findOrFail($id);

        return view('pages.catalog.request', compact('archive'));
    }

    public function requestBorrowPost(Request $request, $id)
    {
        //validation
        $request->validate([
            'return-date' => 'required|date|after_or_equal:today',
            'purpose' => 'required|max:1024'
        ]);

        $archive = Archive::findOrFail($id);

        // Cek duplikat request pending
        $exists = Borrowing::where('user_id', Auth::id())
            ->where('archive_id', $id)
            ->where('status', 'pending')
            ->exists();

        if ($exists) {
            return back()->with('error', 'Anda sudah mengajukan peminjaman untuk arsip ini.');
        }

        //cek apakah masih tersedia
        $borrowings = $archive->borrowings->whereIn('status', ['approved', 'pending']);
        if ($borrowings->count() >= $archive->quantity) {
            return back()->with('error', 'Arsip ini tidak tersedia.');
        }

        Borrowing::create([
            'user_id' => Auth::id(),
            'archive_id' => $id,
            'status' => 'pending',
            'purpose' => $request->purpose,
            'borrow_date' => now(),
            'estimated_return_date' => $request->input('return-date'),
        ]);

        return back()->with('success', 'Pengajuan peminjaman berhasil.');
    }

    public function myRequests()
    {
        $requests = Borrowing::with('archive')
            ->where('user_id', Auth::id())
            ->orderByDesc('created_at')
            ->get();

        return view('pages.my-requests', compact('requests'));
    }
}
