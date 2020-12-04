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
            <label for="exampleInputEmail1">Gambar Strutur Organisasi</label>
            <img src="<?php echo base_url() ?>assets/gambar/profile_perusahaan/<?php echo $result->struktur_organisasigambar ?>" width="100%" alt="">
            <input type="file" name="struktur_organisasigambar" class="form-control">
            <input type="hidden" name="id_profileperusahaan" class="form-control" value="<?php echo $result->id_profileperusahaan ?>">
            <input type="hidden" name="gambar_sturukturold" class="form-control" value="<?php echo $result->struktur_organisasigambar ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Deskripsi Struktur raganisasi</label>
            <textarea name="struktur_organisasideskripsi" class="form-control" id="deksripstrutur"><?php echo $result->struktur_organisasideskripsi ?></textarea>
          </div>
        </form>
    	</div>
    	<div class="modal-footer">
     	 	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      	<button type="button" class="btn btn-primary" onclick="editstruktur()">Simpan</button>
    	</div>


      <script>

        idnya = <?php echo $result->id_profileperusahaan ?>;

        ClassicEditor
            .create( document.querySelector( '#deksripstrutur' ))
            .then( editor => {
                deskripsistruktur = editor;

            } )
            .catch( error => {
                console.error( error );
            } );
      
      </script>
