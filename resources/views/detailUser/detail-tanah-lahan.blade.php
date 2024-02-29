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
                        luas: $('#min').val() <= this.luas >= ('#max').val()
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
                                    "data-d": row.id,
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
