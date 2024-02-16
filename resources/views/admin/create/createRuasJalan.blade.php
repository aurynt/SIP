@extends('admin.layouts.main')
@section('page')
    <div class="row">
        <div class="col-lg-12">
            <div class="card h-100 p-4">
                <div class="row">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <div class="text-sm-left">
                                <a href="{{ route('page.jalan') }}" class="btn btn-outline-secondary w-md"><i
                                        class="mdi mdi-arrow-left ml-1"></i> Kembali</a>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <form id="form-input" method="POST" action="" onsubmit="return false;">
                                <input id="coordinat" value="{{ old('coordinat') }}" class="border rounded border-black p-2"
                                    type="hidden" name="coordinat">
                                <input id="type" value="{{ old('type') }}" class="border rounded border-black p-2"
                                    type="hidden" name="type">
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
                                        value="">
                                </div>

                                <div class="form-group">
                                    <label for="panjang">Panjang Jalan (meter) *</label>
                                    <input type="text" id="panjang" name="panjang" class="form-control decimal"
                                        value="">
                                </div>

                                <div class="form-group">
                                    <label for="lebar">Lebar Perkerasan (meter) *</label>
                                    <input type="text" id="lebar" name="lebar" class="form-control decimal"
                                        value="">
                                </div>

                                <div class="form-group">
                                    <label for="luas_sertifikat">Luas Sertifikat (meter persegi) *</label>
                                    <input type="text" id="luas_sertifikat" name="luas_sertifikat"
                                        class="form-control decimal" value="">
                                </div>

                                <div class="form-group">
                                    <label for="luas_peta">Luas Peta (meter persegi) *</label>
                                    <input type="text" id="luas_peta" name="luas_peta" class="form-control decimal"
                                        value="">
                                </div>

                                <div class="form-group">
                                    <label for="input-status">Status *</label>
                                    <input type="text" id="input-status" name="status" class="form-control"
                                        value="">
                                </div>

                                <div class="form-group">
                                    <label for="fungsi">Fungsi *</label>
                                    <input type="text" id="fungsi" name="fungsi" class="form-control" value="">
                                </div>

                                <div class="form-group">
                                    <label for="tipe_hak">Tipe Hak *</label>
                                    <input type="text" id="tipe_hak" name="tipe_hak" class="form-control"
                                        value="">
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
                                        value="">
                                </div>

                                <div class="form-group">
                                    <label for="nib">NIB *</label>
                                    <input type="text" id="nib" name="nib" class="form-control"
                                        value="">
                                </div>

                                <div class="form-group">
                                    <label for="kode_patok">Kode Patok *</label>
                                    <input type="text" id="kode_patok" name="kode_patok" class="form-control"
                                        value="">
                                </div>

                                <div class="form-group">
                                    <label for="ruas_awal">Ruas Awal *</label>
                                    <input type="text" id="ruas_awal" name="ruas_awal" class="form-control"
                                        value="">
                                </div>

                                <div class="form-group">
                                    <label for="ruas_akhir">Ruas Akhir *</label>
                                    <input type="text" id="ruas_akhir" name="ruas_akhir" class="form-control"
                                        value="">
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
                                        value="">
                                </div>

                                <div class="flex flex-col mb-3">
                                    <label for="map" class="capitalize">location</label>
                                    <div id="map" style="height: 300px"></div>
                                    <p id="mapError" class="text-red-500 text-xs"></p>
                                </div>

                                <div>
                                    <a href="{{ route('page.jalan') }}" class="btn btn-default w-md">Cancel</a>
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
                        $('#kelurahan').attr('value', $('#kode_kel>option:selected')
                            .text());
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
            formData.append('koordinat', $('#coordinat').val());
            formData.append('type', $('#type').val());

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
                    }).then((result) => {
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
    <script>
        var map = L.map('map').setView([-7.541410189934723, 110.44604864790085], 13);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
        }).addTo(map);

        var drawControl = new L.Control.Draw();
        map.addControl(drawControl);
        var drawnItems = new L.FeatureGroup();
        map.addLayer(drawnItems);

        map.on('draw:created', function(e) {
            var type = e.layerType,
                layer = e.layer;
            $('#type').val(type)

            switch (type) {
                case 'polygon':
                    drawnItems.clearLayers();
                    drawnItems.addLayer(layer);
                    var latlng = e.layer.getLatLngs();
                    var coordinat = []
                    for (var i = 0; i < latlng.length; i++) {
                        for (var j = 0; j < latlng[i].length; j++) {
                            coordinat.push([latlng[i][j].lat, latlng[i][j]
                                .lng
                            ])
                        }
                    }
                    $('#coordinat').val(JSON.stringify(coordinat))
                    break;
                case 'circle':
                    drawnItems.clearLayers();
                    break;
                case 'polyline':
                    drawnItems.clearLayers();
                    drawnItems.addLayer(layer);
                    var latlng = e.layer.getLatLngs();
                    var coordinat = []
                    for (var i = 0; i < latlng.length; i++) {
                        coordinat.push([latlng[i].lat, latlng[i]
                            .lng
                        ])
                    }
                    $('#coordinat').val(JSON.stringify(coordinat))
                    break;
                case 'rectangle':
                    drawnItems.clearLayers();
                    drawnItems.addLayer(layer);
                    var latlng = e.layer.getLatLngs();
                    var coordinat = []
                    for (var i = 0; i < latlng.length; i++) {
                        for (var j = 0; j < latlng[i].length; j++) {
                            coordinat.push([latlng[i][j].lat, latlng[i][j]
                                .lng
                            ])
                        }
                    }
                    $('#coordinat').val(JSON.stringify(coordinat))
                    break;
                case 'marker':
                    drawnItems.clearLayers();
                    drawnItems.addLayer(layer);
                    var latlng = [e.layer.getLatLng().lat, e.layer.getLatLng().lng];
                    $('#coordinat').val(JSON.stringify(latlng));
                    break;

                default:
                    break;
            }
        });
    </script>
@endsection
