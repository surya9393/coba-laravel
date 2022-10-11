{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
      <a class="navbar-brand" href="/">SIPPJAFUNG</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ ($title === "Blog") ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Blog
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/blog">Post</a></li>
              <li><a class="dropdown-item" href="/categories">Categories</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Portofolio</a></li>
            </ul>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
        @auth

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome Back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/blog"><i class="bi bi-layout-text-window-reverse"></i> Dashboard</a></li>
            <li><a class="dropdown-item" href="/categories"><i class="bi bi-person-circle"></i> Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="POST">
                @csrf
                <button class="dropdown-item" type="submit"><i class="bi bi-box-arrow-right"></i> Log-out</button>
              </form>
            </li>
          </ul>
        </li>

        @else

          <li class="nav-item">
            <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Log-In</a>
          </li>
        
        @endauth
        </ul>
        

      </div>
    </div>
  </nav> --}}


  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>SIPP<span>JAFUNG</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="#">Persyaratan</a></li>
        </ul>
        <ul class="navbar-nav ms-auto">
          @auth
  
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome Back, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/blog"><i class="bi bi-layout-text-window-reverse"></i> Dashboard</a></li>
              <li><a class="dropdown-item" href="/categories"><i class="bi bi-person-circle"></i> Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="POST">
                  @csrf
                  <button class="dropdown-item" type="submit"><i class="bi bi-box-arrow-right"></i> Log-out</button>
                </form>
              </li>
            </ul>
          </li>
  
          @else
  
            <li class="nav-item">
              <a href="/register" class="nav-link">Daftar</a>
            </li>
          
          @endauth
          </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->
