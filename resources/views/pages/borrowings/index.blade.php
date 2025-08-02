@extends('layouts.admin.app')
@section('title', 'Borrowing Requests')
@section('content')
<div class="content-wrapper p-4">
    <div class="card">
        <div class="card-header">
            <h3>Manajemen Peminjaman</h3>
        </div>
        <div class="card-body">
            @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif
        
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Pengguna</th>
                        <th>Arsip</th>
                        <th>Status</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($borrowings as $b)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
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
    </div>
</div>
@endsection
