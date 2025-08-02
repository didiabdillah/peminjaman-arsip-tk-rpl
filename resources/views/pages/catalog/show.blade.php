@extends('layouts.public.app')

@section('title', 'Detail')
@section('content')
<div class="container-fluid">
    <div class="card card-dark card-outline">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 text-center">
                    <div class="image-placeholder">
                        <i class="fa-solid fa-image"></i>
                        <span>NO IMAGE</span>
                    </div>
                </div>

                <div class="col-md-9">
                    <h3>Daftar Arsip 2020 BPK RI Perwakilan Provinsi Aceh</h3>
                    <div class="d-flex text-muted mb-3">
                        <div class="mr-4">
                            <i class="fas fa-calendar-alt mr-1"></i> 5 Dec 2022
                        </div>
                        <div>
                            <i class="fas fa-user mr-1"></i> Tim BAST
                        </div>
                    </div>
                    <p>
                        Badan Rehabilitasi dan Rekonstruksi Nanggroe Aceh Darussalam dan Kepulauan Nias Sumatera Utara (BRR NAD-Nias) merupakan salah satu objek pemeriksaan BPK Perwakilan Provinsi Sumatera Utara, karena pada saat itu BPK Perwakilan Provinsi Aceh belum terbentuk. BPK Perwakilan Provinsi Aceh pada awalnya merupakan salah satu Sub Auditorat di bawah lingkup kerja BPK Perwakilan I di Medan yang memfokuskan pemeriksaan pengelolaan dana BRR NAD-Nias.
                    </p>
                    <p>
                        Ketika BRR NAD-Nias dilikuidasi pada tahun 2009, Sub Auditorat Khusus BRR NAD-Nias pun dibubarkan. Namun seluruh dokumen yang berhubungan dengan pemeriksaan seperti laporan hasil pemeriksaan, kertas kerja pemeriksaan dan dokumen lainnya dipindahkan ke Aceh. Berdasarkan Surat Keputusan BPK Nomor 23/SK/I-VIII.3/6/2006 Tanggal 7 Juni 2006 diresmikan Perwakilan IX BPK RI di Banda Aceh oleh Ketua BPK RI, Bapak Anwar Nasution.
                    </p>
                </div>
            </div>
            
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-danger btn-lg">
                        <i class="fas fa-download mr-2"></i> Unduh Daftar Arsip (PDF)
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection