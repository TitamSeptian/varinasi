<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Primary Meta Tags -->
    <title>Varinasi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Varinasi">
    <meta name="description" content="">
    <meta itemprop="name" content="">
    <meta itemprop="description" content="">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('/assets/img/favicon/favicon.png')}}" type="image/png">
    <!-- Fontawesome -->
    <link type="text/css" href="{{ asset('/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <!-- Nucleo icons -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <!-- Prism -->
    <link type="text/css" href="{{ asset('/assets/vendor/prismjs/themes/prism.css') }}" rel="stylesheet">
    <!-- Front CSS -->
    <link type="text/css" href="{{ asset('/assets/css/front.css') }}" rel="stylesheet">
</head>

<body>
    <header class="header-global">
        <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg headroom py-lg-3 px-lg-6 navbar-dark navbar-theme-primary">
            <div class="container">
                <a class="navbar-brand d-none" href="./index.html">
                    <img class="navbar-brand-dark common" src="{{ asset('/assets/img/brand/light.svg')}}" height="35" alt="Logo light">
                    <img class="navbar-brand-light common" src="{{ asset('/assets/img/brand/dark.svg')}}" height="35" alt="Logo dark">
                </a>
                <div class="navbar-collapse collapse" id="navbar_global">
                    <div class="navbar-collapse-header">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="./index.html">
                                    <img src="{{ asset('/assets/img/brand/dark.svg')}}" height="35" alt="Logo Impact">
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <a href="#navbar_global" role="button" class="fas fa-times" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation"></a>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav navbar-nav-hover justify-content-center">
                        <li class="nav-item">
                            <a href="./index.html" class="nav-link">varinasi</a>
                        </li>
                    </ul>
                </div>
                <div class="d-none d-lg-block d-lg-none">
                <a href="{{ route('login') }}" target="_blank" class="btn btn-md btn-docs btn-outline-white animate-up-2 mr-3">Login</a>
                </div>
                <div class="d-flex d-lg-none align-items-center">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="preloader bg-soft flex-column justify-content-center align-items-center">
            <div class="loader-element">
                <!-- <span class="loader-animated-dot" style="margin-right: 10px;"></span> -->
                <img src="{{ asset('/assets/img/brand/dark-loader')}}.svg" height="40" alt="Impact logo">
            </div>
        </div>
        <!-- Hero -->
        <section class="section-header pb-9 pb-lg-12 bg-primary text-white">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-12 col-sm-8 col-md-7 col-lg-6 text-center">
                        <img src="{{ asset('/assets/img/brand/light.svg')}}" class="mb-4" height="65" alt="Logo Impact">
                        <h1 class="display-4 text-muted mb-5 font-weight-normal">Rekomendasi selain nasi agar mengurangi konsumsi nasi dan berhenti menjadi orang yang belum makan nasi belum makan</h1>
                        <div class="d-flex align-items-center justify-content-center mb-5">
                            <a href="{{ route('login') }}" target="_blank" class="btn btn-secondary mb-3 mt-2 mr-3 animate-up-2"><i class="fas fa-sign-in-alt"></i> Mulai</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pattern bottom" style="background-image: url(/assets/img/patterns/wave.svg);"></div>
        </section>
        <div class="section pt-0">
            <div class="container mt-n10 mt-lg-n12 z-2">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <img src="{{ asset('/assets/img/breakfast.png')}}" alt=" illustration">
                    </div>
                </div>
            </div>
        </div>
        <section class="section section-lg pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="display-2 text-center mb-5 mb-lg-7">Kondisi di Indonesia</h2>
                    </div>
                </div>
                <div class="row justify-content-between align-items-center mb-5 mb-lg-7">
                    <div class="col-lg-5 order-lg-2">
                        <h2 class="h1">Ada Banyak Makanan Pokok Selain Nasi</h2>
                        <p class="lead mb-4"></p>
                        <p class="mb-5">Sebagian besar makanan pokok di Indonesia adalah beras. Konsumsi beras yang tinggi mencapai 04,8 per kapita per tahun.</p>
                        <div class="d-flex justify-content-between align-items-center mt-lg-4 mb-4">
                            <div class="d-block">
                                <a href="#" class="btn btn-outline-gray animate-up-2 mb-3">Lihat</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <img src="{{ asset('/assets/img/health.png')}}" alt=" Front pages overview">
                    </div>
                </div>
                <div class="row justify-content-between align-items-center mb-5 mb-lg-7">
                    <div class="col-lg-5">
                        <h2 class="h1">Kalori Yang Dibutuhkan</h2>
                        <!-- <p class="lead mb-4">Over 100 individual components</p> -->
                        <p class="mb-5">Kebutuhn tiap orang berbeda - beda, dihitung dari tinggi badan, berat badan, dan umur.</p>
                        <div class="d-flex justify-content-between align-items-center mt-lg-4 mb-4">
                            <div class="d-block">
                                <a href="#" class="btn btn-primary mr-3 animate-up-2 mb-3">Lihat</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('/assets/img/diet.png')}}" alt=" Dashboard Preview">
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer section pt-6 pt-md-8 pt-lg-10 pb-3 bg-primary text-white overflow-hidden">
            <style>
                .pattern-soft{
                    background-image: url(../assets/img/patterns/wave.svg);
                }
            </style>   
            <div class="pattern pattern-soft top" styke="background-image: url(../assets/img/patterns/wave.svg);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <a class="footer-brand mr-lg-5 d-flex" href="./index.html">
                            <img src="{{ asset('/assets/img/brand/light.svg')}}" height="35" class="mr-3" alt="Footer logo">
                        </a>
                        <p class="my-4">Aplikasi pencari makanan pengganti nasi dan menghitung kalori yang dibutuhkan badan setiap harinya</p>
                    </div>
                    <div class="col-6 col-sm-3 col-lg-2 mb-4 mb-lg-0">
                        <h6>Kelompok</h6>
                    </div>
                    <div class="col-6 col-sm-3 col-lg-2 mb-4 mb-lg-0">
                        <h6>4 MSTR</h6>
                        <ul class="links-vertical">
                            <li><a target="_blank" href="https://www.instagram.com/not_ardian_hilman">Ardian Hafizqn</a></li>
                            <li><a target="_blank" href="https://www.instagram.com/ilhmnuari">Muhamad Ilham Nuari</a></li>
                            <li><a target="_blank" href="https://www.instagram.com/rzkysanjaya.t">Rizky Sanjaya Tandia</a></li>
                            <li><a target="_blank" href="https://www.instagram.com/titam9889">Septian Dwi Putra</a></li>
                            <li><a target="_blank" href="https://www.instagram.com/sucisukmawati_">Suci Sukmawati</a></li>
                        </ul>
                    </div>
                </div>
                <hr class="my-4 my-lg-5">
                <div class="row">
                    <div class="col pb-4 mb-md-0">
                        <div class="d-flex text-center justify-content-center align-items-center">
                            <p class="font-weight-normal mb-0">&copy;
                                <a href="#" target="_blank">
                                    Kelompok 4 MSTR - RPL - UPI Kampus Cibiru
                                </a>
                                <span class="current-year"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <!-- Core -->
    <script src="{{ asset('/assets/vendor/jquery/dist/jquery.min') }}.js"></script>
    <script src="{{ asset('/assets/vendor/popper.js/dist/umd') }}/popper.min.js"></script>
    <script src="{{ asset('/assets/vendor/bootstrap/dist/js/bootstrap') }}.min.js"></script>
    <script src="{{ asset('/assets/vendor/headroom.js/dist/headroom') }}.min.js"></script>
    <!-- Vendor JS -->
    <script src="{{ asset('/assets/vendor/onscreen/dist/on-screen') }}.umd.min.js"></script>
    <script src="{{ asset('/assets/vendor/waypoints/lib/jquery.waypoints') }}.min.js"></script>
    <script src="{{ asset('/assets/vendor/jarallax/dist/jarallax.min') }}.js"></script>
    <script src="{{ asset('/assets/vendor/smooth-scroll/dist/smooth') }}-scroll.polyfills.min.js"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Impact JS -->
    <script src="{{ asset('assets/js/front.js') }}"></script>
</body>

</html>