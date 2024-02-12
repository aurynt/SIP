@extends('admin.layouts.main')
@section('page')
    <div class="row">
        <div class="col-lg-12">
            <div class="card h-100 p-4">
                <div class="row">
                    <div class="form-group col-md-2 col-12">
                        <label for="filter-jenis">Filter Jenis</label>
                        <select class="form-control" name="id_jenis" id="filter-jenis" style="width: 100%;"
                            fdprocessedid="fm6n6c">
                            <option value="">-- Semua --</option>
                            <option value="1">Peraturan Pemerintah</option>
                            <option value="2">Putusan Mahkamah Konstitusi</option>
                            <option value="3">TAP MPR</option>
                            <option value="4">Peraturan Daerah</option>
                            <option value="5">Undang-Undang</option>
                            <option value="6">Undang-Undang Dasar</option>
                            <option value="7">Perpres</option>
                            <option value="8">Perpu</option>
                            <option value="9">Peraturan Walikota</option>
                            <option value="10">Peraturan Bupati</option>
                            <option value="11">Peraturan Daerah</option>
                            <option value="12">Peraturan Gubernur</option>
                            <option value="13">Peraturan Menteri</option>
                            <option value="14">Permendagri</option>
                            <option value="15">Inpres</option>
                            <option value="16">Keputusan Menteri</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2 col-12">
                        <label for="filter-nomor">Filter Nomor</label>
                        <input type="number" id="filter-nomor" name="nomor" class="form-control" fdprocessedid="wnc5r5">
                    </div>
                    <div class="form-group col-md-2 col-12">
                        <label for="filter-tahun">Filter Tahun</label>
                        <input type="number" id="filter-tahun" name="tahun" class="form-control" fdprocessedid="vgkxg6">
                    </div>
                    <div class="form-group col-md-4 col-12 text-right">
                        <label>&nbsp;</label>
                        <a href="https://ministry.phicos.co.id/tegal-sip/operator/peraturan/tambah/ajhtb2kxa2w2Y2pYOVNSL25iRjAwRUZFdDBNSS9UWnRWbmN5VzJnYkh0ZmVVeVlkc0lhQWNONFBRRDZhZGxBVWZBTVNoM1ArcGNXTGxSQ1BhUEtyRmc9PQ=="
                            class="btn btn-primary waves-effect waves-light w-md mt-4">Tambah</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card h-100 p-4">
                <form action="" method="POST">
                    <input type="hidden" name="" value="">
                    <input type="hidden" name="jenis" value="back">
                    <div class="table-responsive">
                        <table id="myTable" class="table align-items-center mb-0 table-hover">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder">No.</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Judul</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Download</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Keputusan Menteri Nomor 1589 Tahun 2021 Tentang PENETAPAN PETA LSD
                                        <hr><span class="badge bg-success text-white">Dilihat: 0 kali</span> <span class="badge bg-primary text-white">Diunduh: 0 kali</span>
                                    </td>
                                    <td>
                                        <a target="_blank" href="#" class="lihat btn bg-gradient-success btn-sm col-12 mb-1">Lihat File</a><br>
                                        <a target="_blank" href="#" class="download btn bg-gradient-primary btn-sm col-12">Download File</a>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-sm">
                                            <a class="btn btn-outline-dark btn-tooltip" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Detail" data-container="body" data-animation="true"><i class="bx bx-detail"></i></a>
                                            <a class="btn btn-outline-warning btn-tooltip" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Ubah" data-container="body" data-animation="true"><i class="bx bx-pencil"></i></a>
                                            <button class="btn btn-outline-danger btn-remove btn-tooltip"  data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus" data-container="body" data-animation="true"><i class="bx bx-trash"></i></button></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>Keputusan Menteri Nomor 433 Tahun 2022 Tentang PENETAPAN PETA LSD
                                        <hr><span class="badge bg-success text-white">Dilihat: 0 kali</span> <span class="badge bg-primary text-white">Diunduh: 0 kali</span>
                                    </td>
                                    <td>
                                        <a target="_blank" href="#" class="lihat btn bg-gradient-success btn-sm col-12 mb-1">Lihat File</a><br>
                                        <a target="_blank" href="#" class="download btn bg-gradient-primary btn-sm col-12">Download File</a>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-sm">
                                            <a class="btn btn-outline-dark btn-tooltip" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Detail" data-container="body" data-animation="true"><i class="bx bx-detail"></i></a>
                                            <a class="btn btn-outline-warning btn-tooltip" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Ubah" data-container="body" data-animation="true"><i class="bx bx-pencil"></i></a>
                                            <button class="btn btn-outline-danger btn-remove btn-tooltip"  data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus" data-container="body" data-animation="true"><i class="bx bx-trash"></i></button></div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
