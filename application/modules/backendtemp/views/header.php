
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>My Aplikasi</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="icon" href="<?php echo base_url() ?>assets/img/icon.ico" type="image/x-icon"/>

  <!-- Fonts and icons -->
  <script src="<?php echo base_url() ?>assets/js/plugin/webfont/webfont.min.js"></script>
  <script src="<?php echo base_url() ?>assets/sweetalert2/sweetalert2.all.min.js"></script>

  <script>
    WebFont.load({
      google: {"families":["Lato:300,400,700,900"]},
      custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['<?php echo base_url() ?>assets/css/fonts.min.css']},
      active: function() {
        sessionStorage.fonts = true;
      }
    });
  </script>

  <!-- di pindahin dari js footer -->
  <!--   Core JS Files   -->
  <script src="<?php echo base_url() ?>assets/js/core/jquery.3.2.1.min.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> -->
  <script src="<?php echo base_url() ?>assets/js/core/popper.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/core/bootstrap.min.js"></script>

  <!-- Datatables -->
  <script src="<?php echo base_url() ?>assets/js/plugin/datatables/datatables.min.js"></script>
  <!-- akhir js footer -->


  <!-- CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/atlantis.min.css">

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/demo.css">

  <!-- js dari footer -->
  
 
  <!-- akhir js dari footer -->
</head>
<body>
  <div class="wrapper">
    <div class="main-header">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="blue">
        
        <a href="index.html" class="logo">
          <!-- <img src="<?php echo base_url() ?>assets/img/logo.svg" alt="navbar brand" class="navbar-brand"> -->
          <?php $lg = $this->db->get('t_profileperusahaan')->row()->logo_perusahaan; ?>
          <img src="<?php echo base_url() ?>assets/gambar/profile_perusahaan/<?php echo $lg; ?>" alt="navbar brand" class="navbar-brand" width="108px">
          <!-- <span style="color: white; font-weight: bold; font-size: 24px;">Aplikasi ku</span> -->
        </a>
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            <i class="icon-menu"></i>
          </span>
        </button>
        <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
        <div class="nav-toggle">
          <button class="btn btn-toggle toggle-sidebar">
            <i class="icon-menu"></i>
          </button>
        </div>
      </div>
      <!-- End Logo Header -->

      <!-- Navbar Header -->
      <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
        
        <div class="container-fluid">
          <!-- search -->
          <!-- <div class="collapse" id="search-nav">
            <form class="navbar-left navbar-form nav-search mr-md-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <button type="submit" class="btn btn-search pr-1">
                    <i class="fa fa-search search-icon"></i>
                  </button>
                </div>
                <input type="text" placeholder="Search ..." class="form-control">
              </div>
            </form>
          </div> -->
          <!-- end search -->
          <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
            <li class="nav-item toggle-nav-search hidden-caret">
              <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                <i class="fa fa-search"></i>
              </a>
            </li>
            <li class="nav-item dropdown hidden-caret">
              <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                <div class="avatar-sm">
                  <?php 
                   $foto = $this->db->get_where('base_user', ['email' => $this->session->userdata('email')])->row()->foto;
                   ?>
                  <img src="<?php echo base_url() ?>assets/gambar/userimage/<?php echo $foto ?>" alt="..." class="avatar-img rounded-circle">
                </div>
              </a>
              <ul class="dropdown-menu dropdown-user animated fadeIn">
                <div class="dropdown-user-scroll scrollbar-outer">
                  <li>
                    <div class="user-box">
                      <div class="avatar-lg"><img src="<?php echo base_url() ?>assets/gambar/userimage/<?php echo $foto; ?>" alt="image profile" class="avatar-img rounded"></div>
                      <div class="u-text">
                        <h4><?php echo $this->session->userdata('username'); ?></h4>
                        <p class="text-muted"><?php echo $this->session->userdata('email'); ?></p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">My Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url() ?>auth/logout">Logout</a>
                  </li>
                </div>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
      <!-- End Navbar -->
    </div>

