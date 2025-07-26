@extends('layouts.app')
@section('title', 'Borrowing Requests')
@section('content')
<div class="content-wrapper p-4">
    <h3>Borrowing Management</h3>

    @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>User</th>
                <th>Archive</th>
                <th>Status</th>
                <th>Borrow Date</th>
                <th>Return Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($borrowings as $b)
            <tr>
                <td>{{ $b->user->name }}</td>
                <td>{{ $b->archive->title }}</td>
                <td>
                    <span class="badge badge-{{ $b->status == 'approved' ? 'success' : ($b->status == 'pending' ? 'warning' : ($b->status == 'rejected' ? 'danger' : 'info')) }}">
                        {{ ucfirst($b->status) }}
                    </span>
                </td>
                <td>{{ $b->borrow_date ?? '-' }}</td>
                <td>{{ $b->return_date ?? '-' }}</td>
                <td>
                    @if($b->status == 'pending')
                        <a href="{{ route('borrowings.approve', $b->id) }}" class="btn btn-success btn-sm">Approve</a>
                        <a href="{{ route('borrowings.reject', $b->id) }}" class="btn btn-danger btn-sm">Reject</a>
                    @elseif($b->status == 'approved' && !$b->return_date)
                        <a href="{{ route('borrowings.return', $b->id) }}" class="btn btn-info btn-sm">Mark Returned</a>
                    @else
                        -
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
