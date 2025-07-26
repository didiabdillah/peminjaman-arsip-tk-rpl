<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Peminjaman Arsip')</title>
  <link rel="stylesheet" href="{{ asset('assets/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<form action="{{ route('logout') }}" method="POST">
  @csrf
  <button type="submit" class="btn btn-danger btn-sm">Logout</button>
</form>

<div class="wrapper">
  @yield('content')
</div>

<script src="{{ asset('assets/plugins/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/adminlte.min.js') }}"></script>
</body>
</html>
