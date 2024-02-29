@extends('layouts.main')
@section('page')
    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100"
        style="background: url('/assets/images/bg-alun-tegal.jpeg') center center; background-repeat: no-repeat; background-size: cover;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="pages-heading title-heading">
                        <h2 class="text-white title-dark"> Detail Ruas Dan Jalan </h2>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="position-breadcrumb">
                <nav aria-label="breadcrumb" class="d-inline-block">
                    <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Ruas Jalan</li>
                    </ul>
                </nav>
            </div>
        </div> <!--end container-->
    </section><!--end section-->
    <div class="position-relative">
        <div class="shape overflow-hidden text-color-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Hero End -->

    <!-- data filter start -->
    <section class="section">
        <div class="container">
            <div class="row pb-5">
                <div class="col-6">
                    <table class="w-100 detail">
                        <tbody>
                            <tr>
                                <td class="form-label fs-6" width="30%">Kecamatan</td>
                                <td width="2%">:</td>
                                <td>{{ $jalan->kecamatan }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Kelurahan</td>
                                <td>:</td>
                                <td>{{ $jalan->kel }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Nama Ruas Jalan</td>
                                <td>:</td>
                                <td>{{ $jalan->nama_ruas }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Nomor Sertipikat</td>
                                <td>:</td>
                                <td>{{ $jalan->tipe_hak }} {{ $jalan->hp }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Luas Sertifikat</td>
                                <td>:</td>
                                <td>{{ $jalan->luas_sertifikat }} m<sup>2</sup></td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Status</td>
                                <td>:</td>
                                <td>{{ $jalan->status }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Fungsi</td>
                                <td>:</td>
                                <td>{{ $jalan->fungsi }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-danger mt-3" disabled="">Tidak Ada Sertifikat</button>

                </div>
                <input type="hidden" id="saved_coordinates"
                    value="">
                <input type="hidden" id="type" >
                <div class="col-6 border d-flex justify-content-center align-items-center">
                    <div id="map"
                        class="mb-4 border border-dark leaflet-container leaflet-touch leaflet-retina leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom"
                        style="height: 650px; width: 100%; position: relative;" tabindex="0">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- data filter ends -->

    @include('layouts.footer')
@endsection
