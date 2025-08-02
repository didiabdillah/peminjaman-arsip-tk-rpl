<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <img src="{{ asset('assets/img/logo/logo-2.png') }}"
             alt="Logo"
             class="brand-image elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview"
                role="menu" data-accordion="false">
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}"
                       class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Users -->
                <li class="nav-item">
                    <a href="{{ route('users.index') }}"
                       class="nav-link {{ request()->routeIs('users.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Pengguna</p>
                    </a>
                </li>

                <!-- Archives -->
                <li class="nav-item">
                    <a href="{{ route('archives.index') }}"
                       class="nav-link {{ request()->routeIs('archives.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-archive"></i>
                        <p>Arsip</p>
                    </a>
                </li>

                <!-- Catalog -->
                <li class="nav-item">
                    <a href="{{ route('catalog.index') }}"
                       class="nav-link {{ request()->routeIs('catalogs.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Katalog</p>
                    </a>
                </li>

                <!-- My Requests -->
                <li class="nav-item">
                    <a href="{{ route('catalog.requests') }}"
                       class="nav-link {{ request()->routeIs('catalog.requests.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-list"></i>
                        <p>Pengajuan Saya</p>
                    </a>
                </li>

                <!-- Borrowings -->
                <li class="nav-item">
                    <a href="{{ route('borrowings.index') }}"
                       class="nav-link {{ request()->routeIs('borrowings.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-handshake"></i>
                        <p>Peminjaman</p>
                    </a>
                </li>

                <!-- Reports -->
                <li class="nav-item">
                    <a href="{{ route('report.index') }}"
                       class="nav-link {{ request()->routeIs('reports.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        <p>Laporan</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
