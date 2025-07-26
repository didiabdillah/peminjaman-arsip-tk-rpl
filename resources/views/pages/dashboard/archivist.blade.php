@extends('layouts.app')
@section('title', 'Archivist Dashboard')
@section('content')
<div class="content-wrapper p-4">
    <h3>Archive & Borrowing Summary</h3>
    <div class="row">
        <div class="col-md-3"><div class="alert alert-primary">Archives: <strong>{{ $totalArchives }}</strong></div></div>
        <div class="col-md-3"><div class="alert alert-info">Requests: <strong>{{ $totalRequests }}</strong></div></div>
        <div class="col-md-2"><div class="alert alert-success">Approved: <strong>{{ $approved }}</strong></div></div>
        <div class="col-md-2"><div class="alert alert-warning">Pending: <strong>{{ $pending }}</strong></div></div>
        <div class="col-md-2"><div class="alert alert-secondary">Returned: <strong>{{ $returned }}</strong></div></div>
    </div>
</div>
@endsection
