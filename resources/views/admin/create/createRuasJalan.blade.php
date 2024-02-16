@extends('admin.layouts.main')
@section('page')
    <div class="row">
        <div class="col-lg-12">
            <div class="card h-100 p-4">
                <div class="row">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <div class="text-sm-left">
                                <a href="{{ route('page.jalan') }}"
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

                                <div class="form-group">
                                    <label for="kode_kec">Kecamatan *</label>
                                    <select id="kode_kec" name="kode_kec" class="form-control">
                                        <option value="" selected disabled>Pilih Kecamatan</option>
                                        @foreach ($data as $item)
                                        <option value="{{ $item->id_kecamatan }}">{{ $item->nama_kecamatan }}</option>
                                        @endforeach
                                    </select>
                                    <input type="hidden" value="" name="kecamatan" id="kecamatan">
                                </div>

                                <div class="form-group">
                                    <label for="kode_kel">Kelurahan *</label>
                                    <select id="kode_kel" name="kode_kel" class="form-control"></select>
                                    <input type="hidden" value="" name="kelurahan" id="kelurahan">
                                </div>

                                <div class="form-group">
                                    <label for="nama_ruas">Nama Ruas Jalan *</label>
                                    <input type="text" id="nama_ruas" name="nama_ruas" class="form-control"
                                        value="" >
                                </div>

                                <div class="form-group">
                                    <label for="panjang">Panjang Jalan (meter) *</label>
                                    <input type="text" id="panjang" name="panjang" class="form-control decimal"
                                        value="" >
                                </div>

                                <div class="form-group">
                                    <label for="lebar">Lebar Perkerasan (meter) *</label>
                                    <input type="text" id="lebar" name="lebar" class="form-control decimal"
                                        value="">
                                </div>

                                <div class="form-group">
                                    <label for="luas_sertifikat">Luas Sertifikat (meter persegi) *</label>
                                    <input type="text" id="luas_sertifikat" name="luas_sertifikat"
                                        class="form-control decimal" value="" >
                                </div>

                                <div class="form-group">
                                    <label for="luas_peta">Luas Peta (meter persegi) *</label>
                                    <input type="text" id="luas_peta" name="luas_peta" class="form-control decimal"
                                        value="" >
                                </div>

                                <div class="form-group">
                                    <label for="input-status">Status *</label>
                                    <input type="text" id="input-status" name="status" class="form-control"
                                        value="" >
                                </div>

                                <div class="form-group">
                                    <label for="fungsi">Fungsi *</label>
                                    <input type="text" id="fungsi" name="fungsi" class="form-control" value=""
                                        >
                                </div>

                                <div class="form-group">
                                    <label for="tipe_hak">Tipe Hak *</label>
                                    <input type="text" id="tipe_hak" name="tipe_hak" class="form-control"
                                        value="" >
                                </div>

                                <!-- <div class="form-group">
                                    <label for="tipe_produk">Tipe Produk *</label>
                                    <input type="text" id="tipe_produk" name="tipe_produk" class="form-control" value="" required>
                                </div>

                                <div class="form-group">
                                    <label for="tipe_jalan">Tipe Jalan *</label>
                                    <input type="text" id="tipe_jalan" name="tipe_jalan" class="form-control" value="" required>
                                </div> -->

                                <div class="form-group">
                                    <label for="hp">HP *</label>
                                    <input type="text" id="hp" name="hp" class="form-control"
                                        value="" >
                                </div>

                                <div class="form-group">
                                    <label for="nib">NIB *</label>
                                    <input type="text" id="nib" name="nib" class="form-control"
                                        value="" >
                                </div>

                                <div class="form-group">
                                    <label for="kode_patok">Kode Patok *</label>
                                    <input type="text" id="kode_patok" name="kode_patok" class="form-control"
                                        value="" >
                                </div>

                                <div class="form-group">
                                    <label for="ruas_awal">Ruas Awal *</label>
                                    <input type="text" id="ruas_awal" name="ruas_awal" class="form-control"
                                        value="" >
                                </div>

                                <div class="form-group">
                                    <label for="ruas_akhir">Ruas Akhir *</label>
                                    <input type="text" id="ruas_akhir" name="ruas_akhir" class="form-control"
                                        value="" >
                                </div>

                                <div class="form-group">
                                    <label for="kondisi_ringan">Kondisi Ringan (meter)</label>
                                    <input type="text" id="kondisi_ringan" name="kondisi_ringan"
                                        class="form-control decimal" value="">
                                </div>

                                <div class="form-group">
                                    <label for="kondisi_sedang">Kondisi Sedang (meter)</label>
                                    <input type="text" id="kondisi_sedang" name="kondisi_sedang"
                                        class="form-control decimal" value="">
                                </div>

                                <div class="form-group">
                                    <label for="kondisi_rusak">Kondisi Rusak (meter)</label>
                                    <input type="text" id="kondisi_rusak" name="kondisi_rusak"
                                        class="form-control decimal" value="">
                                </div>

                                <div class="form-group">
                                    <label for="lhrt">LHRT</label>
                                    <input type="text" id="lhrt" name="lhrt" class="form-control"
                                        value="">
                                </div>

                                <!-- <div class="form-group">
                                    <label for="vcr">VCR</label>
                                    <input type="text" id="vcr" name="vcr" class="form-control" value="">
                                </div>

                                <div class="form-group">
                                    <label for="mst">MST</label>
                                    <input type="text" id="mst" name="mst" class="form-control" value="">
                                </div> -->

                                <div class="form-group">
                                    <label for="tanah">Tanah (meter)</label>
                                    <input type="text" id="tanah" name="tanah" class="form-control decimal"
                                        value="">
                                </div>

                                <div class="form-group">
                                    <label for="macadam">Macadam (meter)</label>
                                    <input type="text" id="macadam" name="macadam" class="form-control decimal"
                                        value="">
                                </div>

                                <div class="form-group">
                                    <label for="aspal">Aspal (meter)</label>
                                    <input type="text" id="aspal" name="aspal" class="form-control decimal"
                                        value="">
                                </div>

                                <div class="form-group">
                                    <label for="tahun">Tahun Data *</label>
                                    <input type="number" id="tahun" name="tahun" class="form-control number-only"
                                        value="" >
                                </div>

                                <!-- map -->
                                {{-- <div class="form-group">
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
                                                            src="https://b.tile.openstreetmap.org/13/6579/4252.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(360px, 89px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://a.tile.openstreetmap.org/13/6579/4251.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(360px, -167px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://a.tile.openstreetmap.org/13/6578/4252.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(104px, 89px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://c.tile.openstreetmap.org/13/6580/4252.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(616px, 89px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://c.tile.openstreetmap.org/13/6579/4253.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(360px, 345px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://c.tile.openstreetmap.org/13/6578/4251.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(104px, -167px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://b.tile.openstreetmap.org/13/6580/4251.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(616px, -167px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://b.tile.openstreetmap.org/13/6578/4253.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(104px, 345px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://a.tile.openstreetmap.org/13/6580/4253.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(616px, 345px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://c.tile.openstreetmap.org/13/6577/4252.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(-152px, 89px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://a.tile.openstreetmap.org/13/6581/4252.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(872px, 89px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://b.tile.openstreetmap.org/13/6577/4251.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(-152px, -167px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://c.tile.openstreetmap.org/13/6581/4251.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(872px, -167px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://a.tile.openstreetmap.org/13/6577/4253.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(-152px, 345px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://b.tile.openstreetmap.org/13/6581/4253.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(872px, 345px, 0px); opacity: 1;">
                                                    </div>
                                                </div>
                                                <div class="leaflet-layer " style="z-index: 1; opacity: 1;">
                                                    <div class="leaflet-tile-container leaflet-zoom-animated"
                                                        style="z-index: 19; transform: translate3d(0px, 0px, 0px) scale(1);">
                                                        <img alt=""
                                                            src="https://b.tile.openstreetmap.org/13/6579/4252.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(360px, 89px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://a.tile.openstreetmap.org/13/6579/4251.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(360px, -167px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://a.tile.openstreetmap.org/13/6578/4252.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(104px, 89px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://c.tile.openstreetmap.org/13/6580/4252.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(616px, 89px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://c.tile.openstreetmap.org/13/6579/4253.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(360px, 345px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://c.tile.openstreetmap.org/13/6578/4251.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(104px, -167px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://b.tile.openstreetmap.org/13/6580/4251.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(616px, -167px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://b.tile.openstreetmap.org/13/6578/4253.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(104px, 345px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://a.tile.openstreetmap.org/13/6580/4253.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(616px, 345px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://c.tile.openstreetmap.org/13/6577/4252.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(-152px, 89px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://a.tile.openstreetmap.org/13/6581/4252.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(872px, 89px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://b.tile.openstreetmap.org/13/6577/4251.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(-152px, -167px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://c.tile.openstreetmap.org/13/6581/4251.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(872px, -167px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://a.tile.openstreetmap.org/13/6577/4253.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(-152px, 345px, 0px); opacity: 1;"><img
                                                            alt=""
                                                            src="https://b.tile.openstreetmap.org/13/6581/4253.png"
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(872px, 345px, 0px); opacity: 1;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="leaflet-pane leaflet-overlay-pane"></div>
                                            <div class="leaflet-pane leaflet-shadow-pane"></div>
                                            <div class="leaflet-pane leaflet-marker-pane"></div>
                                            <div class="leaflet-pane leaflet-tooltip-pane"></div>
                                            <div class="leaflet-pane leaflet-popup-pane"></div>
                                            <div class="leaflet-proxy leaflet-zoom-animated"
                                                style="transform: translate3d(1.68432e+06px, 1.08867e+06px, 0px) scale(4096);">
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
                                                        class="leaflet-control-zoom-in" href="#" title="Zoom in"
                                                        role="button" aria-label="Zoom in" aria-disabled="false"><span
                                                            aria-hidden="true">+</span></a><a
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
                                    <a href="{{ route('page.jalan') }}"
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

    <script>
        $(document).ready(() => {
            const appName = "{{ env('APP_URL') }}" + ':8000'
            $('#kode_kec').on('change', (e) => {
                $('#kode_kel').empty()

                $.get(`${appName}/api/kelurahan/${e.target.value}`, (res) => {
                    console.log(res);
                    res.map((item) => {
                        $('<option></option>').attr('value', item.id_kelurahan).text(item
                                .nama_kelurahan)
                            .appendTo(
                                '#kode_kel');
                        $('#kecamatan').attr('value', $('#kode_kec>option:selected')
                    .text());
                        $('#kelurahan').attr('value', $('#kode_kel>option:selected').text());
                    })
                })
            })
            $('#kode_kel').on('change', (e) => {
                $('#kelurahan').attr('value', $('#kode_kel>option:selected').text());
            })
        })

        $('#form-input').on('submit', (e) => {
        e.preventDefault();

        const formData = new FormData();
        formData.append('kode_kec', $('#kode_kec').val());
        formData.append('kode_kel', $('#kode_kel').val());
        formData.append('kecamatan', $('#kecamatan').val());
        formData.append('kel', $('#kelurahan').val());
        formData.append('nama_ruas', $('#nama_ruas').val());
        formData.append('panjang', $('#panjang').val());
        formData.append('lebar', $('#lebar').val());
        formData.append('luas_sertifikat', $('#luas_sertifikat').val());
        formData.append('luas_peta', $('#luas_peta').val());
        formData.append('status', $('#input-status').val());
        formData.append('fungsi', $('#fungsi').val());
        formData.append('tipe_hak', $('#tipe_hak').val());
        formData.append('hp', $('#hp').val());
        formData.append('nib', $('#nib').val());
        formData.append('kode_patok', $('#kode_patok').val());
        formData.append('ruas_awal', $('#ruas_awal').val());
        formData.append('ruas_akhir', $('#ruas_akhir').val());
        formData.append('kondisi_ringan', $('#kondisi_ringan').val());
        formData.append('kondisi_sedang', $('#kondisi_sedang').val());
        formData.append('kondisi_rusak', $('#kondisi_rusak').val());
        formData.append('lhrt', $('#lhrt').val());
        formData.append('tanah', $('#tanah').val());
        formData.append('macadam', $('#macadam').val());
        formData.append('aspal', $('#aspal').val());
        formData.append('tahun', $('#tahun').val());
        console.log();

        $.ajax({
            url: "{{ route('jalan.add') }}",
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: (res) => {
                Swal.fire({
                    title: "Done",
                    text: "Data Successfuly added",
                    icon: "success"
                }).then((result)=>{
                    if (result.isConfirmed) {
                        window.location.href = "{{ route('page.jalan') }}";
                    }
                });
            },
            error: (err) => {
                // displayError(err.responseJSON.errors)
                Swal.fire({
                    title: "Failed!",
                    text: err.responseJSON.message,
                    icon: "error"
                })
            }
        }).done((res) => console.log(res))
    })
    </script>
@endsection
