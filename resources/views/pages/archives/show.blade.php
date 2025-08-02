@extends('layouts.admin.app')
@section('title', 'Archive Details')
@section('content')
<div class="content-wrapper p-4">
    <div class="card">
        <div class="card-header">
            <h3>Archive Details</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('archives.index') }}" class="btn btn-danger mb-3">Kembali</a>
            
            <ul class="list-group">
                <li class="list-group-item"><strong>Archive Code:</strong> {{ $archive->archive_code }}</li>
                <li class="list-group-item"><strong>Title:</strong> {{ $archive->title }}</li>
                <li class="list-group-item"><strong>Category:</strong> {{ $archive->category }}</li>
                <li class="list-group-item"><strong>Location:</strong> {{ $archive->physical_location }}</li>
                <li class="list-group-item"><strong>Quantity:</strong> {{ $archive->quantity }}</li>
                <li class="list-group-item"><strong>Description:</strong><br> {{ $archive->description }}</li>
                <li class="list-group-item"><strong>Created By:</strong><br> {{ $archive->created_by }}</li>
                <li class="list-group-item"><strong>Gambar:</strong><br>
                    @if ($archive->image)
                        <div class="text-center">
                            <img src="{{ asset('assets/img/archives/' . $archive->image) }}" alt="Archive Image" class="img-fluid">
                        </div>
                    @else
                        <p>No image available.</p>
                    @endif
                </li>

            </ul>
        </div>
    </div>
</div>
@endsection
