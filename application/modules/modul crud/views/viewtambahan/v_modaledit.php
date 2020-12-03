    	<div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><?php echo $title ?></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	    </div>
    	<div class="modal-body">
        <?php var_dump($menu) ?>
     <!--   <form id="formeditrole" enctype="multipart/form-data">
          <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Role</label>
            <div class="col-sm-10">
              <input type="text" placeholder="role" name="role" class="form-control" id="role" value="<?php echo $result->nama_role ?>">
              <input type="hidden" placeholder="role_id" name="role_id" class="form-control" id="role_id" value="<?php echo $result->role_id ?>">
            </div>
          </div>
        </form> -->
    	</div>
    	<div class="modal-footer">
     	 	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      	<button type="button" class="btn btn-primary" onclick="editrole()">Simpan</button>
    	</div>