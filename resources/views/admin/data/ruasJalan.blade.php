@extends('admin.layouts.main')
@section('page')
<div class="row">
    <div class="col-lg-12">
        <div class="card h-100 p-4">
            <form action="" method="POST">
                <div class="row">
                    <div class="form-group col-md-3 col-12">
                        <label for="filter-kec">Filter Kecamatan</label>
                        <select class="form-control" name="kecamatan" id="filter-kec"
                            style="width: 100%;">
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
                        <button type="submit" class="btn btn-success waves-effect waves-light w-md mt-4"><i
                                class="bx bx-cloud-download font-size-16"></i> Export Excel</button>
                    </div>

                    <div class="form-group col-md-2 col-12 text-left">
                        <label>&nbsp;</label>
                        <button type="button" class="btn btn-warning waves-effect waves-light w-md mt-4"
                            id="btn-import"><i class="bx bx-cloud-upload font-size-16"></i> Import Excel</button>
                    </div>

                    <div class="form-group col-md-2 col-12">
                        <label>&nbsp;</label>
                        <a href="{{ route('create.jalan') }}"
                            class="btn btn-primary waves-effect waves-light w-md mt-4"><i
                                class="bx bx-edit font-size-16"></i> Tambah</a>
                    </div>
                </div>
            </form>
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
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Nama Ruas</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Kecamatan</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Kelurahan</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Luas Sertifikat</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Status</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Fungsi</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Tipe Hak</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Ruas Awal</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ruas as $item)
                            <tr>
                                <td class="align-middle text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{ $loop->iteration }}</p>
                                </td>
                                <td class="align-middle text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{ $item->nama_ruas }}</p>
                                </td>
                                <td class="align-middle text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{ $item->kecamatan }}</p>
                                </td>
                                <td class="align-middle text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{ $item->kel }}</p>
                                </td>
                                <td class="align-middle text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{ $item->luas_sertifikat }}</p>
                                </td>
                                <td class="align-middle text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{ $item->status }}</p>
                                </td>
                                <td class="align-middle text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{ $item->fungsi }}</p>
                                </td>
                                <td class="align-middle text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{ $item->tipe_hak }}</p>
                                </td>
                                <td class="align-middle text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{ $item->ruas_awal }}</p>
                                </td>
                                <td class="align-middle">
                                    <div class="btn-group">
                                        <a class="btn btn-outline-dark" href="{{ route('detail.jalan', $item->id) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Detail"><i class="bx bx-detail"></i></a>
                                        <a class="btn btn-outline-warning btn-update" href="{{ route('edit.jalan') }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ubah"><i class="bx bx-pencil"></i></a>
                                        <button class="btn btn-outline-danger btn-remove" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus" fdprocessedid="eru1p"><i class="bx bx-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
