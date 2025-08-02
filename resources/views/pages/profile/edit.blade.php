@extends('layouts.public.app')
@section('title', 'Edit Profile')

@section('breadcrumb')
<x-page-header 
    title="Profile"
    :breadcrumb="[
        ['label' => 'Home', 'url' => url('/')],
        ['label' => 'Profile', 'url' => '#']
    ]"
/>
@endsection

@section('content')
<div class="content-wrapper mt-2">
    @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif
    @if($errors->any()) <div class="alert alert-danger">{{ implode(', ', $errors->all()) }}</div> @endif

    <div class="card">
        <div class="card-body">
            <h3>Edit Profile</h3>
            
            <form action="{{ route('profile.update') }}" method="POST">@csrf @method('PUT')
                <div class="form-group">
                    <label>Nama</label>
                    <input name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input name="email" type="email" class="form-control" value="{{ old('email', $user->email) }}" required>
                </div>
                <button class="btn btn-primary rounded-pill">Update Profile</button>
            </form>
        </div>
    </div>

    <hr>

    <div class="card">
        <div class="card-body">
            <h4>Ubah Password</h4>
            <form action="{{ route('profile.password') }}" method="POST">@csrf @method('PUT')
                <div class="form-group">
                    <label>Password Lama</label>
                    <input name="current_password" type="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Password Baru</label>
                    <input name="password" type="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Konfirmasi Password Baru</label>
                    <input name="password_confirmation" type="password" class="form-control" required>
                </div>
                <button class="btn btn-warning rounded-pill">Update Password</button>
            </form>
        </div>
    </div>
</div>
@endsection
