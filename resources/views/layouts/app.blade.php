<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
 --}}
    <!-- Scripts -->
   

   <!--main Styles -->
   <link href="{{ asset('css/mains.css') }}" rel="stylesheet">
  {{--  <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}
   {{-- vendor bootstrap styles --}}
   <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
   <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
   <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
   <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
   <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
   <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">

   <style>
    a{
      text-decoration: none;
    }
   </style>
   
</head>
<body class="page-index">
    {{-- <div id="app"> --}}
       <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ url('/') }}" class="logo d-flex align-items-center" style="text-decoration: none">
        <h1 class="d-flex align-items-center">{{ config('app.name', 'Turtle Zoo') }}</h1>
      </a>

     

      <nav id="navbar" class="navbar">
        <ul>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/asset') }}">Assets</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/activity') }}">Zoo Opeation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/management') }}">management & Reports</a>
            </li>
        </ul>
      </nav><!-- .navbar -->
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

       <div class="" style="padding-top: 0%">
        <main class="">
            {{-- @include('inc.messages') --}}
            @yield('content')
        </main>
       </div>

       
  
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    </div>

    <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
 <!-- Scripts -->
 <script src="{{ asset('js/main.js') }}" ></script>
 <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}" ></script>
 <script src="{{ asset('vendor/aos/aos.js') }}" ></script>
 <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}" ></script>
 <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}" ></script>
 <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.j') }}" ></script>
 <script src="{{ asset('vendor/php-email-form/validate.js') }}" ></script>
</body>
</html>
