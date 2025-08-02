@extends('layouts.admin.app')
@section('title', 'Archive Details')
@section('content')
<div class="content-wrapper p-4">
    <h3>Archive Details</h3>
    <ul class="list-group">
        <li class="list-group-item"><strong>Archive Code:</strong> {{ $archive->archive_code }}</li>
        <li class="list-group-item"><strong>Title:</strong> {{ $archive->title }}</li>
        <li class="list-group-item"><strong>Category:</strong> {{ $archive->category }}</li>
        <li class="list-group-item"><strong>Location:</strong> {{ $archive->physical_location }}</li>
        <li class="list-group-item"><strong>Quantity:</strong> {{ $archive->quantity }}</li>
        <li class="list-group-item"><strong>Description:</strong><br> {{ $archive->description }}</li>
    </ul>
</div>
@endsection
