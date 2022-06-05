<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>PETAL</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- normalize css -->
    <link href="{{ asset('resources/normalize.css') }}" rel="stylesheet">
    <!-- font -->
    <link rel="stylesheet" href="{{ asset('resources/font.css') }}"/>
    <!-- font awesome cdn -->
    <link
      rel="stylesheet"
      href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css') }}"
      integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
      crossorigin="anonymous"
    />
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('resources/Magnific-Popup-master/dist/magnific-popup.css') }}" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('resources/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('resources/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css') }}" />
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('resources/animate.css-main/animate.css')}}" />
    <!-- custom (main) css -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <!--========== BOX ICONS ==========-->
    <link href="{{ url('https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css') }}" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" integrity="sha512-kq3FES+RuuGoBW3a9R2ELYKRywUEQv0wvPTItv3DSGqjpbNtGWVdvT8qwdKkqvPzT93jp8tSF4+oN4IeTEIlQA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <!--========== SCROLL TOP ==========-->
    <a href="#" class="scrolltop" id="scroll-top">
      <i class="bx bx-chevron-up scrolltop__icon"></i>
    </a>
    <!-- header -->
    <header class="header" id="intro">
      <nav class="navbar">
        <div class="container">
          <div class="brand-and-toggler">
            <a href="{{ url('/login') }}" class="navbar-brand"> Pe<span>T</span>aL </a>
            <button type="button" class="navbar-toggler" id="navbar-toggler">
              <i class="fas fa-bars"></i>
            </button>
          </div>

          <div class="navbar-collapse">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link">Beranda</a>
              </li>
              <li class="nav-item">
                <a href="#about" class="nav-link">Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('portofolio-data.list')}}" class="nav-link">Testimoni</a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/list-blog') }}" class="nav-link">Blog</a>
              </li>
              <li class="nav-item">
                <a href="#faq" class="nav-link">FAQ</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="hero-div center container">
        <h1>we make your website stand out</h1>
        <p class="animate__animated animate__fadeInUp animate__slow">The best way to connect people with your brand.</p>

        <div class="hero-btns animate__animated animate__fadeInUp animate__slow">
          <a href="/#contact" class="nav-link"><button type="button" class="btn-white">Contact Us </button></a> 
        </div>
      </div>
    </header>
    <!-- end of header -->