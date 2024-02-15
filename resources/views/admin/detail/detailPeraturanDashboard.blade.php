@extends('admin.layouts.main')
@section('page')
    <div class="row">
        <div class="col-lg-12">
            <div class="card h-100 p-4">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <div class="text-sm-left">
                                <a href="{{ route('page.peraturan') }}" class="btn btn-outline-secondary w-md"><i
                                        class="mdi mdi-arrow-left ml-1"></i> Kembali</a>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row pb-5">
                        <div class="col-6">
                            <table class="w-100 detail table-striped">
                                <tbody>
                                    <tr>
                                        <td class="form-label fs-6">Jenis</td>
                                        <td>:</td>
                                        <td>{{ $data->jenis }}</td>
                                    </tr>
                                    <tr>
                                        <td class="form-label fs-6">Nomor</td>
                                        <td>:</td>
                                        <td>{{ $data->nomor }}</td>
                                    </tr>
                                    <tr>
                                        <td class="form-label fs-6">Tahun</td>
                                        <td>:</td>
                                        <td>{{ $data->tahun }}</td>
                                    </tr>
                                    <tr>
                                        <td class="form-label fs-6" width="30%">Instansi</td>
                                        <td width="2%">:</td>
                                        <td>{{ $data->instansi }}</td>
                                    </tr>
                                    <tr>
                                        <td class="form-label fs-6" width="30%">Tentang</td>
                                        <td width="2%">:</td>
                                        <td>{{ $data->tentang }}</td>
                                    </tr>
                                    <tr>
                                        <td class="form-label fs-6">Didownload</td>
                                        <td>:</td>
                                        <td>{{ $data->didownload }}0 kali </td>
                                    </tr>
                                    <tr>
                                        <td class="form-label fs-6">Dilihat</td>
                                        <td>:</td>
                                        <td>{{ $data->dilihat }} kali </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-6">
                            <embed type="application/pdf" src="assets/images/logo_kota_tegal.png" width="100%"
                                height="700">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
