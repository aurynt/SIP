<div class="row">
    <div class="col-md-4">
        <div class="modal fade" id="modal-import-tanah" tabindex="-1" role="dialog" aria-labelledby="modal-default"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="modal-title-default">Import Tanah dan Lahan</h6>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('file.tanah-lahan-import') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-12 mb-3">
                                    <label for="detail_nama_pemohon">File Excel</label>
                                    <input type="file" name="tanahLahanFile" id="excel" class="form-control" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{ route('file.template-excel') }}" type="button" class="btn btn-success">Unduh Template</a>
                                </div>
                                <div class="col-6 text-end">
                                    <button type="submit" class="btn btn-primary">Import</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-secondary  ml-auto" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
