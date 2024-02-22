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
                        <h2 class="text-white title-dark"> Statistik </h2>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="position-breadcrumb">
                <nav aria-label="breadcrumb" class="d-inline-block">
                    <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Statistik</li>
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
                    <div class="row">
                        <div class="col-md-4 mt-4 pt-2">
                            <ul class="nav nav-pills nav-justified flex-column rounded shadow p-3 mb-0 sticky-bar"
                                id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link rounded active" data-bs-toggle="pill" href="#luasKecamatan"
                                        role="tab" aria-controls="luasKecamatan" aria-selected="false">
                                        <div class="text-center py-1">
                                            <h6 class="mb-0">Luas Tanah Per-Kecamatan</h6>
                                        </div>
                                    </a><!--end nav link-->
                                </li><!--end nav item-->

                                <li class="nav-item mt-2">
                                    <a class="nav-link rounded" data-bs-toggle="pill" href="#luasKelurahan" role="tab"
                                        aria-controls="luasKelurahan" aria-selected="false">
                                        <div class="text-center py-1">
                                            <h6 class="mb-0">Luas Tanah Per-Kelurahan</h6>
                                        </div>
                                    </a><!--end nav link-->
                                </li><!--end nav item-->

                                <li class="nav-item mt-2">
                                    <a class="nav-link rounded" data-bs-toggle="pill" href="#security" role="tab"
                                        aria-controls="security" aria-selected="false">
                                        <div class="text-center py-1">
                                            <h6 class="mb-0">Aset Tanah Kelurahan</h6>
                                        </div>
                                    </a><!--end nav link-->
                                </li><!--end nav item-->

                                <li class="nav-item mt-2">
                                    <a class="nav-link rounded" data-bs-toggle="pill" href="#prosentaseLahanTerbangun"
                                        role="tab" aria-controls="prosentaseLahanTerbangun" aria-selected="false">
                                        <div class="text-center py-1">
                                            <h6 class="mb-0">Prosentase Lahan Terbangun</h6>
                                        </div>
                                    </a><!--end nav link-->
                                </li><!--end nav item-->

                                <li class="nav-item mt-2">
                                    <a class="nav-link rounded" data-bs-toggle="pill" href="#prosentaseLegalitasAset"
                                        role="tab" aria-controls="prosentaseLegalitasAset" aria-selected="false">
                                        <div class="text-center py-1">
                                            <h6 class="mb-0">Prosentase Legalitas Aset</h6>
                                        </div>
                                    </a><!--end nav link-->
                                </li><!--end nav item-->

                                <li class="nav-item mt-2">
                                    <a class="nav-link rounded" data-bs-toggle="pill" href="#prosentasePemegangHak"
                                        role="tab" aria-controls="prosentasePemegangHak" aria-selected="false">
                                        <div class="text-center py-1">
                                            <h6 class="mb-0">Prosentase Pemegang Hak</h6>
                                        </div>
                                    </a><!--end nav link-->
                                </li><!--end nav item-->

                                <li class="nav-item mt-2">
                                    <a class="nav-link rounded" data-bs-toggle="pill" href="#berdasarkanPolaRuang"
                                        role="tab" aria-controls="berdasarkanPolaRuang" aria-selected="false">
                                        <div class="text-center py-1">
                                            <h6 class="mb-0">Berdasarkan Pola Ruang</h6>
                                        </div>
                                    </a><!--end nav link-->
                                </li><!--end nav item-->

                                <li class="nav-item mt-2">
                                    <a class="nav-link rounded" data-bs-toggle="pill"
                                        href="#berdasarkanKeberadaanPapanNamaPemkot" role="tab"
                                        aria-controls="berdasarkanKeberadaanPapanNamaPemkot" aria-selected="false">
                                        <div class="text-center py-1">
                                            <h6 class="mb-0">Berdasarkan Keberadaan Papan Nama Pemkot</h6>
                                        </div>
                                    </a><!--end nav link-->
                                </li><!--end nav item-->

                                <li class="nav-item mt-2">
                                    <a class="nav-link rounded" data-bs-toggle="pill"
                                        href="#berdasarkanKeberadaanPatokBatasTanah" role="tab"
                                        aria-controls="berdasarkanKeberadaanPatokBatasTanah" aria-selected="false">
                                        <div class="text-center py-1">
                                            <h6 class="mb-0">Berdasarkan Keberadaan Patok Batas Tanah</h6>
                                        </div>
                                    </a><!--end nav link-->
                                </li><!--end nav item-->
                            </ul><!--end nav pills-->
                        </div><!--end col-->

                        <div class="col-md-8 col-12 mt-4 pt-2">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active p-4 rounded shadow" id="luasKecamatan"
                                    role="tabpanel" aria-labelledby="luasKecamatan">
                                    <div id="a"></div>
                                    <div id="chartLuasKecamatan" style="height: 800px;"></div>
                                </div>
                                <div class="tab-pane fade p-4 rounded shadow" id="luasKelurahan" role="tabpanel"
                                    aria-labelledby="luasKelurahan">
                                    <div id="chartLuasKelurahan" style="height: 800px;"></div>
                                </div><!--end teb pane-->
                                <div class="tab-pane fade p-4 rounded shadow" id="prosentaseLahanTerbangun"
                                    role="tabpanel" aria-labelledby="prosentaseLahanTerbangun">
                                    <div id="chartProsentaseLahanTerbangun" style="height: 800px;"></div>
                                </div><!--end teb pane-->
                                <div class="tab-pane fade p-4 rounded shadow" id="prosentaseLegalitasAset"
                                    role="tabpanel" aria-labelledby="prosentaseLegalitasAset">
                                    <div id="chartProsentaseLegalitasAset" style="height: 800px;"></div>
                                </div><!--end teb pane-->
                                <div class="tab-pane fade p-4 rounded shadow" id="prosentasePemegangHak" role="tabpanel"
                                    aria-labelledby="prosentasePemegangHak">
                                    <div id="chartProsentasePemegangHak" style="height: 800px;"></div>
                                </div><!--end teb pane-->
                                <div class="tab-pane fade p-4 rounded shadow" id="berdasarkanPolaRuang" role="tabpanel"
                                    aria-labelledby="berdasarkanPolaRuang">
                                    <div id="chartBerdasarkanPolaRuang" style="height: 800px;"></div>
                                </div><!--end teb pane-->
                                <div class="tab-pane fade p-4 rounded shadow" id="berdasarkanKeberadaanPapanNamaPemkot"
                                    role="tabpanel" aria-labelledby="berdasarkanKeberadaanPapanNamaPemkot">
                                    <div id="chartBerdasarkanKeberadaanPapanNamaPemkot" style="height: 800px;"></div>
                                </div><!--end teb pane-->
                                <div class="tab-pane fade p-4 rounded shadow" id="berdasarkanKeberadaanPatokBatasTanah"
                                    role="tabpanel" aria-labelledby="berdasarkanKeberadaanPatokBatasTanah">
                                    <div id="chartBerdasarkanKeberadaanPatokBatasTanah" style="height: 800px;"></div>
                                </div><!--end teb pane-->
                            </div><!--end tab content-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div>
            </div>
            <!-- data table ends -->
        </div><!--end container-->
    </section>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        window.csrfToken = "{{ csrf_token() }}";
        const token = localStorage.getItem('apiToken');
        $.ajax({
            url: "{{ route('tanah-lahan.luas-tanah-kecamatan') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': window.csrfToken,
                'Authorization': `Bearer ${token}`
            },
            success: function(data) {
                chartLuasKecamatan(data);
            },
            error: function(error) {
                console.error('Error fetching chart data:', error);
            }
        });

        function chartLuasKecamatan(data) {
            Highcharts.chart('chartLuasKecamatan', {
                chart: {
                    type: "column",
                    credits: {
                        enabled: false
                    },
                },
                title: {
                    text: 'Data Luas Tanah'
                },
                xAxis: {
                    categories: data.map(item => item.kecamatan),
                    labels: {
                        rotation: -90,
                        align: 'right'
                    },
                    title: {
                        text: 'Kecamatan',
                    },
                    tickInterval: 1,
                    margin: 0,
                },
                yAxis: {
                    title: {
                        text: 'Luas Permeter'
                    }
                },
                legend: {
                    enabled: false,
                },
                series: [{
                    name: "Luas Tanah",
                    data: data.map(item => ({
                        y: item.luas,
                        color: {
                            linearGradient: {
                                x1: 0,
                                x2: 0,
                                y1: 0,
                                y2: 1
                            },
                            stops: [
                                [0, 'rgba(0, 0, 255, 1)'], // Start color (blue)
                                [1, 'rgba(138, 43, 226, 1)'] // End color (purple)
                            ]
                        }
                    }))
                }],
            });
        }

        $.ajax({
            url: "{{ route('tanah-lahan.luas-tanah-kelurahan') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': window.csrfToken,
                'Authorization': `Bearer ${token}`
            },
            success: function(data) {
                chartLuasKelurahan(data);
            },
            error: function(error) {
                console.error('Error fetching chart data:', error);
            }
        });

        function chartLuasKelurahan(data) {
            Highcharts.chart('chartLuasKelurahan', {
                chart: {
                    type: "column",
                },
                title: {
                    text: 'Data Luas Tanah'
                },
                xAxis: {
                    categories: data.map(item => item.kelurahan), // Menggunakan label kelurahan
                    labels: {
                        rotation: -90,
                        align: 'right'
                    },
                    pointPadding: 0.1, // Adjust this value to set the padding between points
                    groupPadding: 0.2,
                },
                yAxis: {
                    title: {
                        text: 'Luas Permeter'
                    }
                },
                legend: {
                    enabled: false // Set to false to hide the legend button
                },

                series: [{
                    name: "Luas Tanah",
                    data: data.map(item => ({
                        y: item.luas,
                    }))
                }]
            });
        }

        $.ajax({
            url: "{{ route('tanah-lahan.lahan-terbangun') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': window.csrfToken,
                'Authorization': `Bearer ${token}`
            },
            success: function(data) {
                chartProsentaseLahanTerbangun(data);
            },
            error: function(error) {
                console.error('Error fetching chart data:', error);
            }
        });

        function chartProsentaseLahanTerbangun(data) {
            Highcharts.chart('chartProsentaseLahanTerbangun', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie',
                },
                title: {
                    text: 'Presentase Lahan Terbangun'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }
                    }
                },
                series: [{
                    name: 'Presentase',
                    colorByPoint: true,
                    data: [{
                        name: 'Terbangun',
                        y: data['Terbangun']
                    }, {
                        name: 'Non Terbangun',
                        y: data['Non Terbangun']
                    }, {
                        name: 'Terbangun Sebagian',
                        y: data['Terbangun Sebagian']
                    }]
                }]
            });
        }

        $.ajax({
            url: "{{ route('tanah-lahan.legalitas') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': window.csrfToken,
                'Authorization': `Bearer ${token}`
            },
            success: function(data) {
                chartProsentaseLegalitasAset(data);
            },
            error: function(error) {
                console.error('Error fetching chart data:', error);
            }
        });

        function chartProsentaseLegalitasAset(data) {
            Highcharts.chart('chartProsentaseLegalitasAset', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie',
                },
                title: {
                    text: 'Presentase Legalitas Aset'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }
                    }
                },
                series: [{
                    name: 'Presentase',
                    colorByPoint: true,
                    data: [{
                        name: 'Sudah Bersertifikat',
                        y: data['Sudah Bersertifikat']
                    }, {
                        name: 'Belum Bersertifikat',
                        y: data['Belum Bersertifikat']
                    }, {
                        name: 'Sudah Bersertifikat (Hilang)',
                        y: data['Sudah Bersertifikat (Hilang)']
                    }, {
                        name: 'Tanah SK',
                        y: data['Tanah SK']
                    }]
                }]
            });
        }

        $.ajax({
            url: "{{ route('tanah-lahan.pemegang-hak') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': window.csrfToken,
                'Authorization': `Bearer ${token}`
            },
            success: function(data) {
                chartProsentasePemegangHak(data);
            },
            error: function(error) {
                console.error('Error fetching chart data:', error);
            }
        });

        function chartProsentasePemegangHak(data) {
            Highcharts.chart('chartProsentasePemegangHak', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: true,
                    type: 'pie',
                },
                title: {
                    text: 'Presentase Pemegang Hak'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }
                    }
                },
                series: [{
                    name: 'Presentase',
                    colorByPoint: true,
                    data: [{
                            name: 'Departemen P & K Cq. KANWIL DEPDIKBUD Prop Jateng',
                            y: data['Departemen P & K Cq. KANWIL DEPDIKBUD Prop Jateng']
                        },
                        {
                            name: 'Departemen P & K Prop Jateng',
                            y: data['Departemen P & K Prop Jateng']
                        },
                        {
                            name: 'Departemen Pendidikan dan Kebudayaan Cq. SMP N 2 Tegal',
                            y: data['Departemen Pendidikan dan Kebudayaan Cq. SMP N 2 Tegal']
                        },
                        {
                            name: 'Departemen Pendidikan dan Kebudayaan Prop Jawa Tengah Cq. SMP N 13 Tegal',
                            y: data[
                                'Departemen Pendidikan dan Kebudayaan Prop Jawa Tengah Cq. SMP N 13 Tegal'
                            ]
                        },
                        {
                            name: 'Departemen Pendidikan dan Kebudayaan RI',
                            y: data['Departemen Pendidikan dan Kebudayaan RI']
                        },
                        {
                            name: 'Desa Kraton',
                            y: data['Desa Kraton']
                        },
                        {
                            name: 'KANWIL Departemen Koperasi Provinsi Jawa Tengah',
                            y: data['KANWIL Departemen Koperasi Provinsi Jawa Tengah']
                        },
                        {
                            name: 'KANWIL Departemen Pendidikan dan Kebudayaan Propinsi Jawa Tengah',
                            y: data['KANWIL Departemen Pendidikan dan Kebudayaan Propinsi Jawa Tengah']
                        },
                        {
                            name: 'KANWIL Departemen Penerangan Propinsi Jawa Tengah',
                            y: data['KANWIL Departemen Penerangan Propinsi Jawa Tengah']
                        },
                        {
                            name: 'Kelurahan Kejambon',
                            y: data['Kelurahan Kejambon']
                        },
                        {
                            name: 'Pemerintah Kota Tegal',
                            y: data['Pemerintah Kota Tegal']
                        },
                    ]
                }]
            });
        }

        $.ajax({
            url: "{{ route('tanah-lahan.pola-ruang') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': window.csrfToken,
                'Authorization': `Bearer ${token}`
            },
            success: function(data) {
                chartBerdasarkanPolaRuang(data);
            },
            error: function(error) {
                console.error('Error fetching chart data:', error);
            }
        });

        function chartBerdasarkanPolaRuang(data) {
            Highcharts.chart('chartBerdasarkanPolaRuang', {
                chart: {
                    type: "column",
                },
                title: {
                    text: 'Data Pola Ruang'
                },
                xAxis: {
                    categories: data.map(item => item.rencana_pola),
                    labels: {
                        rotation: -90,
                        align: 'right'
                    },
                    pointPadding: 0.1,
                    groupPadding: 0.2,
                },
                yAxis: {
                    title: {
                        text: 'Luas Permeter'
                    }
                },
                legend: {
                    enabled: false // Set to false to hide the legend button
                },
                series: [{
                    name: "Luas Tanah",
                    data: data.map(item => ({
                        y: item.jumlah,
                    }))
                }]
            });
        }

        $.ajax({
            url: "{{ route('tanah-lahan.papan-nama') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': window.csrfToken,
                'Authorization': `Bearer ${token}`
            },
            success: function(data) {
                console.log(data);
                chartBerdasarkanKeberadaanPapanNamaPemkot(data);
            },
            error: function(error) {
                console.error('Error fetching chart data:', error);
            }
        });

        function chartBerdasarkanKeberadaanPapanNamaPemkot(data) {
            Highcharts.chart('chartBerdasarkanKeberadaanPapanNamaPemkot', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie',
                },
                title: {
                    text: 'Keberadaan Papan Nama Pemkot'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }
                    }
                },
                series: [{
                    name: 'Presentase',
                    colorByPoint: true,
                    data: [{
                        name: 'Baik',
                        y: data['Baik']
                    }, {
                        name: 'Rusak',
                        y: data['Rusak']
                    }, {
                        name: 'Sedang',
                        y: data['Sedang']
                    }, {
                        name: 'Tidak Ada',
                        y: data['Tidak Ada']
                    }]
                }]
            });
        }

        $.ajax({
            url: "{{ route('tanah-lahan.papan-nama') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': window.csrfToken,
                'Authorization': `Bearer ${token}`
            },
            success: function(data) {
                console.log(data);
                chartBerdasarkanKeberadaanPatokBatasTanah(data);
            },
            error: function(error) {
                console.error('Error fetching chart data:', error);
            }
        });

        function chartBerdasarkanKeberadaanPatokBatasTanah(data) {
            Highcharts.chart('chartBerdasarkanKeberadaanPatokBatasTanah', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie',
                },
                title: {
                    text: 'Keberadaan Patok Batas Tanah'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }
                    }
                },
                series: [{
                    name: 'Presentase',
                    colorByPoint: true,
                    data: [{
                        name: 'Baik',
                        y: data['Baik']
                    }, {
                        name: 'Rusak',
                        y: data['Rusak']
                    }, {
                        name: 'Sedang',
                        y: data['Sedang']
                    }, {
                        name: 'Tidak Ada',
                        y: data['Tidak Ada']
                    }]
                }]
            });
        }
    </script>


    <!-- data filter ends -->
    @include('layouts.footer')
@endsection
