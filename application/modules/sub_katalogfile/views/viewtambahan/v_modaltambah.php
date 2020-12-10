       
    	<div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><?php echo $title ?> </h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	    </div>
    	<div class="modal-body">
        <form id="formadd" enctype="multipart/form-data">
            
            <div class="form-group row">
              <label for="keterangan_file" class="col-sm-2 col-form-label">Keterangan File</label>
              <div class="col-sm-10">
                <textarea placeholder="keterangan file" class="form-control" name="keterangan_subfile" id="ulasan_singkat"></textarea>
                <input type="hidden" name="tsf_id_file" value="<?php echo $id_filenya ?>">
              </div>
            </div>

            <div class="form-group row">
              <label for="ulasan_singkat" class="col-sm-2 col-form-label">File</label>
              <div class="col-sm-10">
                <input type="file" name="filenya">
              </div>
            </div>

        </form>
    	</div>
    	<div class="modal-footer">
     	 	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      	<button type="button" class="btn btn-primary" onclick="simpanfile()">Simpan</button>
    	</div>


