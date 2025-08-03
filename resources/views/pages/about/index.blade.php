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
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
        </div>
    </div>
</div>
@endsection
