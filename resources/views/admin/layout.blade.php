<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title')</title>
  <link href="https://atko.tech/webuni-gh-pages/assets/img/favicon.png" rel="icon">
  <link href="https://atko.tech/webuni-gh-pages/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://atko.tech/webuni-gh-pages/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://atko.tech/webuni-gh-pages/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="https://atko.tech/webuni-gh-pages/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="https://atko.tech/webuni-gh-pages/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="https://atko.tech/webuni-gh-pages/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="https://atko.tech/webuni-gh-pages/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="https://atko.tech/webuni-gh-pages/assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="https://atko.tech/webuni-gh-pages/assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    @if(Auth::User()->type == 'admin')
        <header id="header" class="header fixed-top d-flex align-items-center">
            <div class="d-flex align-items-center justify-content-between">
            <a href="{{ route('admin') }}" class="logo d-flex align-items-center">
                <span class="d-none d-lg-block">ATKO online</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
            </div>
            <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="" data-bs-toggle="dropdown">
                    <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                    <h6>{{ Auth::user()->name }}</h6>
                    <span>{{ Auth::user()->email }}</span>
                    </li>
                    <li>
                    <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                     onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                     <i class="bi bi-box-arrow-right"></i>Chiqish</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>
                    </li>
                </ul>
                </li>
            </ul>
            </nav>
        </header>
        <aside id="sidebar" class="sidebar">
            <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('admin') }}">
                <i class="bi bi-file-earmark"></i>
                <span>Bosh sahifa</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('person') }}">
                <i class="bi bi-person"></i>
                <span>Tashriflar</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('messege') }}">
                <i class="bi bi-envelope"></i>
                <span>Murojatlar</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('admin.cours') }}">
                <i class="bi bi-dash-circle"></i>
                <span>Kurslar</span>
                </a>
            </li>
            </ul>
        </aside>
    @yield('content')
  
        <footer id="footer" class="footer">
            <div class="copyright">
            &copy; Qarshi <strong><span>2024</span></strong>
            </div>
        </footer>
     @endif
  <script src="https://atko.tech/webuni-gh-pages/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="https://atko.tech/webuni-gh-pages/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://atko.tech/webuni-gh-pages/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="https://atko.tech/webuni-gh-pages/assets/vendor/echarts/echarts.min.js"></script>
  <script src="https://atko.tech/webuni-gh-pages/assets/vendor/quill/quill.min.js"></script>
  <script src="https://atko.tech/webuni-gh-pages/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="https://atko.tech/webuni-gh-pages/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="https://atko.tech/webuni-gh-pages/assets/vendor/php-email-form/validate.js"></script>
  <script src="https://atko.tech/webuni-gh-pages/assets/js/main.js"></script>
</body>
</html>