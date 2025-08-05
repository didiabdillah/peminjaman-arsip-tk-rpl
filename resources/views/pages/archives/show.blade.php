@extends('layouts.admin.app')
@section('title', 'Detail Arsip')
@section('content')
<div class="content-wrapper p-4">
    <div class="card">
        <div class="card-header">
            <h3>Detail Arsip</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('archives.index') }}" class="btn btn-danger mb-3"><i class="fas fa-arrow-left mr-2"></i> Kembali</a>
            
            <ul class="list-group">
                <li class="list-group-item"><strong>Kode Arsip:</strong> {{ $archive->archive_code }}</li>
                <li class="list-group-item"><strong>Judul:</strong> {{ $archive->title }}</li>
                <li class="list-group-item"><strong>Kategori:</strong> {{ $archive->category }}</li>
                <li class="list-group-item"><strong>Lokasi Fisik:</strong> {{ $archive->physical_location }}</li>
                <li class="list-group-item"><strong>Jumlah Kuantitas:</strong> {{ $archive->quantity }}</li>
                <li class="list-group-item"><strong>Deskripsi:</strong><br> {{ $archive->description }}</li>
                <li class="list-group-item"><strong>Publikasi Oleh:</strong><br> {{ $archive->created_by }}</li>
                <li class="list-group-item"><strong>Tanggal Publikasi:</strong><br> {{ Carbon\Carbon::parse($archive->created_at)->format('d F Y') }}</li>
                <li class="list-group-item"><strong>Gambar:</strong><br>
                    @if ($archive->image)
                        <div class="text-center">
                            <img src="{{ asset('assets/img/archives/' . $archive->image) }}" alt="Archive Image" class="img-fluid">
                        </div>
                    @else
                        <p>Tidak ada gambar.</p>
                    @endif
                </li>

            </ul>
        </div>
    </div>
</div>
@endsection
