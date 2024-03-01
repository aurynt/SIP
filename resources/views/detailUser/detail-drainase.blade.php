@extends('layouts.main')
@section('page')
    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100"
        style="background: url('/assets/images/bg-alun-tegal.jpeg') center center; background-repeat: no-repeat; background-size: cover;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="pages-heading title-heading">
                        <h2 class="text-white title-dark"> Detail Drainase</h2>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="position-breadcrumb">
                <nav aria-label="breadcrumb" class="d-inline-block">
                    <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Drainase</li>
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
            <div class="row pb-5">
                <div class="col-6">
                    <table class="w-100 detail">
                        <tbody>
                            <tr>
                                <td class="form-label fs-6" width="30%">Kecamatan</td>
                                <td width="2%">:</td>
                                <td>{{ $drainase->kecamatan }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Kelurahan</td>
                                <td>:</td>
                                <td>{{ $drainase->kel }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Nama Saluran</td>
                                <td>:</td>
                                <td>{{ $drainase->nama_ruas }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Nomor Sertipikat</td>
                                <td>:</td>
                                <td>{{ $drainase->tipe_hak }} {{ $drainase->hp }}</td>
                            </tr>
                            <tr>
                                <td class="form-label fs-6">Luas Sertifikat</td>
                                <td>:</td>
                                <td>{{ $drainase->luas_sertifikat }} m<sup>2</sup></td>
                            </tr>

                        </tbody>
                    </table>
                    <button class="btn btn-danger mt-3" disabled="">Tidak Ada Sertifikat</button>
                </div>
                <input type="hidden" id="saved_coordinates">
                <input type="hidden" id="type">
                <div class="col-6 border d-flex justify-content-center align-items-center">
                    <div id="map"
                        class="mb-4 border border-dark leaflet-container leaflet-touch leaflet-retina leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom"
                        style="height: 650px; width: 100%; position: relative;" tabindex="0">
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

        @if (isset($drainase->type))
            const geojsonFeature = {
                "type": "Feature",
                "geometry": {
                    "type": "{{ $drainase->type }}",
                    "coordinates": {!! $drainase->koordinat !!},
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

            const coordinates = {!! $drainase->koordinat !!};
            const bounds = L.geoJSON(geojsonFeature).getBounds();
            const center = bounds.getCenter();

            map.setView(center, 18);
        @endif
    </script>
    <!-- data filter ends -->

    @include('layouts.footer')
@endsection
