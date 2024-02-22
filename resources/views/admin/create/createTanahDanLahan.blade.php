@extends('admin.layouts.main')
@section('page')
    <div class="row">
        <div class="col-lg-12">
            <div class="card h-100 p-4">
                <div class="row">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <div class="text-sm-left">
                                <a href="{{ route('page.tanah-lahan') }}" class="btn btn-outline-secondary w-md"><i
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
                                        @foreach ($dataKec as $item)
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
                                    <label for="nomor">Nomor *</label>
                                    <input type="text" id="nomor" name="nomor" class="form-control" value="">
                                </div>

                                <div class="form-group">
                                    <label for="noreg">Nomor Register *</label>
                                    <input type="text" id="noreg" name="noreg" class="form-control" value="">
                                </div>

                                <div class="form-group">
                                    <label for="input-status">Status *</label>
                                    <input type="text" id="input-status" name="status" class="form-control"
                                        value="">
                                </div>

                                <div class="form-group">
                                    <label for="kode">Kode *</label>
                                    <input type="text" id="kode" name="kode" class="form-control" value="">
                                </div>

                                <div class="form-group">
                                    <label for="papan_nama">Papan Nama Pemkot</label>
                                    <select id="papan_nama" name="papan_nama" class="form-control">
                                        <option value="">Pilih</option>
                                        <option value="Sudah">Sudah</option>
                                        <option value="Belum">Belum</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="penggunaan">Penggunaan Lahan *</label>
                                    <input type="text" id="penggunaan" name="penggunaan" class="form-control"
                                        value="">
                                </div>

                                <div class="form-group">
                                    <label for="rencana_pola">Rencana Pola Ruang *</label>
                                    <input type="text" id="rencana_pola" name="rencana_pola" class="form-control"
                                        value="">
                                </div>

                                <div class="form-group">
                                    <label for="alamat">Alamat *</label>
                                    <textarea id="alamat" name="alamat" class="form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="luas">Luas Sertifikat (meter persegi) *</label>
                                    <input type="text" id="luas" name="luas" class="form-control decimal"
                                        value="">
                                </div>

                                <div class="form-group">
                                    <label for="pemegang_hak">Pemegang Hak *</label>
                                    <input type="text" id="pemegang_hak" name="pemegang_hak" class="form-control"
                                        value="">
                                </div>

                                <div class="form-group">
                                    <label for="pengguna_barang">Pengguna Barang *</label>
                                    <input type="text" id="pengguna_barang" name="pengguna_barang"
                                        class="form-control" value="">
                                </div>

                                <div class="form-group">
                                    <label for="lahan_terbangun">Lahan Terbangun</label>
                                    <select id="lahan_terbangun" name="lahan_terbangun" class="form-control">
                                        <option value="">Pilih</option>
                                        <option value="Terbangun">Terbangun</option>
                                        <option value="Non Terbangun">Non Terbangun</option>
                                        <option value="Terbangun Sebagian">Terbangun Sebagian</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="patok">Patok Batas Tanah</label>
                                    <select id="patok" name="patok" class="form-control">
                                        <option value="">Pilih</option>
                                        <option value="Sudah">Sudah</option>
                                        <option value="Belum">Belum</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="zona_nilai">Zona Nilai Tanah *</label>
                                    <input type="text" id="zona_nilai" name="zona_nilai" class="form-control"
                                        value="">
                                </div>

                                <div class="flex flex-col mb-3">
                                    <label for="map" class="capitalize">location</label>
                                    <div id="map" style="height: 450px"></div>
                                    <p id="mapError" class="text-red-500 text-xs"></p>
                                </div>
                                <div>
                                    <a href="{{ route('page.tanah-lahan') }}" class="btn btn-default w-md">Cancel</a>
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
            window.csrfToken = "{{ csrf_token() }}";
            const token = localStorage.getItem('apiToken');
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
            formData.append('kelurahan', $('#kelurahan').val());
            formData.append('nomor', $('#nomor').val());
            formData.append('noreg', $('#noreg').val());
            formData.append('status', $('#input-status').val());
            formData.append('kode', $('#kode').val());
            formData.append('papan_nama', $('#papan_nama').val());
            formData.append('penggunaan', $('#penggunaan').val());
            formData.append('rencana_pola', $('#rencana_pola').val());
            formData.append('alamat', $('#alamat').val());
            formData.append('luas', $('#luas').val());
            formData.append('pemegang_hak', $('#pemegang_hak').val());
            formData.append('pengguna_barang', $('#pengguna_barang').val());
            formData.append('lahan_terbangun', $('#lahan_terbangun').val());
            formData.append('patok', $('#patok').val());
            formData.append('zona_nilai', $('#zona_nilai').val());
            formData.append('koordinat', $('#coordinat').val());
            formData.append('type', $('#type').val());

            $.ajax({
                url: "{{ route('tanah-lahan.add') }}",
                method: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': window.csrfToken,
                    'Authorization': `Bearer ${token}`
                },
                contentType: false,
                processData: false,
                success: (res) => {
                    Swal.fire({
                        title: "Done",
                        text: "Data Successfuly added",
                        icon: "success"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "{{ route('page.tanah-lahan') }}";
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
