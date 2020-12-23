       
    	<div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><?php echo $title ?></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	    </div>
    	<div class="modal-body">
      <form id="formadd" enctype="multipart/form-data">
          <div class="form-group row">
            <label for="nama_produk" class="col-sm-2 col-form-label">Nama Produk</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Nama Produk" name="nama_produk" class="form-control" id="nama_produk">
            </div>
          </div>
          <div class="form-group row">
            <label for="gambar_produk" class="col-sm-2 col-form-label">Gambar Produk</label>
            <div class="col-sm-3">
              <input type="file" placeholder="Gambar Berita" name="gambar_produk" id="gambar_produk">
            </div>
            <div class="col-sm-7">
              <span class="badge badge-warning">Note : maxsiaml 2 Mb, ukuran gambar 570 x 350 pixel. </span>
            </div>
          </div>
          <div class="form-group row">
            <label for="deskripsi_produk" class="col-sm-2 col-form-label">Deskripsi Produk</label>
            <div class="col-sm-10">
              <textarea placeholder="Deskripsi Produk" class="form-control" name="des" id="deskripsi_produk"></textarea>
            </div>
          </div>
      </form>
    	</div>
    	<div class="modal-footer">
     	 	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      	<button type="button" class="btn btn-primary" onclick="simpanproduk()">Simpan</button>
    	</div>


      <script>
        ClassicEditor
            .create( document.querySelector( '#deskripsi_produk' ))
            .then( editor => {
                deskprod = editor;
            } )
            .catch( error => {
                console.error( error );
            } );
      </script>


