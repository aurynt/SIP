@extends('admin.layouts.main')
@section('page')
    <div class="row">
        <div class="col-lg-12">
            <div class="card h-100 p-4">
                <div class="card-body">
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
                            <form id="form-input">
                                <input type="hidden" id="id" value="{{ $data->id }}">
                                <div class="form-group">
                                    <label for="kode_kec">Kecamatan *</label>
                                    <select id="kode_kec" name="kode_kec" class="form-control" required="">
                                        <option value="" selected disabled>Pilih Kecamatan</option>
                                        @foreach ($kecamatan as $item)
                                            <option value="{{ $item->id_kecamatan }}"
                                                {{ $data->kode_kec == $item->id_kecamatan ? 'selected' : '' }}>
                                                {{ $item->nama_kecamatan }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <input type="text" name="kecamatan" id="kecamatan" value="">
                                </div>

                                <div class="form-group">
                                    <label for="kode_kel">Kelurahan *</label>
                                    <select id="kode_kel" name="kode_kel" class="form-control" required="">
                                        <option value="{{ $data->kode_kel }}">{{ $data->nama_kelurahan }}</option>
                                    </select>
                                    <input type="text" name="kelurahan" id="kelurahan" value="">
                                </div>

                                <div class="form-group">
                                    <label for="nama_ruas">Nama Ruas Jalan *</label>
                                    <input type="text" id="nama_ruas" name="nama_ruas" class="form-control"
                                        value="{{ $data->nama_ruas }}">
                                </div>

                                <div class="form-group">
                                    <label for="panjang">Panjang Jalan (meter) *</label>
                                    <input type="text" id="panjang" name="panjang" class="form-control decimal"
                                        value="{{ $data->panjang }}">
                                </div>

                                <div class="form-group">
                                    <label for="lebar">Lebar Perkerasan (meter) *</label>
                                    <input type="text" id="lebar" name="lebar" class="form-control decimal"
                                        value="{{ $data->lebar }}">
                                </div>

                                <div class="form-group">
                                    <label for="luas_sertifikat">Luas Sertifikat (meter persegi) *</label>
                                    <input type="text" id="luas_sertifikat" name="luas_sertifikat"
                                        class="form-control decimal" value="{{ $data->luas_sertifikat }}">
                                </div>

                                <div class="form-group">
                                    <label for="luas_peta">Luas Peta (meter persegi) *</label>
                                    <input type="text" id="luas_peta" name="luas_peta" class="form-control decimal"
                                        value="{{ $data->luas_peta }}">
                                </div>

                                <div class="form-group">
                                    <label for="input-status">Status *</label>
                                    <input type="text" id="input-status" name="status" class="form-control"
                                        value="{{ $data->status }}">
                                </div>

                                <div class="form-group">
                                    <label for="fungsi">Fungsi *</label>
                                    <input type="text" id="fungsi" name="fungsi" class="form-control"
                                        value="{{ $data->fungsi }}">
                                </div>

                                <div class="form-group">
                                    <label for="tipe_hak">Tipe Hak *</label>
                                    <input type="text" id="tipe_hak" name="tipe_hak" class="form-control"
                                        value="{{ $data->tipe_hak }}">
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
                                        value="{{ $data->hp }}">
                                </div>

                                <div class="form-group">
                                    <label for="nib">NIB *</label>
                                    <input type="text" id="nib" name="nib" class="form-control"
                                        value="{{ $data->nib }}">
                                </div>

                                <div class="form-group">
                                    <label for="kode_patok">Kode Patok *</label>
                                    <input type="text" id="kode_patok" name="kode_patok" class="form-control"
                                        value="{{ $data->kode_patok }}">
                                </div>

                                <div class="form-group">
                                    <label for="ruas_awal">Ruas Awal *</label>
                                    <input type="text" id="ruas_awal" name="ruas_awal" class="form-control"
                                        value="{{ $data->ruas_awal }}">
                                </div>

                                <div class="form-group">
                                    <label for="ruas_akhir">Ruas Akhir *</label>
                                    <input type="text" id="ruas_akhir" name="ruas_akhir" class="form-control"
                                        value="{{ $data->ruas_akhir }}">
                                </div>

                                <div class="form-group">
                                    <label for="kondisi_ringan">Kondisi Ringan (meter)</label>
                                    <input type="text" id="kondisi_ringan" name="kondisi_ringan"
                                        class="form-control decimal" value="{{ $data->kondisi_ringan }}">
                                </div>

                                <div class="form-group">
                                    <label for="kondisi_sedang">Kondisi Sedang (meter)</label>
                                    <input type="text" id="kondisi_sedang" name="kondisi_sedang"
                                        class="form-control decimal" value="{{ $data->kondisi_sedang }}">
                                </div>

                                <div class="form-group">
                                    <label for="kondisi_rusak">Kondisi Rusak (meter)</label>
                                    <input type="text" id="kondisi_rusak" name="kondisi_rusak"
                                        class="form-control decimal" value="{{ $data->kondisi_rusak }}">
                                </div>

                                <div class="form-group">
                                    <label for="lhrt">LHRT</label>
                                    <input type="text" id="lhrt" name="lhrt" class="form-control"
                                        value="{{ $data->lhrt }}">
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
                                        value="{{ $data->tanah }}">
                                </div>

                                <div class="form-group">
                                    <label for="macadam">Macadam (meter)</label>
                                    <input type="text" id="macadam" name="macadam" class="form-control decimal"
                                        value="{{ $data->macadam }}">
                                </div>

                                <div class="form-group">
                                    <label for="aspal">Aspal (meter)</label>
                                    <input type="text" id="aspal" name="aspal" class="form-control decimal"
                                        value="{{ $data->aspal }}">
                                </div>

                                <div class="form-group">
                                    <label for="tahun">Tahun Data *</label>
                                    <input type="number" id="tahun" name="tahun" class="form-control number-only"
                                        value="{{ $data->tahun }}" required="">
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
            $('#kecamatan').attr('value', $('#kode_kec>option:selected').text().trim());
            console.log($('#kode_kec>option:selected').text());
            $('#kelurahan').attr('value', $('#kode_kel>option:selected').text().trim());

            $('#kode_kec').on('change', (e) => {
                $('#kode_kel').empty()

                $.get(`${appName}/api/kelurahan/${e.target.value}`, (res) => {
                    console.log(res);
                    res.map((item) => {
                        $('<option></option>').attr('value', item.id_kelurahan).text(item
                                .nama_kelurahan)
                            .appendTo(
                                '#kode_kel');
                        $('#kecamatan').attr('value', $('#kode_kec>option:selected').text()
                            .trim());
                        console.log($('#kode_kec>option:selected').text());
                        $('#kelurahan').attr('value', $('#kode_kel>option:selected').text()
                            .trim());

                    })
                })
                $('#kode_kel').on('change', (e) => {
                    $('#kelurahan').attr('value', $('#kode_kel>option:selected').text());
                });
            });


            $('#form-input').on('submit', (e) => {
                e.preventDefault();

                const formData = new FormData();
                formData.append('kode_kec', $('#kode_kec').val());
                formData.append('kode_kel', $('#kode_kel').val());
                formData.append('kecamatan', $('#kecamatan').val());
                formData.append('kelurahan', $('#kelurahan').val());
                formData.append('nama_ruas', $('#nama_ruas').val());
                formData.append('panjang', $('#panjang').val());
                formData.append('lebar', $('#lebar').val());
                formData.append('luas_sertifikat', $('#luas_sertifikat').val());
                formData.append('luas_peta', $('#luas_peta').val());
                formData.append('status', $('#input_status').val());
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

                $.ajax({
                    url: `${appName}/api/jalan/${$('#id').val()}`,
                    method: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: (res) => {
                        Swal.fire({
                            title: "Done",
                            text: "Data has been updated",
                            icon: "success"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href =
                                    "{{ route('page.jalan') }}";
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
        })
    </script>
@endsection
