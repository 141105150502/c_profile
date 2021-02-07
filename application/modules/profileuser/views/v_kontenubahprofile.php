				<?php 
                   $foto = $this->db->get_where('base_user', ['email' => $this->session->userdata('email')])->row()->foto;
                   ?>

						<div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Ubah Profile</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					    </div>
					    <div class="modal-body">
					        <form id="formeditprofile" enctype="multipart/form-data">
							  <div class="form-group row">
							    <label for="username" class="col-sm-2 col-form-label">Username</label>
							    <div class="col-sm-10">
							      <input type="hidden" id="id_user" name="id_user" value="<?php echo $datauser->id_user; ?>">

							      <input type="text" placeholder="Username" name="username" class="form-control" id="username" value="<?php echo $datauser->username ?>">
							    </div>
							  </div>
							  <div class="form-group row">
							    <label for="no_telp" class="col-sm-2 col-form-label">Nomor Telepon</label>
							    <div class="col-sm-10">
							      <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Nomor Telepon" value="<?php echo $datauser->no_telp ?>">
							    </div>
							  </div>
							  <div class="form-group row">
							    <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
							    <div class="col-sm-10">
							      <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" value="<?php echo $datauser->pekerjaan ?>">
							    </div>
							  </div>
							  <div class="form-group row">
							    <label for="pekerjaan" class="col-sm-2 col-form-label">Status Hak Akses</label>
							    <div class="col-sm-10">
							    <select name="hakaccess" id="" class="form-control">
							    	<?php $baserole = $this->db->get('base_role')->result(); ?>
							    	<?php foreach ($baserole as $br): ?>
								    	<option value="" <?php if ($datauser->ur_id_role == $br->id_role){ echo 'selected';} ?> ><?php echo $br->nama_role ?></option>
							    	<?php endforeach ?>
							    </select>
							    </div>
							  </div>
							  <div class="form-group row">
							    <label for="foto" class="col-sm-2 col-form-label">Foto</label>
							    <!-- <div class="col-sm-10">
							      <input type="file" id="foto" name="foto" >
							      <input type="hidden" id="old_foto" name="old_foto" value="<?php echo $datauser->foto; ?>">
							    </div> -->
							    <div class="col-sm-3">
							      <img class="img-thumbnail" src="<?php echo base_url() ?>assets/gambar/userimage/<?php echo $datauser->foto; ?>" alt="" style="width: 100px, height:110px;">
							    </div>
							    <div class="col-sm-3">
							    	<div class="badge badge-warning mb-3">Note: ukuran maksisma 2 Mb 500 x 500 pixel</div>
								    <input type="file" id="foto" name="foto" >
								    <input type="hidden" id="old_foto" name="old_foto" value="<?php echo $datauser->foto; ?>">
							    </div>
							  </div>
							</form>
					    </div>
					    <div class="modal-footer">
					    	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					     	<button type="button" class="btn btn-primary" onclick="editprofile()">Save changes</button>
					    </div>