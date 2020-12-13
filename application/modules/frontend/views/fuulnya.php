<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Salimo - One Page Parallax</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png">

    <!-- Template CSS Files -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/templatefrontend/demos/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/templatefrontend/demos/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/templatefrontend/demos/css/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/templatefrontend/demos/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/templatefrontend/demos/css/skins/orange.css" />

    <!-- Revolution Slider CSS Files -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/templatefrontend/demos/js/plugins/revolution/css/settings.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/templatefrontend/demos/js/plugins/revolution/css/layers.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/templatefrontend/demos/js/plugins/revolution/css/navigation.css" />

    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="blue" href="<?php echo base_url() ?>assets/templatefrontend/demos/css/skins/blue.css" />
    <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="<?php echo base_url() ?>assets/templatefrontend/demos/css/skins/blueviolet.css" />
    <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="<?php echo base_url() ?>assets/templatefrontend/demos/css/skins/goldenrod.css" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="<?php echo base_url() ?>assets/templatefrontend/demos/css/skins/green.css" />
    <link rel="alternate stylesheet" type="text/css" title="magenta" href="<?php echo base_url() ?>assets/templatefrontend/demos/css/skins/magenta.css" />
    <link rel="alternate stylesheet" type="text/css" title="orange" href="<?php echo base_url() ?>assets/templatefrontend/demos/css/skins/orange.css" />
    <link rel="alternate stylesheet" type="text/css" title="purple" href="<?php echo base_url() ?>assets/templatefrontend/demos/css/skins/purple.css" />
    <link rel="alternate stylesheet" type="text/css" title="red" href="<?php echo base_url() ?>assets/templatefrontend/demos/css/skins/red.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellow" href="<?php echo base_url() ?>assets/templatefrontend/demos/css/skins/yellow.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="<?php echo base_url() ?>assets/templatefrontend/demos/css/skins/yellowgreen.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/templatefrontend/demos/css/styleswitcher.css" />

    <!-- Template JS Files -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/templatefrontend/demos/js/modernizr.js"></script>

</head>

