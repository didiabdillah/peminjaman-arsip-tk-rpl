@extends('layouts.app')
@section('title', isset($archive) ? 'Edit Archive' : 'Add Archive')
@section('content')
<div class="content-wrapper p-4">
    <h3>{{ isset($archive) ? 'Edit' : 'Add' }} Archive</h3>
    <form method="POST" action="{{ isset($archive) ? route('archives.update', $archive->id) : route('archives.store') }}">
        @csrf
        @if(isset($archive)) @method('PUT') @endif

        <div class="form-group">
            <label>Archive Code</label>
            <input name="archive_code" class="form-control" value="{{ old('archive_code', $archive->archive_code ?? '') }}" {{ isset($archive) ? 'readonly' : '' }}>
        </div>
        <div class="form-group">
            <label>Title</label>
            <input name="title" class="form-control" value="{{ old('title', $archive->title ?? '') }}">
        </div>
        <div class="form-group">
            <label>Category</label>
            <input name="category" class="form-control" value="{{ old('category', $archive->category ?? '') }}">
        </div>
        <div class="form-group">
            <label>Physical Location</label>
            <input name="physical_location" class="form-control" value="{{ old('physical_location', $archive->physical_location ?? '') }}">
        </div>
        <div class="form-group">
            <label>Quantity</label>
            <input name="quantity" type="number" class="form-control" value="{{ old('quantity', $archive->quantity ?? 1) }}">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ old('description', $archive->description ?? '') }}</textarea>
        </div>
        <button class="btn btn-success">Save</button>
    </form>
</div>
@endsection
