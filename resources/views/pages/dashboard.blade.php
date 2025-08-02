@extends('layouts.admin.app')
@section('title', 'Dashboard')

@section('content')
<div class="content-wrapper p-4">
  <h1>Selamat Datang, {{ Auth::user()->name }}</h1>
  <p>Anda login sebagai <strong>{{ ucfirst(Auth::user()->role) }}</strong></p>
</div>
@endsection
