
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
                                    <table class="table table-hover">
                                        <tr>
                                            <td width="30%">Nama Perusahaan</td>
                                            <td><?php echo $cprofile->nama_perusahaan ?></td>
                                        </tr>
                                        <tr>
                                            <td>Alamat Perusahaan</td>
                                            <td><?php echo $cprofile->alamat_perusahaan ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nomor telepon Perusahaan</td>
                                            <td><?php echo $cprofile->telepon_perusahaan ?></td>
                                        </tr>
                                        <tr>
                                            <td>Deskripsi Singkat Perusahaan</td>
                                            <td><?php echo $cprofile->deskripsi_singkat ?></td>
                                        </tr>
                                        <tr>
                                            <td>Lokasi GPS</td>
                                            <td><?php echo $cprofile->lokasi_gps ?></td>
                                        </tr>

                                        <tr>
                                            <td>Nama Facebook Perusahaan</td>
                                            <td><?php echo $cprofile->facebook_perusahaan ?></td>
                                        </tr>
                                        <tr>
                                            <td>Link Url Facebook Perusahaan</td>
                                            <td><?php echo $cprofile->link_facebook ?></td>
                                        </tr>
                                         <tr>
                                            <td>Link twiter Perusahaan</td>
                                            <td><?php echo $cprofile->twiter_perusahaan ?></td>
                                        </tr>
                                        <tr>
                                            <td>Link Url twiter Perusahaan</td>
                                            <td><?php echo $cprofile->link_twiter ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Instagram Perusahaan</td>
                                            <td><?php echo $cprofile->instagram_perusahaan ?></td>
                                        </tr>
                                        <tr>
                                            <td>Link Url Instagram Perusahaan</td>
                                            <td><?php echo $cprofile->link_instagram ?></td>
                                        </tr>
                                        <tr>
                                            <td>Gambar Perusahaan</td>
                                            <td><img src="<?php echo base_url() ?>assets/gambar/profile_perusahaan/<?php echo $cprofile->gambar_perusahaan ?>" class="img-thumbnail mt-3 mb-3" alt="" width="150px"></td>
                                        </tr>
                                        <tr>
                                            <td>Logo Perusahaan</td>
                                            <td><img src="<?php echo base_url() ?>assets/gambar/profile_perusahaan/<?php echo $cprofile->logo_perusahaan ?>" alt="" class="img-thumbnail mt-3 mb-3" width="150px"></td>
                                        </tr>
                                         
                                        
                                    </table>
                                  
								</div>
                                <div class="card-footer">
                                      <button type="submit" class="btn btn-primary pull-right" onclick="editmodal(<?php echo $cprofile->id_profileperusahaan ?>)">Ubah</button>
                                    
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

    function simpanslider(){
    	// alert('ok') 
        // console.log(isiberita1.getData())

    	var formdata = new FormData($('#formadd')[0]);
        // console.log(formdata);

    	// alert(formdata);
    	$.ajax({
    		url:'<?php echo base_url() ?><?php echo $this->uri->segment(1) ?>/saveslider',
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
	    			$('#modaltambah').modal('hide');
	    			reload_table();

    			}
    		}
    	})

    }


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

     function editinfo(){
    	
        var formdata = new FormData($('#formedit')[0]);
        // console.log(formdata);

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
                    reload_table();
                    window.location.href ="<?php echo base_url().$this->uri->segment(1) ?>"

                }
            }
        })
    }

    function hapusdata(id){
    Swal.fire({
	  title: 'Yakin menghapus data ini?',
	  text: "Dat yang di hapus tidak bisa di kembalikan kembali",
	  icon: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Ya, Hapus!'
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
					      'Deleted!',
					      'Data Berhasil di Delete.',
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
 
</script>