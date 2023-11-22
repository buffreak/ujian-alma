<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <div class="container-fluid">
            <div class="row flex-nowrap">
              <div class="bg-dark col-auto col-md-2 min-vh-100 d-none d-md-block" id="sidebar">
        
                <div class="bg-dark p-2">
                  <a href="/guru/home" class="d-flex text-decoration-none mt-1 align-items-center text-white">
                    <span class="fs-4 ms-0 d-none d-sm-inline">SMP Islam <span class="text-warning">Terpadu Al Burhan</span></span>
                  </a>
                  <ul class="nav nav-pills flex-column mt-4">
                    <li class="nav-item py-2 py-sm-0">
                      <a href="/guru/ujian" class="nav-link text-white">
                        <i class="fs-4 bi bi bi-activity"></i></i></i><span class="fs-5 ms-3 d-none d-sm-inline">Soal Ujian</span>
                      </a>
                    </li>
                    <li class="nav-item py-2 py-sm-0">
                      <a href="/guru/ujian" class="nav-link text-white">
                        <i class="fs-4 bi bi bi-activity"></i></i></i><span class="fs-5 ms-3 d-none d-sm-inline">Hasil Ujian</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col px-0">
                <nav class="navbar bg-dark px-lg-0">
                  <div class="container">
                    <button class="navbar-toggler" type="button" id="sidebarToggle">
                      <span class="navbar-toggler-icon"></span>
                      <span class="visually-hidden text-light">Toggle sidebar</span>
                  </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <form class="d-flex" role="search">
                        @csrf
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark" type="submit">Search</button>
                      </form>
                    </div>
                    <div class="dropdown open p-2">
                      <button class="btn border-none dropdown-toggle text-dark" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="false">
                          <i class="fs-5 text-light bi bi-person"></i><span class="fs-5 text-light ms-2">{{ Auth::user()->name }}</span>
                          </button>
                      <div class="dropdown-menu" aria-labelledby="triggerId">
                        {{-- <a class="dropdown-item" href="{{ route('seting.index') }}">Setting</a> --}}
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>
            
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>
                      </div>
                    </div>
                  </div>
                </nav>
                <div class="container rounded mx-auto d-block">
                  <div class="row justify-content-center">
                    <div class="col">
                        <main class="py-4">
                            @yield('content')
                        </main>                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- Add jQuery before your custom script -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            // Now you can use jQuery without errors
            $(document).ready(function() {
                $('#sidebarToggle').click(function() {
                    $('#sidebar').toggleClass('d-none');
                });
            });
        </script>
    </div>
</body>
</html>


