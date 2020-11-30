		
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<h4 class="page-title"><?php echo $tittle ?></h4>

					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title"><?php echo $tittle ?></h4>
								</div>
								<div class="card-body">
									<button onclick="tambahmodal()" class="btn btn-primary mb-3">Tambah Menu</button>
									<button onclick="reload_table()" class="btn btn-default mb-3">Reload table</button>
									<div class="table-responsive">

										<table id="table" class="display table-bordered table table-striped table-hover tablenya" cellspacing="0" width="100%">
								            <thead>
								                <tr>
                                                    <th width="1%">No</th>
                                                    <th>username</th>
                                                    <th>Email</th>
                                                    <th>Nomor Telepon</th>
                                                    <th>Pekerjaan</th>
                                                    <th>Role</th>
                                                    <th>Aksi</th>
                                                </tr>
								            </thead>
								            <tbody>
								            	
								            </tbody>
								 
								            <tfoot>
								                <tr>
								                 	<th>No</th>
								                    <th>username</th>
                                                    <th>Email</th>
                                                    <th>Nomor Telepon</th>
                                                    <th>Pekerjaan</th>
                                                    <th>Role</th>
								                    <th>Aksi</th>
								                </tr>
								            </tfoot>
								        </table>
										
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

				
				
			</div>




<!-- Modal tambah -->
<div class="modal fade" id="modaltambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	 <div id="wrapadd"></div>
    </div>
  </div>
</div>

<!-- modal edit -->
<div class="modal fade" id="modaledit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	 <div id="wrapedit"></div>
    </div>
  </div>
</div>




<script type="text/javascript">
    var table;
    $(document).ready(function() {
 
        //datatables
        table = $('#table').DataTable({ 
 
            "processing": true, 
            "serverSide": true, 
            "order": [], 
             
            "ajax": {
                "url": "<?php echo base_url()?><?php echo $this->uri->segment(1) ?>/get_data",
                "type": "POST"
            },
 
             
            "columnDefs": [
            { 
                "targets": [ 0 ], 
                "orderable": false,

                "className":"text-center",

            },

            { 
                "targets": [0],
                "className":"text-center",
            }
            ],

            "lengthMenu" : [[10, 25, 100, 1000, -1], [10, 25, 100,1000, "All"]],

 
        });
 
    });

    function reload_table(){
	    table.ajax.reload(null,false); //reload datatable ajax 
    	
    }



    function tambahmodal(){
    	$.ajax({
    		url:'<?php echo base_url() ?><?php echo $this->uri->segment(1) ?>/viewmodaladd',
    		type:'get',
    		success: function(respon){
    			$('#modaltambah').modal('show');
    			$('#wrapadd').html(respon)
    		}
    	})
    }

    function simpandata(){
    	// alert('ok');
    	// var fdata = $('#formadd_data').serialize();

        var fdata = new FormData($('#formadd_data')[0])
    	// alert(fdata);
    	$.ajax({
    		url:'<?php echo base_url() ?><?php echo $this->uri->segment(1) ?>/tambahdata',
    		type:'post',
    		data:fdata,
    		dataType:'json',
            processData: false,
            contentType: false,
    		success: function(respon){

    			if (respon.status == false) {
    				Swal.fire('Informasi',respon.pesan);
    			}else{
    				Swal.fire('Informasi',respon.pesan);
	    			$('#modaltambah').modal('hide');
    				reload_table();
    			}
    		}
    	})
    }

	function hapusdata(id){
	Swal.fire({
	  title: 'Anda Yakin Menghapus Menu Ini?',
	  text: "Menu yang anda hapus tidak bisa di kembalikan lagi",
	  icon: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Ya, Hapus'
		}).then((result) => {
		  if (result.value) {
		  		$.ajax({
				url:'<?php echo base_url() ?><?php echo $this->uri->segment(1) ?>/hapus/'+id,
				data:'menu_id ='+id,
				type:'post',
				dataType:'json',
				success:function(respon){
					if (respon.status == true) {
						 Swal.fire(
					      'Terhapus',
					      'Data Berhasil di Hapus.',
					      'success'
					    )
		    			reload_table();
					}else{
						 Swal.fire({
						  icon: 'error',
						  title: 'Oops...',
						  text: 'Maaf Terjadi Kesalahan',
						})

					}
				}
			})
		  }

	})
	
	}



	  function editmodal(id_user){
    	$.ajax({
    		url:'<?php echo base_url() ?><?php echo $this->uri->segment(1) ?>/viewmodaledit/'+id_user,
    		type:'get',
    		success: function(respon){
    			$('#modaledit').modal('show');
    			$('#wrapedit').html(respon)
    		}
    	})
    }

    function editdata(){
    	var fdata = new FormData ($('#formedit_data')[0]);
    	$.ajax({
    		url:'<?php echo base_url() ?><?php echo $this->uri->segment(1) ?>/editdata',
    		type:'post',
    		data:fdata,
            contentType:false,
            processData:false,
    		dataType:'json',
    		success: function(respon){
    			if (respon.pesan == false) {
    				Swal.fire(respon.pesan);
    			}else{
	    			$('#modaledit').modal('hide');
    				Swal.fire(respon.pesan);

    				reload_table();

    			}
    		}
    	})

    }









    
</script>