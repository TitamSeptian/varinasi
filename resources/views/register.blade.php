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
    <meta name="author" content="">
    <title>Varinasi - Register</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/brand/favicon.png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    {{--
    <link rel="stylesheet" href="{{ asset('/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css"> --}}
    <!-- Page plugins -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/fullcalendar/dist/fullcalendar.min.css') }}">
    {{--
    <link rel="stylesheet" href="{{ asset('/assets/vendor/sweetalert2/dist/sweetalert2.min.css') }}"> --}}
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/dashboard.css') }}" type="text/css">
</head>

<body class="bg-white">
    <!-- Main content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                            <h1 class="text-white">Selamat Datang!</h1>
                            <p class="text-lead text-white">Aplikasi pencari makanan pengganti nasi dan menghitung kalori yang dibutuhkan badan setiap harinya</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt--9 pb-5 text-gray">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary border border-soft mb-0">
                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center mb-4">
                                <small>Masuk</small>
                            </div>
                            @include('partials.msg')
                            <form method="POST" action="{{ route('post.register') }}">
                                @csrf
                                @method('POST')
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <input class="form-control" placeholder="Nama" type="text" name="name" required>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <input class="form-control" placeholder="Berat Badan(kg)" type="number" name="weight" min="1" required>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <input class="form-control" placeholder="Tinggi Badan(cm)" type="number" name="height" min="1" required>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <input class="form-control" placeholder="Umur(tahun)" type="number" name="age" min="1" required>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <select class="form-control" name="gender">
                                            <option disabled>Jenis Kelamin</option>
                                            <option value="L">Laki - laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <input class="form-control" placeholder="Nama Pengguna" type="text" name="username" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <input class="form-control" placeholder="Kata Sandi" type="password" name="password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <input class="form-control" placeholder="Konfirmasi Kata Sandi" type="password" name="password_confirmation" required>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary my-4">Masuk</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6 text-right text-gray">
                            <small>
                                Belum Punya Akun ?
                                <a href="{{ route('register') }}" class="text-primary">
                                    Klik Disini
                                </a>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="py-5" id="footer-main">
        <div class="container">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        &copy; 2020 Kelompok 4 MSTR - RPL - UPI Kampus Cibiru
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ asset('/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/js-cookie/js.cookie.js') }}"></script>
    {{-- <script src="{{ asset('/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script> --}}
    <!-- Argon JS -->
    <script src="{{ asset('/assets/js/dashboard.js?v=1.2.0') }}"></script>
</body>

</html>
