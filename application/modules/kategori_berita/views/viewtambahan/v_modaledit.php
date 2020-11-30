    	<div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><?php echo $title ?></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	    </div>
    	<div class="modal-body">
       <form id="formeditkategoriberita" enctype="multipart/form-data">
          <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Kategori Berita</label>
            <div class="col-sm-10">
              <input type="text" placeholder="kategori_berita" name="kategori_berita" class="form-control" id="kategori_berita" value="<?php echo $result->kategori_berita ?>">
              <input type="hidden" placeholder="id_kategoriberita" name="id_kategoriberita" class="form-control" id="id_kategoriberita" value="<?php echo $result->id_kategoriberita ?>">
            </div>
          </div>
        </form>
    	</div>
    	<div class="modal-footer">
     	 	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      	<button type="button" class="btn btn-primary" onclick="editdata()">Simpan</button>
    	</div>