      
      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><?php echo $title ?></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	    </div>
    	<div class="modal-body">
          <form id="formedit" enctype="multipart/formdata">
            <div class="form-group">
                <label for="nama_perusahaan">Nama Perusahaan</label>
                <input type="text" name="nama_perusahaan" class="form-control" id="nama_perusahaan" value="<?php echo $get_company->nama_perusahaan ?>">
                <input type="hidden" name="id_profileperusahaan" class="form-control" id="id_profileperusahaan" value="<?php echo $get_company->id_profileperusahaan ?>">
            </div>
            <div class="form-group">
                <label for="alamat_perusahaan">Alamat Perusahaan</label>
                <input type="text" name="alamat_perusahaan" class="form-control" id="alamat_perusahaan"  value="<?php echo $get_company->alamat_perusahaan ?>">
            </div>
            <div class="form-group">
                <label for="nomor_telepon_perusahaan">Nomor Telepon Perusahaan</label>
                <input type="text" name="telepon_perusahaan" class="form-control" id="telepon_perusahaan" value="<?php echo $get_company->telepon_perusahaan ?>">
            </div>

            <div class="form-group">
                <label for="link_facebook">Peta lokasi perusahaan</label>
                <textarea name="lokasi_gps" class="form-control" id="link_facebook" ><?php echo $get_company->lokasi_gps ?></textarea>
            </div>

            <div class="form-group">
                <label for="nama_facebook_perusahaan">Nama Facebook Perusahaan</label>
                <input type="text" name="facebook_perusahaan" class="form-control" id="nama_facebook_perusahaan" aria-describedby="textHelp" value="<?php echo $get_company->facebook_perusahaan ?>">
            </div>

            <div class="form-group">
                <label for="link_facebook">Link url facebook Perusahaan</label>
                <textarea name="link_facebook" class="form-control" id="link_facebook" name="link_facebook_perusahaan"><?php echo $get_company->link_facebook ?></textarea>
            </div>

            <div class="form-group">
                <label for="nama_twiter_perusahaan">Nama twiter Perusahaan</label>
                <input type="text" name="twiter_perusahaan" class="form-control" id="nama_twiter_perusahaan" value="<?php echo $get_company->twiter_perusahaan ?>">
            </div>

            <div class="form-group">
                <label for="link_url_twiter">link url twiter Perusahaan</label>
                <textarea name="link_twiter" class="form-control" name="link_twiter"><?php echo $get_company->link_twiter ?></textarea>
            </div>

            <div class="form-group">
                <label for="nama_instagram">Nama instagram Perusahaan</label>
                <input type="text" name="instagram_perusahaan" class="form-control" id="nama_instagram" value="<?php echo $get_company->instagram_perusahaan ?>">
            </div>

            <div class="form-group">
                <label for="link_instagram_perusahaan">link url instagram Perusahaan</label>
                <textarea class="form-control" id="link_instagram_perusahaan" name="link_instagram"><?php echo $get_company->link_instagram ?></textarea>
            </div>

            <div class="form-group">
                <label for="gambar_perusahaan">gambar Perusahaan</label>
                <div class="row">
                  <div class="col-md-4">
                    <img src="<?php echo base_url() ?>assets/gambar/profile_perusahaan/<?php echo $get_company->gambar_perusahaan ?>" class="img-thumbnail mt-3 mb-3" width="250px" alt="">
                  </div>
                  <div class="col-md-8">
                    <input type="file" name="gambar_perusahaan" id="gambar_perusahaan"><br>
                    <span class="badge badge-warning">Note: Ukuran max 2 Mb, 200 x 150 pixel</span>
                    <input type="hidden" name="gambar_perusahaanold" id="gambar_lama"value="<?php echo $get_company->gambar_perusahaan ?>">
                  </div>
                </div>
            </div>

            <div class="form-group">
              <label for="logo_perusahaan">Logo Perusahaan</label>
               <div class="row">
                  <div class="col-md-4">
                    <img src="<?php echo base_url() ?>assets/gambar/profile_perusahaan/<?php echo $get_company->logo_perusahaan ?>" class="img-thumbnail mt-3 mb-3" width="250px" alt="">
                  </div>
                  <div class="col-md-8">
                    <span class="badge badge-warning">Note: Ukuran max 2 Mb, 199 x 64 pixel</span><br>
                    <input type="file" name="logo_perusahaan"  id="logo_perusahaan">
                    <input type="hidden" name="logo_perusahaanold" id="gambar_lama" value="<?php echo $get_company->logo_perusahaan ?>">

                  </div>
                </div>
            </div>

            <div class="form-group">
                <label for="exampleInputtext1">Deskripsi Singkat Perusahaan</label>
                <textarea class="form-control" name="deskripsi_singkat"><?php echo $get_company->deskripsi_singkat ?></textarea>
            </div>
        </form>
    	</div>
    	<div class="modal-footer">
     	 	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      	<button type="button" class="btn btn-primary" onclick="editinfo(<?php echo $get_company->id_profileperusahaan ?>)">Simpan</button>
    	</div>

