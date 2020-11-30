      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><?php echo $title ?></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	    </div>
    	<div class="modal-body">
       <form id="formaddmenu" enctype="multipart/form-data">
          <div class="form-group row">
            <label for="nama_menu" class="col-sm-2 col-form-label">Nama Menu</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Nama Menu" name="nama_menu" class="form-control" id="nama_menu" value="<?php echo $get_menu->nama_menu ?>">
              <input type="hidden" placeholder="id_menu" name="id_menu" class="form-control" id="id_menu" value="<?php echo $get_menu->id_menu ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="parent_menu" class="col-sm-2 col-form-label">Parent Menu</label>
            <div class="col-sm-10">
               <select name="parent_menu" class="form-control" id="parent_menu">
                <option value="0" selected>Pilih parent sub menu</option>
                <?php foreach ($parent_menu as $pm): ?>
                  <?php if ($get_menu->parent_menu == $pm->id_menu): ?>
                  <option value="<?php echo $pm->id_menu ?>" selected><?php echo $pm->nama_menu?></option>                  
                  <?php endif ?>
                  <option value="<?php echo $pm->id_menu ?>"><?php echo $pm->nama_menu?></option>                  
                <?php endforeach ?>
              </select>

            </div>
          </div>
     
          <div class="form-group row">
            <label for="url" class="col-sm-2 col-form-label">Url</label>
            <div class="col-sm-10">
              <input type="text" placeholder="url" name="url" class="form-control" id="url" value="<?php echo $get_menu->url ?>">
            </div>
          </div>

          <div class="form-group row">
            <label for="icon" class="col-sm-2 col-form-label">Icon</label>
            <div class="col-sm-10">
              <table>
                <tr>
                  <td> <input type="radio" name="icon" value="fa fa-circle" checked="on"> &nbsp; <i class="fa fa-circle"></i> &nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="fas fa-address-card"> &nbsp;<i class="fas fa-address-card"></i> &nbsp; &nbsp; &nbsp; </td>
                  <td> <input type="radio" name="icon" value="fa fa-columns"> &nbsp;<i class="fa fa-columns"></i> &nbsp; &nbsp; &nbsp; </td>
                  <td> <input type="radio" name="icon" value="fas fa-archive"> &nbsp;<i class="fas fa-archive"></i> &nbsp; &nbsp; &nbsp; </td>
                  <td> <input type="radio" name="icon" value="fas fa-briefcase"> &nbsp;<i class="fas fa-briefcase"></i>&nbsp; &nbsp; &nbsp; </td>
                  <td> <input type="radio" name="icon" value="fas fa-building"> &nbsp;<i class="fas fa-building"></i>&nbsp; &nbsp;  &nbsp; </td>
                  <td> <input type="radio" name="icon" value="far fa-building"> &nbsp;<i class="far fa-building"></i>&nbsp; &nbsp; &nbsp; </td>
                  <td> <input type="radio" name="icon" value="fa fa-link"> &nbsp;<i class="fa fa-link"></i>&nbsp; &nbsp; &nbsp; </td>
                  <td> <input type="radio" name="icon" value="fa fa-list"> &nbsp;<i class="fa fa-list"></i>&nbsp; &nbsp; &nbsp; </td>
                  <td> <input type="radio" name="icon" value="fa fa-list-alt"> &nbsp;<i class="fa fa-list-alt"></i>&nbsp; &nbsp; &nbsp; </td>
                </tr>

                <tr>
                  <td> <input type="radio" name="icon" value="fa fa-paperclip"> &nbsp;<i class="fa fa-paperclip"></i>&nbsp; &nbsp; &nbsp; </td>
                  <td> <input type="radio" name="icon" value="fa fa-paste"> &nbsp;<i class="fa fa-paste"></i>&nbsp; &nbsp; &nbsp; </td>
                  <td> <input type="radio" name="icon" value="fa fa-th"> &nbsp;<i class="fa fa-th"></i>&nbsp; &nbsp; &nbsp; </td>
                  <td> <input type="radio" name="icon" value="fas fa-bullhorn"> &nbsp;<i class="fas fa-bullhorn"></i>&nbsp; &nbsp; &nbsp; </td>
                  <td> <input type="radio" name="icon" value="fa fa-th-list"> &nbsp;<i class="fa fa-th-list"></i>&nbsp; &nbsp; &nbsp; </td>
                  <td> <input type="radio" name="icon" value="fa fa-unlink"> &nbsp;<i class="fa fa-unlink"></i>&nbsp; &nbsp; &nbsp; </td>
                  <td> <input type="radio" name="icon" value="fas fa-bullseye"> &nbsp;<i class="fas fa-bullseye"></i>&nbsp; &nbsp; &nbsp; </td>
                  <td> <input type="radio" name="icon" value=" fas fa-file"> &nbsp;<i class="  fas fa-file"></i>&nbsp; &nbsp; &nbsp; </td>
                  <td> <input type="radio" name="icon" value="fas fa-calendar"> &nbsp;<i class="  fas fa-calendar"></i>&nbsp; &nbsp; &nbsp; </td>
                  <td> <input type="radio" name="icon" value="far fa-calendar-alt"> &nbsp;<i class="  far fa-calendar-alt"></i>&nbsp; &nbsp; &nbsp;   </td>
                </tr>

                <tr>
                  <td> <input type="radio" name="icon" value=" fas fa-chart-area"> &nbsp;<i class=" fas fa-chart-area"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="fas fa-chart-bar"> &nbsp;<i class="fas fa-chart-bar"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value=" far fa-chart-bar"> &nbsp;<i class="  far fa-chart-bar"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value=" fas fa-chart-line"> &nbsp;<i class=" fas fa-chart-line"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value=" fas fa-chart-pie"> &nbsp;<i class=" fas fa-chart-pie"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="fas fa-fax"> &nbsp;<i class="fas fa-fax"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="fas fa-clipboard"> &nbsp;<i class="fas fa-clipboard"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value=" far fa-clipboard"> &nbsp;<i class="  far fa-clipboard"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value=" fas fa-coffee"> &nbsp;<i class="   fas fa-coffee"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value=" fas fa-columns"> &nbsp;<i class="   fas fa-columns"></i>&nbsp; &nbsp; &nbsp;</td>
                </tr>

                <tr>
                  <td> <input type="radio" name="icon" value="fas fa-compass"> &nbsp;<i class="fas fa-compass"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="far fa-compass"> &nbsp;<i class="far fa-compass"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="fas fa-copy"> &nbsp;<i class="fas fa-copy "></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="far fa-copy"> &nbsp;<i class="far fa-copy"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="fas fa-copyright"> &nbsp;<i class="fas fa-copyright"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="far fa-copyright"> &nbsp;<i class="far fa-copyright"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="fas fa-clipboard"> &nbsp;<i class="fas fa-clipboard"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="fas fa-edit"> &nbsp;<i class="fas fa-edit"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="far fa-edit"> &nbsp;<i class="far fa-edit"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="fas fa-envelope-open"> &nbsp;<i class="fas fa-envelope-open"></i>&nbsp; &nbsp; &nbsp;</td>
                </tr>

                <tr>
                  <td> <input type="radio" name="icon" value="far fa-file"> &nbsp;<i class="  far fa-file"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="fas fa-file-alt"> &nbsp;<i class="fas fa-file-alt"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="far fa-file-alt"> &nbsp;<i class="far fa-file-alt "></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="fas fa-folder"> &nbsp;<i class="fas fa-folder"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="far fa-folder"> &nbsp;<i class="far fa-folder"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value=" fas fa-paperclip"> &nbsp;<i class=" fas fa-paperclip"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="fas fa-useer"> &nbsp;<i class="fas fa-tags"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="far fa-folder-open"> &nbsp;<i class="far fa-folder-open"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value=" fas fa-paste"> &nbsp;<i class=" fas fa-paste"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="fas fa-globe"> &nbsp;<i class="  fas fa-globe"></i>&nbsp; &nbsp; &nbsp;</td>
                </tr>

                <tr>
                  <td> <input type="radio" name="icon" value="fas fa-user"> &nbsp;<i class="fas fa-user"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="fas fa-users"> &nbsp;<i class="fas fa-users"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="fas fa-user-tie"> &nbsp;<i class="fas fa-user-tie"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="fas fa-tachometer-alt"> &nbsp;<i class="fas fa-tachometer-alt"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="fas fa-camera-retro"> &nbsp;<i class="fas fa-camera-retro"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="fas fa-envelope"> &nbsp;<i class="fas fa-envelope"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="fas fa-cubes"> &nbsp;<i class="fas fa-cubes"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="fas fa-id-card"> &nbsp;<i class="fas fa-id-card"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="fas fa-paper-plane"> &nbsp;<i class="fas fa-paper-plane"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="fas fa-tags"> &nbsp;<i class="fas fa-tags"></i>&nbsp; &nbsp; &nbsp;</td>
                </tr>
                <tr>
                  <td> <input type="radio" name="icon" value="fas fa-comment"> &nbsp;<i class="fas fa-comment"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="fas fa-comments"> &nbsp;<i class="fas fa-comments"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="fas fa-images"> &nbsp;<i class="fas fa-images"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="fas fa-file"> &nbsp;<i class="fas fa-file"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="fas fa-shopping-cart"> &nbsp;<i class="fas fa-shopping-cart"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="fas fa-shopping-basket"> &nbsp;<i class="fas fa-shopping-basket"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="fas fa-gift"> &nbsp;<i class="fas fa-gift"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="fas fa-newspaper"> &nbsp;<i class="fas fa-newspaper"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="fas fa-barcode"> &nbsp;<i class="fas fa-barcode"></i>&nbsp; &nbsp; &nbsp;</td>
                  <td> <input type="radio" name="icon" value="fas fa-bookmark"> &nbsp;<i class="fas fa-bookmark"></i>&nbsp; &nbsp; &nbsp;</td>
                  
                </tr>
              </table>
            </div>
          </div>
          
          <div class="form-group row">
            <label for="url" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
              <input type="checkbox" name='menu_aktif' class="form-check-input" value="1"  id="exampleCheck1" <?php if ($get_menu->menu_aktif == 1){echo 'checked="on"';} ?>> &nbsp;
              <label class="form-check-label" for="exampleCheck1" >Aktif</label>
            </div>
          </div>

        </form>
    	</div>
    	<div class="modal-footer">
     	 	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      	<button type="button" class="btn btn-primary" onclick="editmenu()">Simpan</button>
    	</div>