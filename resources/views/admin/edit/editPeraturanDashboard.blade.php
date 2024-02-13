@extends('admin.layouts.main')
@section('page')
    <div class="row">
        <div class="col-lg-12">
            <div class="card h-100 p-4">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <div class="text-sm-left">
                                <a href="{{ route('page.peraturan') }}"
                                    class="btn btn-outline-secondary w-md"><i class="mdi mdi-arrow-left ml-1"></i> Kembali</a>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <form id="form-input" method="POST"
                                action=""
                                onsubmit="return false;" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="jenis">Jenis<span class="text-danger">*</span></label>
                                    <select id="jenis" name="jenis" class="form-control">
                                        <option value="" selected="" disabled="">--Jenis Peraturan--</option>
                                        <option value="1">Peraturan Pemerintah</option>
                                        <option value="2">Putusan Mahkamah Konstitusi</option>
                                        <option value="3">TAP MPR</option>
                                        <option value="4">Peraturan Daerah</option>
                                        <option value="5">Undang-Undang</option>
                                        <option value="6">Undang-Undang Dasar</option>
                                        <option value="7">Perpres</option>
                                        <option value="8">Perpu</option>
                                        <option value="9">Peraturan Walikota</option>
                                        <option value="10">Peraturan Bupati</option>
                                        <option value="11">Peraturan Daerah</option>
                                        <option value="12">Peraturan Gubernur</option>
                                        <option value="13">Peraturan Menteri</option>
                                        <option value="14">Permendagri</option>
                                        <option value="15">Inpres</option>
                                        <option value="16" selected="">Keputusan Menteri</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nomor">Nomor<span class="text-danger">*</span></label>
                                    <input type="number" id="nomor" name="nomor" class="form-control" value="1589">
                                </div>
                                <div class="form-group">
                                    <label for="tahun">Tahun<span class="text-danger">*</span></label>
                                    <input type="number" id="tahun" name="tahun" class="form-control" value="2021">
                                </div>
                                <!-- <div class="form-group">
                                        <label for="instansi">Instansi<span class="text-danger">*</span></label>
                                        <input type="text" id="instansi" name="instansi" class="form-control" value="" required>
                                    </div> -->
                                <div class="form-group">
                                    <label for="tentang">Tentang<span class="text-danger">*</span></label>
                                    <input type="text" id="tentang" name="tentang" class="form-control"
                                        value="PENETAPAN PETA LSD" required="">
                                </div>
                                <div class="form-group">
                                    <label for="file">File Peraturan<span class="text-danger font-italic text-sm">(Hanya
                                            file PDF | Maksimal 10mb)*</span></label>
                                    <input type="file" accept=".pdf, image/*, .doc, .docx" id="file" name="file"
                                        class="form-control">
                                </div>
                                <div>
                                    <a href="{{ route('page.peraturan') }}"
                                        class="btn btn-outline-danger w-md">Cancel</a>
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
