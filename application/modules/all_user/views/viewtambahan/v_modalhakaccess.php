    	<div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><?php echo $title ?> <?php echo $this->db->get_where('base_role', ['id_role' => $id_role])->row()->nama_role; ?></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	    </div>
    	<div class="modal-body">

        <form id="formaccess">
          <div class="table-responsive">
            <table class="table table-bordered table-striped">
              <tr>
                <th>Nama Menu</th>
                <th>Ijin Access</th>
              </tr>
              <?php $no =1; foreach ($menu as $m): ?>
              <tr>
                <td><?php echo $m->nama_menu ?></td>
                <td>
                  <!-- <input type="checkbox" value="<?php echo $val ?>" name="menu<?php echo $m->id_menu ?>" <?php echo check_access($id_role,$m->id_menu) ?>> -->
                  <input type="checkbox" class="checkbox checkaccess" onclick="ubahhakaccess(<?php echo $m->id_menu ?>,<?php echo $id_role ?>)" <?php echo check_access($id_role,$m->id_menu) ?>>
                </td>
              </tr>
              <?php $no++ ?>
              <?php endforeach ?>
            </table>
          </div>
        </form>

    	</div>
    	<div class="modal-footer">
     	 	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      	<!-- <button type="button" class="btn btn-primary" onclick="simpanhakaccess()">Save changes</button> -->
    	</div>




      <script>
       
      </script>