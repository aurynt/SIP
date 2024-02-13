@extends('admin.layouts.main')
@section('page')
    <div class="row">
        <div class="col-lg-12">
            <div class="card h-100 p-4">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <div class="text-sm-left">
                                <a href="{{ route('page.drainase') }}"
                                    class="btn btn-outline-secondary w-md"><i class="mdi mdi-arrow-left ml-1"></i> Kembali</a>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <form id="form-input" method="POST"
                                action=""
                                onsubmit="return false;">
                                <input type="hidden" name="id"
                                    value="QlVkWXdtZ0RHMDhZWE1zcmo3VUw1RzlFS0ZlUWo3U0pRUlZJRU1KRDNXQT0=">

                                <div class="form-group">
                                    <label for="kode_kec">Kecamatan *</label>
                                    <select id="kode_kec" name="kode_kec" class="form-control" required="">
                                        <option value="" selected="" disabled="">Pilih Kecamatan</option>
                                        <option value="337601" selected="">Tegal Barat</option>
                                        <option value="337602">Tegal Timur</option>
                                        <option value="337603">Tegal Selatan</option>
                                        <option value="337604">Margadana</option>
                                    </select>
                                    <input type="hidden" name="kecamatan" id="kecamatan" value="Tegal Barat">
                                </div>

                                <div class="form-group">
                                    <label for="kode_kel">Kelurahan *</label>
                                    <select id="kode_kel" name="kode_kel" class="form-control" required="">
                                        <option value="3376011001">Pesurungan Kidul</option>
                                        <option value="3376011002">Debong Lor</option>
                                        <option value="3376011003">Kemandungan</option>
                                        <option value="3376011004">Pekauman</option>
                                        <option value="3376011005">Kraton</option>
                                        <option value="3376011006">Tegalsari</option>
                                        <option value="3376011007">Muarareja</option>
                                    </select>
                                    <input type="hidden" name="kel" id="kel" value="Tegalsari">
                                </div>

                                <div class="form-group">
                                    <label for="nama_ruas">Nama Ruas Jalan *</label>
                                    <input type="text" id="nama_ruas" name="nama_ruas" class="form-control"
                                        value="Saluran Jalan Gurame" required="">
                                </div>

                                <div class="form-group">
                                    <label for="luas_sertifikat">Luas Sertifikat (meter persegi) *</label>
                                    <input type="text" id="luas_sertifikat" name="luas_sertifikat"
                                        class="form-control decimal" value="109" required="">
                                </div>

                                <div class="form-group">
                                    <label for="tipe_hak">Tipe Hak *</label>
                                    <input type="text" id="tipe_hak" name="tipe_hak" class="form-control"
                                        value="Hak Pakai" required="">
                                </div>

                                <div class="form-group">
                                    <label for="hp">HP *</label>
                                    <input type="text" id="hp" name="hp" class="form-control" value="00270"
                                        required="">
                                </div>

                                {{-- <!-- map -->
                                <div class="form-group">
                                    <label for="">Silakan menggambar pada peta untuk mendapatkan koordinat</label>
                                    <div style="width: 100%; height: 500px; position: relative;" id="draw-map"
                                        class="leaflet-container leaflet-touch leaflet-retina leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom"
                                        tabindex="0">
                                        <div class="leaflet-pane leaflet-map-pane"
                                            style="transform: translate3d(-212px, 0px, 0px);">
                                            <div class="leaflet-pane leaflet-tile-pane">
                                                <div class="leaflet-layer " style="z-index: 1; opacity: 1;">
                                                    <div class="leaflet-tile-container leaflet-zoom-animated"
                                                        style="z-index: 19; transform: translate3d(0px, 0px, 0px) scale(1);">
                                                        <img alt=""
                                                            src="https://c.tile.openstreetmap.org/19/421086/272156.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(391px, 137px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://b.tile.openstreetmap.org/19/421086/272155.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(391px, -119px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://b.tile.openstreetmap.org/19/421085/272156.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(135px, 137px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://a.tile.openstreetmap.org/19/421087/272156.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(647px, 137px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://a.tile.openstreetmap.org/19/421086/272157.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(391px, 393px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://a.tile.openstreetmap.org/19/421085/272155.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(135px, -119px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://c.tile.openstreetmap.org/19/421087/272155.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(647px, -119px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://c.tile.openstreetmap.org/19/421085/272157.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(135px, 393px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://b.tile.openstreetmap.org/19/421087/272157.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(647px, 393px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://a.tile.openstreetmap.org/19/421084/272156.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(-121px, 137px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://b.tile.openstreetmap.org/19/421088/272156.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(903px, 137px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://c.tile.openstreetmap.org/19/421084/272155.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(-121px, -119px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://a.tile.openstreetmap.org/19/421088/272155.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(903px, -119px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://b.tile.openstreetmap.org/19/421084/272157.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(-121px, 393px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://c.tile.openstreetmap.org/19/421088/272157.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(903px, 393px, 0px); opacity: 1;">
                                                    </div>
                                                </div>
                                                <div class="leaflet-layer " style="z-index: 1; opacity: 1;">
                                                    <div class="leaflet-tile-container leaflet-zoom-animated"
                                                        style="z-index: 19; transform: translate3d(0px, 0px, 0px) scale(1);">
                                                        <img alt=""
                                                            src="https://c.tile.openstreetmap.org/19/421086/272156.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(391px, 137px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://b.tile.openstreetmap.org/19/421086/272155.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(391px, -119px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://b.tile.openstreetmap.org/19/421085/272156.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(135px, 137px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://a.tile.openstreetmap.org/19/421087/272156.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(647px, 137px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://a.tile.openstreetmap.org/19/421086/272157.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(391px, 393px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://a.tile.openstreetmap.org/19/421085/272155.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(135px, -119px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://c.tile.openstreetmap.org/19/421087/272155.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(647px, -119px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://c.tile.openstreetmap.org/19/421085/272157.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(135px, 393px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://b.tile.openstreetmap.org/19/421087/272157.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(647px, 393px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://a.tile.openstreetmap.org/19/421084/272156.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(-121px, 137px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://b.tile.openstreetmap.org/19/421088/272156.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(903px, 137px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://c.tile.openstreetmap.org/19/421084/272155.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(-121px, -119px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://a.tile.openstreetmap.org/19/421088/272155.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(903px, -119px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://b.tile.openstreetmap.org/19/421084/272157.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(-121px, 393px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://c.tile.openstreetmap.org/19/421088/272157.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(903px, 393px, 0px); opacity: 1;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="leaflet-pane leaflet-overlay-pane"><svg pointer-events="none"
                                                    class="leaflet-zoom-animated" width="595" height="600"
                                                    viewBox="162 -50 595 600"
                                                    style="transform: translate3d(162px, -50px, 0px);">
                                                    <g>
                                                        <path class="leaflet-interactive" stroke="#3388ff"
                                                            stroke-opacity="1" stroke-width="3" stroke-linecap="round"
                                                            stroke-linejoin="round" fill="#3388ff" fill-opacity="0.2"
                                                            fill-rule="evenodd"
                                                            d="M198 208L309 234L444 253L606 279L721 289L721 292L606 281L476 260L309 236L197 210z">
                                                        </path>
                                                    </g>
                                                </svg></div>
                                            <div class="leaflet-pane leaflet-shadow-pane"></div>
                                            <div class="leaflet-pane leaflet-marker-pane"></div>
                                            <div class="leaflet-pane leaflet-tooltip-pane"></div>
                                            <div class="leaflet-pane leaflet-popup-pane"></div>
                                            <div class="leaflet-proxy leaflet-zoom-animated"
                                                style="transform: translate3d(1.07798e+08px, 6.9672e+07px, 0px) scale(262144);">
                                            </div>
                                        </div>
                                        <div class="leaflet-control-container">
                                            <div class="leaflet-top leaflet-left">
                                                <div class="leaflet-draw leaflet-control">
                                                    <div class="leaflet-draw-section">
                                                        <div
                                                            class="leaflet-draw-toolbar leaflet-bar leaflet-draw-toolbar-top">
                                                            <a class="leaflet-draw-draw-polyline" href="#"
                                                                title="Draw a polyline"><span class="sr-only">Draw a
                                                                    polyline</span></a><a class="leaflet-draw-draw-polygon"
                                                                href="#" title="Draw a polygon"><span
                                                                    class="sr-only">Draw a polygon</span></a><a
                                                                class="leaflet-draw-draw-rectangle" href="#"
                                                                title="Draw a rectangle"><span class="sr-only">Draw a
                                                                    rectangle</span></a><a class="leaflet-draw-draw-circle"
                                                                href="#" title="Draw a circle"><span
                                                                    class="sr-only">Draw a circle</span></a><a
                                                                class="leaflet-draw-draw-marker" href="#"
                                                                title="Draw a marker"><span class="sr-only">Draw a
                                                                    marker</span></a><a
                                                                class="leaflet-draw-draw-circlemarker" href="#"
                                                                title="Draw a circlemarker"><span class="sr-only">Draw a
                                                                    circlemarker</span></a></div>
                                                        <ul class="leaflet-draw-actions"></ul>
                                                    </div>
                                                </div>
                                                <div class="leaflet-control-zoom leaflet-bar leaflet-control"><a
                                                        class="leaflet-control-zoom-in leaflet-disabled" href="#"
                                                        title="Zoom in" role="button" aria-label="Zoom in"
                                                        aria-disabled="true"><span aria-hidden="true">+</span></a><a
                                                        class="leaflet-control-zoom-out" href="#" title="Zoom out"
                                                        role="button" aria-label="Zoom out" aria-disabled="false"><span
                                                            aria-hidden="true">−</span></a><a
                                                        class="leaflet-control-zoom-fullscreen fullscreen-icon"
                                                        href="#" title="Full Screen"></a></div>
                                                <div class="leaflet-control-locate leaflet-bar leaflet-control"><a
                                                        class="leaflet-bar-part leaflet-bar-part-single" href="#"
                                                        title="Lokasi Anda"><span class="fa fa-map-marker"></span></a>
                                                </div>
                                                <div class="leaflet-draw leaflet-control">
                                                    <div class="leaflet-draw-section">
                                                        <div
                                                            class="leaflet-draw-toolbar leaflet-bar leaflet-draw-toolbar-top">
                                                            <a class="leaflet-draw-draw-polygon" href="#"
                                                                title="Draw a polygon"><span class="sr-only">Draw a
                                                                    polygon</span></a></div>
                                                        <ul class="leaflet-draw-actions"></ul>
                                                    </div>
                                                    <div class="leaflet-draw-section">
                                                        <div class="leaflet-draw-toolbar leaflet-bar"><a
                                                                class="leaflet-draw-edit-remove leaflet-disabled"
                                                                href="#" title="No layers to delete"><span
                                                                    class="sr-only">Delete layers</span></a></div>
                                                        <ul class="leaflet-draw-actions"></ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="leaflet-top leaflet-right">
                                                <div class="leaflet-control-layers leaflet-control" aria-haspopup="true">
                                                    <a class="leaflet-control-layers-toggle" href="#"
                                                        title="Layers" role="button"></a>
                                                    <section class="leaflet-control-layers-list">
                                                        <div class="leaflet-control-layers-base"><label><span><input
                                                                        type="radio"
                                                                        class="leaflet-control-layers-selector"
                                                                        name="leaflet-base-layers_105"
                                                                        checked="checked"><span>
                                                                        osm</span></span></label><label><span><input
                                                                        type="radio"
                                                                        class="leaflet-control-layers-selector"
                                                                        name="leaflet-base-layers_105"><span>
                                                                        google_roadmap</span></span></label><label><span><input
                                                                        type="radio"
                                                                        class="leaflet-control-layers-selector"
                                                                        name="leaflet-base-layers_105"><span>
                                                                        google_satellite</span></span></label><label><span><input
                                                                        type="radio"
                                                                        class="leaflet-control-layers-selector"
                                                                        name="leaflet-base-layers_105"><span>
                                                                        google_hybrid</span></span></label><label><span><input
                                                                        type="radio"
                                                                        class="leaflet-control-layers-selector"
                                                                        name="leaflet-base-layers_105"><span>
                                                                        google_terrain</span></span></label></div>
                                                        <div class="leaflet-control-layers-separator"
                                                            style="display: none;"></div>
                                                        <div class="leaflet-control-layers-overlays"></div>
                                                    </section>
                                                </div>
                                            </div>
                                            <div class="leaflet-bottom leaflet-left"></div>
                                            <div class="leaflet-bottom leaflet-right">
                                                <div class="leaflet-control-attribution leaflet-control"><a
                                                        href="https://leafletjs.com"
                                                        title="A JavaScript library for interactive maps"><svg
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            width="12" height="8" viewBox="0 0 12 8"
                                                            class="leaflet-attribution-flag">
                                                            <path fill="#4C7BE1" d="M0 0h12v4H0z"></path>
                                                            <path fill="#FFD500" d="M0 4h12v3H0z"></path>
                                                            <path fill="#E0BC00" d="M0 7h12v1H0z"></path>
                                                        </svg> Leaflet</a> <span aria-hidden="true">|</span> ©
                                                    OpenStreetMap contributors</div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                                <div>
                                    <a href="{{ route('page.drainase') }}"
                                        class="btn btn-default w-md">Cancel</a>
                                    <button type="submit" class="btn btn-primary w-md">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
