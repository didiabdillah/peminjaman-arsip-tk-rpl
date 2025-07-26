<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Peminjaman Arsip')</title>
  <link rel="stylesheet" href="{{ asset('assets/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">
    <!-- Header -->
    @if(auth()->check())
    @include('layouts.partials.header')
    
    <!-- Sidebar -->
    @include('layouts.partials.sidebar')
    @endif

     <!-- Content Wrapper -->
    {{-- <div class="content-wrapper"> --}}
        @yield('content')
    {{-- </div> --}}

    <!-- Footer -->
    @include('layouts.partials.footer')
</div>

<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/adminlte.min.js') }}"></script>
</body>
</html>
