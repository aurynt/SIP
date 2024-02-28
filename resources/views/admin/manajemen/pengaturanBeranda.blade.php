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
                                <button class="btn btn-primary waves-effect waves-light w-md mt-4">simpan</button>
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
                        <div class="row gap-2" id="slider">
                            @foreach ($slider as $item)
                                <div class="col-12 row position-relative">
                                    <div class="">
                                        <span class="position-absolute m-2">
                                            <button data-id="{{ $item->id }}" style="height: 59px;width:59px;"
                                                class="btn rounded-circle btn-light btn-remove btn-tooltip text-center"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"
                                                data-container="body" data-animation="true"><i
                                                    class="fa fa-trash py-2"></i></button>
                                        </span>
                                    </div>
                                    <img src="{{ asset('storage/slider/' . $item->gambar_slider) }}" alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(() => {
            const appUrl = "{{ env('APP_URL') }}" + ':8000'
            window.csrfToken = "{{ csrf_token() }}";
            const token = localStorage.getItem('apiToken');

            $('#form-slider').on('submit', (e) => {
                const formData = new FormData();
                formData.append('gambar_slider', $('#slider')[0].files[0]);

                $.ajax({
                    url: "{{ route('slider.add') }}",
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
                            text: "successfuly added slider",
                            icon: "success"
                        });

                        $('#slider').load(location.href + '#slider');

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
                    headers: {
                        'X-CSRF-TOKEN': window.csrfToken,
                        'Authorization': `Bearer ${token}`
                    },
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

            $(document).on('click', '.btn-remove', function() {
                let id = $(this).data('id');
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: `${appUrl}/api/slider/${id}`,
                            method: "DELETE",
                            headers: {
                                'X-CSRF-TOKEN': window.csrfToken,
                                'Authorization': `Bearer ${token}`
                            },
                            success: (res) => {
                                Swal.fire({
                                    title: "Woke",
                                    text: "successfuly deleted drainase",
                                    icon: "success"
                                });

                                $('#slider').load(location.href + ' #slider');
                            },
                            error: (err) => {
                                Swal.fire({
                                    title: "Failed!",
                                    text: err.responseJSON.message,
                                    icon: "error"
                                })
                            }
                        });
                    }
                });
            })
        })
    </script>
@endsection
