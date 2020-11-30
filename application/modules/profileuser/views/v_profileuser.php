
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<h4 class="page-title">My Profile</h4>

					<div class="row">
						<div class="col-md-4">
							<div class="card card-profile">
								<div class="card-header" style="background-image: url('<?php echo base_url() ?>assets/img/blogpost.jpg')">
									<div class="profile-picture">
										<div class="avatar avatar-xl">
											<img src="<?php echo base_url() ?>assets/gambar/userimage/<?php echo $resultuser->foto; ?>" alt="..." class="avatar-img rounded-circle">
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="user-profile text-center">
										<div class="name"><?php echo $this->session->userdata('username'); ?></div>
										<div class="job">Frontend Developer </div>
										<div class="desc">A man who hates loneliness</div>
										<div class="social-media">
											<a class="btn btn-info btn-twitter btn-sm btn-link" href="#"> 
												<span class="btn-label just-icon"><i class="flaticon-twitter"></i> </span>
											</a>
											<a class="btn btn-danger btn-sm btn-link" rel="publisher" href="#"> 
												<span class="btn-label just-icon"><i class="flaticon-google-plus"></i> </span> 
											</a>
											<a class="btn btn-primary btn-sm btn-link" rel="publisher" href="#"> 
												<span class="btn-label just-icon"><i class="flaticon-facebook"></i> </span> 
											</a>
											<a class="btn btn-danger btn-sm btn-link" rel="publisher" href="#"> 
												<span class="btn-label just-icon"><i class="flaticon-dribbble"></i> </span> 
											</a>
										</div>
										<div class="view-profile">
											<!-- <a href="#" class="btn btn-secondary btn-block">View Full Profile</a> -->
										</div>
									</div>
								</div>
							
							</div>
						</div>

						<div class="col-md-8 ">
							<div class="card card-body">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
								  <li class="nav-item">
								    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="home" aria-selected="true">Profile</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="ubahpassword-tab" data-toggle="tab" href="#ubahpassword" role="tab" aria-controls="ubahpassword" aria-selected="true">Ubah Password</a>
								  </li>
								</ul>
								<div class="tab-content" id="myTabContent">
								 	<div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="home-tab">
								 	
								 		<table class="table">
								 			<tr>
								 				<th width="20%">Username</th>
								 				<td align="left"><?php echo $resultuser->username ?></td>
								 			</tr>
								 			<tr>
								 				<th width="20%">Email</th>
								 				<td align="left"><?php echo $resultuser->email ?></td>
								 			</tr>
								 			<tr>
								 				<th width="20%">Nomor Telepon</th>
								 				<td align="left"><?php echo $resultuser->no_telp ?></td>
								 			</tr>

								 			<tr>
								 				<th width="20%">Pekerjaan</th>
								 				<td align="left"><?php echo $resultuser->pekerjaan ?></td>
								 			</tr>
								 			<tr>
								 				<th width="20%">Status Hak Akses</th>
								 				<td align="left"><?php echo $resultuser->nama_role  ?></td>
								 			</tr>
								 			
								 		</table>
								 		<button class="btn btn-sm btn-primary pull-right"  onclick="modaleditprofile()">Ubah Profile</button>					
								 	</div>

								 	<div class="tab-pane fade" id="ubahpassword" role="tabpanel" aria-labelledby="ubahpassword-tab">
								 		<form id="formubahpassword">
										 	<div class="form-group mb-3">
												<label for="password">Password saat ini</label>
												<input type="password" name="passwordsaatini" class="form-control" id="password" placeholder="Password Saat Ini">
												<small id="emailHelp2" class="form-text text-muted text-info">Password yang anda gunakan saat ini</small>
											</div>
											<hr>
											<div class="form-group">
												<label for="passwordbaru">Password Baru</label>
												<input type="password" name="passwordbaru" class="form-control" id="passwordbaru" placeholder="Password Baru">
											</div>
											<div class="form-group">
												<label for="passwordbaru2">Retype Password Baru</label>
												<input type="password"  name="passwordbaru2" class="form-control" id="passwordbaru2" placeholder="Retype Password Baru">
											</div>
									 		<button type="button" class="btn btn-sm btn-primary pull-right"  onclick="ubahpassword()">Ubah passeword</button>					
								 		</form>
								 	</div>
									
								</div>
							</div>
						</div>
						
					</div>

				</div>

				
				
			</div>





			<!-- Modal -->
			<div class="modal fade" id="modaleditprofil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  	<div class="modal-dialog modal-lg">
			    	<div class="modal-content">
					    <div id="isieditprofile"></div>
			    	</div>
			 	</div>
			</div>




<script>

	function modaleditprofile(){

		$.ajax({
			url:'<?php echo base_url() ?><?php echo $this->uri->segment(1) ?>/modaledit',
			type:'get',
			success:function(respon){
				$('#modaleditprofil').modal('show'); 
				$('#isieditprofile').html(respon);
			}

		})

	}

	function editprofile(){

		var formdata = new FormData($('#formeditprofile')[0]);

		$.ajax({
            url:'<?php echo base_url() ?><?php echo $this->uri->segment(1) ?>/editprofile',
            type:"post",
            data:formdata,
            dataType:'json',
            processData:false,
            contentType:false,
            cache:false,
            async:false,
            success: function(data){
                if (data.status) {
                	Swal.fire('info',data.pesan);
                  	window.location.href = '<?php echo base_url() ?><?php echo $this->uri->segment(1) ?>'
                }else{
                  	Swal.fire('info',data.pesan);
                }
            }
        });
	}




	function ubahpassword(){
		const formData = $('#formubahpassword').serialize();


    	// alert(formdata);
    	$.ajax({
    		url:'<?php echo base_url() ?><?php echo $this->uri->segment(1) ?>/ubahpassword',
    		type:'post',
    		dataType:'json',
    		data:formData,
    		success: function(respon){

    			if (respon.status == false) {
    				Swal.fire( 'Info',respon.pesan);
    			}else{
    				Swal.fire('Informasi', respon.pesan);
	    			window.location.href ="<?php echo base_url() ?><?php echo $this->uri->segment(1) ?>"

    			}
    		}
    	})
	
	}

	
	
</script>
