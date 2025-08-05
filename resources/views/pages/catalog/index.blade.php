@extends('layouts.public.app')

@section('title', 'Katalog')

@section('breadcrumb')
<x-page-header 
    title="Katalog"
    :breadcrumb="[
        ['label' => 'Home', 'url' => url('/')],
        ['label' => 'Katalog', 'url' => '#']
    ]"
/>
@endsection

@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-lg-3">
            <form action="{{ route('catalog.index') }}" method="GET">
                <div class="card card-dark card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Pencarian</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="Pencarian" name="keyword">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-dark card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Tahun Publikasi</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <input type="number" class="form-control mr-2" placeholder="eg. 2020" name="start_released_year">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="eg. 2025" name="end_released_year">
                        </div>
                    </div>
                </div>
            
                <button type="submit" class="btn btn-primary btn-block">Filter</button>
            </form>
        </div>

        <div class="col-lg-6">
            @php
                $countUnavailable = 0;
            @endphp

            @if($archives->count() > 0)
                @foreach($archives as $archive)
                <div class="list-group">
                    <div class="list-group-item">
                        <div class="row">
                            <div class="col-auto">
                                <img class="img-fluid" src="{{ asset('assets/img/archives/' . $archive->image) }}" alt="Photo" style="max-height: 160px;">
                            </div>
                            <div class="col px-4">
                                <div>
                                    <h5 class="card-title-custom font-weight-bold">{{ $archive->title }}</h5>
                                    <div class="archive-meta">
                                        <span><i class="far fa-calendar-alt"></i> {{ Carbon\Carbon::parse($archive->created_at)->format('d M Y') }}</span>
                                        <span> | </span>
                                        <span><i class="fas fa-user-tag"></i> {{ $archive->created_by }}</span>
                                    </div>
                                    <p class="card-text text-muted">{{ Str::limit($archive->description, 50) }}</p>
                                    
                                    <div class="mb-2">
                                        @php
                                            //check if the archive is available
                                            $borrowings = $archive->borrowings->whereIn('status', ['approved', 'pending']);
                                            $quantity = $archive->quantity;
                                            $countUnavailable += $borrowings->count();
                                            if ($borrowings->count() < $quantity) {
                                                $status = 'Tersedia';
                                            } else {
                                                $status = 'Tidak Tersedia';
                                            }
                                        @endphp
                                        <span class="badge badge-{{ $status == 'Tersedia' ? 'success' : 'danger' }}"><i class="fas fa-status"></i> {{ $status }}</span>
                                    </div>
                                    
                                    <a href="{{ route('catalog.show', $archive->id) }}" class="card-link btn btn-primary">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                {{ $archives->links() }}
            @else
                <div class="alert alert-danger">Hasil Pencarian Tidak Ditemukan</div>
            @endif
        </div>

        <div class="col-lg-3">
            <button type="button" class="btn btn-primary btn-block mb-3">Informasi Terkait</button>
            <div class="card bg-dark">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                        <span class="text-light">Jumlah</span>
                        <span class="badge bg-primary" style="font-size: 1rem;">{{ $archives->count() }}</span>
                    </div>
                    <div class="d-flex justify-content-between text-muted">
                        <span>Tersedia</span>
                        <span>{{ $archives->count() - $countUnavailable }}</span>
                    </div>
                    <div class="d-flex justify-content-between text-muted">
                        <span>Tidak Tersedia</span>
                        <span>{{ $countUnavailable }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@endsection