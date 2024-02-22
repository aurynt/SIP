@extends('admin.layouts.main')
@section('page')
    <div class="row">
        <div class="col-lg-12">
            <div class="card h-100 p-4">
                    <div class="row">
                        <div class="form-group col-md-3 col-12">
                            <label for="filter-kec">Filter Kecamatan</label>
                            <select class="form-control" name="kecamatan" id="filter-kec" style="width: 100%;">
                                <option value="">-- Semua Kecamatan --</option>
                                @foreach ($kecamatan as $item)
                                    <option value="{{ $item->id_kecamatan }}">{{ $item->nama_kecamatan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-3 col-12">
                            <label for="filter-kel">Filter Kelurahan</label>
                            <select class="form-control" name="kelurahan" id="filter-kel" style="width: 100%;">
                                <option value="">-- Semua Kelurahan --</option>
                                @foreach ($kelurahan as $item)
                                    <option value="{{ $item->id_kelurahan }}">{{ $item->nama_kelurahan }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-2 col-12 text-right">
                            <label>&nbsp;</label>
                            <a href="{{ route('file.jalan') }}" class="btn btn-success waves-effect waves-light w-md mt-4"><i
                                class="bx bx-cloud-download font-size-16"></i> Export Excel</a>
                        </div>

                        <div class="form-group col-md-2 col-12 text-left">
                            <label>&nbsp;</label>
                            <button class="btn btn-warning waves-effect waves-light w-md mt-4" data-bs-toggle="modal" data-bs-target="#modal-import-jalan"
                                id="btn-import"><i class="bx bx-cloud-upload font-size-16"></i> Import Excel</button>
                        </div>

                        <div class="form-group col-md-2 col-12">
                            <label>&nbsp;</label>
                            <a href="{{ route('create.jalan') }}"
                                class="btn btn-primary waves-effect waves-light w-md mt-4"><i
                                    class="bx bx-edit font-size-16"></i> Tambah</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card h-100 p-4">
                <div class="table-responsive">
                    <table id="myTable" class="table align-items-center mb-0 table-hover">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder">No.</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Nama
                                    Ruas</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Kecamatan
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Kelurahan
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Luas
                                    Sertifikat</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Status
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Fungsi
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Tipe Hak
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Ruas Awal
                                </th>
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
                                            <a class="btn btn-outline-dark" href="{{ route('detail.jalan', $item->id) }}"
                                                data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Detail"><i class="bx bx-detail"></i></a>
                                            <a class="btn btn-outline-warning btn-update"
                                                href="{{ route('edit.jalan', $item->id) }}" data-toggle="tooltip"
                                                data-placement="top" title="" data-original-title="Ubah"><i
                                                    class="bx bx-pencil"></i></a>
                                            <button class="btn btn-outline-danger btn-remove" data-toggle="tooltip"
                                                data-placement="top" title="" data-original-title="Hapus"
                                                fdprocessedid="eru1p"><i class="bx bx-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('admin.modal.importExcelJalan')
    <script>
        $(document).ready(() => {
            const appUrl = "{{ env('APP_URL') }}" + ':8000'

            $(document).on('click', '.btn-remove', function() {
                let id = $(this).data('id');
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: `${appUrl}/api/jalan/${id}`,
                            method: "DELETE",
                            success: (res) => {
                                Swal.fire({
                                    title: "Done",
                                    text: "Data has been deleted",
                                    icon: "success"
                                });

                                $('#myTable').load("/ruas-jalan-dashboard #myTable");

                            },
                            error: (err) => {
                                Swal.fire({
                                    title: "Failed!",
                                    text: err.responseJSON.message,
                                    icon: "error"
                                })
                            }
                        });
                    }
                });
            })
        })
    </script>
@endsection
