@extends('layouts.admin.app')
@section('title', 'Archive Catalog')
@section('content')
<div class="content-wrapper p-4">
    <h3>Archive Catalog</h3>

    <form method="GET" class="mb-3">
        <input name="search" value="{{ $search }}" class="form-control" placeholder="Search archive title...">
    </form>

    @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif
    @if(session('error')) <div class="alert alert-danger">{{ session('error') }}</div> @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th><th>Category</th><th>Location</th><th>Quantity</th><th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($archives as $a)
            <tr>
                <td>{{ $a->title }}</td>
                <td>{{ $a->category }}</td>
                <td>{{ $a->physical_location }}</td>
                <td>{{ $a->quantity }}</td>
                <td>
                    <a href="{{ route('catalog.request', $a->id) }}" class="btn btn-primary btn-sm">Request</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
