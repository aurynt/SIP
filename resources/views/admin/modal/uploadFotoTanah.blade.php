<div class="row">
        <div class="col-md-4">
          <div class="modal fade" id="modal-tanah" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
            <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h6 class="modal-title" id="modal-title-default">Upload Foto Tanah</h6>
                  <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <form action="" method="post" id="form_foto" enctype="multipart/form-data">
                            <input type="hidden" name="id_tanah" id="id_tanah" value="">
                            <input type="hidden" name="id_sistem" id="id_sistem" value="">
                            <div id="myDropzone" class="mb-2 dropzone dz-clickable"><div class="dz-default dz-message"><button class="dz-button" type="button">Pilih Gambar Yang Ingin Diunggah</button></div></div>
                            <label for="jenis_foto">Jenis Foto</label>
                            <select class="form-control" id="jenis_foto" name="jenis_foto">
                                <option value="lokasi">Lokasi</option>
                                <option value="papan">Papan</option>
                                <option value="batas">Batas</option>
                            </select>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn bg-gradient-success">Save</button>
                  <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
