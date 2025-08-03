@extends('layouts.public.app')

@section('title', 'Detail')

@section('breadcrumb')
<x-page-header 
    title="Detail Arsip"
    :breadcrumb="[
        ['label' => 'Home', 'url' => url('/')],
        ['label' => 'Detail', 'url' => '#']
    ]"
/>
@endsection

@section('content')
<div class="container-fluid">
    @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif
    @if($errors->any()) <div class="alert alert-danger">{{ implode(', ', $errors->all()) }}</div> @endif

    <div class="row mb-3">
        <div class="col-12">
            <a href="{{ route('catalog.index') }}" class="btn btn-outline-primary"><i class="fas fa-arrow-left mr-2"></i> Kembali</a>
        </div>
    </div>
    <div class="card card-dark card-outline">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="image-placeholder">
                        <img src="{{ asset('assets/img/archives/' . $archive->image) }}" alt="Placeholder" class="img-fluid">
                    </div>
                </div>

                <div class="col-md-8">
                    <h3>{{ $archive->title }}</h3>
                    <div class="d-flex text-muted mb-3">
                        <div class="mr-4">
                            <i class="fas fa-calendar-alt mr-1"></i> {{ Carbon\Carbon::parse($archive->created_at)->format('d M Y') }}
                        </div>
                        <div>
                            <i class="fas fa-user mr-1"></i> {{ $archive->created_by }}
                        </div>
                    </div>
                    <p>
                        {{ $archive->description }}
                    </p>
                    <div class="mb-2">
                        @php
                            //check if the archive is available
                            $borrowings = $archive->borrowings->whereIn('status', ['approved', 'pending']);
                            $quantity = $archive->quantity;
                            if ($borrowings->count() < $quantity) {
                                $status = 'Tersedia';
                            } else {
                                $status = 'Tidak Tersedia';
                            }
                        @endphp
                        <span class="badge badge-{{ $status == 'Tersedia' ? 'success' : 'danger' }}"><i class="fas fa-status"></i> {{ $status }}</span>
                    </div>
                                
                </div>
            </div>
            
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <form action="{{ route('catalog.request-borrow', $archive->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="archive_id" value="{{ $archive->id }}">
                        <button type="submit" class="btn btn-outline-primary btn-lg" @if ($status == 'Tidak Tersedia') disabled @endif>
                            <i class="fas fa-handshake mr-2"></i> Ajukan Pinjam Arsip
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection