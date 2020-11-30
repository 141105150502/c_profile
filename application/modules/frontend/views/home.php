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
                    <li class="nav-item active"> <a class="nav-link" href="#"> <i class="fa fa-home"></i> Home </a> </li>
                    <li class="nav-item"><a class="nav-link" href="#"> <i class="fa fa-user"></i> About </a></li>
                    <li class="nav-item"><a class="nav-link" href="#"> <i class="fa fa-cog"></i> Services </a></li>
                    <li class="nav-item dropdown">
                       <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">  More items  </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
                            <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
                        </ul>
                    </li>
                </ul>
                  </div> <!-- navbar-collapse.// -->
                </nav>
                <!-- Navbar Ends -->
            </div>
        </header>
		<!-- Header Ends -->
        <!-- Main Slider Section Starts -->
        <section class="mainslider" id="mainslider">
            <!-- Slider Hero Starts -->
            <div class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
                <div id="rev_slider" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-index="rs-1" data-transition="boxslide" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo base_url() ?>assets/templatefrontend/demos/img/revolution-slider/slideshow/thumb2.jpg" data-rotate="0" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off" data-title="Intro" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="<?php echo base_url() ?>assets/templatefrontend/demos/img/revolution-slider/slideshow/slideshow2.jpg" alt="" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['70','70','70','45']" data-lineheight="['70','70','70','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 5; white-space: nowrap;">WE ARE SALIMO
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0 nowrap-normal text-center px-15" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['70','70','70','70']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;">CREATIVE ONE PAGE TEMPLATE
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-style_hover="cursor:default;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;"><i class="pe-7s-refresh"></i>
                            </div>
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['150','210','210','180']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);" data-transform_in="y:100px;sX:1;sY:1;opacity:0;s:2000;e:Power3.easeInOut;" data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;" data-start="750" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off" style="z-index: 11; white-space: nowrap;text-transform:left;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;"><a href="#about" class="custom-button slider-button scroll-to-target">learn more about us</a></div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-2" data-transition="3dcurtain-vertical" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo base_url() ?>assets/templatefrontend/demos/img/revolution-slider/slideshow/thumb2.jpg" data-rotate="0" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off" data-title="Intro" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="<?php echo base_url() ?>assets/templatefrontend/demos/img/revolution-slider/slideshow/slideshow2.jpg" alt="" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['70','70','70','45']" data-lineheight="['70','70','70','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 5; white-space: nowrap;">WE ARE CREATIVE
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0 nowrap-normal text-center px-15" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['70','70','70','70']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;">TEAM WITH BIG TALENTS
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-style_hover="cursor:default;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;"><i class="pe-7s-refresh"></i>
                            </div>
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['150','210','210','180']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);" data-transform_in="y:100px;sX:1;sY:1;opacity:0;s:2000;e:Power3.easeInOut;" data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;" data-start="750" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off" style="z-index: 11; white-space: nowrap;text-transform:left;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;"><a href="#about" class="custom-button slider-button scroll-to-target">learn more about us</a></div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-3" data-transition="3dcurtain-horizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo base_url() ?>assets/templatefrontend/demos/img/revolution-slider/slideshow/thumb3.jpg" data-rotate="0" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off" data-title="Intro" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="<?php echo base_url() ?>assets/templatefrontend/demos/img/revolution-slider/slideshow/slideshow3.jpg" alt="" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['70','70','70','45']" data-lineheight="['70','70','70','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 5; white-space: nowrap;">WE ARE THE BEST
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0 nowrap-normal text-center px-15" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['70','70','70','70']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;">COMPANY IN THE WORLD
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-style_hover="cursor:default;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;"><i class="pe-7s-refresh"></i>
                            </div>
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['150','210','210','180']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);" data-transform_in="y:100px;sX:1;sY:1;opacity:0;s:2000;e:Power3.easeInOut;" data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;" data-start="750" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off" style="z-index: 11; white-space: nowrap;text-transform:left;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;"><a href="#about" class="custom-button slider-button scroll-to-target">learn more about us</a></div>
                        </li>
                    </ul>
                    <div class="tp-static-layers"></div>
                </div>
            </div>
            <!-- Slider Hero Ends -->
        </section>
        <!-- Main Slider Section Ends -->
        <!-- About Section Starts -->
        <section id="about" class="about">
            <!-- Container Starts -->
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1><span>About</span> Us</h1>
                    <h4>Who We Are</h4>
                </div>
                <!-- Main Heading Ends -->
                <!-- Divider Starts -->
                <div class="divider text-center">
                    <span class="outer-line"></span>
                    <span class="fa fa-user" aria-hidden="true"></span>
                    <span class="outer-line"></span>
                </div>
                <!-- Divider Ends -->
                <!-- About Content Starts -->
                <div class="row about-content">
                    <div class="col-sm-12 col-md-12 col-lg-6 about-left-side">
                        <h3 class="title-about">WE ARE <strong>SALIMO</strong></h3>
                        <hr>
                        <p>We are a leading company sit amet, consectetur adipisicing elit. Minus obcaecati pariatur officiis molestias eveniet harum laudantium obcaecati pariatur officiis molestias eveniet harum laudantium sed optio iste. </p>
						<!-- Tabs Heading Starts -->
                        <ul class="nav nav-tabs">
                            <li><a class="active" data-toggle="tab" href="#menu1">Our Mission</a></li>
                            <li><a data-toggle="tab" href="#menu2">Our advantages</a></li>
                            <li><a data-toggle="tab" href="#menu3">Our guarantees</a></li>
                        </ul>
                        <!-- Tabs Heading Ends -->
                        <!-- Tabs Content Starts -->
                        <div class="tab-content">
                            <div id="menu1" class="tab-pane fade in active">
                                <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in</p>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                            <div id="menu3" class="tab-pane fade">
                                <p>Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                            </div>
                        </div>
                        <!-- Tabs Content Ends -->
                        <a class="custom-button scroll-to-target" href="#portfolio">Our Portfolio</a>
                    </div>
                    <div class="col-md-12 col-lg-6 about-right">
						<div class="about-right-side">
							<img class="img-fluid" src="<?php echo base_url() ?>assets/templatefrontend/demos/img/about.jpg" alt="">
						</div>
                    </div>
                </div>
                <!-- About Content Ends -->
            </div>
            <!-- Container Ends -->
        </section>
        <!-- About Section Ends -->
        <!-- Project Manager Section Starts -->
        <section class="projectmanager" id="projectmanager">
            <!-- Section Overlay Starts -->
            <div class="section-overlay">
                <!-- Container Starts -->
                <div class="container">
                    <div class="row">
                        <!-- Image Starts -->
                        <div class="col-md-12 col-lg-12 col-xl-5">
                            <img class="img-fluid projectmanagerpicture" src="<?php echo base_url() ?>assets/templatefrontend/demos/img/projectmanager.jpg" alt="project manager">
                        </div>
                        <!-- Image Ends -->
                        <!-- Details Starts -->
                        <div class="col-md-12 col-lg-12 col-xl-6 offset-xl-1">
                            <h1>Project Manager</h1>
                            <h3>Miss Katherina Hale</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus obcaecati pariatur officiis molestias eveniet harum laudantium sed optio iste. Iste, alias, non libero recusandae fugiat praesentium delectus inventore accusamus veniam!
                            </p>
                            <blockquote>
                                " Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia "
                            </blockquote>
                            <!-- Social Media Starts -->
                            <div class="social-icons">
                                <ul class="social">
                                    <li>
                                        <a class="twitter" href="#" title="twitter"></a>
                                    </li>
                                    <li>
                                        <a class="facebook" href="#" title="facebook"></a>
                                    </li>
                                    <li>
                                        <a class="skype" href="#" title="skype"></a>
                                    </li>
                                    <li>
                                        <a class="instagram" href="#" title="instagram"></a>
                                    </li>
                                    <li>
                                        <a class="linkedin" href="#" title="linkedin"></a>
                                    </li>
                                    <li>
                                        <a class="youtube" href="#" title="youtube"></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Social Media Ends -->
                        </div>
                    </div>
                    <!-- Details Ends -->
                </div>
                <!-- Container Ends -->
            </div>
        </section>
        <!-- Project Manager Section Ends -->
        <!-- Services Section Starts -->
        <section id="services" class="services">
            <!-- Container Starts -->
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1><span>Our</span> Services</h1>
                    <h4>What We Doing</h4>
                </div>
                <!-- Main Heading Starts -->
                <!-- Divider Starts -->
                <div class="divider text-center">
                    <span class="outer-line"></span>
                    <span class="fa fa-cogs" aria-hidden="true"></span>
                    <span class="outer-line"></span>
                </div>
                <!-- Divider Ends -->
                <!-- Services Starts -->
                <div class="row services-box">
                    <!-- Service Item Starts -->
                    <div class="col-lg-4 col-md-12 col-sm-12 services-box-item">
                        <!-- Service Item Cover Starts -->
                        <span class="services-box-item-cover fa fa-leaf" data-headline="Creative Solutions"></span>
                        <!-- Service Item Cover Ends -->
                        <!-- Service Item Content Starts -->
                        <div class="services-box-item-content fa fa-leaf">
                            <h2>Creative Solutions</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
                        </div>
                        <!-- Service Item Content Ends -->
                    </div>
                    <!-- Service Item Ends -->

                    <!-- Service Item Starts -->
                    <div class="col-lg-4 col-md-12 col-sm-12 services-box-item">
                        <!-- Service Item Cover Starts -->
                        <span class="services-box-item-cover fa fa-anchor" data-headline="Featured Services"></span>
                        <!-- Service Item Cover Ends -->
                        <!-- Service Item Content Starts -->
                        <div class="services-box-item-content fa fa-anchor">
                            <h2>Featured Services</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
                        </div>
                        <!-- Service Item Content Ends -->
                    </div>
                    <!-- Service Item Ends -->

                    <!-- Service Item Starts -->
                    <div class="col-lg-4 col-md-12 col-sm-12 services-box-item">
                        <!-- Service Item Cover Starts -->
                        <span class="services-box-item-cover fa fa-comments-o" data-headline="Custom Design"></span>
                        <!-- Service Item Cover Ends -->
                        <!-- Service Item Content Starts -->
                        <div class="services-box-item-content fa fa-comments-o">
                            <h2>Custom Design</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
                        </div>
                        <!-- Service Item Content Ends -->
                    </div>
                    <!-- Service Item Ends -->

                    <!-- Service Item Starts -->
                    <div class="col-lg-4 col-md-12 col-sm-12 services-box-item">
                        <!-- Service Item Cover Starts -->
                        <span class="services-box-item-cover fa fa-support" data-headline="Technical Support"></span>
                        <!-- Service Item Cover Ends -->
                        <div class="services-box-item-content fa fa-support">
                            <h2>Technical Support</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
                        </div>
                    </div>
                    <!-- Service Item Ends -->

                    <!-- Service Item Starts -->
                    <div class="col-lg-4 col-md-12 col-sm-12 services-box-item">
                        <!-- Service Item Cover Starts -->
                        <span class="services-box-item-cover fa fa-cogs" data-headline="Responsive Design"></span>
                        <!-- Service Item Cover Ends -->
                        <!-- Service Item Content Starts -->
                        <div class="services-box-item-content fa fa-cogs">
                            <h2>Responsive Design</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
                        </div>
                        <!-- Service Item Content Ends -->
                    </div>
                    <!-- Service Item Ends -->

                    <!-- Service Item Starts -->
                    <div class="col-lg-4 col-md-12 col-sm-12 services-box-item">
                        <!-- Service Item Cover Starts -->
                        <span class="services-box-item-cover fa fa-file-pdf-o" data-headline="Well Documented"></span>
                        <!-- Service Item Cover Ends -->
                        <!-- Service Item Content Starts -->
                        <div class="services-box-item-content fa fa-file-pdf-o">
                            <h2>Well Documented</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
                        </div>
                        <!-- Service Item Content Ends -->
                    </div>
                    <!-- Service Item Ends -->

                </div>
                <!-- Services Ends -->
            </div>
        </section>
        <!-- Services Section Ends -->
        <!-- Testimonials Section Starts -->
        <section class="testimonials">
            <div class="section-overlay">
                <!-- Container Starts -->
                <div class="container">
                    <!-- Main Heading Starts -->
                    <div class="text-center top-text">
                        <h1><span>Happy</span> Customers</h1>
                        <h4>Testimonials</h4>
                    </div>
                    <!-- Main Heading Starts -->
                    <!-- Blockquotes Starts -->
                    <div id="quote-carousel" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper For Sliders Starts -->
                        <!-- Indicators Starts -->
                        <ol class="carousel-indicators mx-auto">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#quote-carousel" data-slide-to="1"></li>
                            <li data-target="#quote-carousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Indicators Ends -->
                        <div class="carousel-inner">
                            <!-- Quote #1 Starts -->
                            <div class="carousel-item active">
                                <blockquote>
                                    <img class="rounded-circle img-fluid" src="<?php echo base_url() ?>assets/templatefrontend/demos/img/testimonial/client1.jpg" alt="client">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiu nt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptat</p>
                                    <h5>Miss Elina Pool</h5>
                                    <h6>Web Developer - Adobe</h6>
                                </blockquote>
                            </div>
                            <!-- Quote #1 Ends -->
                            <!-- Quote #2 Starts -->
                            <div class="carousel-item">
                                <blockquote>
                                    <img class="rounded-circle img-fluid" src="<?php echo base_url() ?>assets/templatefrontend/demos/img/testimonial/client2.jpg" alt="client">
                                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
                                    <h5>Mr. Antoine Varane</h5>
                                    <h6>Sales Manager - Twitter</h6>
                                </blockquote>
                            </div>
                            <!-- Quote #2 Ends -->
                            <!-- Quote #3 Starts -->
                            <div class="carousel-item">
                                <blockquote>
                                    <img class="rounded-circle img-fluid" src="<?php echo base_url() ?>assets/templatefrontend/demos/img/testimonial/client3.jpg" alt="client">
                                    <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                                    <h5>Miss Lucy Walker</h5>
                                    <h6>Project Manager - Envato</h6>
                                </blockquote>
                            </div>
                            <!-- Quote #3 Ends -->
                        </div>
                        <!-- Wrapper For Sliders Ends -->
                    </div>
                    <!-- Blockquotes Ends -->
                </div>
                <!-- Container Ends -->
            </div>
        </section>
        <!-- Testimonials Section Ends -->
        <!-- Portfolio Section Starts -->
        <section id="portfolio" class="portfolio">
            <!-- Container Starts -->
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1><span>Our</span> Portfolio</h1>
                    <h4>Our latest Works</h4>
                </div>
                <!-- Main Heading Starts -->
                <!-- Divider Starts -->
                <div class="divider text-center">
                    <span class="outer-line"></span>
                    <span class="fa fa-image" aria-hidden="true"></span>
                    <span class="outer-line"></span>
                </div>
                <!-- Divider Ends -->
                <!-- Filter Wrapper Starts -->
                <nav>
                    <ul class="simplefilter nav nav-pills d-block">
                        <!-- Filter Wrapper Items Starts -->
                        <li class="active" data-filter="all"><i class="fa fa-reorder"></i> All Projects</li>
                        <li data-filter="1">Images</li>
                        <li data-filter="2">Videos</li>
                        <li data-filter="3">External Links</li>
                        <!-- Filter Wrapper Items Ends -->
                    </ul>
                </nav>
                <!-- Filter Wrapper Ends -->
                <div>
                    <div class="filtr-container">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 filtr-item" data-category="1">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap" href="img/projects/project-1.jpg" data-gal="magnific-pop-up[image]" title="Image project"><img class="img-fluid" src="<?php echo base_url() ?>assets/templatefrontend/demos/img/projects/project-1.jpg" alt="Image Project" /><span class="zoom-icon"></span></a>
                                </figure>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <h3>Single Image</h3>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 filtr-item" data-category="2">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap mfp-youtube" href="https://www.youtube.com/watch?v=0gv7OC9L2s8"><img class="img-fluid" src="<?php echo base_url() ?>assets/templatefrontend/demos/img/projects/project-2.jpg" alt="Gallery project" /><span class="zoom-icon video-icon"></span></a>
                                </figure>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <h3>Youtube Video</h3>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 filtr-item" data-category="1">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap" href="img/projects/project-3.jpg" data-gal="magnific-pop-up[gallery]" title="Gallery project"><img class="img-fluid" src="<?php echo base_url() ?>assets/templatefrontend/demos/img/projects/project-3.jpg" alt="Gallery project" /><span class="zoom-icon gallery-icon"></span></a>
                                </figure>
                                <a href="img/projects/project-1.jpg" title="Gallery project" data-gal="magnific-pop-up[gallery]" style="display:none;"></a>
                                <a href="img/projects/project-2.jpg" title="Gallery project" data-gal="magnific-pop-up[gallery]" style="display:none;"></a>
                                <a href="img/projects/project-3.jpg" title="Gallery project" data-gal="magnific-pop-up[gallery]" style="display:none;"></a>
                                <a href="img/projects/project-4.jpg" title="Gallery project" data-gal="magnific-pop-up[gallery]" style="display:none;"></a>
                                <a href="img/projects/project-5.jpg" title="Gallery project" data-gal="magnific-pop-up[gallery]" style="display:none;"></a>
                                <a href="img/projects/project-6.jpg" title="Gallery project" data-gal="magnific-pop-up[gallery]" style="display:none;"></a>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <h3>Gallery Photos</h3>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 filtr-item" data-category="3">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap" href="#" title="portfolio"><img class="img-fluid" src="<?php echo base_url() ?>assets/templatefrontend/demos/img/projects/project-4.jpg" alt="portfolio" /><span class="zoom-icon external-icon"></span></a>
                                </figure>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <h3>External Link</h3>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 filtr-item" data-category="1">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap" href="img/projects/project-5.jpg" data-gal="magnific-pop-up[image]" title="Image project"><img class="img-fluid" src="<?php echo base_url() ?>assets/templatefrontend/demos/img/projects/project-5.jpg" alt="Image Project" /><span class="zoom-icon"></span></a>
                                </figure>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <h3>Single Image</h3>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 filtr-item" data-category="2">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap mfp-youtube" href="https://www.youtube.com/watch?v=O_C5CN1L3Xo"><img class="img-fluid" src="<?php echo base_url() ?>assets/templatefrontend/demos/img/projects/project-6.jpg" alt="Gallery project" /><span class="zoom-icon video-icon"></span></a>
                                </figure>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <h3>Youtube Video</h3>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 filtr-item" data-category="1">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap" href="img/projects/project-7.jpg" data-gal="magnific-pop-up[image]" title="Image project"><img class="img-fluid" src="<?php echo base_url() ?>assets/templatefrontend/demos/img/projects/project-7.jpg" alt="Image Project" /><span class="zoom-icon"></span></a>
                                </figure>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <h3>Single Image</h3>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 filtr-item" data-category="2">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap mfp-vimeo" href="https://vimeo.com/23534361"><img class="img-fluid" src="<?php echo base_url() ?>assets/templatefrontend/demos/img/projects/project-8.jpg" alt="Gallery project" /><span class="zoom-icon video-icon"></span></a>
                                </figure>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <h3>Vimeo Video</h3>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 filtr-item" data-category="1">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap" href="img/projects/project-9.jpg" data-gal="magnific-pop-up[image]" title="Image project"><img class="img-fluid" src="<?php echo base_url() ?>assets/templatefrontend/demos/img/projects/project-9.jpg" alt="Image Project" /><span class="zoom-icon"></span></a>
                                </figure>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <h3>Single Image</h3>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container Ends -->
        </section>
        <!-- Portfolio Section Ends -->
        <!-- Facts Section Starts -->
        <section class="facts">
            <div class="section-overlay">
                <!-- Container Starts -->
                <div class="container">
                    <!-- Main Heading Starts -->
                    <div class="text-center top-text">
                        <h1><span>Cool</span> Facts</h1>
                        <h4>our numbers</h4>
                    </div>
                    <!-- Main Heading Starts -->
                    <!-- Fact Badges Starts -->
                    <div class="fact-badges">
                        <div class="row">
                            <!-- Fact Badge Item Starts -->
                            <div class="col-md-3 col-sm-6">
                                <i class="fa fa-briefcase"></i>
                                <h2>
                                    <span><strong class="badges-counter">77</strong>+</span>
                                </h2>
                                <h4>Projects</h4>
                            </div>
                            <!-- Fact Badge Item Ends -->
                            <!-- Fact Badge Item Starts -->
                            <div class="col-md-3 col-sm-6">
                                <i class="fa fa-clock-o"></i>
                                <h2>
                                    <span><strong class="badges-counter">80</strong>+</span>
                                </h2>
                                <h4>Hours Work</h4>
                            </div>
                            <!-- Fact Badge Item Ends -->
                            <!-- Fact Badge Item Starts -->
                            <div class="col-md-3 col-sm-6">
                                <i class="fa fa-home"></i>
                                <h2>
                                    <span><strong class="badges-counter">18</strong>+</span>
                                </h2>
                                <h4>Offices</h4>
                            </div>
                            <!-- Fact Badge Item Ends -->
                            <!-- Fact Badge Item Starts -->
                            <div class="col-md-3 col-sm-6">
                                <i class="fa fa-user"></i>
                                <h2>
                                    <span><strong class="badges-counter">67</strong>+</span>
                                </h2>
                                <h4>Clients</h4>
                            </div>
                            <!-- Fact Badge Item Ends -->
                        </div>
                    </div>
                    <!-- Fact Badges Ends -->
                </div>
                <!-- Container Ends -->
            </div>
        </section>
        <!-- facts Section Ends -->
        <!-- Team Section Starts -->
        <section id="team" class="team">
            <!-- Container Starts -->
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1><span>Our</span> Team</h1>
                    <h4>Keep in touch</h4>
                </div>
                <!-- Main Heading Ends -->
                <!-- Divider Starts -->
                <div class="divider text-center">
                    <span class="outer-line"></span>
                    <span class="fa fa-users" aria-hidden="true"></span>
                    <span class="outer-line"></span>
                </div>
                <!-- Divider Ends -->
                <!-- Team Members Starts -->
                <div class="row team-members magnific-popup-gallery">
                    <!-- Team Member Starts -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="team-member">
                            <!-- Team Member Picture Starts -->
                            <a title="Maryana Mori // Manager" href="img/team/member1.jpg" data-gal="magnific-pop-up[team]" class="team-member-img-wrap"><img src="<?php echo base_url() ?>assets/templatefrontend/demos/img/team/member1.jpg" alt="team member"></a>
                            <!-- Team Member Picture Ends -->
                            <!-- Team Member Details Starts -->
                            <div class="team-member-caption social-icons">
                                <h4>Maryana Mori</h4>
                                <p>Manager</p>
                                <ul class="list list-inline social">
                                    <li>
                                        <a href="#" class="fa fa-facebook"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-twitter"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-google-plus"></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Team Member Details Starts -->
                        </div>
                    </div>
                    <!-- Team Member Ends -->
                    <!-- Team Member Starts -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="team-member">
                            <!-- Team Member Picture Starts -->
                            <a title="Marco Verratti // Co Founder" href="img/team/member2.jpg" data-gal="magnific-pop-up[team]" class="team-member-img-wrap"><img src="<?php echo base_url() ?>assets/templatefrontend/demos/img/team/member2.jpg" alt="team member"></a>
                            <!-- Team Member Picture Ends -->
                            <!-- Team Member Details Starts -->
                            <div class="team-member-caption social-icons">
                                <h4>Marco Verratti</h4>
                                <p>Co Founder</p>
                                <ul class="list list-inline social">
                                    <li>
                                        <a href="#" class="fa fa-facebook"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-twitter"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-google-plus"></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Team Member Details Ends -->
                        </div>
                    </div>
                    <!-- Team Member Ends -->
                    <!-- Team Member Starts -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <!-- Team Member-->
                        <div class="team-member">
                            <!-- Team Member Picture Starts -->
                            <a title="Emilia Bella // Sales Manager" href="img/team/member3.jpg" data-gal="magnific-pop-up[team]" class="team-member-img-wrap"><img src="<?php echo base_url() ?>assets/templatefrontend/demos/img/team/member3.jpg" alt=""></a>
                            <!-- Team Member Picture Ends -->
                            <!-- Team Member Details Starts -->
                            <div class="team-member-caption social-icons">
                                <h4>Emilia Bella</h4>
                                <p>Sales Manager</p>
                                <ul class="list list-inline social">
                                    <li>
                                        <a href="#" class="fa fa-facebook"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-twitter"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-google-plus"></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Team Member Details Ends -->
                        </div>
                    </div>
                    <!-- Team Member Ends -->
                    <!-- Team Member Starts -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="team-member">
                            <!-- Team Member Picture Starts -->
                            <a title="Antonio Conte // Director" href="img/team/member4.jpg" data-gal="magnific-pop-up[team]" class="team-member-img-wrap"><img src="<?php echo base_url() ?>assets/templatefrontend/demos/img/team/member4.jpg" alt="team member"></a>
                            <!-- Team Member Picture Ends -->
                            <!-- Team Member Details Starts -->
                            <div class="team-member-caption social-icons">
                                <h4>Antonio Conte</h4>
                                <p>Director</p>
                                <ul class="list list-inline social">
                                    <li>
                                        <a href="#" class="fa fa-facebook"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-twitter"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-google-plus"></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Team Member Details Ends -->
                        </div>
                    </div>
                    <!-- Team Member Ends -->
                </div>
                <!-- Team Members Ends -->
            </div>
            <!-- Container Ends -->
        </section>
        <!-- Team Section Ends -->
        <!-- Newsletter Section Starts -->
        <section class="newsletter">
            <div class="section-overlay">
                <!-- Container Starts -->
                <div class="container">
                    <!-- Main Heading Starts -->
                    <div class="text-center top-text">
                        <h1><span>our</span> newsletter</h1>
                        <h4>Keep in touch</h4>
                    </div>
                    <!-- Main Heading Ends -->
                    <div class="newsletter-content">
                        <p class="text-center">Sign up to our newsletter subscription and be the first to know about<br> Important news <span> & </span> Amazing offers <span> & </span>Discounts</p>
                        <!-- Newsletter Form Starts -->
                        <form class="form-inputs">
                            <!-- Newsletter Form Input Field Starts -->
                            <div class="col-md-12 form-group custom-form-group p-0">
                                <span class="input custom-input">
									<input placeholder="Enter Your Email" class="input-field custom-input-field" type="text" />
									<label class="input-label custom-input-label" >
										<i class="fa fa-envelope-open-o icon icon-field"></i>
									</label>
								</span>
                            </div>
                            <!-- Newsletter Form Input Field Ends -->
                            <!-- Newsletter Form Submit Button Starts -->
                            <button id="submit" name="submit" type="submit" class="custom-button" title="Send">Subscribe Now</button>
                            <!-- Newsletter Form Submit Button Ends -->
                        </form>
                        <!-- Newsletter Form Ends -->
                    </div>
                </div>
                <!-- Container Ends -->
            </div>
        </section>
        <!-- Newsletter Section Ends -->
        <!-- Blog Section Starts -->
        <section class="blog" id="blog">
            <!-- Container Starts -->
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1><span>Blog</span> Posts</h1>
                    <h4>Latest Articles</h4>
                </div>
                <!-- Main Heading Starts -->
                <!-- Divider Starts -->
                <div class="divider text-center">
                    <span class="outer-line"></span>
                    <span class="fa fa-comments" aria-hidden="true"></span>
                    <span class="outer-line"></span>
                </div>
                <!-- Divider Ends -->
                <div class="row latest-posts-content">
                    <!-- Article Starts -->
                    <div class="col-sm-12 col-md-4 col-xs-12">
                        <div class="latest-post">
                            <!-- Featured Image Starts -->
                            <a class="img-thumb" href="blog-post.html"><img class="img-fluid" src="<?php echo base_url() ?>assets/templatefrontend/demos/img/blog/blog-post-small-1.jpg" alt="img"></a>
                            <!-- Featured Image Ends -->
                            <!-- Article Content Starts -->
                            <div class="post-body">
                                <h4 class="post-title">
                                    <a href="blog-post.html">how to be a good freelancer ?</a>
                                </h4>
                                <div class="post-text">
                                    <p>incididunt ut labore et dolore magna aliqua. Ut enim aminim veniam, quis nostrud...</p>
                                </div>
                            </div>
                            <!-- Post Date Starts -->
                            <div class="post-date">
                                <span>18</span>
                                <span>AUG</span>
                            </div>
                            <!-- Post Date Ends -->
                            <!-- Article Content Ends -->
                        </div>
                    </div>
                    <!-- Article Ends -->
                    <!-- Article Starts -->
                    <div class="col-sm-12 col-md-4 col-xs-12">
                        <div class="latest-post">
                            <!-- Featured Image Starts -->
                            <a class="img-thumb" href="blog-post.html"><img class="img-fluid" src="<?php echo base_url() ?>assets/templatefrontend/demos/img/blog/blog-post-small-2.jpg" alt="img"></a>
                            <!-- Featured Image Ends -->
                            <!-- Article Content Starts -->
                            <div class="post-body">
                                <h4 class="post-title">
                                    <a href="blog-post.html">Collaboration with Envato</a>
                                </h4>
                                <div class="post-text">
                                    <p>incididunt ut labore et dolore magna aliqua. Ut enim aminim veniam, quis nostrud...</p>
                                </div>
                            </div>
                            <!-- Post Date Starts -->
                            <div class="post-date">
                                <span>23</span>
                                <span>JUN</span>
                            </div>
                            <!-- Post Date Ends -->
                            <!-- Article Content Ends -->
                        </div>
                    </div>
                    <!-- Article Ends -->
                    <!-- Article Starts -->
                    <div class="col-sm-12 col-md-4 col-xs-12">
                        <div class="latest-post">
                            <!-- Featured Image Starts -->
                            <a class="img-thumb" href="blog-post.html"><img class="img-fluid" src="<?php echo base_url() ?>assets/templatefrontend/demos/img/blog/blog-post-small-3.jpg" alt="img"></a>
                            <!-- Featured Image Ends -->
                            <!-- Article Content Starts -->
                            <div class="post-body">
                                <h4 class="post-title">
                                    <a href="blog-post.html">why themeforest is best ?</a>
                                </h4>
                                <div class="post-text">
                                    <p>incididunt ut labore et dolore magna aliqua. Ut enim aminim veniam, quis nostrud...</p>
                                </div>
                            </div>
                            <!-- Post Date Starts -->
                            <div class="post-date">
                                <span>01</span>
                                <span>JAN</span>
                            </div>
                            <!-- Post Date Ends -->
                            <!-- Article Content Ends -->
                        </div>
                    </div>
                    <!-- Article Ends -->
					<div class="mx-auto">
                        <a class="custom-button link-blog" href="blog.html">See all Posts</a>
                    </div>
                </div>
                <!-- Latest Blog Posts Ends -->
            </div>
        </section>
        <!-- Blog Section Ends -->
        <!-- Video Section Starts -->
        <section class="videopromotion">
            <div class="section-overlay">
                <!-- Container Starts -->
                <div class="container">
                    <!-- Main Heading Starts -->
                    <div class="text-center top-text">
                        <h1><span>Video</span> Promo</h1>
                        <h4>Made with love for you</h4>
                    </div>
                    <!-- Main Heading Ends -->
                    <div class="video-content">
                        <p class="text-center">We’re developing a number of special projects if interested,<br> Don't hesitate to see the promo video</p>
                        <!-- Video Play Starts -->
                        <div class="magnific-popup-gallery">
                            <div class="btn-wrapper text-center"><a class="image-wrap mfp-youtube" href="https://www.youtube.com/watch?v=0gv7OC9L2s8"></a></div>
                        </div>
                        <!-- Video Play Ends -->
                    </div>
                </div>
                <!-- Container Ends -->
            </div>
        </section>
        <!-- Video Section Ends -->
        <!-- Contact Section Starts -->
        <section id="contact" class="contact">
            <!-- Container Starts -->
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1><span>Contact</span> Us</h1>
                    <h4>Get in Touch</h4>
                </div>
                <!-- Main Heading Starts -->
                <!-- Divider Starts -->
                <div class="divider text-center">
                    <span class="outer-line"></span>
                    <span class="fa fa-envelope" aria-hidden="true"></span>
                    <span class="outer-line"></span>
                </div>
                <!-- Divider Ends -->
            </div>
            <!-- Container Ends -->
            <!-- Map Section Starts -->
            <div class="info-map">
                <div class="google-map">
                    <div class="gmap_container">
                        <div id="gmap_canvas"></div>
                    </div>
                </div>
            </div>
            <!-- Info Map Boxes Starts -->
            <div class="container">
                <div class="row info-map-boxes">
                    <!-- Left Info Map Box Starts -->
                    <div class="col-md-6 col-sm-12">
                        <div class="info-map-boxes-item fa fa-clock-o">
                            <h1>Working Hours</h1>
                            <p>Monday-Thursday : 08:00–17:00
                                <br>Friday & Saturday : 08:00–12:30
                                <br>Sunday - Close</p>
                        </div>
                    </div>
                    <!-- Left Info Map Box Ends -->
                    <!-- Right Info Map Box Starts -->
                    <div class="col-md-6 col-sm-12">
                        <div class="info-map-boxes-item fa fa-phone">
                            <h1>Phone &amp; Online</h1>
                            <p>Phone : +39 1873 2878
                                <br>Fax : +49 (0) 123 456789-15
                                <br><a href="#">salimo@yourdomain.com</a></p>
                        </div>
                    </div>
                    <!-- Right Info Map Box Ends -->
                </div>
            </div>
            <!-- Info Map Boxes Ends -->
        </section>
        <!-- Contact Section Ends -->
        <!-- Contact Form Section Starts -->
        <section class="contactform">
            <div class="section-overlay">
                <div class="container">
                    <!-- Main Heading Starts -->
                    <div class="text-center top-text">
                        <h1><span>Send Us</span> an email</h1>
                        <h4>We are very responsive to messages</h4>
                    </div>
                    <!-- Main Heading Ends -->
                    <div class="form-container">
                        <!-- Contact Form Starts -->
                        <form class="formcontact" method="post" action="php/process-form.php">
                            <div class="row form-inputs">
                                <!-- First Name Field Starts -->
                                <div class="col-md-6 form-group custom-form-group">
                                    <span class="input custom-input">
										<input placeholder="First Name" class="input-field custom-input-field" id="firstname" name="firstname" type="text" required data-error="NEW ERROR MESSAGE">
										<label class="input-label custom-input-label" >
											<i class="fa fa-user icon icon-field"></i>
										</label>
									</span>
                                </div>
                                <!-- First Name Field Ends -->
                                <!-- Last Name Field Starts -->
                                <div class="col-md-6 form-group custom-form-group">
                                    <span class="input custom-input">
										<input placeholder="Last Name" class="input-field custom-input-field" id="lastname" name="lastname" type="text" required>
										<label class="input-label custom-input-label" >
											<i class="fa fa-user-o icon icon-field"></i>
										</label>
									</span>
                                </div>
                                <!-- Last Name Field Ends -->
                                <!-- Message Field Starts -->
                                <div class="form-group custom-form-group col-md-12">
                                    <textarea placeholder="Message" id="message" name="message" cols="45" rows="7" required></textarea>
                                </div>
                                <!-- Message Field Ends -->
                                <!-- Email Name Field Starts -->
                                <div class="col-md-6 form-group custom-form-group">
                                    <span class="input custom-input">
										<input placeholder="Email" class="input-field custom-input-field" id="email" name="email" type="text" required>
										<label class="input-label custom-input-label" >
											<i class="fa fa-envelope icon icon-field"></i>
										</label>
									</span>
                                </div>
                                <!-- Email Name Field Ends -->
                                <!-- Submit Button Starts -->
                                <div class="col-md-6 submit-form">
                                    <button id="form-submit" name="submit" type="submit" class="custom-button" title="Send">Send Message</button>
                                </div>
                                <!-- Submit Button Ends -->
                                <!-- Form Submit Message Starts -->
                                <div class="col-sm-12 text-center output_message_holder d-none">
                                    <p class="output_message"></p>
                                </div>
                                <!-- Form Submit Message Ends -->
                            </div>
                        </form>
                        <!-- Contact Form Ends -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Form Section Ends -->
        <!-- Logos Section Starts -->
        <section class="logos">
            <div class="container">
                <ul class="bxslider" id="bxslider">
                    <!-- Logos Items Starts -->
                    <li><img id="3docean" src="<?php echo base_url() ?>assets/templatefrontend/demos/img/logos-slider/3docean-light-background.png" alt="3docean"></li>
                    <li><img id="activeden" src="<?php echo base_url() ?>assets/templatefrontend/demos/img/logos-slider/activeden-light-background.png" alt="activeden"></li>
                    <li><img id="audiojungle" src="<?php echo base_url() ?>assets/templatefrontend/demos/img/logos-slider/audiojungle-light-background.png" alt="audiojungle"></li>
                    <li><img id="codecanyon" src="<?php echo base_url() ?>assets/templatefrontend/demos/img/logos-slider/codecanyon-light-background.png" alt="codecanyon"></li>
                    <li><img id="graphicriver" src="<?php echo base_url() ?>assets/templatefrontend/demos/img/logos-slider/graphicriver-light-background.png" alt="graphicriver"></li>
                    <li><img id="photodune" src="<?php echo base_url() ?>assets/templatefrontend/demos/img/logos-slider/photodune-light-background.png" alt="photodune"></li>
                    <li><img id="themeforest" src="<?php echo base_url() ?>assets/templatefrontend/demos/img/logos-slider/themeforest-light-background.png" alt="themeforest"></li>
                    <!-- Logos Items Ends -->
                </ul>
            </div>
        </section>
        <!-- Logos Section Ends -->
        <!-- Footer Section Starts -->
        <footer class="footer text-center">
            <!-- Container Starts -->
            <div class="container">
                <!-- Copyright Text Starts -->
                <p>Salimo - One Page Parallax</p>
                <p>
                    &copy; Copyright 2017 Salimo & Designed with <span class="heart">&#10084;</span> by <a target="_blank" href="http://themeforest.net/user/celtano/">Celtano</a>
                </p>
                <!-- Copyright Text Ends -->
                <!-- Social Media Links Starts -->
                <div class="social-icons">
                    <ul class="social">
                        <li>
                            <a class="twitter" href="#" title="twitter"></a>
                        </li>
                        <li>
                            <a class="facebook" href="#" title="facebook"></a>
                        </li>
                        <li>
                            <a class="google" href="#" title="google"></a>
                        </li>
                        <li>
                            <a class="skype" href="#" title="skype"></a>
                        </li>
                        <li>
                            <a class="instagram" href="#" title="instagram"></a>
                        </li>
                        <li>
                            <a class="linkedin" href="#" title="linkedin"></a>
                        </li>
                        <li>
                            <a class="youtube" href="#" title="youtube"></a>
                        </li>
                    </ul>
                </div>
                <!-- Social Media Links Ends -->
            </div>
            <!-- Container Ends -->
        </footer>
        <!-- Footer Section Starts -->
        <!-- Back To Top Starts -->
        <div id="back-top-wrapper" class="d-none d-sm-block">
            <p id="back-top">
                <a href="index.html#top"><span></span></a>
            </p>
        </div>
        <!-- Back To Top Ends -->
    </div>
    <!-- Wrapper Ends -->

    <!-- Template JS Files -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/templatefrontend/demos/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/templatefrontend/demos/js/plugins/jquery.easing.1.3.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAFnEvJfyoQ8unR5hK1u87h73EdYP46-hE"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/templatefrontend/demos/js/plugins/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/templatefrontend/demos/js/plugins/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/templatefrontend/demos/js/plugins/jquery.filterizr.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/templatefrontend/demos/js/plugins/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/templatefrontend/demos/js/plugins/jquery.singlePageNav.min.js"></script>

    <!-- Revolution Slider Main JS Files -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/templatefrontend/demos/js/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/templatefrontend/demos/js/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- Revolution Slider Extensions -->

    <script type="text/javascript" src="<?php echo base_url() ?>assets/templatefrontend/demos/js/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/templatefrontend/demos/js/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/templatefrontend/demos/js/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/templatefrontend/demos/js/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/templatefrontend/demos/js/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/templatefrontend/demos/js/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/templatefrontend/demos/js/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/templatefrontend/demos/js/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/templatefrontend/demos/js/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>

    <!-- Live Style Switcher JS File - only demo -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/templatefrontend/demos/js/styleswitcher.js"></script>

    <!-- Main JS Initialization File -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/templatefrontend/demos/js/custom.js"></script>

    <!-- Revolution Slider Initialization Starts -->
    <script>
        (function() {
            "use strict";
			// REVOLUTION SLIDER
            var tpj = jQuery;
            var revapi4;
            tpj(document).ready(function() {
                if (tpj("#rev_slider").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider");
                } else {
                    revapi4 = tpj("#rev_slider").show().revolution({
                        sliderType: "standard",
                        jsFileLocation: "js/plugins/revolution/js/",
                        dottedOverlay: "none",
                        sliderLayout: "fullscreen",
                        delay: 9000,
                        navigation: {
                            keyboardNavigation: "off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            onHoverStop: "off",
                            touch: {
                                touchenabled: "on",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            },
                            arrows: {
                                style: "zeus",
                                enable: true,
                                hide_onmobile: true,
                                hide_under: 600,
                                hide_onleave: true,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                tmp: '<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
                                left: {
                                    h_align: "left",
                                    v_align: "center",
                                    h_offset: 90,
                                    v_offset: 0
                                },
                                right: {
                                    h_align: "right",
                                    v_align: "center",
                                    h_offset: 90,
                                    v_offset: 0
                                }
                            },
                            bullets: {
                                enable: false,
                                hide_onmobile: true,
                                hide_under: 600,
                                style: "metis",
                                hide_onleave: true,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                direction: "horizontal",
                                h_align: "center",
                                v_align: "bottom",
                                h_offset: 0,
                                v_offset: 30,
                                space: 5,
                                tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span>'
                            }
                        },
                        viewPort: {
                            enable: true,
                            outof: "pause",
                            visible_area: "80%"
                        },
                        responsiveLevels: [1240, 1024, 778, 480],
                        gridwidth: [1240, 1024, 778, 480],
                        gridheight: [600, 600, 500, 400],
                        lazyType: "none",
                        parallax: {
                            type: "mouse",
                            origo: "slidercenter",
                            speed: 2000,
                            levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                        },
                        shadow: 0,
                        spinner: "off",
                        stopLoop: "off",
                        stopAfterLoops: -1,
                        stopAtSlide: -1,
                        shuffle: "off",
                        hideThumbsOnMobile: "off",
                        autoHeight: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        }
                    });
                }
            });
			
			// GOOGLE MAP
			function init_map() {
				
				var myOptions = {
					scrollwheel: false,
					zoom: 12,
					center: new google.maps.LatLng(40.7127837, -74.00594130000002),
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				var map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
				var marker = new google.maps.Marker({
					map: map,
					icon: "<?php echo base_url() ?>assets/templatefrontend/demos/img/markers/orange.png",
					position: new google.maps.LatLng(40.7127837, -74.00594130000002)
				});
				var infowindow = new google.maps.InfoWindow({
					content: "<strong>SALIMO</strong><br>1234 Disney Street, New York City<br>"
				});
				google.maps.event.addListener(marker, "click", function() {
					infowindow.open(map, marker);
				});
			}
			google.maps.event.addDomListener(window, "load", init_map);
			
        })(jQuery);
    </script>
    <!-- Revolution Slider Initialization Ends -->
</body>

</html>