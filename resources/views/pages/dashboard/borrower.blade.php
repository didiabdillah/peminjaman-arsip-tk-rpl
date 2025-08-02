@extends('layouts.admin.app')
@section('title', 'My Dashboard')
@section('content')
<div class="content-wrapper p-4">
    <h3>My Borrowing Summary</h3>
    <div class="row">
        <div class="col-md-3"><div class="alert alert-info">Total Requests: <strong>{{ $myRequests }}</strong></div></div>
        <div class="col-md-3"><div class="alert alert-success">Approved: <strong>{{ $approved }}</strong></div></div>
        <div class="col-md-3"><div class="alert alert-warning">Pending: <strong>{{ $pending }}</strong></div></div>
        <div class="col-md-3"><div class="alert alert-secondary">Returned: <strong>{{ $returned }}</strong></div></div>
    </div>
</div>
@endsection
