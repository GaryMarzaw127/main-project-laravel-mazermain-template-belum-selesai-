<div class="modal fade text-left" id="modal-form" tabindex="-1" role="dialog"
    aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable"
        role="document">

        <form action="" method="post" class="form-horizontal">
            @csrf
            @method('post')

        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
           
                

                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Nama Supplier</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                        <span class="help-block with-errors"></span>
                    </div>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="text" name="telepon" id="telepon" class="form-control">
                        <span class="help-block with-errors"></span>
                    </div>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <div class="form-group mb-3">
                            <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                            <span class="help-block with-errors"></span>
                        </div>
                      
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-success">
                        <span class="d-none d-sm-block">Simpan</span>
                    </button>

                    <button class="btn btn-danger ml-1">
                        <span class="d-none d-sm-block">Batal</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>