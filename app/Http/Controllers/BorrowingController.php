<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Borrowing;
use Illuminate\Support\Carbon;

class BorrowingController extends Controller
{
    public function index()
    {
        $borrowings = Borrowing::with('user', 'archive')->orderByDesc('created_at')->get();
        return view('pages.borrowings.index', compact('borrowings'));
    }

    public function approve($id)
    {
        $borrowing = Borrowing::findOrFail($id);
        $borrowing->status = 'approved';
        $borrowing->borrow_date = Carbon::now();
        $borrowing->save();

        return back()->with('success', 'Borrowing approved.');
    }

    public function reject($id)
    {
        $borrowing = Borrowing::findOrFail($id);
        $borrowing->status = 'rejected';
        $borrowing->save();

        return back()->with('success', 'Borrowing rejected.');
    }

    public function markReturned($id)
    {
        $borrowing = Borrowing::findOrFail($id);
        $borrowing->status = 'returned';
        $borrowing->return_date = Carbon::now();
        $borrowing->save();

        return back()->with('success', 'Archive marked as returned.');
    }
}
