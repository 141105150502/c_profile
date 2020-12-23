<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Job board HTML-5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="manifest" href="<?php echo base_url() ?>assets/site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend_temp/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend_temp/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend_temp/assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend_temp/assets/css/price_rangs.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend_temp/assets/css/slicknav.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend_temp/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend_temp/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend_temp/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend_temp/assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend_temp/assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend_temp/assets/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend_temp/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/fontawesome/css/all.min.css">

    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> -->
    <style>
    .owl-prev.disabled,
    .owl-next.disabled {
        opacity: 0;
    }
    }
    </style>

</head>

<body>
    <!-- Preloader Start -->
    <!--  <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?php echo base_url() ?>assets/frontend_temp/assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparrent">
            <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                               <!--  <a href="index.html">
                                    <img src="<?php echo base_url() ?>assets/frontend_temp/assets/img/logo/logo.png"alt="">
                                </a> -->
                                <?php $lg = $this->db->get('t_profileperusahaan')->row()->logo_perusahaan; ?>
                                <a href="<?php echo base_url() ?>">
                                    <img src="<?php echo base_url() ?>assets/gambar/profile_perusahaan/<?php echo $lg; ?>" alt="navbar brand">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="<?php echo base_url() ?>">Home</a></li>
                                            <li><a href="#">Profile</a>
                                                <ul class="submenu">
                                                    <li><a href="<?php echo base_url() ?>frontend/front_sejarah">Sejarah Perusahaan</a></li>
                                                    <li><a href="<?php echo base_url() ?>frontend/front_visimisi">Visi dan Misi</a></li>
                                                    <li><a href="<?php echo base_url() ?>frontend/front_strukturorg">Struktur Organisasi</a></li>
                                                    <li><a href="<?php echo base_url() ?>frontend/front_kontak">Kontak</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="<?php echo base_url() ?>frontend/list_berita">Berita </a></li>
                                            <li><a href="<?php echo base_url() ?>frontend/front_karir">karir</a></li>
                                            <li><a href="<?php echo base_url() ?>frontend/front_produklayanan">Produk dan Layanan</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header-btn -->
                                <div class="header-btn d-none f-right d-lg-block">
                                    <a href="<?php echo base_url() ?>auth/register" class="btn head-btn1">Register</a>
                                    <a href="<?php echo base_url() ?>auth" class="btn head-btn2">Login</a>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>