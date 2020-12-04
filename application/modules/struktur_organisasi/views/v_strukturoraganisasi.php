
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
                                      <?php $struktur = $this->db->get('t_profileperusahaan')->row(); ?>

									<button onclick="editmodal(<?php echo $struktur->id_profileperusahaan ?>)" class="btn btn-primary mb-3">Tambah <?php echo $tittle ?></button>

									<div class="table-responsive">

										<table id="table" class="display table border table-striped table-hover" cellspacing="0" width="100%">
								            <tr>
                                                <td width="50%"><img src="<?php echo base_url() ?>assets/gambar/profile_perusahaan/<?php echo $struktur->struktur_organisasigambar ?>" class="img-thumbnail" alt=""></td>
                                            </tr>
                                            <tr>
                                                <td width="50%"><?php echo $struktur->struktur_organisasideskripsi ?></td>
                                            </tr>
								        </table>
										
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

				
				
			</div>




<!-- Modal -->
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
    var deskripsistruktur;


	  function editmodal(id_berita){
    	$.ajax({
    		url:'<?php echo base_url() ?><?php echo $this->uri->segment(1) ?>/viewmodaledit/'+id_berita,
    		type:'get',
    		success: function(respon){
    			$('#modaledit').modal('show');
    			$('#wrapedit').html(respon)
    		}
    	})
    }

     function editstruktur(){
    	
        var formdata = new FormData($('#formedit')[0]);
        // console.log(formdata);deksripstruktur
        formdata.append('deskripsistruktur',deskripsistruktur.getData());  


        // alert(formdata);
        $.ajax({
            url:'<?php echo base_url() ?><?php echo $this->uri->segment(1) ?>/editdata',
            type:'post',
            dataType:'json',
            data:formdata,
            processData:false,
            contentType:false,
            cache:false,
            async:false,
            success: function(respon){
                if (respon.status == false) {
                    Swal.fire( 'Informasi',respon.pesan);
                }else{
                    Swal.fire('Informasi', respon.pesan);
                    $('#modaledit').modal('hide');
                    window.location.href ="<?php echo base_url().$this->uri->segment(1) ?>";
                    // reload_table();

                }
            }
        })
    }

   
 
</script>