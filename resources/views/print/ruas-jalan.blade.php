<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Ruas Jalan | Sistem Informasi Pertanahan Kota Tegal </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistem Infromasi Pertanahan | Kota Tegal">
    <meta name="keywords" content="pertanahan, kota tegal">
    <meta name="author" content="">
    <meta name="email" content="">
    <meta name="website" content="">
    <meta name="base_url" content="https://ministry.phicos.co.id/tegal-sip/">
    <meta name="role_name" content="admin">

    <meta name="token_name" content="tegal-sip-token">
    <meta name="token_hash" content="6e91a3207092ad996c75df60f59d4a5f">

    <!-- favicon -->
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
        <div class="container">
            <div class="row pb-5">
                <div class="col-6">
                    <table class="w-100 detail">
                        <tbody>
                            <tr>
                                <td class="form-label fs-6" width="30%">Kecamatan</td>
                                <td width="2%">:</td>
                                <td>{{ $ruasJalan->kecamatan }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Kelurahan</td>
                                <td>:</td>
                                <td>{{ $ruasJalan->kel }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Nama</td>
                                <td>:</td>
                                <td>{{ $ruasJalan->nama_ruas }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Luas Sertifikat</td>
                                <td>:</td>
                                <td>{{ $ruasJalan->luas_sertifikat }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Status</td>
                                <td>:</td>
                                <td>{{ $ruasJalan->status }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Fungsi</td>
                                <td>:</td>
                                <td>{{ $ruasJalan->fungsi }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Hak</td>
                                <td>:</td>
                                <td>{{ $ruasJalan->tipe_hak }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">HP</td>
                                <td>:</td>
                                <td>{{ $ruasJalan->hp }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <input type="hidden" id="saved_coordinates"
                    value="[[[[109.13595071326334,-6.886954109145266,0],[109.13588275179892,-6.886962895353473,0],[109.1359306552476,-6.8854721709828,0],[109.13597509292026,-6.884089267044246,0],[109.13604875330077,-6.881796836894378,0],[109.1360910045527,-6.880481850661462,0],[109.13610071967592,-6.88017949581276,0],[109.13613943603121,-6.880138544765853,0],[109.136230186294,-6.880042555706031,0],[109.13624493282485,-6.880026957185907,0],[109.13619514624419,-6.881603313530643,0],[109.13619416880144,-6.88163425276925,0],[109.13617007534354,-6.882397080743448,0],[109.13616833916981,-6.882452051589416,0],[109.13608530216624,-6.885081009618236,0],[109.13608527742228,-6.885081786171863,0],[109.13607684695042,-6.885348675910842,0],[109.13607178057403,-6.885509069206257,0],[109.13602644454701,-6.886944317996872,0],[109.13601954005419,-6.886945210572445,0],[109.13595071326334,-6.886954109145266,0]]]]">
                <input type="hidden" id="type" value="MultiPolygon">
                <div class="col-6 border d-flex justify-content-center align-items-center">
                    <div id="map"
                        class="mb-4 border border-dark leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom"
                        style="height: 650px; width: 100%; position: relative;" tabindex="0">

                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <h4><strong>Foto Lokasi</strong></h4>
                </div>
                <div class="col-4 mb-4">
                    <div class="card border border-dark rounded">
                        <div class="card-body">
                            <img src="https://images.unsplash.com/photo-1700359387203-d24d08d07b04?w=900&amp;auto=format&amp;fit=crop&amp;q=60&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fHx8"
                                width="100%">
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-4">
                    <div class="card border border-dark rounded">
                        <div class="card-body">
                            <img src="https://images.unsplash.com/photo-1700359387203-d24d08d07b04?w=900&amp;auto=format&amp;fit=crop&amp;q=60&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fHx8"
                                width="100%">
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-4">
                    <div class="card border border-dark rounded">
                        <div class="card-body">
                            <img src="https://images.unsplash.com/photo-1700359387203-d24d08d07b04?w=900&amp;auto=format&amp;fit=crop&amp;q=60&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fHx8"
                                width="100%">
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-4">
                    <div class="card border border-dark rounded">
                        <div class="card-body">
                            <img src="https://images.unsplash.com/photo-1700359387203-d24d08d07b04?w=900&amp;auto=format&amp;fit=crop&amp;q=60&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fHx8"
                                width="100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

        @if (isset($ruasJalan->type))
            const geojsonFeature = {
                "type": "Feature",
                "geometry": {
                    "type": "{{ $ruasJalan->type }}",
                    "coordinates": {!! $ruasJalan->koordinat !!},
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

            const coordinates = {!! $ruasJalan->koordinat !!};
            const bounds = L.geoJSON(geojsonFeature).getBounds();
            const center = bounds.getCenter();

            map.setView(center, 18);
        @endif
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        const swipe = new Swiper('.swiper', {
            // Optional parameters


            slidesPerView: 3,
            spaceBetween: 24,

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

        });
    </script>
    <!-- JAVASCRIPT -->
    <script src="https://ministry.phicos.co.id/tegal-sip/assets/front/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- SLIDER -->
    <script src="https://ministry.phicos.co.id/tegal-sip/assets/front/libs/tiny-slider/min/tiny-slider.js"></script>
    <!-- Lightbox -->
    <script src="https://ministry.phicos.co.id/tegal-sip/assets/front/libs/tobii/js/tobii.min.js"></script>
    <!-- Main Js -->
    <script src="https://ministry.phicos.co.id/tegal-sip/assets/front/libs/feather-icons/feather.min.js"></script>
    <script src="https://ministry.phicos.co.id/tegal-sip/assets/front/js/plugins.init.js"></script>
    <div role="dialog" aria-hidden="true" class="tobii"><button class="tobii__prev" type="button"
            aria-label="Previous image"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                <path d="M14 18l-6-6 6-6"></path>
            </svg></button><button class="tobii__next" type="button" aria-label="Next image"><svg
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                aria-hidden="true" focusable="false">
                <path d="M10 6l6 6-6 6"></path>
            </svg></button><button class="tobii__close" type="button" aria-label="Close lightbox"><svg
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                aria-hidden="true" focusable="false">
                <path d="M6 6l12 12M6 18L18 6"></path>
            </svg></button>
        <div class="tobii__counter"></div>
    </div>
    <style type="text/css">
        .typewrite>.wrap {
            border-right: 0.08em solid transparent
        }
    </style>
    <!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
    <script src="https://ministry.phicos.co.id/tegal-sip/assets/front/js/app.js"></script>
    <!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->

    <!-- table js -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-draw"></script>



</body>

</html>
