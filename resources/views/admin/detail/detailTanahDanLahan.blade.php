@extends('admin.layouts.main')
@section('page')
    <div class="row">
        <div class="col-lg-12">
            <div class="card h-100 p-4">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <div class="text-sm-left">
                                <a href="{{ route('page.tanah-lahan') }}" class="btn btn-outline-secondary w-md"><i
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
                                        <td>{{ $data->kelurahan }}</td>
                                    </tr>
                                    <tr>
                                        <td class="form-label fs-6">Nomor</td>
                                        <td>:</td>
                                        <td>{{ $data->nomor }}</td>
                                    </tr>
                                    <tr>
                                        <td class="form-label fs-6">Nomor Register</td>
                                        <td>:</td>
                                        <td>{{ $data->noreg }}</td>
                                    </tr>
                                    <tr>
                                        <td class="form-label fs-6">Status</td>
                                        <td>:</td>
                                        <td>{{ $data->status }}</td>
                                    </tr>
                                    <tr>
                                        <td class="form-label fs-6">Kode</td>
                                        <td>:</td>
                                        <td>{{ $data->kode }}</td>
                                    </tr>
                                    <tr>
                                        <td class="form-label fs-6">Kondisi Papan Nama Pemkot</td>
                                        <td>:</td>
                                        <td>{{ $data->papan_nama }}</td>
                                    </tr>
                                    <tr>
                                        <td class="form-label fs-6">Penggunaan Lahan</td>
                                        <td>:</td>
                                        <td>{{ $data->penggunaan }}</td>
                                    </tr>
                                    <tr>
                                        <td class="form-label fs-6">Rencana Pola Ruang</td>
                                        <td>:</td>
                                        <td>{{ $data->rencana_pola }}</td>
                                    </tr>
                                    <tr>
                                        <td class="form-label fs-6">Alamat</td>
                                        <td>:</td>
                                        <td>{{ $data->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <td class="form-label fs-6">Luas Sertifikat (m²)</td>
                                        <td>:</td>
                                        <td>{{ $data->luas }}</td>
                                    </tr>
                                    <tr>
                                        <td class="form-label fs-6">Pemegang Hak</td>
                                        <td>:</td>
                                        <td>{{ $data->pemegang_hak }}</td>
                                    </tr>
                                    <tr>
                                        <td class="form-label fs-6">Pengguna Barang</td>
                                        <td>:</td>
                                        <td>{{ $data->pengguna_barang }}</td>
                                    </tr>
                                    <tr>
                                        <td class="form-label fs-6">Lahan Terbangun</td>
                                        <td>:</td>
                                        <td>{{ $data->lahan_terbangun }}</td>
                                    </tr>
                                    <tr>
                                        <td class="form-label fs-6">Penanda Batas Tanah</td>
                                        <td>:</td>
                                        <td>{{ $data->patok }}</td>
                                    </tr>
                                    <tr>
                                        <td class="form-label fs-6">Zona Nilai Tanah</td>
                                        <td>:</td>
                                        <td>{{ $data->zona_nilai }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <button class="btn btn-danger mt-3" disabled="">Tidak Ada Sertifikat</button>
                        </div>
                        <div class="col-6 border d-flex justify-content-center align-items-center mb-4 border-dark leaflet-container leaflet-touch leaflet-retina leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom"
                            id="map" tabindex="0">
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <h4><strong>Foto Lokasi</strong></h4>
                        </div>
                        <div class="col-12 text-center">
                            <h4 class="text-secondary">Tidak Ada Foto</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
