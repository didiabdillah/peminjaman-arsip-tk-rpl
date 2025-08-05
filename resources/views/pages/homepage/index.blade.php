@extends('layouts.public.app')

@section('title', 'Selamat Datang di Aplikasi Peminjaman Arsip')

@section('content')
<br><br>
<div class="container-fluid bg-primary text-white text-center p-5 mb-4 rounded">
    <h1 class="display-4 fw-bold">Pusat Layanan Arsip</h1>
    <p class="fs-4">Temukan, ajukan, dan pinjam khazanah arsip kami secara online. Mudah, cepat, dan transparan.</p>
    <a href="{{ route('catalog.index') }}" class="btn btn-success btn-lg mt-3">Mulai Menjelajah</a>
</div>

<div class="row">
    <div class="col-lg-6">

        <div class="card card-primary card-outline mb-4">
            <div class="card-body">
                <h5 class="card-title fw-bold">Selamat Datang di Portal Kearsipan Kami</h5>
                <p class="card-text">
                    Aplikasi ini adalah gerbang digital Anda untuk mengakses koleksi arsip yang kami kelola.
                </p>
                <p class="card-text">
                    Kami berkomitmen untuk menyediakan layanan peminjaman yang efisien bagi para peneliti, mahasiswa, dan masyarakat umum.
                </p>
                <a href="{{ route('catalog.index') }}" class="btn btn-primary mt-3">Telusuri Koleksi Arsip</a>
            </div>
        </div>

    </div>
    <div class="col-lg-6">
        <div class="card card-primary card-outline mb-4">
            <div class="card-body">
                <h5 class="card-title fw-bold">Mulai Peminjaman dalam 3 Langkah</h5>
                <br>
                <ol>
                    <li><strong>Daftar & Login:</strong> Buat akun Anda untuk mengakses semua fitur.</li>
                    <li><strong>Cari & Pilih Arsip:</strong> Gunakan fitur pencarian untuk menemukan arsip yang Anda butuhkan.</li>
                    <li><strong>Ajukan Peminjaman:</strong> Isi formulir pengajuan dan tunggu konfirmasi dari tim kami.</li>
                </ol>
                <a href="{{ route('register') }}" class="btn btn-primary ">Daftar Sekarang</a>
            </div>
        </div>
    </div>
</div>
@endsection