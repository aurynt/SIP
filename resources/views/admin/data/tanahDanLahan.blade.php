@extends('admin.layouts.main')
@section('page')
    <div class="row">
        <div class="col-lg-12">
            <div class="card h-100 p-4">
                <div class="row">
                    <div class="form-group col-md-3 col-12">
                        <label for="filter-kec">Filter Kecamatan</label>
                        <select class="form-control dropdown-toggle" name="kecamatan" id="filter-kec" style="width: 100%;">
                            <option value="">-- Semua Kecamatan --</option>
                            @foreach ($kecamatan as $item)
                                <option value="{{ $item->id_kecamatan }}">{{ $item->nama_kecamatan }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-3 col-12 dropdown">
                        <label for="filter-kel">Filter Kelurahan</label>
                        <select class="form-control" name="kelurahan" id="filter-kel" style="width: 100%;">
                        </select>
                    </div>

                    <div class="form-group col-md-2 text-right">
                        <label>&nbsp;</label>
                        <a href="{{ route('file.tanah-lahan') }}"
                            class="btn btn-success waves-effect waves-light w-md mt-4"><i
                                class="bx bx-cloud-download font-size-16"></i> Export Excel</a>
                    </div>

                    <div class="form-group col-md-2 text-left">
                        <label>&nbsp;</label>
                        <button class="btn btn-warning waves-effect waves-light w-md mt-4" data-bs-toggle="modal"
                            data-bs-target="#modal-import-tanah" id="btn-import"><i
                                class="bx bx-cloud-upload font-size-16"></i> Import Excel</button>
                    </div>
                    <div class="form-group col-md-2">
                        <label>&nbsp;</label>
                        <a href="{{ route('create.tanah-lahan') }}"
                            class="btn btn-primary waves-effect waves-light w-md mt-4"><i
                                class="bx bx-edit font-size-16"></i> Tambah</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card h-100 p-4">
                <input type="hidden" name="" value="">
                <input type="hidden" name="jenis" value="back">
                <div class="table-responsive">
                    <table id="myTable" class="table align-items-center mb-0 table-hover">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder">No.</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Kecamatan
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder">
                                    Kelurahan</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder">
                                    Pemegang Hak</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Lahan
                                    Terbangun</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Status
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder">
                                    Penggunaan Lahan</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Kode
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Nomor
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Aksi
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('admin.modal.uploadSertifikat')
    @include('admin.modal.uploadFotoTanah')
    @include('admin.modal.importExcel')

    <script>
        $(document).ready(() => {
            const appUrl = "{{ env('APP_URL') }}" + ':8000'
            $('#filter-kec').on('change', (e) => {
                $('#filter-kel').empty()
                $('<option></option>').attr('value', '').text('-- pilih kelurahan --')
                    .appendTo(
                        '#filter-kel')

                $.get(`${appUrl}/api/kelurahan/${e.target.value}`, (res) => {
                    res.map((item) => (
                        $('<option></option>').attr('value', item.id_kelurahan).text(item
                            .nama_kelurahan)
                        .appendTo(
                            '#filter-kel')
                    ))
                })
            })

            $(document).on('click', '.btn-remove', function() {
                let id = $(this).data('id');
                window.csrfToken = "{{ csrf_token() }}";
                const token = localStorage.getItem('apiToken');
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
                            url: `${appUrl}/api/tanah-lahan/${id}`,
                            method: "DELETE",
                            headers: {
                                'X-CSRF-TOKEN': window.csrfToken,
                                'Authorization': `Bearer ${token}`
                            },
                            success: (res) => {
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

    <script>
        window.csrfToken = "{{ csrf_token() }}";
        const token = localStorage.getItem('apiToken');
        getTanahLahan().then((dataTanah) => {
            const selectedValues = {
                kode_kec: $('#filter-kec').val(),
                kode_kel: $('#filter-kel').val(),
            };
            const data = dataTanah.filter((item) => {
                for (const [key, value] of Object.entries(selectedValues)) {
                    if (value && item[key] !== value) {
                        return false;
                    }
                }
                return true;
            })

            generateDataTable(data);
            $('#export').on('click', () => {
                exportExcel(data, 'tanahreport')
            })
        })

        function generateDataTable(data) {
            new DataTable('#myTable', {
                data: data,
                columns: [{
                        data: 'no',
                    }, {
                        data: 'kecamatan'
                    },
                    {
                        data: 'kelurahan'
                    },
                    {
                        data: 'pemegang_hak'
                    },
                    {
                        data: 'lahan_terbangun'
                    },
                    {
                        data: 'status'
                    },
                    {
                        data: 'penggunaan'
                    },
                    {
                        data: 'kode'
                    },
                    {
                        data: 'nomor'
                    },
                    {
                        render: (data, type, row) => {
                            return `
                            <td class="align-middle">
                                <div class="btn-group">
                                    <button data-id="${row.id}" class="btn btn-outline-success btn-up-sertifikat btn-tooltip"
                                        data-bs-toggle="modal" data-bs-target="#modal-sertifikat"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Upload Sertifikat" data-container="body" data-animation="true"><i
                                            class="bx bxs-file-pdf"></i></button>
                                    <button class="btn btn-outline-info btn-up-lokasi btn-tooltip"
                                        data-bs-toggle="modal" data-bs-target="#modal-tanah"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Upload Foto Tanah" data-container="body" data-animation="true"><i
                                            class="bx bx-image-add"></i></button>
                                    <a class="btn btn-outline-primary btn-tooltip" href="#" target="_blank"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Patok"
                                        data-container="body" data-animation="true"><i class="bx bx-map"></i></a>
                                    <a class="btn btn-outline-dark btn-tooltip"
                                        href="/detail-tanah-lahan/${row.id}"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Detail"
                                        data-container="body" data-animation="true"><i
                                            class="bx bx-detail"></i></a>
                                    <a class="btn btn-outline-warning btn-update btn-tooltip"
                                        href="/detail-tanah-lahan/${row.id}"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Ubah"
                                        data-container="body" data-animation="true"><i
                                            class="bx bx-pencil"></i></a>
                                    <button data-id="${row.id}"
                                        class="btn btn-outline-danger btn-remove btn-tooltip"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"
                                        data-container="body" data-animation="true"><i
                                            class="bx bx-trash"></i></button>
                                </div>
                            </td>
                            `
                        },
                    },
                ]
            })
        }

        function exportExcel(data, nameFile) {
            const worksheet = XLSX.utils.json_to_sheet(data);
            const workbook = XLSX.utils.book_new();
            XLSX.utils.book_append_sheet(workbook, worksheet, "Dates");
            XLSX.writeFile(workbook, `${nameFile}.xlsx`, {
                compression: true
            });
        }

        function getTanahLahan() {
            return new Promise((resolve, reject) => {
                const datas = []
                $.ajax({
                    url: "{{ route('tanah-lahan.all') }}",
                    method: 'GET',
                    headers: {
                        'X-CSRF-TOKEN': window.csrfToken,
                        'Authorization': `Bearer ${token}`
                    },
                    success: (res) => {
                        const selectedValues = {
                            kode_kec: $('#filter-kec').val(),
                            kode_kel: $('#filter-kel').val(),
                        };
                        const data = res.filter((item) => {
                            for (const [key, value] of Object.entries(selectedValues)) {
                                if (value && item[key] !== value) {
                                    return false;
                                }
                            }
                            return true;
                        }).map((item, i) => {
                            const newdata = {
                                no: i + 1,
                                ...item
                            }
                            datas.push(newdata)
                        });
                        resolve(datas)
                    },
                    error: (err) => {
                        reject(err)
                    }
                })
            })
        }




        const selectElements = ['#filter-kec', '#filter-kel', ];
        selectElements.forEach((id) => {
            $(id).on('change', () => {
                $('#myTable').DataTable().ajax.reload();
            });
        });
    </script>
@endsection
