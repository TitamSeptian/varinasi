<!--

=========================================================
* Impact Design System - v1.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/impact-design-system
* Copyright 2010 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/impact-design-system/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Kelompok 4 MSTR">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Varinasi {{ $title }}</title>
  <!-- Favicon -->
  <link rel="icon" href="{{ asset('assets/img/brand/favicon.png') }}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('/assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <!-- Page plugins -->
  {{-- <link rel="stylesheet" href="{{ asset('/assets/vendor/fullcalendar/dist/fullcalendar.min.css') }}"> --}}
  <link rel="stylesheet" href="{{ asset('/assets/vendor/sweetalert2/dist/sweetalert2.min.css') }}">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset('/assets/css/dashboard.css') }}" type="text/css">
  {{-- datatatvels --}}
  <link rel="stylesheet" type="text/css" href="{{ asset('/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/assets/vendor/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">
  @stack('css')

</head>


<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  d-flex  align-items-center">
      <a class="navbar-brand" href="{{ url('/') }}">
          <img src="../../assets/img/brand/dark.svg" height="40" class="navbar-brand-img" alt="...">
        </a>
        <div class=" ml-auto ">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      @include('partials.sidebar')
    </div>
  </nav>
  <!-- Main content -->
  @yield('content')
  @include('partials._modal')
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  {{-- swal --}}
  <script src="{{ asset('/assets/vendor/sweetalert2/dist/sweetalert2.all.min.js') }}"></script> 
  {{-- datatabales --}}
  <script src="{{ asset('/assets/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/datatables.net-select-bs4/js/select.bootstrap4.min.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('/assets/js/dashboard.js?v=1.2.0') }}"></script>
  @stack('js')
</body>

</html>