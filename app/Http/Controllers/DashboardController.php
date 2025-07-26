<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Archive;
use App\Models\Borrowing;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $role = $user->role;

        if ($role === 'superadmin') {
            $totalUsers = User::count();
            $totalArchives = Archive::count();
            $totalBorrowings = Borrowing::count();

            return view('pages.dashboard.superadmin', compact('totalUsers', 'totalArchives', 'totalBorrowings'));
        }

        if ($role === 'arsiparis') {
            $totalArchives = Archive::count();
            $totalRequests = Borrowing::count();
            $approved = Borrowing::where('status', 'approved')->count();
            $pending = Borrowing::where('status', 'pending')->count();
            $returned = Borrowing::where('status', 'returned')->count();

            return view('pages.dashboard.archivist', compact(
                'totalArchives', 'totalRequests', 'approved', 'pending', 'returned'
            ));
        }

        if ($role === 'peminjam') {
            $myRequests = Borrowing::where('user_id', $user->id)->count();
            $approved = Borrowing::where('user_id', $user->id)->where('status', 'approved')->count();
            $pending = Borrowing::where('user_id', $user->id)->where('status', 'pending')->count();
            $returned = Borrowing::where('user_id', $user->id)->where('status', 'returned')->count();

            return view('pages.dashboard.borrower', compact(
                'myRequests', 'approved', 'pending', 'returned'
            ));
        }

        abort(403);
    }
}
