<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Peminjaman Arsip')</title>
  <link rel="shortcut icon" href="{{ asset('assets/img/logo/logo-2.png') }}" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('assets/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">
    <!-- Header -->
    @if(auth()->check())
    @include('layouts.admin.partials.header')
    
    <!-- Sidebar -->
    @include('layouts.admin.partials.sidebar')
    @endif

     <!-- Content Wrapper -->
    {{-- <div class="content-wrapper"> --}}
        @yield('content')
    {{-- </div> --}}

    <!-- Footer -->
    @include('layouts.admin.partials.footer')
</div>

<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/adminlte.min.js') }}"></script>
</body>
</html>
