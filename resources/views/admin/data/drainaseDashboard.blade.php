@extends('admin.layouts.main')
@section('page')
    <div class="row">
        <div class="col-lg-12">
            <div class="card h-100 p-4">
                <div class="row">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="form-group col-md-3 col-12">
                                <label for="filter-kec">Filter Kecamatan</label>
                                <select class="form-control" name="kecamatan" id="filter-kec" style="width: 100%;">
                                    <option value="">-- Semua Kecamatan --</option>
                                    <option value="337601">Tegal Barat</option>
                                    <option value="337602">Tegal Timur</option>
                                    <option value="337603">Tegal Selatan</option>
                                    <option value="337604">Margadana</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3 col-12">
                                <label for="filter-kel">Filter Kelurahan</label>
                                <select class="form-control" name="kelurahan" id="filter-kel" style="width: 100%;">
                                    <option value="">-- Semua Kelurahan --</option>
                                    <option value="3376011001">Pesurungan Kidul</option>
                                    <option value="3376011002">Debong Lor</option>
                                    <option value="3376011003">Kemandungan</option>
                                    <option value="3376011004">Pekauman</option>
                                    <option value="3376011005">Kraton</option>
                                    <option value="3376011006">Tegalsari</option>
                                    <option value="3376011007">Muarareja</option>
                                    <option value="3376021001">Kejambon</option>
                                    <option value="3376021002">Slerok</option>
                                    <option value="3376021003">Panggung</option>
                                    <option value="3376021004">Mangkukusuman</option>
                                    <option value="3376021005">Mintaragen</option>
                                    <option value="3376031001">Kalinyamat Wetan</option>
                                    <option value="3376031002">Bandung</option>
                                    <option value="3376031003">Debong Kidul</option>
                                    <option value="3376031004">Tunon</option>
                                    <option value="3376031005">Keturen</option>
                                    <option value="3376031006">Debong Kulon</option>
                                    <option value="3376031007">Debong Tengah</option>
                                    <option value="3376031008">Randugunting</option>
                                    <option value="3376041001">Kaligangsa</option>
                                    <option value="3376041002">Krandon</option>
                                    <option value="3376041003">Cabawan</option>
                                    <option value="3376041004">Kalinyamat Kulon</option>
                                    <option value="3376041005">Margadana</option>
                                    <option value="3376041006">Sumurpanggang</option>
                                    <option value="3376041007">Pesurungan Lor</option>
                                </select>
                            </div>

                            <div class="form-group col-md-2 col-12 text-right">
                                <label>&nbsp;</label>
                                <a href="{{ route('create.drainase') }}"
                                    class="btn btn-primary waves-effect waves-light w-md mt-4"><i
                                        class="bx bx-edit font-size-16"></i> Tambah</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card h-100 p-4">
                <form action="" method="POST">
                    <div class="table-responsive">
                        <table id="myTable" class="table align-items-center mb-0 table-hover">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder">No.</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Nama Ruas
                                        Jalan</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                        Kecamatan</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                        Kelurahan</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Nomor
                                        Sertifikat</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Luas
                                        Sertifikat (m<sup>2</sup>)</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $no }}.</td>
                                        <td>{{ $item->nama_ruas }}</td>
                                        <td>{{ $item->nama_kecamatan }}</td>
                                        <td>{{ $item->nama_kelurahan }}</td>
                                        <td>{{ $item->tipe_hak }}</td>
                                        <td>{{ $item->luas_sertifikat }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-outline-dark btn-tooltip" href="#"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Detail"
                                                    data-container="body" data-animation="true"><i
                                                        class="bx bx-detail"></i></a>
                                                <a class="btn btn-outline-warning btn-tooltip" href="#"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Ubah"
                                                    data-container="body" data-animation="true"><i
                                                        class="bx bx-pencil"></i></a>
                                                <button class="btn btn-outline-danger btn-remove btn-tooltip"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"
                                                    data-container="body" data-animation="true"><i
                                                        class="bx bx-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    @php
                                        $no++;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
