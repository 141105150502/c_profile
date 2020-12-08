    <script src="<?php echo base_url() ?>assets/ckeditor5/ckeditor.js"></script>
      
    	<div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><?php echo $title ?></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	    </div>
    	<div class="modal-body">
        <form id="formtambah" enctype="multipart/form-data">
           <div class="form-group">
            <label for="exampleInputEmail1">Posisi lowongan kerja</label>
            <input name="posisi_karir" class="form-control" id="posisi_karir">

         
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Deskripsi / Requirement Karir</label>
            <textarea name="deskripsi" class="form-control" id="deskripsi_karir"></textarea>
          </div>
        </form>
    	</div>
    	<div class="modal-footer">
     	 	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      	<button type="button" class="btn btn-primary" onclick="simpandata()">Save changes</button>
    	</div>


        <script>

        ClassicEditor
            .create( document.querySelector( '#deskripsi_karir' ))
            .then( editor => {
                deskripsi_karir = editor;

            } )
            .catch( error => {
                console.error( error );
            } );
      
      </script>