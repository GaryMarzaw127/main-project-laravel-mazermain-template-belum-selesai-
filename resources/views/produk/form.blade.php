<div class="modal fade text-left" id="modal-form" tabindex="-1" role="dialog"
    aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg"
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
                        <label for="nama_produk">Nama Produk</label>
                        <input type="text" name="nama_produk" id="nama_produk" class="form-control" required autofocus>
                        <span class="help-block with-errors"></span>
                    </div>
                </div>

                
                <div class="modal-body">
                    <div class="form-group">
                        <label for="id_kategori">Kategori</label>
                        <select name="id_kategori" id="id_kategori" class="form-select" required>
                            <option value="">Pilih Kategori</option>
                            @foreach ($kategori as $key => $item)
                                <option value="{{ $key }}">{{ $item }}</option>
                            @endforeach
                        </select>
                        <span class="help-block with-errors"></span>
                    </div>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="merk">Merk</label>
                        <input type="text" name="merk" id="merk" class="form-control">
                        <span class="help-block with-errors"></span>
                    </div>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="harga_beli">Harga Beli</label>
                        <input type="number" name="harga_beli" id="harga_beli" class="form-control" value="0">
                        <span class="help-block with-errors"></span>
                    </div>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="harga_jual">Harga Jual</label>
                        <input type="number" name="harga_jual" id="harga_jual" class="form-control" value="0">
                        <span class="help-block with-errors"></span>
                    </div>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="diskon">Potongan Harga</label>
                        <input type="number" name="diskon" id="diskon" class="form-control" value="0">
                        <span class="help-block with-errors"></span>
                    </div>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="number" name="stok" id="stok" class="form-control" value="0">
                        <span class="help-block with-errors"></span>
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