<body class="big-triangle">
    <!-- Preloader Starts -->
    <div class="preloader" id="preloader">
        <div class="logopreloader">
            <img src="<?php echo base_url() ?>assets/templatefrontend/demos/img/styleswitcher/logos/logos-dark/orange.png" alt="logo-black">
        </div>
        <div class="loader" id="loader"></div>
    </div>
    <!-- Preloader Ends -->
    <!-- Live Style Switcher Starts - demo only -->
    <div id="switcher" class="">
        <div class="content-switcher">
            <h4>STYLE SWITCHER</h4>
            <ul>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blue'); document.getElementById('logo-light').src='img/styleswitcher/logos/blue.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/blue.png';" title="blue" class="color"><img src="<?php echo base_url() ?>assets/templatefrontend/demos/img/styleswitcher/blue.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blueviolet'); document.getElementById('logo-light').src='img/styleswitcher/logos/blueviolet.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/blueviolet.png';" title="blueviolet" class="color"><img src="<?php echo base_url() ?>assets/templatefrontend/demos/img/styleswitcher/blueviolet.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('goldenrod'); document.getElementById('logo-light').src='img/styleswitcher/logos/goldenrod.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/goldenrod.png';" title="goldenrod" class="color"><img src="<?php echo base_url() ?>assets/templatefrontend/demos/img/styleswitcher/goldenrod.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('green'); document.getElementById('logo-light').src='img/styleswitcher/logos/green.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/green.png';" title="green" class="color"><img src="<?php echo base_url() ?>assets/templatefrontend/demos/img/styleswitcher/green.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('magenta'); document.getElementById('logo-light').src='img/styleswitcher/logos/magenta.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/magenta.png';" title="magenta" class="color"><img src="<?php echo base_url() ?>assets/templatefrontend/demos/img/styleswitcher/magenta.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('orange'); document.getElementById('logo-light').src='img/styleswitcher/logos/orange.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/orange.png';" title="orange" class="color"><img src="<?php echo base_url() ?>assets/templatefrontend/demos/img/styleswitcher/orange.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('purple'); document.getElementById('logo-light').src='img/styleswitcher/logos/purple.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/purple.png';" title="purple" class="color"><img src="<?php echo base_url() ?>assets/templatefrontend/demos/img/styleswitcher/purple.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('red'); document.getElementById('logo-light').src='img/styleswitcher/logos/red.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/red.png';" title="red" class="color"><img src="<?php echo base_url() ?>assets/templatefrontend/demos/img/styleswitcher/red.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellow'); document.getElementById('logo-light').src='img/styleswitcher/logos/yellow.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/yellow.png';" title="yellow" class="color"><img src="<?php echo base_url() ?>assets/templatefrontend/demos/img/styleswitcher/yellow.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellowgreen'); document.getElementById('logo-light').src='img/styleswitcher/logos/yellowgreen.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/yellowgreen.png';" title="yellowgreen" class="color"><img src="<?php echo base_url() ?>assets/templatefrontend/demos/img/styleswitcher/yellowgreen.png" alt="" width="30" height="30" /></a>
                </li>
            </ul>

            <p>BODY SKIN</p>

            <label><input class="dark_switch" type="radio" name="color_style" id="is_light" value="light" checked="checked" /> Light</label>
            <label><input class="dark_switch" type="radio" name="color_style" id="is_dark" value="dark" /> Dark</label>

            <hr />

            <p>LAYOUT STYLE</p>
            <label><input class="boxed_switch" type="radio" name="layout_style" id="is_wide" value="wide" checked="checked" /> Wide</label>
            <label><input class="boxed_switch" type="radio" name="layout_style" id="is_boxed" value="boxed" /> Boxed</label>

            <hr />

            <p class="separator">SEPARATOR <span class="hot">HOT</span></p>
            <span class="info">Select and scroll to see the changes</span>
            <label><input class="separator_switch" type="radio" name="separator_style" id="is_normal" value="normal"  /> <img alt="separator" width="20" height="20" src="<?php echo base_url() ?>assets/templatefrontend/demos/img/styleswitcher/separators/1.jpg" /></label>
            <label><input class="separator_switch" type="radio" name="separator_style" id="is_skew" value="skew" /> <img alt="separator" width="20" height="20" src="<?php echo base_url() ?>assets/templatefrontend/demos/img/styleswitcher/separators/2.jpg" /></label>
            <label><input class="separator_switch" type="radio" name="separator_style" id="is_reversed_skew" value="reversed-skew" /> <img alt="separator" width="20" height="20" src="<?php echo base_url() ?>assets/templatefrontend/demos/img/styleswitcher/separators/3.jpg" /></label>
            <label><input class="separator_switch" type="radio" name="separator_style" id="is_double_diagonal" value="double-diagonal" /> <img alt="separator" width="20" height="20" src="<?php echo base_url() ?>assets/templatefrontend/demos/img/styleswitcher/separators/4.jpg" /></label>
            <label><input class="separator_switch" type="radio" name="separator_style" id="is_big_triangle" value="big-triangle" checked="checked" /> <img alt="separator" width="20" height="20" src="<?php echo base_url() ?>assets/templatefrontend/demos/img/styleswitcher/separators/5.jpg" /></label>

            <hr />

            <a href="https://themeforest.net/item/salimo-creative-one-page-template/19128817?ref=celtano" class="custom-button purchase">Purchase</a>
            <div id="hideSwitcher">&times;</div>

        </div>
    </div>
    <div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>
    <!-- Live Style Switcher Ends - demo only -->
    <!-- Page Wrapper Starts -->
    <div class="wrapper">
        <!-- Header Starts -->
        <header id="header" class="header">
            <div class="header-inner">
                <!-- Navbar Starts -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light" id="singlepage-nav">
                      <a class="navbar-brand" href="#">Navbar</a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active"> <a class="nav-link" href="#"> <i class="fa fa-home"></i> Beranda </a> </li>
                            <li class="nav-item dropdown">
                               <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-user"></i> Profile  </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo base_url() ?>sejarah"> Sejaran Perusahaan </a></li>
                                    <li><a class="dropdown-item" href="#"> Visi & Misi </a></li>
                                    <li><a class="dropdown-item" href="#"> Struktur Organisasi</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#"> <i class="fa fa-cog"></i> Berita </a></li>
                            <li class="nav-item"><a class="nav-link" href="#"> <i class="fa fa-cog"></i> Karir </a></li>
                            <li class="nav-item"><a class="nav-link" href="#"> <i class="fa fa-cog"></i> Produk Dan Layanan </a></li>
                            <li class="nav-item"><a class="nav-link" href="#"> <i class="fa fa-cog"></i> katalog file </a></li>
                         
                        </ul>
                     </div> <!-- navbar-collapse.// -->
                </nav>
                <!-- Navbar Ends -->
            </div>
        </header>
		<!-- Header Ends -->