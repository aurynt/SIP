@extends('admin.layouts.main')
@section('page')
<div class="row">
    <div class="col-lg-12">
      <div class="card h-100 p-4">
        <div class="row">
            <div class="col-12 col-md-6 mb-4">
                <form id="form-input" method="POST" action="" onsubmit="return false;" enctype="multipart/form-data">
                    <input type="hidden" name="tegal-sip-token" value="bc89b2d07be137b73ea079535b040b6d">
                    <input type="hidden" name="id" id="id" value="">
                    <div class="form-group col-12">
                        <label for="logo">Logo</label>
                        <input class="form-control" type="file" name="logo" id="formFile" accept=".jpg, .jpeg, .png">
                        <small class="form-text text-muted">Pilih file Logo. (Format: jpg, png, jpeg) dan Max. 2 MB</small>
                    </div>
                    <div class="form-group col-12" id="gambar">
                        <img id="gambar_logo" class="rounded mx-auto d-block" src="/assets/images/logo_kota_tegal.png" alt="your image" width="30%">
                    </div>
                    <div class="form-group col-12">
                        <label for="ucapan">Kalimat Selamat Datang</label>
                        <input type="text" class="form-control" name="ucapan" id="ucapan" fdprocessedid="inwynm">
                    </div>
                    <div class="form-group col-12">
                        <label for="judul_beranda">Nama Aplikasi</label>
                        <input type="text" class="form-control" name="judul_beranda" id="judul_beranda" fdprocessedid="0pnffr">
                    </div>
                    <div class="form-group col-12">
                        <label for="deskripsi">Deskripsi Aplikasi</label>
                        <textarea type="text" class="form-control" rows="3" name="deskripsi" id="deskripsi"></textarea>
                    </div>
                    <div class="form-group col-12 text-right">
                        <label>&nbsp;</label>
                        <button type="submit" class="btn btn-primary waves-effect waves-light w-md mt-4" fdprocessedid="y8rsqh">simpan</button>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <form id="form-slider" method="POST" action="" onsubmit="return false;" enctype="multipart/form-data">
                    <div class="col-12 row">
                        <div class="form-group col-8">
                            <label for="slider">Gambar Slider</label>
                            <input class="form-control" type="file" name="slider" id="slider" accept=".jpg, .jpeg, .png" required="">
                            <small class="form-text text-muted">Pilih file slider. (Format: jpg, png, jpeg) dan Max. 2 MB</small>
                        </div>
                        <div class="form-group col-4 d-flex align-items-center">
                            <button class="btn btn-primary" fdprocessedid="eiqau">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection
