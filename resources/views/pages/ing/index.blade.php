@extends('master.master', [ "title" => "- Bahan" , "activePage" => "bahan"])
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
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Bahan Makanan </h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-8 d-flex justify-content-end">
                            <button data-url="{{ route('bahan.create') }}" class="btn btn-primary btn-sm" id="btn-create">
                                <i class="fas fa-plus"></i> Tambah
                            </button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="tableBahan" class="table table-striped table-bordered no-wrap" style="width: 100%">
                        <thead>
                            <tr>
                                {{-- <th>No</th> --}}
                                <th>Nama</th>
                                <th>Kalori</th>
                                <th>Tipe</th>
                                <th class="align-items-center"></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <!-- Footer -->
        @include('partials.footer')
    </div>
</div>
@endsection
@push('js')
<script>
$(document).ready(function() {
    let tableTitle = 'Bahan';
    $('#tableBahan').DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        //bLengthChange: false, //hide show entrie
        ajax: "{{ route('bahan.data') }}",
        columns: [
            // { data: "DT_RowIndex", orderable: false, searchable: false },
            { data: "name" },
            { data: "calorie" },
            { data: "type.name" },
            { data: 'action', orderable: false, searchable: false },
        ],
        oLanguage: {
            sEmptyTable: tableTitle+ " Masih Kosong",
            sInfo: "Total _TOTAL_ "+tableTitle+" Untuk Ditampilkan (_START_ - _END_)",
            sInfoFiltered: " - Dari _MAX_ "+ tableTitle,
            sLoadingRecords: "Memuat...",
            sZeroRecords: tableTitle+ "Tidak Ditemukan",
            sProcessing: "Sedang Memuat...",
            sInfoEmpty: tableTitle + " Tidak ada",
            oPaginate: {
                sNext: '<i class="fas fa-angle-right"></i>',
                sPrevious: '<i class="fas fa-angle-left"></i>',
            }
       }
    });
});
</script>
<script src="{{ asset('/assets/js/ing.js') }}"></script>
@endpush