@extends('master.master', [ "title" => "- Dashboard" , "activePage" => "dashboard"])
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
            <h1 class="display-2 text-white">Hai Snow</h1>
            <p class="text-white mt-0 mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem provident mollitia repellendus maiores sit omnis numquam in.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-4 order-xl-2">
          <div class="card card-profile">
            <img src="{{ asset('assets/img/theme/img-1-1000x600.jpg') }}" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="{{ asset('/assets/img/theme/female.png') }}" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center">
                    <div>
                      <span class="heading">22</span>
                      <span class="description">Berat Badan</span>
                    </div>
                    <div>
                      <span class="heading">10</span>
                      <span class="description">Umur</span>
                    </div>
                    <div>
                      <span class="heading">89</span>
                      <span class="description">Tinggi Badan</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h5 class="h3">
                  Jhon Snow<span class="font-weight-light">, 27</span>
                </h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="row">
            <div class="col-lg-6">
              <div class="card bg-gradient-info border-0">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0 text-white">Kebutuhan Kalori</h5>
                      <span class="h2 font-weight-bold mb-0 text-white">2000 Kkal</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card bg-gradient-danger border-0">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0 text-white">Kalori Terpenuhi</h5>
                      <span class="h2 font-weight-bold mb-0 text-white">49,65 Kkal</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                        <i class="ni ni-spaceship"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Edit profile </h3>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">Informasi Pengguna</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                    <label class="form-control-label" for="input-nama">Nama</label>
                    <input type="text" id="input-nama" class="form-control" placeholder="Nama" value="lucky.jesse">
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Berat Badan</label>
                        <input type="text" id="input-berat-badan" class="form-control" placeholder="Berat Badan" value="22">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Umur</label>
                        <input type="text" id="input-umur" class="form-control" placeholder="Umur" value="10">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-tinggi-badan">Tinggi Badan</label>
                        <input type="text" id="input-tinggi-badan" class="form-control" placeholder="Tinggi Badan" value="89">
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block">Ubah</button>
                </div>
                <hr class="my-4" />
                <!-- Description -->
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      @include('partials.footer')
    </div>
  </div>
@endsection