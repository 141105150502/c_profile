    	<div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><?php echo $title ?></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	    </div>
    	<div class="modal-body">
       <form id="formaddrole" enctype="multipart/form-data">
          <div class="form-group">
            <label for="exampleInputEmail1">Sejarah Perusahaan</label>
            <!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> -->
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            <textarea name="sejarah_pperusahaan" class="form-control" id="sejarah_p"></textarea>
          </div>
        </form>
    	</div>
    	<div class="modal-footer">
     	 	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      	<button type="button" class="btn btn-primary" onclick="simpanrole()">Save changes</button>
    	</div>