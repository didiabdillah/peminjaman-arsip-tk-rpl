@extends('layouts.admin.app')
@section('title', 'Tambah User')
@section('content')
<div class="content-wrapper p-4">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Pengguna</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('users.store') }}">@csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input name="name" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input name="email" type="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input name="password" type="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Role</label>
                    <select name="role" class="form-control" required>
                        <option value="peminjam">Peminjam</option>
                        <option value="arsiparis">Arsiparis</option>
                    </select>
                </div>
                <div class="mt-4">
                    <a href="{{ route('users.index') }}" class="btn btn-danger">Kembali</a>
                    <button class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
