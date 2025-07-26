@extends('layouts.app')
@section('title', 'My Borrow Requests')
@section('content')
<div class="content-wrapper p-4">
    <h3>My Borrow Requests</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Archive</th><th>Status</th><th>Borrowed At</th><th>Returned At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($requests as $r)
            <tr>
                <td>{{ $r->archive->title }}</td>
                <td>
                    <span class="badge badge-{{ $r->status == 'approved' ? 'success' : ($r->status == 'pending' ? 'warning' : ($r->status == 'rejected' ? 'danger' : 'info')) }}">
                        {{ ucfirst($r->status) }}
                    </span>
                </td>
                <td>{{ $r->borrow_date ?? '-' }}</td>
                <td>{{ $r->return_date ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
