@extends('layouts.admin.app')
@section('title', 'Superadmin Dashboard')
@section('content')
<div class="content-wrapper p-4">
    <h3>Dashboard Summary</h3>
    <div class="row">
        <div class="col-md-4"><div class="alert alert-info">Total Users: <strong>{{ $totalUsers }}</strong></div></div>
        <div class="col-md-4"><div class="alert alert-warning">Total Archives: <strong>{{ $totalArchives }}</strong></div></div>
        <div class="col-md-4"><div class="alert alert-success">Total Borrowings: <strong>{{ $totalBorrowings }}</strong></div></div>
    </div>
</div>
@endsection
