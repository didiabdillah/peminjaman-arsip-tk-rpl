@extends('layouts.admin.app')
@section('title', 'Borrowing Report')
@section('content')
<div class="content-wrapper p-4">
    <h3>Borrowing Report</h3>

    <div class="mb-3">
        <a href="{{ route('report.pdf') }}" class="btn btn-danger">Export PDF</a>
        <a href="{{ route('report.excel') }}" class="btn btn-success">Export Excel</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>User</th><th>Archive</th><th>Status</th><th>Borrow Date</th><th>Return Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($borrowings as $b)
            <tr>
                <td>{{ $b->user->name }}</td>
                <td>{{ $b->archive->title }}</td>
                <td>{{ ucfirst($b->status) }}</td>
                <td>{{ $b->borrow_date ?? '-' }}</td>
                <td>{{ $b->return_date ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
