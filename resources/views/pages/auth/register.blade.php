@extends('layouts.app')
@section('title', 'Register')

@section('content')
<div class="login-box">
  <div class="login-logo"><b>Daftar</b> Arsip</div>
  <div class="card">
    <div class="card-body login-card-body">
      <form action="{{ route('register') }}" method="POST">@csrf
        <input type="text" name="name" class="form-control mb-3" placeholder="Nama" required>
        <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
        <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
        <input type="password" name="password_confirmation" class="form-control mb-3" placeholder="Ulangi Password" required>
        <button type="submit" class="btn btn-success btn-block">Daftar</button>
      </form>
    </div>
  </div>
</div>
@endsection
