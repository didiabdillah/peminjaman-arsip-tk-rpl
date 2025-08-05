@extends('layouts.public.app')
@section('title', 'Tentang')

@section('breadcrumb')
<x-page-header 
    title="Tentang"
    :breadcrumb="[
        ['label' => 'Home', 'url' => url('/')],
        ['label' => 'Tentang', 'url' => '#']
    ]"
/>
@endsection

@section('content')
<div class="content-wrapper mt-2">
    <div class="card">
        <div class="card-body">
            <h3 class="mb-3">Tentang Aplikasi Peminjaman Arsip</h3>
            <p>
                Selamat datang di Aplikasi Peminjaman Arsip, sebuah platform digital yang digunakan untuk memudahkan akses dan pemanfaatan khazanah arsip yang kami kelola. Aplikasi ini merupakan wujud dalam meningkatkan kualitas layanan publik di bidang kearsipan.
            </p>
        </div>
    </div>
</div>
@endsection
