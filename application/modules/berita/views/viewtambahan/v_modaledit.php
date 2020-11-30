    <script src="<?php echo base_url() ?>assets/ckeditor/ckeditor.js"></script>
      
      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><?php echo $title ?></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	    </div>
    	<div class="modal-body">
          <form id="formedit" enctype="multipart/form-data">
            <div class="form-group row">
              <label for="judul_berita" class="col-sm-2 col-form-label">Judul Berita</label>
              <div class="col-sm-10">
                <input type="text" placeholder="Judul Berita" name="judul_berita" class="form-control" id="nama_judul_beritamenu" value="<?php echo $get_berita->judul_berita ?>">
                <input type="hidden" name="id_berita" value="<?php echo $get_berita->id_berita ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="kategori_berita" class="col-sm-2 col-form-label">Kategori Berita</label>
              <div class="col-sm-10">
                 <select name="kategori_berita" class="form-control" id="kategori_berita">
                  <option value="0" selected>Pilih Kategori Berita</option>
                  <?php foreach ($kategori_berita as $kb): ?>
                    <option value="<?php echo $kb->id_kategoriberita ?>" <?php if ($kb->id_kategoriberita == $get_berita->tkat_id) {echo 'selected';} ?>><?php echo $kb->kategori_berita ;?></option>                  
                  <?php endforeach; ?>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="tanggal_terbit" class="col-sm-2 col-form-label">Tanggal terbit</label>
              <div class="col-sm-10">
                <input type="date" placeholder="Tanggal Terbit" name="tanggal_terbit" class="form-control" id="tanggal_terbit" value="<?php echo $get_berita->tanggal_berita ?>">
              </div>
            </div>

            <div class="form-group row">
              <label for="gambar_berita" class="col-sm-2 col-form-label">Gambar Berita</label>
              <div class="col-sm-10">
                <img src="<?php echo base_url() ?>assets/gambar/berita/<?php echo $get_berita->gambar_berita; ?>" alt="" width="100px">
              </div>
            </div>

            <div class="form-group row">
              <label for="gambar_berita" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                <input type="file" placeholder="Gambar Berita" name="gambar_berita" id="gambar_berita">
                <input type="hidden" placeholder="Gambar Berita" name="gambar_beritalama" id="gambar_beritalama" value="<?php echo $get_berita->gambar_berita ?>">
              </div>
            </div>


            <div class="form-group row">
              <label for="ulasan_singkat" class="col-sm-2 col-form-label">Ulasan singkat</label>
              <div class="col-sm-10">
                <textarea placeholder="Gambar Berita" class="form-control" name="ulasan_singkat" id="ulasan_singkat" cols="30" rows="5"><?php echo $get_berita->ulasan_berita ?></textarea>
              </div>
            </div>

            <div class="form-group row">
              <label for="isi_berita1" class="col-sm-2 col-form-label">Isi Berita</label>
              <div class="col-sm-10">
                <textarea name="isi_berita2"  id="isi_berita2"><?php echo $get_berita->isi_berita ?></textarea>
              </div>
            </div>

        </form>
    	</div>
    	<div class="modal-footer">
     	 	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      	<button type="button" class="btn btn-primary" onclick="editmenu()">Simpan</button>
    	</div>



      <script>
        isiberita2 = CKEDITOR.replace('isi_berita2');
      </script>