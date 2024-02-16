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
                                    <td>{{ $item->tipe_hak }} {{ $item->hp }}</td>
                                    <td>{{ $item->luas_sertifikat }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-outline-dark btn-tooltip"
                                                href="{{ route('detail.drainase', $item->id) }}" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Detail" data-container="body"
                                                data-animation="true"><i class="bx bx-detail"></i></a>
                                            <a class="btn btn-outline-warning btn-tooltip"
                                                href="{{ route('edit.drainase', $item->id) }}" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Ubah" data-container="body"
                                                data-animation="true"><i class="bx bx-pencil"></i></a>
                                            <button data-id="{{ $item->id }}"
                                                class="btn btn-outline-danger btn-remove btn-tooltip"
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
            </div>
        </div>
    </div>
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
                            url: `${appUrl}/api/drainase/${id}`,
                            method: "DELETE",
                            success: (res) => {
                                Swal.fire({
                                    title: "Woke",
                                    text: "successfuly deleted drainase",
                                    icon: "success"
                                });

                                $('#myTable').DataTable().ajax.reload();
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
