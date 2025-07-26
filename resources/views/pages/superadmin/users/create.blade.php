@extends('layouts.app')
@section('title', 'Tambah User')
@section('content')
<div class="content-wrapper p-4">
    <h3>Tambah Pengguna</h3>
    <form method="POST" action="{{ route('users.store') }}">@csrf
        <div class="form-group">
            <label>Nama</label>
            <input name="name" class="form-control" required>
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
        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
