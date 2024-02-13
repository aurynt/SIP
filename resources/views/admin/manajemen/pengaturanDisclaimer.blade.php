@extends('admin.layouts.main')
@section('page')
    <div class="row">
        <div class="col-lg-12">
            <div class="card h-100 p-4">
                <div class="row">
                    <div class="col-12 col-md-6 mb-4">
                        <form id="form-input" enctype="multipart/form-data">
                            <div class="form-group col-12">
                                <label for="deskripsi_disclaimer">Deskripsi Disclaimer</label>
                                <textarea type="text" class="form-control deskripsi_disclaimer" name="deskripsi_disclaimer" id="deskripsi_disclaimer">{{ $disclaimer->deskripsi_disclaimer }}</textarea>
                            </div>
                            <div class="form-group col-12">
                                <label for="pernyataan_persetujuan">Pernyataan Persetujuan</label>
                                <textarea type="text" class="form-control persetujuan" name="pernyataan_persetujuan" id="pernyataan_persetujuan">{{ $disclaimer->pernyataan_persetujuan }}</textarea>
                            </div>
                            <div class="form-group col-12">
                                <label for="konfirmasi_persetujuan">Konfirmasi Persetujuan</label>
                                <textarea type="text" class="form-control persetujuan" name="konfirmasi_persetujuan" id="konfirmasi_persetujuan">{{ $disclaimer->konfirmasi_persetujuan }}</textarea>
                            </div>
                            <div class="form-group col-12 text-right">
                                <button type="submit"
                                    class="btn btn-primary waves-effect waves-light w-md mt-4">simpan</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                        <div class="form-group col-12">
                            <label for="deskripsi">Preview</label>
                            <div class="persegi">
                                <p>Pernyataan</p>
                                <p></p>
                                <div style="text-align: justify;" id="div_deskripsi_disclaimer">
                                    {{ $disclaimer->deskripsi_disclaimer }}</div>
                                <p></p>
                                <p></p>
                                <div style="text-align: justify;" id="div_pernyataan_persetujuan">
                                    {{ $disclaimer->pernyataan_persetujuan }}</div>
                                <p></p>
                                <p></p>
                                <div style="text-align: justify;" id="div_konfirmasi_persetujuan"><input type="checkbox">
                                    <b>{{ $disclaimer->konfirmasi_persetujuan }}</b>
                                </div><b>
                                    <p></p>
                                    <label>&nbsp;</label>
                                </b>
                            </div><b>
                            </b>
                        </div><b>
                        </b>
                    </div><b>
                    </b>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(() => {

            $('#form-input').on('submit', (e) => {
                e.preventDefault()

                const formData = new FormData()
                formData.append('deskripsi_disclaimer', $('#deskripsi_disclaimer').val())
                formData.append('pernyataan_persetujuan', $('#pernyataan_persetujuan').val())
                formData.append('konfirmasi_persetujuan', $('#konfirmasi_persetujuan').val())

                $.ajax({
                    url: "{{ route('disclaimer.update') }}",
                    method: 'PUT',
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
                })
            })
        })
    </script>
@endsection
