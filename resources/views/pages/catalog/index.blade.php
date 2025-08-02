@extends('layouts.public.app')

@section('title', 'Catalog')
@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-md-5 d-flex align-items-center">
            <label for="tahun" class="mr-2 mb-0">Tahun Penciptaan</label>
            <input type="text" class="form-control mr-2" placeholder="eg. 1990">
            <span class="mr-2">-</span>
            <input type="text" class="form-control" placeholder="eg. 2022">
        </div>
        <div class="col-md-7">
            <div class="input-group">
                <input type="search" class="form-control" placeholder="Pencarian">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
        <div class="card card-dark card-outline">
            <div class="card-header">
            <h3 class="card-title">Jenis Arsip</h3>
            </div>
            <div class="card-body">
            <div class="form-group">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="tekstual" checked>
                <label class="form-check-label" for="tekstual">Tekstual</label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="kearsitekturan">
                <label class="form-check-label" for="kearsitekturan">Kearsitekturan</label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="kartografi">
                <label class="form-check-label" for="kartografi">Kartografi</label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="foto" checked>
                <label class="form-check-label" for="foto">Foto</label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="video">
                <label class="form-check-label" for="video">Video</label>
                </div>
            </div>
            </div>
        </div>

        <div class="card card-dark card-outline">
            <div class="card-header">
            <h3 class="card-title">Kategori Arsip</h3>
            </div>
            <div class="card-body">
            <div class="form-group">
                <div class="form-check">
                <input class="form-check-input" type="radio" name="kategori" id="arsipTsunami" checked>
                <label class="form-check-label" for="arsipTsunami">Arsip Tsunami</label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="kategori" id="arsipVertikal">
                <label class="form-check-label" for="arsipVertikal">Arsip Instansi Vertikal</label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="kategori" id="arsipPerseorangan">
                <label class="form-check-label" for="arsipPerseorangan">Arsip Perseorangan</label>
                </div>
            </div>
            </div>
        </div>
        <button type="button" class="btn btn-primary btn-block">Saring Arsip</button>
        </div>

        <div class="col-lg-6">
        <div class="card archive-card">
            <img src="https://i.imgur.com/uStUtXp.png" class="archive-img" alt="Tsunami Archives">
            <div class="card-body">
            <h5 class="card-title-custom">Arsip Tsunami / Indian Ocean Tsunami Archives</h5>
            <div class="archive-meta">
                <span><i class="far fa-calendar-alt"></i> 5 Dec 2022</span>
                <span><i class="fas fa-user-tag"></i> Tim BAST</span>
            </div>
            <p class="card-text text-muted">Arsip tsunami merupakan arsip kegiatan rehabilitasi dan rekonstruksi akibat bencana gempa bumi dan tsunami yang terjadi di wilayah Provinsi Aceh dan Kepulauan Nias Provinsi Sumatera Utara...</p>
            <a href="#" class="card-link">Selengkapnya</a>
            </div>
        </div>

        <div class="card archive-card">
            <img src="https://i.imgur.com/oK89WzZ.png" class="archive-img" alt="Central Government Archives">
            <div class="card-body">
            <h5 class="card-title-custom">Arsip Instansi Vertikal</h5>
                <div class="archive-meta">
                <span><i class="far fa-calendar-alt"></i> 5 Dec 2022</span>
                <span><i class="fas fa-user-tag"></i> Tim BAST</span>
            </div>
            <p class="card-text text-muted">Balai Arsip Statis dan Tsunami (BAST) sebagai Unit Pelaksana Teknis (UPT) Arsip Nasional Republik Indonesia melaksanakan akuisisi arsip statis ke lembaga negara tingkat pusat...</p>
            <a href="#" class="card-link">Selengkapnya</a>
            </div>
        </div>
        
        <div class="card archive-card">
            <img src="https://i.imgur.com/T0bS1Y5.png" class="archive-img" alt="Archives of Individuals">
            <div class="card-body">
            <h5 class="card-title-custom">Arsip Perseorangan</h5>
                <div class="archive-meta">
                <span><i class="far fa-calendar-alt"></i> 5 Dec 2022</span>
                <span><i class="fas fa-user-tag"></i> Tim BAST</span>
            </div>
            <p class="card-text text-muted">Arsip Perseorangan merupakan arsip yang tercipta dari seseorang WNI yang berjuang melawan penjajahan di wilayah yang sekarang menjadi wilayah Negara Kesatuan Republik Indonesia...</p>
            <a href="#" class="card-link">Selengkapnya</a>
            </div>
        </div>
        </div>

        <div class="col-lg-3">
        <button type="button" class="btn btn-primary btn-block mb-3">Informasi Terkait</button>
        <div class="card bg-dark">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                    <span class="text-light">Jumlah</span>
                    <span class="badge bg-primary" style="font-size: 1rem;">3144</span>
                </div>
                <div class="d-flex justify-content-between text-muted">
                    <span>Tekstual</span>
                    <span>3000</span>
                </div>
                <div class="d-flex justify-content-between text-muted">
                    <span>Foto</span>
                    <span>144</span>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-primary btn-block">Halaman Selanjutnya</button>
        </div>
    </div>
    </div>
@endsection