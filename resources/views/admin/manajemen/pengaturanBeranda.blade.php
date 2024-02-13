@extends('admin.layouts.main')
@section('page')
    <div class="row">
        <div class="col-lg-12">
            <div class="card h-100 p-4">
                <div class="row">
                    <div class="col-12 col-md-6 mb-4">
                        <form id="form-input" enctype="multipart/form-data">
                            <div class="form-group col-12">
                                <label for="logo">Logo</label>
                                <input class="form-control" type="file" name="logo" id="gambar_logo"
                                    accept=".jpg, .jpeg, .png">
                                <small class="form-text text-muted">Pilih file Logo. (Format: jpg, png, jpeg) dan Max. 2
                                    MB</small>
                            </div>
                            <div class="form-group col-12" id="gambar">
                                <img id="preview_logo" class="rounded mx-auto d-block"
                                    src="{{ asset('storage/logo/' . $beranda->logo) }}" alt="logo" width="30%">
                            </div>
                            <div class="form-group col-12">
                                <label for="ucapan">Kalimat Selamat Datang</label>
                                <input value="{{ $beranda->ucapan }}" type="text" class="form-control" name="ucapan"
                                    id="ucapan" fdprocessedid="inwynm">
                            </div>
                            <div class="form-group col-12">
                                <label for="judul_beranda">Nama Aplikasi</label>
                                <input value="{{ $beranda->judul_beranda }}" type="text" class="form-control"
                                    name="judul_beranda" id="judul_beranda" fdprocessedid="0pnffr">
                            </div>
                            <div class="form-group col-12">
                                <label for="deskripsi">Deskripsi Aplikasi</label>
                                <textarea type="text" class="form-control" rows="3" name="deskripsi" id="deskripsi">{{ $beranda->deskripsi }}</textarea>
                            </div>
                            <div class="form-group col-12 text-right">
                                <button type="submit" class="btn btn-primary waves-effect waves-light w-md mt-4"
                                    fdprocessedid="y8rsqh">simpan</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                        <form id="form-slider" enctype="multipart/form-data">
                            <div class="col-12 row">
                                <div class="form-group col-8">
                                    <label for="slider">Gambar Slider</label>
                                    <input class="form-control" type="file" id="slider" accept=".jpg, .jpeg, .png">
                                    <small class="form-text text-muted">Pilih file slider. (Format: jpg, png, jpeg) dan Max.
                                        2 MB</small>
                                </div>
                                <div class="form-group col-4 d-flex align-items-center">
                                    <button type="submit" class="btn btn-primary" fdprocessedid="eiqau">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(() => {

            $('#form-slider').on('submit', (e) => {
                const formData = new FormData();
                formData.append('gambar_slider', $('#slider')[0].files[0]);

                $.ajax({
                    url: "{{ route('slider.add') }}",
                    method: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: (res) => {
                        Swal.fire({
                            title: "Woke",
                            text: "successfuly added slider",
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

                e.preventDefault();
            });

            $('#form-input').on('submit', (e) => {
                const formData = new FormData();
                formData.append('logo', $('#gambar_logo')[0].files[0]);
                formData.append('judul_beranda', $('#judul_beranda').val());
                formData.append('deskripsi', $('#deskripsi').val());
                formData.append('ucapan', $('#ucapan').val());

                $.ajax({
                    url: "{{ route('beranda.update') }}",
                    method: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: (res) => {
                        Swal.fire({
                            title: "Woke",
                            text: "successfuly updated beranda",
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

                e.preventDefault();
            })
        })
    </script>
@endsection
