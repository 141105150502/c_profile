    <script src="<?php echo base_url() ?>assets/ckeditor5/ckeditor.js"></script>
      

    	<div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><?php echo $title ?></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	    </div>
    	<div class="modal-body">
         <form id="formedit" enctype="multipart/form-data">
           <div class="form-group">
            <label for="exampleInputEmail1">Posisi lowongan kerja</label>
            <input type="text" name="posisi_karir" class="form-control" id="posisi_karir" value="<?php echo $result->posisi_karir ?>">
            <input type="hidden" name="id_karir" class="form-control" id="id_karir" value="<?php echo $result->id_karir ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Deskripsi / Requirement Karir</label>
            <textarea name="deskripsi" class="form-control" id="deskripsi_karir1"><?php echo $result->deskripsi_karir ?></textarea>
          </div>
        </form>
    	</div>
    	<div class="modal-footer">
     	 	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      	<button type="button" class="btn btn-primary" onclick="editkarir()">Simpan</button>
    	</div>


        <script>
        ClassicEditor
            .create( document.querySelector( '#deskripsi_karir1' ))
            .then( editor => {
                deskripsi_karir1 = editor;

            } )
            .catch( error => {
                console.error( error );
            } );
      
      </script>