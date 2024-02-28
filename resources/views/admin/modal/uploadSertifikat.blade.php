<div class="row">
    <div class="col-md-4">
        <div class="modal fade" id="modal-sertifikat" tabindex="-1" role="dialog" aria-labelledby="modal-default"
            aria-hidden="true">
            <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="modal-title-default">Upload Sertifikat</h6>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form id="form-input" method="POST" action="" onsubmit="return false;">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Pilih file sertifikat (*.pdf)</label>
                                <input class="form-control" type="file" name="file_sertifikat" id="file_sertifikat"
                                    accept="application/pdf" required="">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="btn-upload-file" class="btn bg-gradient-success">Save</button>
                            <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('#form-input').on('submit', (e) => {
        e.preventDefault();

        let fileSertifikat = $('#file_sertifikat')[0].files[0];
        const formData = new FormData();
        formData.append('file_sertifikat', fileSertifikat);

        const appUrl = "{{ env('APP_URL') }}" + ':8000'
        var buttonElement = document.querySelector('.btn-up-sertifikat');
        var id = buttonElement.getAttribute('data-id');
        const token = localStorage.getItem('apiToken');

        $.ajax({
            url: `${appUrl}/api/tanah-lahan/${id}/upload-file-sertifikat`,
            method: "POST",
            data: formData,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': window.csrfToken,
                'Authorization': `Bearer ${token}`
            },
            success: (res) => {
                Swal.fire({
                    title: "Success!",
                    text: "Berhasil ",
                    icon: "success"
                })
                $('#modal-sertifikat').modal('hide');
            },
            error: (err) => {
                Swal.fire({
                    title: "Failed!",
                    text: err.responseJSON.message,
                    icon: "error"
                })
            }
        });
    });
</script>
