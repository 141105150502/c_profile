    <script src="<?php echo base_url() ?>assets/ckeditor5/ckeditor.js"></script>
    <!-- <script src="<?php echo base_url() ?>assets/ckeditor/ckeditor.js"></script> -->
    	
      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><?php echo $title ?></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	    </div>
    	<div class="modal-body">
       <form id="formedit" enctype="multipart/form-data">
            <div class="form-group">
            <label for="exampleInputEmail1">Visi Dan Misi Perusahaan</label>
            <textarea name="sejarah_perusahaan" class="form-control" id="sejarah"><?php echo $result->sejarah_perusahaan ?></textarea>
          </div>
        </form>
    	</div>
    	<div class="modal-footer">
     	 	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      	<button type="button" class="btn btn-primary" onclick="editvisimisi()">Simpan</button>
    	</div>



      <script>

        idnya = <?php echo $result->id_profileperusahaan ?>;

        ClassicEditor
            .create( document.querySelector( '#sejarah' ))
            .then( editor => {
                sejarah = editor;

            } )
            .catch( error => {
                console.error( error );
            } );
      
      </script>