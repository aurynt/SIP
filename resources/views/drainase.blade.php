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
                        <h2 class="text-white title-dark"> Data Drainase </h2>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="position-breadcrumb">
                <nav aria-label="breadcrumb" class="d-inline-block">
                    <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Drainase</li>
                    </ul>
                </nav>
            </div>
        </div> <!--end container-->
    </section>
    <div class="position-relative">
        <div class="shape overflow-hidden text-color-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Hero End -->

    <!-- data filter start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="card custom-form border-0">
                        <div class="card-body">
                            <form class="rounded shadow p-4"
                                action="https://ministry.phicos.co.id/tegal-sip/export/excel_drainase/export"
                                method="POST">
                                <input type="hidden" name="tegal-sip-token" value="9037360785d265fd2d3156f7100b3b34">
                                <input type="hidden" name="jenis" value="front">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Kecamatan :</label>
                                            <select class="form-control form-select" name="kecamatan" id="filter-kec">
                                                <option value="">--Semua Kecamatan--</option>
                                                <option value="337601">Tegal Barat</option>
                                                <option value="337602">Tegal Timur</option>
                                                <option value="337603">Tegal Selatan</option>
                                                <option value="337604">Margadana</option>
                                            </select>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Kelurahan :</label>
                                            <select class="form-control form-select" name="kelurahan" id="filter-kel">
                                            </select>
                                        </div>
                                    </div>
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
                            <table id="myTable" class="table align-items-center mb-0 table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Ruas
                                            Jalan</th>
                                        <th>
                                            Kecamatan</th>
                                        <th>
                                            Kelurahan</th>
                                        <th>
                                            Nomor
                                            Sertifikat</th>
                                        <th>
                                            Luas
                                            Sertifikat (m<sup>2</sup>)</th>
                                        <th>
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- data table ends -->
        </div><!--end container-->
    </section>
    <script>
        window.csrfToken = "{{ csrf_token() }}";
        const token = localStorage.getItem('apiToken');
        const appName = "{{ env('APP_URL') }}" + ':8000'
        $('#filter-kec').on('change', (e) => {
            $('#filter-kel').empty()
            $('<option></option>').attr('value', '').text('-- semua kelurahan --')
                .appendTo(
                    '#filter-kel')

            $.get(`${appName}/api/kelurahan/${e.target.value}`, (res) => {
                res.map((item) => (
                    $('<option></option>').attr('value', item.id_kelurahan).text(item
                        .nama_kelurahan)
                    .appendTo(
                        '#filter-kel')
                ))
            })
        })
        $(document).on('click', '.btn-detail', function () {
            const id = $(this).data('id');
            window.location.href = '{{ route("detailUser.drainase", ["id" => ":id"]) }}'.replace(':id', id);
        });
        new DataTable('#myTable', {
            ajax: {
                serverSide: true,
                url: "{{ route('drainase.all') }}",
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
                    render: (data, type, row) => {
                        return `${row.tipe_hak} ${row.hp}`
                    }
                },
                {
                    data: 'luas_sertifikat',
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
                            ]
                        })
                        return option.prop('outerHTML')
                    }
                },
            ]
        })
        const selectElements = ['#filter-kec', '#filter-kel', ];
        selectElements.forEach((id) => {
            $(id).on('change', () => {
                $('#myTable').DataTable().ajax.reload();
            });
        });
    </script>
@endsection
