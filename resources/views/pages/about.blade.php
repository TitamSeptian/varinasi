@extends('master.master', [ "title" => "- Tentang Kami" , "activePage" => "tentang"])
@section('content')
<div class="main-content" id="panel">
    <!-- Topnav -->
    @include('partials.header')
    <!-- Header -->
    <!-- Header -->
    <div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(../../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-7 col-md-10">
                    <h1 class="display-2 text-white">Hai {{ Auth::user()->name }}</h1>
                    <p class="text-white mt-0 mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem provident mollitia repellendus maiores sit omnis numquam in.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="card bg-gradient-success">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Tentang Kami </h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                           <!-- Card body -->
                           <div class="card-body">
                              <a href="#!">
                              <img src="{{ asset('assets/img/team/ardian.jpeg') }}" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 140px;">
                              </a>
                              <div class="pt-4 text-center">
                                 <h5 class="h3 title">
                                    <span class="d-block mb-1">Ardian Hafizqn</span>
                                    <small class="h4 font-weight-light text-muted"></small>
                                 </h5>
                                 <div class="mt-3">
                                    <a href="https://www.instagram.com/not_ardian_hilman" target="_blank" class="btn btn-instagram btn-icon-only rounded-circle">
                                    <i class="fab fa-instagram"></i>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                           <!-- Card body -->
                           <div class="card-body">
                              <a href="#!">
                              <img src="{{ asset('assets/img/team/ilham.jpeg') }}" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 140px;">
                              </a>
                              <div class="pt-4 text-center">
                                 <h5 class="h3 title">
                                    <span class="d-block mb-1">Muhamad Ilham Nuari</span>
                                    <small class="h4 font-weight-light text-muted"></small>
                                 </h5>
                                 <div class="mt-3">
                                    <a href="https://www.instagram.com/ilhmnuari" target="_blank" class="btn btn-instagram btn-icon-only rounded-circle">
                                    <i class="fab fa-instagram"></i>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                           <!-- Card body -->
                           <div class="card-body">
                              <a href="#!">
                              <img src="{{ asset('assets/img/team/rizky.jpeg') }}" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 140px;">
                              </a>
                              <div class="pt-4 text-center">
                                 <h5 class="h3 title">
                                    <span class="d-block mb-1">Rizky Sanjaya Tandia</span>
                                    <small class="h4 font-weight-light text-muted"></small>
                                 </h5>
                                 <div class="mt-3">
                                    <a href="https://www.instagram.com/rzkysanjaya.t" target="_blank" class="btn btn-instagram btn-icon-only rounded-circle">
                                    <i class="fab fa-instagram"></i>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                           <!-- Card body -->
                           <div class="card-body">
                              <a href="#!">
                              <img src="{{ asset('assets/img/team/septian.jpg') }}" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 140px;">
                              </a>
                              <div class="pt-4 text-center">
                                 <h5 class="h3 title">
                                    <span class="d-block mb-1">Septian Dwi Putra Pradipta</span>
                                    <small class="h4 font-weight-light text-muted"></small>
                                 </h5>
                                 <div class="mt-3">
                                    <a href="https://www.instagram.com/titam9889" target="_blank" class="btn btn-instagram btn-icon-only rounded-circle">
                                    <i class="fab fa-instagram"></i>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                    </div>
                    <div class="col-md-6 offest-6">
                        <div class="card">
                           <!-- Card body -->
                           <div class="card-body">
                              <a href="#!">
                              <img src="{{ asset('assets/img/team/suci.jpeg') }}" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 140px;">
                              </a>
                              <div class="pt-4 text-center">
                                 <h5 class="h3 title">
                                    <span class="d-block mb-1">Suci Sukmawati</span>
                                    <small class="h4 font-weight-light text-muted"></small>
                                 </h5>
                                 <div class="mt-3">
                                    <a href="https://www.instagram.com/sucisukmawati_" target="_blank" class="btn btn-instagram btn-icon-only rounded-circle">
                                    <i class="fab fa-instagram"></i>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Footer -->
        @include('partials.footer')
    </div>
</div>
@endsection
@push('js')
@endpush
