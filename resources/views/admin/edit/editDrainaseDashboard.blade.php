@extends('admin.layouts.main')
@section('page')
    <div class="row">
        <div class="col-lg-12">
            <div class="card h-100 p-4">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <div class="text-sm-left">
                                <a href="{{ route('page.drainase') }}" class="btn btn-outline-secondary w-md"><i
                                        class="mdi mdi-arrow-left ml-1"></i> Kembali</a>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <form id="form-input">
                                <input type="hidden" id="id" value="{{ $data->id }}">
                                <input id="coordinat" value="{{ old('coordinat', $data->koordinat) }}"
                                    class="border rounded border-black p-2" type="hidden" name="coordinat">
                                <input id="type" value="{{ old('type', $data->type) }}"
                                    class="border rounded border-black p-2" type="hidden" name="type">

                                <div class="form-group">
                                    <label for="kode_kec">Kecamatan *</label>
                                    <select id="kode_kec" name="kode_kec" class="form-control">
                                        <option value="" selected disabled>Pilih Kecamatan</option>
                                        @foreach ($kecamatan as $item)
                                            <option value="{{ $item->id_kecamatan }}"
                                                {{ $data->kode_kec == $item->id_kecamatan ? 'selected' : '' }}>
                                                {{ $item->nama_kecamatan }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <input type="hidden" name="kecamatan" id="kecamatan">
                                </div>

                                <div class="form-group">
                                    <label for="kode_kel">Kelurahan *</label>
                                    <select id="kode_kel" name="kode_kel" class="form-control">
                                        <option value="{{ $data->kode_kel }}">{{ $data->nama_kelurahan }}</option>
                                    </select>
                                    <input type="hidden" name="kel" id="kel">
                                </div>

                                <div class="form-group">
                                    <label for="nama_ruas">Nama Ruas Jalan *</label>
                                    <input type="text" id="nama_ruas" name="nama_ruas" class="form-control"
                                        value="{{ $data->nama_ruas }}">
                                </div>

                                <div class="form-group">
                                    <label for="luas_sertifikat">Luas Sertifikat (meter persegi) *</label>
                                    <input type="text" id="luas_sertifikat" name="luas_sertifikat"
                                        class="form-control decimal" value="{{ $data->luas_sertifikat }}">
                                </div>

                                <div class="form-group">
                                    <label for="tipe_hak">Tipe Hak *</label>
                                    <input type="text" id="tipe_hak" name="tipe_hak" class="form-control"
                                        value="{{ $data->tipe_hak }}">
                                </div>

                                <div class="form-group">
                                    <label for="hp">HP *</label>
                                    <input type="text" id="hp" name="hp" class="form-control"
                                        value="{{ $data->hp }}">
                                </div>

                                <div class="flex flex-col mb-3">
                                    <label for="map" class="capitalize">location</label>
                                    <div id="map" style="height: 450px"></div>
                                    <p id="mapError" class="text-red-500 text-xs"></p>
                                </div>

                                <div>
                                    <a href="{{ route('page.drainase') }}" class="btn btn-default w-md">Cancel</a>
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
                    res.map((item) => (
                        $('<option></option>').attr('value', item.id_kelurahan).text(item
                            .nama_kelurahan)
                        .appendTo(
                            '#kode_kel')
                    ))
                })
            })

            $('#form-input').on('submit', (e) => {
                e.preventDefault();

                const formData = new FormData();
                formData.append('kode_kec', $('#kode_kec').val());
                formData.append('kode_kel', $('#kode_kel').val());
                formData.append('nama_ruas', $('#nama_ruas').val());
                formData.append('luas_sertifikat', $('#luas_sertifikat').val());
                formData.append('tipe_hak', $('#tipe_hak').val());
                formData.append('hp', $('#hp').val());
                formData.append('koordinat', $('#coordinat').val());
                formData.append('type', $('#type').val());

                $.ajax({
                    url: `${appName}/api/drainase/${$('#id').val()}`,
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
                            title: "Woke",
                            text: "successfuly updated drainase",
                            icon: "success"
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
    @include('admin.script.map')
@endsection
