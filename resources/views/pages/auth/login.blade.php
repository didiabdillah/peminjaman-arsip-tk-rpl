@extends('layouts.app')
@section('title', 'Login')

@section('content')
<div class="login-box">
  <div class="login-logo"><b>Login</b> Arsip</div>
  <div class="card">
    <div class="card-body login-card-body">
      <form action="{{ route('login') }}" method="POST">@csrf
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
      </form>
    </div>
  </div>
</div>
@endsection
