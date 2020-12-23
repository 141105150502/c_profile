      
      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><?php echo $title ?></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	    </div>
    	<div class="modal-body">
        <form id="formedit" enctype="multipart/form-data">
          <div class="form-group row">
            <label for="judulslider" class="col-sm-2 col-form-label">Judul Slider</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Judul Slider" name="judul_slider" class="form-control" id="judulslider" value="<?php echo $get_slider->judul_slider ?>">
              <input type="hidden" name="id_slider" value="<?php  echo $get_slider->id_slider ?>">
            </div>
          </div>

          <div class="form-group row">
            <label for="minitext_slider" class="col-sm-2 col-form-label">Mini Text Slider</label>
            <div class="col-sm-10">
              <textarea placeholder="Gambar Berita" class="form-control" name="minitext_slider" id="ulasan_singkat"><?php echo $get_slider->minitext_slider ?></textarea>

            </div>
          </div>

          <div class="form-group row">
            <label for="gambar_slider" class="col-sm-2 col-form-label">Gambar Slider</label>
            <div class="col-sm-3">
              <img class="img-thumbnail" width="100%" src="<?php echo base_url() ?>assets/gambar/slider/<?php echo $get_slider->gambar_slider ?>"  alt="" width="100px">&nbsp;&nbsp;
            </div>
            <div class="col-sm-7">
              <span class="badge badge-warning">Note : maxsiaml 2 Mb, ukuran gambar 1500 x 450 pixel. </span>
            </div>
          </div>

          <div class="form-group row">
            <label for="gambar_slider" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <input type="file" placeholder="Gambar Slider" name="gambar_slider" id="gambar_slider">
              <input type="hidden" placeholder="Gambar Slider" name="gambar_sliderold" id="gambar_sliderold" value="<?php echo $get_slider->gambar_slider?>">
            </div>
          </div>

          <div class="form-group row">
            <label for="ulasan_singkat" class="col-sm-2 col-form-label">Aktif Slider</label>
            <div class="col-sm-10">
              <input type="checkbox" name="aktif_slider" <?php if ($get_slider->aktif_slider == 1){echo 'checked="on"'; } ?> value="1" class="form-check-input"> <label for="label">&nbsp;  Aktif</label>
            </div>
          </div>
        </form>
    	</div>
    	<div class="modal-footer">
     	 	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      	<button type="button" class="btn btn-primary" onclick="editslider()">Simpan</button>
    	</div>

