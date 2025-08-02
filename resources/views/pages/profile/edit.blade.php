@extends('layouts.admin.app')
@section('title', 'Edit Profile')
@section('content')
<div class="content-wrapper p-4">
    <h3>Edit Profile</h3>

    @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif
    @if($errors->any()) <div class="alert alert-danger">{{ implode(', ', $errors->all()) }}</div> @endif

    <form action="{{ route('profile.update') }}" method="POST">@csrf @method('PUT')
        <div class="form-group">
            <label>Name</label>
            <input name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input name="email" type="email" class="form-control" value="{{ old('email', $user->email) }}" required>
        </div>
        <button class="btn btn-primary">Update Profile</button>
    </form>

    <hr>

    <h4>Change Password</h4>
    <form action="{{ route('profile.password') }}" method="POST">@csrf @method('PUT')
        <div class="form-group">
            <label>Current Password</label>
            <input name="current_password" type="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label>New Password</label>
            <input name="password" type="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Confirm New Password</label>
            <input name="password_confirmation" type="password" class="form-control" required>
        </div>
        <button class="btn btn-warning">Update Password</button>
    </form>
</div>
@endsection
