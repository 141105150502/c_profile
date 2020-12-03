  <?php 
 $foto = $this->db->get_where('base_user', ['email' => $this->session->userdata('email')])->row()->foto;
 ?>
    <!-- Sidebar -->
    <div class="sidebar sidebar-style-2">     
      <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
          <div class="user">
            <div class="avatar-sm float-left mr-2">
              <?php $fotoavatar = $this->db->get_where('base_user',['email' => $this->session->userdata('email')])->row()->foto; ?>
              <img src="<?php echo base_url() ?>assets/gambar/userimage/<?php echo $fotoavatar; ?>" alt="..." class="avatar-img rounded-circle">
            </div>
            <div class="info">
              <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                <span>
                  <?php echo $this->session->userdata('username'); ?>
                  <span class="user-level">Administrator</span>
                  <span class="caret"></span>
                </span>
              </a>
              <div class="clearfix"></div>

              <div class="collapse in" id="collapseExample">
                <ul class="nav">
                  <li>
                    <a href="<?php echo base_url() ?>profileuser">
                      <span class="link-collapse">My Profile</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <ul class="nav nav-primary">

            <li class="nav-item">
              <a href="<?php echo base_url() ?>frontend" class="collapsed" aria-expanded="false" target="_blank">
                <i class="fas fa-home"></i>
                <p>Home Frontend</p>
              </a>
            </li>
          

            <li class="nav-section">
              <span class="sidebar-mini-icon">
                <i class="fa fa-ellipsis-h"></i>
              </span>
              <h4 class="text-section">Menu</h4>
            </li>

             <?php
             $this->db->join('base_menurole', 'base_menurole.mr_id_menu = base_menu.id_menu', 'left'); 
             $this->db->where('mr_id_role', $this->session->userdata('id_role'));
            $this->db->where('parent_menu', 0);
            $this->db->where('menu_aktif', 1);
            $menu = $this->db->get('base_menu')->result();
            ?>

            <?php foreach ($menu as $m): ?>

              <?php 
              $sub_menu = $this->db->get_where('base_menu',['parent_menu' => $m->id_menu])->num_rows();
               ?>

                 <?php if ($sub_menu == 0): ?>
                <!-- jika tidak ada parent menu di tabel basemenu tampilkan ini -->
                    <!-- cek aktif ga menu -->
                 
                     <li class="nav-item <?php if ($m->nama_menu == $tittle ){ echo 'active';} ?>">
                      <a href="<?php echo base_url() ?><?php echo $m->url ?>">
                        <i class="<?php echo $m->icon ?>"></i>
                        <p><?php echo $m->nama_menu ?></p>
                      </a>
                    </li>
                 <?php else: ?>
                  <!-- else kalo ada parent menu tampilkan ini -->
                       <?php 
                        // $this->db->where('nama_menu', );
                        $cekaktifmenu = $this->db->get_where('base_menu',['url' => $this->uri->segment(1)])->row()->parent_menu;
                        $ceksktufsubmenu = $this->db->get_where('base_menu',['url' => $this->uri->segment(1)])->row()->id_menu;
                       

                         ;?>
                    <li class="nav-item <?php if ($cekaktifmenu == $m->id_menu){echo "active";} ?>">
                      <a data-toggle="collapse" href="#<?php echo  $m->id_menu ?>" <?php if ($cekaktifmenu != $m->id_menu){echo "colapsed";} ?>>
                        <i class="fas fa-table"></i>
                     
                        <p><?php echo $m->nama_menu ?></p>
                        <span class="caret"></span>
                      </a>
                      <div class="collapse <?php if ($cekaktifmenu == $m->id_menu){echo "show";} ?>" id="<?php echo $m->id_menu ?>">
                        <ul class="nav nav-collapse">
                          <?php 
                          $this->db->join('base_menurole', 'base_menurole.mr_id_menu = base_menu.id_menu', 'left'); 
                          $this->db->where('mr_id_role', $this->session->userdata('id_role'));
                          // $this->db->where('parent_menu', 0);
                          $this->db->where('parent_menu', $m->id_menu);
                          $this->db->where('menu_aktif', 1);
                          $sub_menu = $this->db->get('base_menu')->result(); 
                          ?>
                          <?php foreach ($sub_menu as $sm): ?>
                          <li class='<?php if ($ceksktufsubmenu  == $sm->id_menu){echo "active";} ?>'>
                            <a href="<?php echo base_url() ?><?php echo $sm->url ?>">
                              <span class="sub-item"><?php echo $sm->nama_menu ?></span>
                            </a>
                          </li>
                          <?php endforeach ?>
                         
                        </ul>
                      </div>
                    </li>
                  <?php endif ?>

            <?php endforeach ?>
        
            <li class="mx-4 mt-2">
              <a href="<?php echo base_url() ?>auth/logout" class="btn btn-primary btn-block"><span class="btn-label mr-2"> <i class="fas fa-sign-out-alt"></i> </span>Logout</a> 
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Sidebar -->