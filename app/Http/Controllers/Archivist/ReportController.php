<?php

namespace App\Http\Controllers\Archivist;

use App\Http\Controllers\Controller;
use App\Models\Borrowing;
use PDF;
use Excel;
use App\Exports\BorrowingExport;

class ReportController extends Controller
{
    public function index()
    {
        $borrowings = Borrowing::with(['user', 'archive'])->latest()->get();
        return view('pages.archivist.reports.index', compact('borrowings'));
    }

    public function exportPdf()
    {
        $borrowings = Borrowing::with(['user', 'archive'])->get();
        $pdf = PDF::loadView('pages.archivist.reports.pdf', compact('borrowings'));
        return $pdf->download('borrowings-report.pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new BorrowingExport, 'borrowings-report.xlsx');
    }
}
