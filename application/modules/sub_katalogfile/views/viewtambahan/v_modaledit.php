      
      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><?php echo $title ?></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	    </div>
    	<div class="modal-body">
         <form id="formedit" enctype="multipart/form-data">
            
            <div class="form-group row">
              <label for="keterangan_subfile" class="col-sm-2 col-form-label">Keterangan File</label>
              <div class="col-sm-10">
                <textarea placeholder="keterangan file" class="form-control" name="keterangan_subfile" id="ulasan_singkat"><?php echo $get_file->keterangan_subfile ?></textarea>
                <input type="hidden" name="id_subfile" value="<?php echo $get_file->id_subfile ?>">
                <input type="hidden" name="filelama" value="<?php echo $get_file->nama_subfile ?>">
              </div>
            </div>

            <div class="form-group row">
              <label for="ulasan_singkat" class="col-sm-2 col-form-label">File <?php echo $this->uri->segment(3) ?></label>
              <div class="col-sm-10">
                <input type="file" name="filenya">
                <span><i class="fas fa-file"></i> <?php echo $get_file->nama_subfile ?></span>
              </div>
            </div>

        </form>
    	</div>
    	<div class="modal-footer">
     	 	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      	<button type="button" class="btn btn-primary" onclick="editfile()">Simpan</button>
    	</div>

