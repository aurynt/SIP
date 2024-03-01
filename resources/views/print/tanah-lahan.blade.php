<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="shortcut icon" href="https://ministry.phicos.co.id/tegal-sip/assets/front/images/logo_kota_tegal.png">

    <!-- Css -->
    <link href="https://ministry.phicos.co.id/tegal-sip/assets/front/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
    <link href="https://ministry.phicos.co.id/tegal-sip/assets/front/libs/tobii/css/tobii.min.css" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="https://ministry.phicos.co.id/tegal-sip/assets/front/css/bootstrap.min.css" id="bootstrap-style"
        class="theme-opt" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="https://ministry.phicos.co.id/tegal-sip/assets/front/css/icons.min.css" rel="stylesheet"
        type="text/css">
    <link href="https://ministry.phicos.co.id/tegal-sip/assets/front/libs/%40iconscout/unicons/css/line.css"
        type="text/css" rel="stylesheet">
    <!-- Style Css-->
    <link href="https://ministry.phicos.co.id/tegal-sip/assets/front/css/style.min.css" id="color-opt" class="theme-opt"
        rel="stylesheet" type="text/css">
    <link href="https://ministry.phicos.co.id/tegal-sip/assets/front/css/custom.css" id="color-opt" class="theme-opt"
        rel="stylesheet" type="text/css">
    <!-- Style Table -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet-draw/dist/leaflet.draw.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>
    <style>
        .swiper-slide {
            overflow: hidden;
            border-radius: 8px;
            height: 300px;
        }

        @media print {
            .hidden-on-print {
                display: none;
            }

            @page {
                size: A3;
                /* You can use other paper sizes like 'letter', 'legal', etc. */
                margin: 0;
                /* Adjust margins if needed */
            }
        }

        .detail td {
            vertical-align: top;
        }
    </style>
</head>

<body>
    <section class="section">
        <button class="btn btn-primary hidden-on-print" onclick="window.print()">Cetak</button>
        <div class="">
            <div class="row pb-5">
                <div class="col-6">
                    <table class="w-100 detail">
                        <tbody>
                            <tr>
                                <td class="form-label fs-6" width="30%">Kecamatan</td>
                                <td width="2%">:</td>
                                <td>{{ $tanah->kecamatan }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Kelurahan</td>
                                <td>:</td>
                                <td>{{ $tanah->kelurahan }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Nomor Sertipikat</td>
                                <td>:</td>
                                <td>{{ $tanah->nomor }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Nomor Register</td>
                                <td>:</td>
                                <td>{{ $tanah->noreg }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Status</td>
                                <td>:</td>
                                <td>{{ $tanah->status }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Kode</td>
                                <td>:</td>
                                <td>{{ $tanah->kode }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Tahun Terbit Sertipikat</td>
                                <td>:</td>
                                <td>{{ $tanah->tahun_sertifikat }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Luas Sertifikat</td>
                                <td>:</td>
                                <td>{{ $tanah->luas }} m<sup>2</sup></td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Pemegang Hak</td>
                                <td>:</td>
                                <td>{{ $tanah->pemegang_hak }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Pengguna Barang</td>
                                <td>:</td>
                                <td>{{ $tanah->pengguna_barang }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Penggunaan Lahan</td>
                                <td>:</td>
                                <td>{{ $tanah->penggunaan }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Alamat</td>
                                <td>:</td>
                                <td>{{ $tanah->alamat }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Rencana Pola Ruang (RDTR)</td>
                                <td>:</td>
                                <td>{{ $tanah->rencana_pola }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Lahan Terbangun</td>
                                <td>:</td>
                                <td>{{ $tanah->lahan_terbangun }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Kondisi Papan Nama Pemkot</td>
                                <td>:</td>
                                <td>{{ $tanah->papan_nama }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Batas Tanah</td>
                                <td>:</td>
                                <td>{{ $tanah->patok }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Zona Nilai Tanah</td>
                                <td>:</td>
                                <td>{{ $tanah->zona_nilai }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-danger mt-3" disabled="">Tidak Ada Sertifikat</button>
                </div>
                <input type="hidden" id="saved_coordinates">
                <input type="hidden" id="type" value="MultiPolygon">
                <div class="col-6 border d-flex justify-content-center align-items-center mb-4 border-dark leaflet-container leaflet-touch leaflet-retina leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom"
                    id="map" tabindex="0">
                </div>
            </div>

            <!-- foto -->
            <div class="row mt-4">
                <div class="col-12">
                    <h4><strong>Foto Lokasi</strong></h4>
                </div>
                <div class="col-4 mb-4">
                    <div class="card border border-dark rounded">
                        <div class="card-body p-0">
                            <img src="" alt="gambar" width="100%">
                        </div>
                    </div>
                </div>
            </div>

            <!-- batas -->
            <div class="row mt-4">
                <div class="col-12">
                    <h4><strong>Foto Batas</strong></h4>
                </div>
                <div class="col-12 text-center">
                    <h4 class="text-secondary">Tidak Ada Foto</h4>
                </div>
            </div>

            <!-- papan -->
            <div class="row mt-4">
                <div class="col-12">
                    <h4><strong>Foto Papan</strong></h4>
                </div>
                <div class="col-12 text-center">
                    <h4 class="text-secondary">Tidak Ada Foto</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- data filter ends -->

    <script>
        const osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 23,
            attribution: '© OpenStreetMap'
        });

        const satelite = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
            maxZoom: 23,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        });

        const googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
            maxZoom: 23,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        });

        const googleHybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
            maxZoom: 23,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        });

        const googleTerrain = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
            maxZoom: 23,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        });

        var map = L.map('map', {
            layers: [googleHybrid]
        });

        @if (isset($tanah->type))
            const geojsonFeature = {
                "type": "Feature",
                "geometry": {
                    "type": "{{ $tanah->type }}",
                    "coordinates": {!! $tanah->koordinat !!},
                },
            };

            L.geoJSON(geojsonFeature, {
                style: (feature) => ({
                    fillColor: 'teal',
                    fillOpacity: 0.5,
                    color: 'blue',
                    weight: 2
                })
            }).addTo(map);

            const coordinates = {!! $tanah->koordinat !!};
            const bounds = L.geoJSON(geojsonFeature).getBounds();
            const center = bounds.getCenter();

            map.setView(center, 18);
        @endif
    </script>
    <script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- SLIDER -->
    <script src="/assets/libs/tiny-slider/min/tiny-slider.js"></script>
    <!-- Lightbox -->
    <script src="/assets/libs/tobii/js/tobii.min.js"></script>
    <!-- Main Js -->
    <script src="/assets/libs/feather-icons/feather.min.js"></script>
    <script src="/assets/js/plugins.init.js"></script>
    <!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
    <script src="/assets/js/app.js"></script>
</body>

</html>
