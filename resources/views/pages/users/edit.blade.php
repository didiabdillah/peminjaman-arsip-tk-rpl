@extends('layouts.admin.app')
@section('title', 'Edit User')
@section('content')
<div class="content-wrapper p-4">
    <div class="card">
        <div class="card-header">
            <h3>Edit Pengguna</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('users.update', $user->id) }}">@csrf @method('PUT')
                <div class="form-group">
                    <label>Nama</label>
                    <input name="name" class="form-control" value="{{ $user->name }}" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input name="email" type="email" class="form-control" value="{{ $user->email }}" required>
                </div>
                <div class="form-group">
                    <label>Role</label>
                    <select name="role" class="form-control" required>
                        <option value="peminjam" {{ $user->role == 'peminjam' ? 'selected' : '' }}>Peminjam</option>
                        <option value="arsiparis" {{ $user->role == 'arsiparis' ? 'selected' : '' }}>Arsiparis</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input name="password" type="pa" class="form-control" value="">
                </div>
                <div class="mt-4">
                    <a href="{{ route('users.index') }}" class="btn btn-danger">Kembali</a>
                    <button class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
