		
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
                                    <?php $vismis = $this->db->get('t_profileperusahaan')->row(); ?>
									<button onclick="editmodal(<?php echo $vismis->id_profileperusahaan ?>)" class="btn btn-primary mb-3">Edit <?php echo $tittle ?> </button>
                                    <table class="table">
                                        <tr>
                                            <th>
                                              <?php echo $vismis->sejarah_perusahaan ?>
                                            </th>
                                        </tr>
                                    </table>
									
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

    var sejarah;
    var idnya;



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

    

	  function editmodal(id_profileperusahaan){
    	$.ajax({
    		url:'<?php echo base_url() ?><?php echo $this->uri->segment(1) ?>/viewmodaledit/'+id_profileperusahaan,
    		type:'get',
    		success: function(respon){
    			$('#modaledit').modal('show');
    			$('#wrapedit').html(respon)
    		}
    	})
    }


    



    function editvisimisi(){
        const isi = sejarah.getData();



    	$.ajax({
    		url:'<?php echo base_url() ?><?php echo $this->uri->segment(1) ?>/editsejarah',
    		type:'post',
    		data:{
                  'sejarah':isi,
                  'id_profileperusahaan':idnya
                 },
    		dataType:'json',
    		success: function(respon){
    			if (respon.status == false) {
    				Swal.fire('Informasi',respon.pesan);
    			}else{
	    			$('#modaledit').modal('hide');
    				Swal.fire('Informasi',respon.pesan);
                    window.location.href = "<?php echo base_url() ?><?php echo $this->uri->segment(1) ?>"

    			}
    		}
    	}) 

    }


 
</script>