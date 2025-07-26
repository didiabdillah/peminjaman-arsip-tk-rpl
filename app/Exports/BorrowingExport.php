<?php

namespace App\Exports;

use App\Models\Borrowing;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BorrowingExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Borrowing::with(['user', 'archive'])->get()->map(function ($b) {
            return [
                'User' => $b->user->name,
                'Email' => $b->user->email,
                'Archive' => $b->archive->title,
                'Status' => $b->status,
                'Borrow Date' => $b->borrow_date,
                'Return Date' => $b->return_date,
            ];
        });
    }

    public function headings(): array
    {
        return ['User', 'Email', 'Archive', 'Status', 'Borrow Date', 'Return Date'];
    }
}

