@extends('layouts.admin.app')
@section('title', isset($archive) ? 'Edit Arsip' : 'Tambah Arsip')
@section('content')
<div class="content-wrapper p-4">
    <div class="card">
        <div class="card-header">
            <h3>Edit Arsip</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ isset($archive) ? route('archives.update', $archive->id) : route('archives.store') }}" enctype="multipart/form-data">
                @csrf
                @if(isset($archive)) @method('PUT') @endif
        
                <div class="form-group">
                    <label>Kode Arsip</label>
                    <input name="archive_code" class="form-control" value="{{ old('archive_code', $archive->archive_code ?? '') }}" {{ isset($archive) ? 'readonly' : '' }}>
                </div>
                <div class="form-group">
                    <label>Judul</label>
                    <input name="title" class="form-control" value="{{ old('title', $archive->title ?? '') }}">
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <input name="category" class="form-control" value="{{ old('category', $archive->category ?? '') }}">
                </div>
                <div class="form-group">
                    <label>Lokasi Fisik</label>
                    <input name="physical_location" class="form-control" value="{{ old('physical_location', $archive->physical_location ?? '') }}">
                </div>
                <div class="form-group">
                    <label>Quantity</label>
                    <input name="quantity" type="number" class="form-control" value="{{ old('quantity', $archive->quantity ?? 1) }}">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="description" class="form-control">{{ old('description', $archive->description ?? '') }}</textarea>
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <input name="image" type="file" class="form-control">
                </div>
                <div class="mt-4">
                    <a href="{{ route('archives.index') }}" class="btn btn-danger">Kembali</a>
                    <button class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
