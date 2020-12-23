      

      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><?php echo $title ?></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	    </div>
    	<div class="modal-body">
         <form id="formedit" enctype="multipart/form-data">
            <div class="form-group row">
              <label for="nama_produk" class="col-sm-2 col-form-label">Nama Produk</label>
              <div class="col-sm-10">
                <input type="text" placeholder="Nama Produk" name="nama_produk" class="form-control" id="nama_produk" value="<?php echo $get_produk->nama_produk ?>">
                <input type="hidden" name="id_produk"  value="<?php echo $get_produk->id_produk ?>">
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
              <label for="gambar_produk" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                <img src="<?php echo base_url() ?>assets/gambar/produk/<?php echo $get_produk->gambar_produk ?>" alt="" width="200px">
                <input type="hidden" name="gambar_lama" value="<?php echo $get_produk->gambar_produk ?>">
              </div>
            </div>

            <div class="form-group row">
              <label for="deskripsi_produk" class="col-sm-2 col-form-label">Deskripsi Produk</label>
              <div class="col-sm-10">
                <textarea placeholder="Deskripsi Produk" class="form-control" name="deskprod1" id="deskprod1"><?php echo $get_produk->deskripsi_produk ?></textarea>
              </div>
            </div>
        </form>
    	</div>
    	<div class="modal-footer">
     	 	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      	<button type="button" class="btn btn-primary" onclick="editdata()">Simpan</button>
    	</div>



      <script>
                
        ClassicEditor
            .create( document.querySelector( '#deskprod1' ))
            .then( editor => {
                deskprod1 = editor;
            } )
            .catch( error => {
                console.error( error );
            } );
      </script>

