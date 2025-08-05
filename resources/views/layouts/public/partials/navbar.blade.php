<!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="" class="navbar-brand">
        <img src="{{asset('assets/img/logo/logo-2.png')}}" alt="Logo" class="brand-image elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name', 'Pinjam Arsip') }}</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('about.index') }}" class="nav-link">Tentang</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('catalog.index') }}" class="nav-link">Katalog</a>
          </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-0 ml-md-3" action="{{ route('catalog.index') }}" method="GET">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="text" name="keyword" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">

        @if(Auth::check())
        <li class="nav-item">
            <a class="nav-link" href="{{ route('catalog.my-requests') }}">
                <i class="far fa-hourglass"></i>
            </a>
        </li>

        <!-- Notifications Dropdown Menu -->
        {{-- <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li> --}}
        @endif
        <li class="nav-item ml-2 dropdown user-menu">
          @if(Auth::check())
            {{-- Profile --}}
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <img src="{{ auth()->user()->avatar ? asset('assets/img/avatars/' . auth()->user()->avatar) : asset('assets/img/avatar.png') }}"
                        class="user-image img-circle elevation-2" alt="User Image">
                <span class="d-none d-md-inline">{{ auth()->user()->name }}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!-- User image -->
                <li class="user-header bg-primary">
                    <img src="{{ auth()->user()->avatar ? asset('assets/img/avatars/' . auth()->user()->avatar) : asset('assets/img/avatar.png') }}"
                        class="user-image img-circle elevation-2" alt="User Image">

                    <p>
                        {{ auth()->user()->name }}
                        <small>{{ auth()->user()->email }}</small>
                    </p>
                </li>
                <!-- Menu Footer -->
                <li class="user-footer">
                    <a href="{{ route('profile.edit') }}" class="btn btn-info btn-flat">Profile</a>
                    <a href="{{ route('dashboard') }}" class="btn btn-info btn-flat">Dashboard</a>
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-flat float-right">Logout</button>
                    </form>
                </li>
            </ul>

          @else
          <a class="btn btn-outline-primary" href="{{ route('login') }}" role="button" href="#">
            <i class="fas fa-sign-in-alt"></i> Login
          </a>
          @endif
        </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->