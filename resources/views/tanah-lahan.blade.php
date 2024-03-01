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
                        <h2 class="text-white title-dark"> Data Tanah dan Lahan </h2>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="position-breadcrumb">
                <nav aria-label="breadcrumb" class="d-inline-block">
                    <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Tanah dan Lahan</li>
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

    <!-- data filter start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="card custom-form border-0">
                        <div class="card-body">
                            <form class="rounded shadow p-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Kecamatan :</label>
                                            <select class="form-control form-select" id="kecamatan">
                                                <option value="">Pilih</option>
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
                                            <select class="form-control form-select" id="kelurahan">
                                            </select>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Luas :</label>
                                            <div class="d-flex gap-3">
                                                <input name="number" id="min" type="number" class="form-control"
                                                    placeholder="Luas Min">
                                                <input name="number" id="max" type="number" class="form-control"
                                                    placeholder="Luas Max">
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Lahan Terbangun :</label>
                                            <select class="form-control form-select" id="lahan-terbangun">
                                                <option value="">Pilih</option>
                                                <option value="Terbangun">Terbangun</option>
                                                <option value="Non Terbangun">Non Terbangun</option>
                                                <option value="Terbangun Sebagian">Terbangun Sebagian</option>
                                            </select>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Pemegang Hak :</label>
                                            <select class="form-control form-select" id="pemegang-hak">
                                                <option value="">Pilih</option>
                                                <option value="Pemerintah Kota Tegal">Pemerintah Kota Tegal</option>

                                                <option value="KANWIL Departemen Koperasi Provinsi Jawa Tengah">KANWIL
                                                    Departemen Koperasi Provinsi Jawa Tengah
                                                </option>

                                                <option
                                                    value="Departemen Pendidikan dan Kebudayaan Cq. SMP N 2
                                                    Tegal">
                                                    Departemen Pendidikan dan Kebudayaan Cq. SMP N 2
                                                    Tegal</option>

                                                <option value="Kelurahan Kejambon">Kelurahan Kejambon</option>

                                                <option value="Desa Kraton">Desa Kraton</option>

                                                <option
                                                    value="Departemen Pendidikan dan Kebudayaan Prop Jawa Tengah
                                                    Cq. SMP N 13 Tegal">
                                                    Departemen Pendidikan dan Kebudayaan Prop Jawa Tengah
                                                    Cq. SMP N 13 Tegal</option>

                                                <option value="Departemen P & K Prop Jateng">Departemen P & K Prop Jateng
                                                </option>

                                                <option
                                                    value="KANWIL Departemen Pendidikan dan Kebudayaan Propinsi
                                                    Jawa Tengah">
                                                    KANWIL Departemen Pendidikan dan Kebudayaan Propinsi
                                                    Jawa Tengah</option>

                                                <option value="Departemen P & K Cq. KANWIL DEPDIKBUD Prop Jateng">Departemen
                                                    P & K Cq. KANWIL DEPDIKBUD Prop Jateng
                                                </option>

                                                <option value="KANWIL Departemen Penerangan Propinsi Jawa Tengah">KANWIL
                                                    Departemen Penerangan Propinsi Jawa Tengah
                                                </option>

                                                <option value="DEPDIKBUD RI Cq. KANWIL DEPDIKBUD PROP JATENG">DEPDIKBUD RI
                                                    Cq. KANWIL DEPDIKBUD PROP JATENG
                                                </option>

                                                <option value="Departemen Pendidikan dan Kebudayaan RI">Departemen
                                                    Pendidikan dan Kebudayaan RI</option>

                                            </select>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Kode :</label>
                                            <select class="form-control form-select" id="kode">
                                                <option value="">Pilih</option>
                                                <option value="HP">HP</option>
                                                <option value="HPL">HPL</option>
                                                <option value="HM">HM</option>
                                                <option value="BLM HP">BLM HP</option>
                                            </select>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Status :</label>
                                            <select class="form-control form-select" id="status1">
                                                <option value="">Pilih</option>
                                                <option value="Sudah Bersertifikat">Sudah Bersertifikat </option>
                                                <option value="Tanah SK">Tanah SK </option>
                                                <option value="Sudah Bersertifikat (Hilang)">Sudah Bersertifikat (Hilang)
                                                </option>
                                                <option value="Belum Bersertifikat">Belum Bersertifikat</option>
                                            </select>
                                        </div>
                                    </div><!--end col-->
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
                        <table id="myTable" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Kecamatan</th>
                                    <th>Kelurahan</th>
                                    <th>Pemegang HAK</th>
                                    <th>Luas Terbangun</th>
                                    <th>Status</th>
                                    <th>Penggunaan Lahan</th>
                                    <th>Kode</th>
                                    <th>Nomor</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <!-- data table ends -->
        </div><!--end container-->
    </section>
    <!-- data filter ends -->

    @include('layouts.footer')
    <script>
        window.csrfToken = "{{ csrf_token() }}";
        const token = localStorage.getItem('apiToken');
        const appName = "{{ env('APP_URL') }}" + ':8000'
        $('#kecamatan').on('change', (e) => {
            $('#kelurahan').empty()
            $('<option></option>').attr('value', '').text('pilih kelurahan')
                .appendTo(
                    '#kelurahan')

            $.get(`${appName}/api/kelurahan/${e.target.value}`, (res) => {
                res.map((item) => (
                    $('<option></option>').attr('value', item.id_kelurahan).text(item
                        .nama_kelurahan)
                    .appendTo(
                        '#kelurahan')
                ))
            })
        })
        $(document).on('click', '.btn-detail', function () {
            const id = $(this).data('id');
            window.location.href = '{{ route("detailUser.tanah-lahan", ["id" => ":id"]) }}'.replace(':id', id);
        });
        $(document).on('click', '.btn-cetak', function () {
            const id = $(this).data('id');
            window.location.href = '{{ route("print.tanah-lahan", ["id" => ":id"]) }}'.replace(':id', id);
        });
        new DataTable('#myTable', {
            ajax: {
                serverSide: true,
                url: "{{ route('tanah-lahan.all') }}",
                method: 'GET',
                headers: {
                    'X-CSRF-TOKEN': window.csrfToken,
                    'Authorization': `Bearer ${token}`
                },
                dataSrc: (res) => {
                    const datas = []
                    const selectedValues = {
                        kode_kec: $('#kecamatan').val(),
                        kode_kel: $('#kelurahan').val(),
                        pemegang_hak: $('#pemegang-hak').val(),
                        status: $('#status1').val(),
                        lahan_terbangun: $('#lahan-terbangun').val(),
                        kode: $('#kode').val(),
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
                        })
                        return option.prop('outerHTML')
                    }
                },
            ]


        })

        const selectElements = ['#kecamatan', '#kelurahan', '#kode', '#lahan-terbangun', '#status1', '#pemegang-hak'];
        selectElements.forEach((id) => {
            $(id).on('change', () => {
                $('#myTable').DataTable().ajax.reload();
            });
        });
    </script>
@endsection
