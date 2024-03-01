@extends('admin.layouts.main')
@section('page')
    <div class="row">
        <div class="col-lg-12">
            <div class="card h-100 p-4">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <div class="text-sm-left">
                                <a href="{{ route('page.jalan') }}" class="btn btn-outline-secondary w-md"><i
                                        class="mdi mdi-arrow-left ml-1"></i> Kembali</a>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row pb-5">
                        <div class="col-6">
                            <table class="w-100 detail">
                                <tbody>
                                    <tr>
                                        <td class="form-label fs-6" width="30%">Kecamatan</td>
                                        <td width="2%">:</td>
                                        <td>{{ $data->kecamatan }}</td>
                                    </tr>
                                    <tr>
                                        <td class="form-label fs-6">Kelurahan</td>
                                        <td>:</td>
                                        <td>{{ $data->kel }}</td>
                                    </tr>
                                    <tr>
                                        <td class="form-label fs-6">Nama Ruas Jalan</td>
                                        <td>:</td>
                                        <td>{{ $data->nama_ruas }}</td>
                                    </tr>
                                    <tr>
                                        <td class="form-label fs-6">Nomor Sertipikat</td>
                                        <td>:</td>
                                        <td>Hak Pakai {{ $data->hp }}</td>
                                    </tr>
                                    <tr>
                                        <td class="form-label fs-6">Luas Sertifikat</td>
                                        <td>:</td>
                                        <td>{{ $data->luas_sertifikat }} m<sup>2</sup></td>
                                    </tr>
                                    <tr>
                                        <td class="form-label fs-6">Status</td>
                                        <td>:</td>
                                        <td>{{ $data->status }}</td>
                                    </tr>
                                    <tr>
                                        <td class="form-label fs-6">Fungsi</td>
                                        <td>:</td>
                                        <td>{{ $data->fungsi }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <button class="btn btn-danger mt-3" disabled="">Tidak Ada Sertifikat</button>
                        </div>
                        <div class="col-6 border d-flex justify-content-center align-items-center mb-4 border-dark leaflet-container leaflet-touch leaflet-retina leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom"
                            id="map" tabindex="0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.script.map')
@endsection
