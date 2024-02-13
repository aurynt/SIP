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
                        <label for="deskripsi_disclaimer">Deskripsi Disclaimer</label>
                        <textarea type="text" class="form-control deskripsi_disclaimer" name="deskripsi_disclaimer" id="deskripsi_disclaimer"></textarea>
                    </div>
                    <div class="form-group col-12">
                        <label for="pernyataan_persetujuan">Pernyataan Persetujuan</label>
                        <textarea type="text" class="form-control persetujuan" name="pernyataan_persetujuan" id="pernyataan_persetujuan"></textarea>
                    </div>
                    <div class="form-group col-12">
                        <label for="konfirmasi_persetujuan">Konfirmasi Persetujuan</label>
                        <textarea type="text" class="form-control persetujuan" name="konfirmasi_persetujuan" id="konfirmasi_persetujuan"></textarea>
                    </div>
                    <div class="form-group col-12 text-right">
                        <label>&nbsp;</label>
                        <button type="submit" class="btn btn-primary waves-effect waves-light w-md mt-4">simpan</button>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <div class="form-group col-12">
                    <label for="deskripsi">Preview</label>
                    <div class="persegi">
                        <p>Pernyataan</p>
                        <p></p><div style="text-align: justify;" id="div_deskripsi_disclaimer">(Deskripsi Disclaimer)</div><p></p>
                        <p></p><div style="text-align: justify;" id="div_pernyataan_persetujuan">(Isi dari Pernyataan persetujuan)</div><p></p>
                        <p></p><div style="text-align: justify;" id="div_konfirmasi_persetujuan"><input type="checkbox"> <b>(Isi dari Konfirmasi Persetujuan)</b></div><b><p></p>
                    </b></div><b>
                </b></div><b>
            </b></div><b>
        </b></div>
      </div>
    </div>
</div>
@endsection
