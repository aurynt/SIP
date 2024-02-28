@extends('admin.layouts.main')
@section('page')
    <div class="row">
        <div class="col-lg-12">
            <div class="card h-100 p-4">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <div class="text-sm-left">
                                <a href="{{ route('page.peraturan') }}" class="btn btn-outline-secondary w-md"><i
                                        class="mdi mdi-arrow-left ml-1"></i> Kembali</a>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <form id="form-input" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="jenis">Jenis<span class="text-danger">*</span></label>
                                    <select id="jenis" name="jenis" class="form-control">
                                        <option value="" selected="" disabled="">--Jenis Peraturan--</option>
                                        @foreach ($jenisPeraturan as $item)
                                            <option value="{{ $item->id }}">{{ $item->jenis }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nomor">Nomor<span class="text-danger">*</span></label>
                                    <input type="number" id="nomor" name="nomor" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label for="tahun">Tahun<span class="text-danger">*</span></label>
                                    <input type="number" id="tahun" name="tahun" class="form-control" value="">
                                </div>
                                <!-- <div class="form-group">
                                                                                    <label for="instansi">Instansi<span class="text-danger">*</span></label>
                                                                                    <input type="text" id="instansi" name="instansi" class="form-control" value="" required>
                                                                                   </div> -->
                                <div class="form-group">
                                    <label for="tentang">Tentang<span class="text-danger">*</span></label>
                                    <input type="text" id="tentang" name="tentang" class="form-control" value=""
                                        required="">
                                </div>
                                <div class="form-group">
                                    <label for="file">File Peraturan<span class="text-danger font-italic text-sm">(Hanya
                                            file PDF | Maksimal 10mb)*</span></label>
                                    <input type="file" accept=".pdf, image/*, .doc, .docx" id="file" name="file"
                                        class="form-control">
                                </div>
                                <div>
                                    <a href="{{ route('page.peraturan') }}" class="btn btn-outline-danger w-md">Cancel</a>
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
            $('#form-input').on('submit', (e) => {
                const formData = new FormData();
                formData.append('id_jenis', $('#jenis').val());
                formData.append('nomor', $('#nomor').val());
                formData.append('tahun', $('#tahun').val());
                formData.append('tentang', $('#tentang').val());
                formData.append('file', $('#file')[0].files[0]);

                $.ajax({
                    url: "{{ route('peraturan.add') }}",
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
                            text: "successfuly added peraturan",
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

                e.preventDefault();
            })
        })
    </script>
@endsection
