@extends('master.master', [ "title" => "- Makanan" , "activePage" => "cariMakanan"])
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
        <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Daftar Makanan </h3>
                </div>
              </div>
            </div>
            <div class="card-body">
                <form>
                <div class="d-flex">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="beras" name="jenis[]">
                            <label class="custom-control-label mr-2" for="beras">Beras</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="singkong" name="jenis[]">
                            <label class="custom-control-label mr-2" for="singkong">Singkong</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="talas" name="jenis[]">
                            <label class="custom-control-label mr-2" for="talas">Talas</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="jagung" name="jenis[]">
                            <label class="custom-control-label mr-2" for="jagung">Jagung</label>
                        </div>
                        <button type="submit" class="btn btn-outline-primary btn-sm ml-auto">Terapkan</button>
                    </div>
                </form>
                <hr class="my-3">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                              <div class="row align-items-center">
                                <div class="col-8">
                                  <h3 class="mb-0">Nama Makanan</h3>
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                              {deskripsi} Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus sit voluptatum suscipit,
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-sm float-right btn-outline-primary" type="button">Makan</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                              <div class="row align-items-center">
                                <div class="col-8">
                                  <h3 class="mb-0">Nama Makanan</h3>
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                              {deskripsi} Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus sit voluptatum suscipit,
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-sm float-right btn-outline-primary" type="button">Makan</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                              <div class="row align-items-center">
                                <div class="col-8">
                                  <h3 class="mb-0">Nama Makanan</h3>
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                              {deskripsi} Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus sit voluptatum suscipit,
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-sm float-right btn-outline-primary" type="button">Makan</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                              <div class="row align-items-center">
                                <div class="col-8">
                                  <h3 class="mb-0">Nama Makanan</h3>
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                              {deskripsi} Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus sit voluptatum suscipit,
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-sm float-right btn-outline-primary" type="button">Makan</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                              <div class="row align-items-center">
                                <div class="col-8">
                                  <h3 class="mb-0">Nama Makanan</h3>
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                              {deskripsi} Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus sit voluptatum suscipit,
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-sm float-right btn-outline-primary" type="button">Makan</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                              <div class="row align-items-center">
                                <div class="col-8">
                                  <h3 class="mb-0">Nama Makanan</h3>
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                              {deskripsi} Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus sit voluptatum suscipit,
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-sm float-right btn-outline-primary" type="button">Makan</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                              <div class="row align-items-center">
                                <div class="col-8">
                                  <h3 class="mb-0">Nama Makanan</h3>
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                              {deskripsi} Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus sit voluptatum suscipit,
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-sm float-right btn-outline-primary" type="button">Makan</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                              <div class="row align-items-center">
                                <div class="col-8">
                                  <h3 class="mb-0">Nama Makanan</h3>
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                              {deskripsi} Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus sit voluptatum suscipit,
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-sm float-right btn-outline-primary" type="button">Makan</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                              <div class="row align-items-center">
                                <div class="col-8">
                                  <h3 class="mb-0">Nama Makanan</h3>
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                              {deskripsi} Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus sit voluptatum suscipit,
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-sm float-right btn-outline-primary" type="button">Makan</button>
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