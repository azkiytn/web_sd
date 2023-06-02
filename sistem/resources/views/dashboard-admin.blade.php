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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <link href="{{ asset('sistem/css/style.css') }}" rel="stylesheet" type="text/css" />

    <style>
.container {
  display: inline-block;
  cursor: pointer;
}

.bar1, .bar2, .bar3 {
  width:25px;
  height: 5px;
  background-color: #333;
  margin: 1px 0;
  transition: 0.4s;
}

.change .bar1 {
  transform: translate(0, 5px) rotate(-20deg);
}

.change .bar2 {opacity: 0;}

.change .bar3 {
  transform: translate(0, -5px) rotate(20deg);
}
    li {
        list-style: none;
        margin: 20px 0 20px 0;
    }

    a {
        text-decoration: none;
    }

    .sidebar {
        width: 250px;
        height: 100vh;
        position: fixed;
        margin-left: -300px;
        transition: 0.4s;
    }

    .active-main-content {
        margin-left: 250px;
    }

    .active-sidebar {
        margin-left: 0;
    }

    #main-content {
        transition: 0.4s;
    }
</style>
</head>

<body>
  <!--Navigation-->
    <nav class="navbar navbar-expand-lg bg-dark navbar-fixed-top">
      <div>
        <div class="sidebar p-4 bg-dark" id="sidebar">
          <h4 class="mb-5 text-white">Menu Admin</h4>
          <li>
            <a class="text-white" href="#">
              <i class="fa fa-home"></i>
              Dashboard
            </a>
          </li>
          <li>
            <a class="text-white" href="#">
              <i class="bi bi-fire mr-2"></i>
              Data Guru
            </a>
          </li>
          <li>
            <a class="text-white" href="#">
              <i class="bi bi-newspaper mr-2"></i>
              Data Siswa
            </a>
          </li>
          <li>
            <a class="text-white" href="#">
              <i class="bi bi-bicycle mr-2"></i>
              Nilai Siswa
            </a>
          </li>
          <li>
            <a class="text-white" href="#">
              <i class="bi bi-boombox mr-2"></i>
              Data Kelas
            </a>
          </li>
          <li>
            <a class="text-white" href="#">
              <i class="bi bi-film mr-2"></i>
              Mata Pelajaran
            </a>
          </li>
          <li>
            <a class="text-white" href="#">
              <i class="bi bi-bookmark mr-2"></i>
              Profil Sekolah
            </a>
          </li>
          <li>
            <a class="text-white" href="#">
              <i class="bi bi-bookmark mr-2"></i>
              Berita Sekolah
            </a>
          </li>
        </div>
      </div>
      <section class="p-2" id="main-content">
        <button class="" id="button-toggle">
        <div class="" onclick="myFunction(this)">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
        </div>
        </button>
      </section>

      <a class="navbar-brand" href="#" style="color: white;">
          <img src="sistem/img/logo.png" alt="sekolah" width="30px" class="d-inline-block align-text-center" />
            SD Negeri Grugu 03
        </a>

      <div class="container-fluid">
          <div class="top_bar_content">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto  mb-lg-0">
                  <li>
                  <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
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

    <script>
    // event will be executed when the toggle-button is clicked
    document.getElementById("button-toggle").addEventListener("click", () => {

        // when the button-toggle is clicked, it will add/remove the active-sidebar class
        document.getElementById("sidebar").classList.toggle("active-sidebar");

        // when the button-toggle is clicked, it will add/remove the active-main-content class
        document.getElementById("main-content").classList.toggle("active-main-content");
    });

    function myFunction(x) {
  x.classList.toggle("change");
}
</script>
</body>

</html>