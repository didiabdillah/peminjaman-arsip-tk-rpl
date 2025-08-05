@extends('layouts.admin.app')
@section('title', 'Daftar Arsip')
@section('content')
<div class="content-wrapper p-4">
    <div class="card">
        <div class="card-header">
            <h3>Arsip</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('archives.create') }}" class="btn btn-primary mb-3">+ Tambah Arsip</a>
        
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
        
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Jumlah Kuantitas</th>
                        <th>Gambar</th>
                        <th>Publikasi oleh</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($archives as $a)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $a->archive_code }}</td>
                        <td>{{ $a->title }}</td>
                        <td>{{ $a->category }}</td>
                        <td>{{ $a->quantity }}</td>
                        <td>
                            <img src="{{ asset('assets/img/archives/'.$a->image) }}" width="100">
                        </td>
                        <td>{{ $a->created_by }}</td>
                        <td>
                            <a href="{{ route('archives.show', $a->id) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('archives.edit', $a->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('archives.destroy', $a->id) }}" method="POST" style="display:inline-block;">
                                @csrf @method('DELETE')
                                <button onclick="return confirm('Delete this archive?')" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
