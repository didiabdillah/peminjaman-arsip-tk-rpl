@extends('layouts.admin.app')
@section('title', 'My Dashboard')
@section('content')
<div class="content-wrapper p-4">
    <h3>Ringkasan Peminjaman</h3>
    <div class="row">
        <div class="col-md-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $myRequests }}</h3>
                    <p>Total Pengajuan</p>
                </div>
                <div class="icon">
                    <i class="fas fa-list"></i>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $approved }}</h3>
                    <p>Disetujui</p>
                </div>
                <div class="icon">
                    <i class="fas fa-check"></i>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $pending }}</h3>
                    <p>Pending</p>
                </div>
                <div class="icon">
                    <i class="fas fa-clock"></i>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="small-box bg-secondary">
                <div class="inner">
                    <h3>{{ $returned }}</h3>
                    <p>Dikembalikan</p>
                </div>
                <div class="icon">
                    <i class="fas fa-undo"></i>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
