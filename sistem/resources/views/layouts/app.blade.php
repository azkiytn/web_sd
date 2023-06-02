<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Website Resmi SD Negeri Grugu 03</title>
    <link rel="icon" href="sistem/img/logo.png" type="image">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <link href="{{ asset('sistem/css/style.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <!--Navigation-->
    <nav class="navbar navbar-expand-lg bg-dark navbar-fixed-top">
        <div class="container col-md-12" >
            <a class="navbar-brand" href="#" style="color: white;">
                <img src="sistem/img/logo.png" alt="sekolah" width="30px" class="d-inline-block align-text-center" />
                SD Negeri Grugu 03
            </a>
            <div class="top_bar_content">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link nav-text" href="#">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-text" href="#">Tenaga Pengajar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-text" href="#">Siswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-text" href="#">Kegiatan</a>
                        </li>
                        <li>
                            <div class="d-flex top_bar_user nav-text">
                                @if(Auth::guest())
                                <div style="margin-top: 8px;"><a class="btn btn-primary" href="{{ url('login') }}">
                                    SIAKAD</a>
                                </div>
                                @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle nav-text" href="{{ url('/') }}" id="navarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                    class="fa fa-user"></i>
                                {{Auth::user()->name}}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer>

    </footer>

</body>

</html>