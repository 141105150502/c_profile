    	<div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><?php echo $title ?></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	    </div>
    	<div class="modal-body">
       <form id="formedit_data" enctype="multipart/form-data">
          <form id="formadd_data" enctype="multipart/form-data">
          <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
              <input type="hidden" name="id_user" value="<?php echo $result->id_user ?>">
              <input type="text" placeholder="Username" name="username" class="form-control" id="username" value="<?php echo $result->username ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="text" placeholder="email" name="email" class="form-control" id="email" value="<?php echo $result->email ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" placeholder="password" name="password" class="form-control" id="password">
            </div>
          </div>
          <div class="form-group row">
            <label for="password2" class="col-sm-2 col-form-label">Re-type Password</label>
            <div class="col-sm-10">
              <input type="password" placeholder="Re-type Password" name="password2" class="form-control" id="password2" >
            </div>
          </div>
          <div class="form-group row">
            <label for="no_telp" class="col-sm-2 col-form-label">Nomor Telepon</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Nomor Telepon" name="no_telp" class="form-control" id="no_telp" value="<?php echo $result->no_telp ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Pekerajaan" name="pekerjaan" class="form-control" id="pekerjaan" value="<?php echo $result->pekerjaan ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="no_telp" class="col-sm-2 col-form-label">User Aktif</label>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="user_aktif" id="user_aktif" value="1" <?php if ($result->user_aktif == 1) { echo 'checked';} ?>>
                <label class="form-check-label" for="user_aktif">
                  Aktif
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="user_aktif" id="user_aktif2" value="0" <?php if ($result->user_aktif == 0) { echo 'checked';} ?>>
                <label class="form-check-label" for="user_aktif2">
                  Non Aktif
                </label>
              </div>
            </div>
          </div>


          <div class="form-group row">
            <label for="pekerjaan" class="col-sm-2 col-form-label">foto</label>
            <div class="col-sm-10">
              <img width="100px" src="<?php echo base_url() ?>assets/gambar/userimage/<?php echo $result->foto ?>" alt="">
            </div>
          </div>

          <div class="form-group row">
            <label for="foto" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <input type="file" placeholder="Foto" name="foto" id="foto">
              <input type="hidden" placeholder="Foto" name="old_foto" id="foto" value="<?php echo $result->foto ?>">
            </div>
          </div>

          <div class="form-group row">
            <label for="role" class="col-sm-2 col-form-label">Role</label>
            <div class="col-sm-10">
              <div class="form-group row">
                <?php $role = $this->db->get('base_role')->result(); ?>
                <?php foreach ($role as $rl): ?>
                <div class="form-check col-sm-4">
                  <input type="radio" class="form-check-input" name="role" value="<?php echo $rl->id_role ?>" <?php echo checkroleuser($rl->id_role,$result->id_user ); ?>>
                  <label class="form-check-label" for="role">
                      <?php echo $rl->nama_role ?>
                  </label>
                </div>
                <?php endforeach ?>
                
              </div>
            </div>
          </div>
        </form>
        </form>
    	</div>
    	<div class="modal-footer">
     	 	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      	<button type="button" class="btn btn-primary" onclick="editdata()">Simpan</button>
    	</div>