@extends('layouts.main')
@section('page')
    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100"
        style="background: url('assets/images/bg-alun-tegal.jpeg') center center; background-repeat: no-repeat; background-size: cover;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="pages-heading title-heading">
                        <h2 class="text-white title-dark"> Data Ruas Jalan </h2>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="position-breadcrumb">
                <nav aria-label="breadcrumb" class="d-inline-block">
                    <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Ruas Jalan</li>
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

    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="card custom-form border-0">
                        <div class="card-body">
                            <form class="rounded shadow p-4"
                                action="https://ministry.phicos.co.id/tegal-sip/export/excel_jalan/export" method="POST">
                                <input type="hidden" name="tegal-sip-token" value="9037360785d265fd2d3156f7100b3b34">
                                <input type="hidden" name="jenis" value="front">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Kecamatan :</label>
                                            <select class="form-control form-select" name="kecamatan" id="filter-kec">
                                                <option value="">--Semua Kecamatan--</option>
                                                @foreach ($kecamatan as $item)
                                                    <option value="{{ $item->id_kecamatan }}">{{ $item->nama_kecamatan }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Kelurahan :</label>
                                            <select class="form-control form-select" name="kelurahan" id="filter-kel">
                                            </select>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="filter-stat">Status :</label>
                                            <select class="form-control form-select" name="stat" id="filter-stat">
                                                <option value="">-- Semua --</option>
                                                <option value="Jalan Kota">Jalan Kota</option>
                                            </select>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="filter-fungsi">Fungsi :</label>
                                            <select class="form-control form-select" name="fungsi" id="filter-fungsi">
                                                <option value="">-- Semua --</option>
                                                <option value="-">-</option>
                                                <option value="Jalan Lokal Sekunder">Jalan Lokal Sekunder</option>
                                                <option value="Jalan Arteri Sekunder">Jalan Arteri Sekunder</option>
                                                <option value="Jalan Kolektor Sekunder">Jalan Kolektor Sekunder</option>
                                                <option value="Jalan Lingkungan Sekunder">Jalan Lingkungan Sekunder</option>
                                                <option value="Jalan Liingkungan Sekunder">Jalan Liingkungan Sekunder
                                                </option>
                                                <option value="Jalan Lokal">Jalan Lokal</option>
                                            </select>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="filter-tipe_hak">Tipe Hak :</label>
                                            <select class="form-control form-select" name="tipe_hak" id="filter-tipe_hak">
                                                <option value="">-- Semua --</option>
                                                <option value="Hak Pakai">Hak Pakai</option>
                                            </select>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-12 text-right">
                                        <button type="submit" class="btn btn-success text-center">Cetak Excel</button>
                                    </div>
                                </div><!--end row-->
                            </form><!--end form-->
                        </div>
                    </div><!--end custom-form-->
                </div>
            </div>
            <!-- data table start -->
            <div class="card custom-form border-0">
                <div class="card-body">
                    <div class="table-responsive rounded shadow p-4">
                        <div id="table-data_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                            <div class="row dt-row">
                                <div class="col-sm-12">
                                    <table id="myTable" class="table table-hover no-footer" style="width: 100%;"
                                        aria-describedby="table-data_info">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Ruas</th>
                                                <th>Kecamatan</th>
                                                <th>Kelurahan</th>
                                                <th>Luas Sertifikat</th>
                                                <th>Status</th>
                                                <th>Fungsi</th>
                                                <th>Tipe Hak</th>
                                                <th>Option</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- data table ends -->
        </div><!--end container-->
    </section>

    @include('layouts.footer')
    <script>
        window.csrfToken = "{{ csrf_token() }}";
        const token = localStorage.getItem('apiToken');
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
        $(document).on('click', '.btn-detail', function() {
            const id = $(this).data('id');
            window.location.href = '{{ route('detailUser.jalan', ['id' => ':id']) }}'.replace(':id', id);
        });
        $(document).on('click', '.btn-cetak', function() {
            const id = $(this).data('id');
            window.location.href = '{{ route('print.ruas-jalan', ['id' => ':id']) }}'.replace(':id', id);
        });
        new DataTable('#myTable', {
            ajax: {
                serverSide: true,
                url: "{{ route('jalan.all') }}",
                method: 'GET',
                headers: {
                    'X-CSRF-TOKEN': window.csrfToken,
                    'Authorization': `Bearer ${token}`
                },
                dataSrc: (res) => {
                    const datas = []
                    const selectedValues = {
                        kode_kec: $('#filter-kec').val(),
                        kode_kel: $('#filter-kel').val(),
                        status: $('#filter-stat').val(),
                        fungsi: $('#filter-fungsi').val(),
                        tipe_hak: $('#filter-tipe-hak').val(),
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
                    return datas
                }
            },
            columns: [{
                    data: 'no',
                }, {
                    data: 'nama_ruas',
                },
                {
                    data: 'nama_kecamatan',
                },
                {
                    data: 'nama_kelurahan',
                },
                {
                    data: 'luas_sertifikat',
                },
                {
                    data: 'status',
                },
                {
                    data: 'fungsi',
                },
                {
                    data: 'tipe_hak',
                },
                {
                    render: (data, type, row) => {
                        const option = $('<div></div>', {
                            class: 'btn-group',
                            html: [
                                $('<button></button>', {
                                    class: 'btn btn-primary btn-sm btn-detail',
                                    type: 'button',
                                    "data-id": row.id,
                                    "data-toggle": "tooltip",
                                    "data-placement": "top",
                                    title: "Detail",
                                }).text('Detail'),
                                $('<button></button>', {
                                    class: 'btn btn-warning btn-sm btn-cetak',
                                    type: 'button',
                                    "data-id": row.id,
                                    "data-toggle": "tooltip",
                                    "data-placement": "top",
                                    title: "Cetak",
                                }).text('Cetak')
                            ]
                        });
                        return option.prop('outerHTML')
                    }
                },
            ]
        })
        const selectElements = ['#filter-kec', '#filter-kel', '#filter-stat', '#filter-fungsi', '#filter-tipe-hak'];
        selectElements.forEach((id) => {
            $(id).on('change', () => {
                $('#myTable').DataTable().ajax.reload();
            });
        });
    </script>
@endsection
