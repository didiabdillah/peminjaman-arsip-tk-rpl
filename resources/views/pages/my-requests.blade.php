@extends('layouts.public.app')
@section('title', 'My Borrow Requests')

@section('breadcrumb')
<x-page-header 
    title="Pengajuan Peminjaman Saya"
    :breadcrumb="[
        ['label' => 'Home', 'url' => url('/')],
        ['label' => 'Pengajuan Peminjaman Saya', 'url' => '#']
    ]"
/>
@endsection

@section('content')
<div class="content-wrapper mt-4">
    <div class="card">
        <div class="card-header">
            <h3>Pengajuan Peminjaman Saya</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Arsip</th>
                        <th>Tanggal Pinjam</th>
                        <th>Status</th>
                        <th>Tanggal Kembali</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($requests as $r)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $r->archive->title }}</td>
                        <td>{{ $r->borrow_date ?? '-' }}</td>
                        <td>
                            <span class="badge badge-{{ $r->status == 'approved' ? 'success' : ($r->status == 'pending' ? 'warning' : ($r->status == 'rejected' ? 'danger' : 'info')) }}">
                                {{ ucfirst($r->status) }}
                            </span>
                        </td>
                        <td>{{ $r->return_date ?? '-' }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
