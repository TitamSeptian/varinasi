@extends('master.master', [ "title" => "- Dashboard" , "activePage" => "dashboard"])
@section('content')
{{-- 



Untuk laki-laki: (88,4 + 13,4 x berat dalam kilogram) + (4,8 x tinggi dalam sentimeter) - (5,68 x usia dalam tahun)
Untuk wanita: (447,6 + 9,25 x berat dalam kilogram) + (3,10 x tinggi dalam sentimeter) - (4,33 x usia dalam tahun)




 --}}
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
                    <p class="text-white mt-0 mb-5">Manusia tentu membutuhkan kalori agar tetap hidup. Tanpa energi, sel-sel dalam tubuh tidak akan mampu bekerja dengan baik hingga akhirnya organ-organ dalam tubuh, termasuk jantung dan otak, tidak bisa berfungsi sebagai mana mestinya.</p>
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
                                    @if(Auth::user()->gender == 'W')
                                    <img alt="Image placeholder" src="{{ asset('/assets/img/theme/female.png') }}" class="rounded-circle">
                                    @else
                                    <img alt="Image placeholder" src="{{ asset('/assets/img/theme/male.png') }}" class="rounded-circle">
                                    @endif
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
                                        <span class="heading">{{ Auth::user()->weight }}</span>
                                        <span class="description">Berat Badan(kg)</span>
                                    </div>
                                    <div>
                                        <span class="heading">{{ Auth::user()->age }}</span>
                                        <span class="description">Tahun</span>
                                    </div>
                                    <div>
                                        <span class="heading">{{ Auth::user()->height }}</span>
                                        <span class="description">Tinggi Badan(cm)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h5 class="h3">
                                {{ Auth::user()->name }}<span class="font-weight-light">, {{ Auth::user()->age }}</span>
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
                                        <span class="h2 font-weight-bold mb-0 text-white">
                                            @php
                                                $res = 0;
                                                $h = Auth::user()->height;
                                                $w = Auth::user()->weight;
                                                $a = Auth::user()->age;
                                                switch (Auth::user()->gender) {
                                                    case 'L':
                                                        $res = (88.4 + (13.4*$w)) + (4.8 * $h) - (5.68 * $a);
                                                        break;
                                                    case 'W':
                                                        $res = (447.6 + (9.25*$w)) + (3.1 * $h) - (4.3 * $a);
                                                        break;
                                                    
                                                    default:
                                                        $res = 'Terjadi Kesalahan';
                                                        break;
                                                }
                                                echo $res." kkal";
                                            @endphp
                                        </span>
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
                                        <span class="h2 font-weight-bold mb-0 text-white">
                                            @php
                                                $a = \App\CalorieUse::groupBy('user_id', 'date')
                                                    ->where("user_id", \Auth::id())
                                                    ->where("date", \Date::now()->format("Y-m-d"))
                                                    ->select(\DB::raw("SUM(qty*calorie) as total_calorie"), "user_id")
                                                    ->first();
                                                if ($a == null) {
                                                    echo "0";
                                                }else{
                                                    echo $a->total_calorie;
                                                }
                                            @endphp
                                             kkal
                                        </span>
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
                        @include('partials.msg')
                        <form method="post" action="{{ route('update.profile', Auth::user()->id) }}">
                            @csrf
                            @method('PUT')
                            <h6 class="heading-small text-muted mb-4">Informasi Pengguna</h6>
                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-nama">Nama</label>
                                    <input type="text" id="input-nama" class="form-control" placeholder="Nama" value="{{ Auth::user()->name }}" name="name" required>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">Berat Badan(kg)</label>
                                            <input type="text" id="input-berat-badan" class="form-control" placeholder="Berat Badan" value="{{ Auth::user()->weight }}" name="weight" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">Umur</label>
                                            <input type="text" id="input-umur" class="form-control" placeholder="Umur" value="{{ Auth::user()->age }}" name="age" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-tinggi-badan">Tinggi Badan(cm)</label>
                                            <input type="text" id="input-tinggi-badan" class="form-control" placeholder="Tinggi Badan" value="{{ Auth::user()->height }}" name="height" required>
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
