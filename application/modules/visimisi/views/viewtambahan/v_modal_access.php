    	<div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><?php echo $title ?> <?php echo $role_id; ?></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	    </div>
    	<div class="modal-body">
        <div class="table-responsive">
          <table class="table border table-bordered">
            <tr>
              <th>No</th>
              <th>Nama Menu</th>
              <th>Acess</th>
            </tr>
            <?php $no=1; foreach ($menu as $m): ?>
            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $m->nama_menu; ?></td>
              <td>
                <input type="checkbox"  <?php echo check_access($role_id,$m->menu_id) ?> class="form-check-input checkid" data-role="<?php echo $role_id ?>" data-menu="<?php echo $m->menu_id ?>">
                <label class="form-check-label" for="exampleCheck1" >Access ijinkan</label>
              </td>
            </tr>
              
            <?php endforeach ?>
            
          </table>
          
        </div>
      
    	</div>
    	<div class="modal-footer">
     	 	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      	<button type="button" class="btn btn-primary" onclick="simpanaccess()">Simpan</button>
    	</div>

      <script>
      $('.checkid').on('click',function(){
        // alert('okS')
        const role_id = $(this).data('role');
        const menu_id = $(this).data('menu');
        // alert(menu_id);
        $.ajax({
          url:'<?php echo base_url() ?>role/ubahaccess',
          type:'post',
          data:{
            role_id : role_id,
            menu_id : menu_id
          },
          success:function(respon){
            Swal.fire('info','Access Berhasil Di ubah')
          }
        })

    })
      </script>