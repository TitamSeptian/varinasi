@extends('master.master', [ "title" => "- Makanan" , "activePage" => "makan"])
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
                    <p class="text-white mt-0 mb-5">Manusia tentu membutuhkan kalori agar tetap hidup. Tanpa energi, sel-sel dalam tubuh tidak akan mampu bekerja dengan baik hingga akhirnya organ-organ dalam tubuh, termasuk jantung dan otak, tidak bisa berfungsi sebagai mana mestinya</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="card bg-gradient-warning">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Daftar Makanan </h3>
                    </div>
                    <div class="col-3">
                        <a class="btn btn-outline-primary btn-sm" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Pencarian
                        </a>
                    </div>
                </div>
            </div>
            <div class="collapse" id="collapseExample">
                <div class="card-footer ">
                    <form>
                        <div class="d-flex">
                            @foreach( $ingredient as $i)
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="{{ strtolower(str_replace(" ", "-", $i->name)) }}" name="bahan[]">
                                <label class="custom-control-label mr-2" for="{{ strtolower(str_replace(" ", "-", $i->name)) }}">{{ $i->name }}</label>
                            </div>
                            @endforeach
                            {{-- <div class="custom-control custom-checkbox">
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
                            </div> --}}
                            <button type="submit" class="btn btn-outline-primary btn-sm ml-auto">Terapkan</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach($data as $f)
                    <div class="col-lg-4 ">
                        <div class="card mt-4">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h3 class="mb-0">{{ $f->name }}</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                Nama Makanan : {{ $f->name }}<br>
                                Kalori : {{ $f->calorie }}<br>
                                Bahan Bahan :
                                @php
                                $bahan = '';
                                foreach(\App\FoodDetail::where("food_id", $f->id)->get() as $i) {
                                $bahan .= $i->ingredient->name.",";
                                }
                                $bahan = substr($bahan, 0, strlen($bahan)-1);
                                echo $bahan;
                                @endphp
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-sm float-right btn-outline-primary makan" data-url="{{ route("makan.show", $f->id) }}" data-title="{{ $f->name }}" type="button">Makan</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        {{-- <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">
                                <i class="fa fa-angle-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li> --}}
                        {!! $data->links() !!}
                        {{-- <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="fa fa-angle-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </li> --}}
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Footer -->
        @include('partials.footer')
    </div>
</div>
@endsection
@push('js')
<script src="{{ asset('/assets/js/food.js') }}"></script>
@endpush
