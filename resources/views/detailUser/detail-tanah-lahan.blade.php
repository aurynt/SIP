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
                        <h2 class="text-white title-dark"> Data Tanah dan Lahan </h2>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="position-breadcrumb">
                <nav aria-label="breadcrumb" class="d-inline-block">
                    <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Tanah dan Lahan</li>
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
                                <td>{{ $tanah->kecamatan }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Kelurahan</td>
                                <td>:</td>
                                <td>{{ $tanah->kelurahan }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Nomor Sertipikat</td>
                                <td>:</td>
                                <td>{{ $tanah->nomor }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Nomor Register</td>
                                <td>:</td>
                                <td>{{ $tanah->noreg }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Status</td>
                                <td>:</td>
                                <td>{{ $tanah->status }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Kode</td>
                                <td>:</td>
                                <td>{{ $tanah->kode }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Tahun Terbit Sertipikat</td>
                                <td>:</td>
                                <td>{{ $tanah->tahun_sertifikat }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Luas Sertifikat</td>
                                <td>:</td>
                                <td>{{ $tanah->luas }} m<sup>2</sup></td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Pemegang Hak</td>
                                <td>:</td>
                                <td>{{ $tanah->pemegang_hak }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Pengguna Barang</td>
                                <td>:</td>
                                <td>{{ $tanah->pengguna_barang }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Penggunaan Lahan</td>
                                <td>:</td>
                                <td>{{ $tanah->penggunaan }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Alamat</td>
                                <td>:</td>
                                <td>{{ $tanah->alamat }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Rencana Pola Ruang (RDTR)</td>
                                <td>:</td>
                                <td>{{ $tanah->rencana_pola }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Lahan Terbangun</td>
                                <td>:</td>
                                <td>{{ $tanah->lahan_terbangun }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Kondisi Papan Nama Pemkot</td>
                                <td>:</td>
                                <td>{{ $tanah->papan_nama }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Batas Tanah</td>
                                <td>:</td>
                                <td>{{ $tanah->patok }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Zona Nilai Tanah</td>
                                <td>:</td>
                                <td>{{ $tanah->zona_nilai }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-danger mt-3" disabled="">Tidak Ada Sertifikat</button>
                </div>
                <input type="hidden" id="saved_coordinates">
                <input type="hidden" id="type" value="MultiPolygon">
                <div class="col-6 border d-flex justify-content-center align-items-center mb-4 border-dark leaflet-container leaflet-touch leaflet-retina leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom"
                    id="map" tabindex="0">
                </div>
            </div>

            <!-- foto -->
            <div class="row mt-4">
                <div class="col-12">
                    <h4><strong>Foto Lokasi</strong></h4>
                </div>
                <div class="col-4 mb-4">
                    <div class="card border border-dark rounded">
                        <div class="card-body p-0">
                            <img src="" alt="gambar"
                                width="100%">
                        </div>
                    </div>
                </div>
            </div>

            <!-- batas -->
            <div class="row mt-4">
                <div class="col-12">
                    <h4><strong>Foto Batas</strong></h4>
                </div>
                <div class="col-12 text-center">
                    <h4 class="text-secondary">Tidak Ada Foto</h4>
                </div>
            </div>

            <!-- papan -->
            <div class="row mt-4">
                <div class="col-12">
                    <h4><strong>Foto Papan</strong></h4>
                </div>
                <div class="col-12 text-center">
                    <h4 class="text-secondary">Tidak Ada Foto</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- data filter ends -->

    @include('layouts.footer')
@endsection
