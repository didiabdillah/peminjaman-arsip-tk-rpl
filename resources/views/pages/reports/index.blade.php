@extends('layouts.admin.app')
@section('title', 'Laporan Peminjaman Arsip')
@section('content')
<div class="content-wrapper p-4">
    <div class="card">
        <div class="card-header">
            <h3>Laporan Peminjaman Arsip</h3>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <a href="{{ route('report.pdf') }}" class="btn btn-danger">Export PDF</a>
                <a href="{{ route('report.excel') }}" class="btn btn-success">Export Excel</a>
            </div>
        
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Pengguna</th>
                        <th>Arsip</th>
                        <th>Status</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($borrowings as $b)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
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
    </div>
</div>
@endsection
