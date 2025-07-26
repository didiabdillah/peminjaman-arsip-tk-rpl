<?php

namespace App\Http\Controllers\Borrower;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Archive;
use App\Models\Borrowing;
use Illuminate\Support\Facades\Auth;

class CatalogController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $archives = Archive::where('title', 'like', "%$search%")->get();
        return view('pages.borrower.catalog.index', compact('archives', 'search'));
    }

    public function requestBorrow($id)
    {
        $archive = Archive::findOrFail($id);

        // Cek duplikat request pending
        $exists = Borrowing::where('user_id', Auth::id())
            ->where('archive_id', $id)
            ->where('status', 'pending')
            ->exists();

        if ($exists) {
            return back()->with('error', 'You already have a pending request for this archive.');
        }

        Borrowing::create([
            'user_id' => Auth::id(),
            'archive_id' => $id,
            'status' => 'pending',
        ]);

        return back()->with('success', 'Borrow request submitted.');
    }

    public function myRequests()
    {
        $requests = Borrowing::with('archive')
            ->where('user_id', Auth::id())
            ->orderByDesc('created_at')
            ->get();

        return view('pages.borrower.catalog.my-requests', compact('requests'));
    }
}
