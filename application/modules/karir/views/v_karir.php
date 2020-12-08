		
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
									<button onclick="tambahmodal()" class="btn btn-primary mb-3">Tambah karir</button>
									<button onclick="reload_table()" class="btn btn-default mb-3">Reload Table</button>
									<div class="table-responsive">

										<table id="table" class="display border table table-striped table-hover tablenya" cellspacing="0" width="100%">
								            <thead>
								                <tr>
								                    <th width="1%">No</th>
								                    <th>Posisi Karir</th>
								                    <th>Deskripsi Karir</th>
                                                    <th>Action</th>
								                </tr>
								            </thead>
								            <tbody>
								            	
								            </tbody>
								 
								            <tfoot>
								                <tr>
                                                    <th width="1%">No</th>
                                                    <th>Posisi Karir</th>
                                                    <th>Deskripsi Karir</th>
                                                    <th>Action</th>
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

<!-- modal access user -->
<div class="modal fade" id="modalaccess" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
         <div id="wrapaccess"></div>
    </div>
  </div>
</div>



<script type="text/javascript">
    var table;
    let deskripsi_karir;
    let deskripsi_karir1;
    $(document).ready(function() {
 
        //datatables
        table = $('#table').DataTable({ 
 
            "processing": true, 
            "serverSide": true, 
            "order": [], 
             
            "ajax": {
                "url": "<?php echo base_url($this->uri->segment(1).'/get_data')?>",
                "type": "POST"
            },
 
             
            "columnDefs": [
            { 
                "targets": [ 0 ], 
                "orderable": false, 
            },
            ],
 
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
    	var fdata = $('#formtambah').serialize();
    	// alert(fdata+"&deskripsi_karir="+deskripsi_karir.getData());
    	$.ajax({
    		url:'<?php echo base_url() ?><?php echo $this->uri->segment(1) ?>/tambahdata',
    		type:'post',
    		data:fdata+"&deskripsi_karir="+deskripsi_karir.getData(),
    		dataType:'json',
    		success: function(respon){

    			if (respon.pesan == false) {
    				Swal.fire('Informasi',respon.pesan);
    			}else{
    				Swal.fire('Informasi',respon.pesan);
	    			$('#modaltambah').modal('hide');
    				reload_table();
    			}
    		}
    	})
    }

	function hapuskarir(id){
	Swal.fire({
	  title: 'Anda Yakin Menghapus role Ini?',
	  text: "role yang anda hapus tidak bisa di kembalikan lagi",
	  icon: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Ya, Hapus'
		}).then((result) => {
		  if (result.value) {
		  		$.ajax({
				url:'<?php echo base_url() ?><?php echo $this->uri->segment(1) ?>/hapus/'+id,
				data:'id_karir ='+id,
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



	  function editmodal(id_karir){
    	$.ajax({
    		url:'<?php echo base_url() ?><?php echo $this->uri->segment(1) ?>/viewmodaledit/'+id_karir,
    		type:'get',
    		success: function(respon){
    			$('#modaledit').modal('show');
    			$('#wrapedit').html(respon)
    		}
    	})
    }

    function editkarir(){
    	var fdata = $('#formedit').serialize();
    	$.ajax({
    		url:'<?php echo base_url() ?><?php echo $this->uri->segment(1) ?>/editkarir',
    		type:'post',
    		data:fdata+"&deskripsi_karir1="+deskripsi_karir1.getData(),
    		dataType:'json',
    		success: function(respon){
    			if (respon.pesan == false) {
    				Swal.fire('Informasi',respon.pesan);
    			}else{
	    			$('#modaledit').modal('hide');
    				Swal.fire('Informasi',respon.pesan);

    				reload_table();


    			}
    		}
    	})

    }



  
 
</script>