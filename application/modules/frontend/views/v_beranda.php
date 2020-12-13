<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Elsa, a multipurpose Template from Andreas Lautenschlager">
    <meta name="author" content="Andreas Lautenschlager - www.lautenschlager.de">

    <title>Elsa Theme - Multipurpose Template from Andreas Lautenschlager</title>

    
    <script src="<?php echo base_url() ?>assets/js/plugin/webfont/webfont.min.js"></script>

    <!-- normalize core CSS -->
    <!-- <link href="<?php echo base_url() ?>assets/front_template/css/normalize.css" rel="stylesheet"> -->

    <!-- Bootstrap core CSS -->
    <!-- <link href="<?php echo base_url() ?>assets/front_template/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Latest compiled and minified CSS -->

<!-- Latest compiled JavaScript -->
<!-- jQuery library -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link href="<?php echo base_url() ?>assets/front_template/bootstrap/css/carousel.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/front_template/bootstrap/fonts/glyphicons-halflings-regular.eot" rel="stylesheet">

    <!-- Load jQuery -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url() ?>assets/front_template/bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <script src="<?php echo base_url() ?>assets/front_template/bootstrap/js/ie-emulation-modes-warning.js"></script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Important Owl stylesheet -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Fonts - Change if needed -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400italic,400,700,300,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Menu shrinking -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/front_template/js/menu.js"></script>

    <!-- Main styles of this template -->
    <link href="<?php echo base_url() ?>assets/front_template/css/style.min.css?v=1.0.0" rel="stylesheet">

    <!-- Custom CSS. Input here your changes -->
    <link href="<?php echo base_url() ?>assets/front_template/css/custom.css" rel="stylesheet">

    <style>
        i.fa {
      display: inline-block;
      border-radius: 60px;
      box-shadow: 0px 0px 2px #888;
      padding: 0.5em 0.6em;

    }

      i.fas {
      display: inline-block;
      border-radius: 60px;
      box-shadow: 0px 0px 2px #888;
      padding: 0.5em 0.6em;

    }
    </style>



</head>

<body>


    <!-- Navigation -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.html"><img class="logo" src="<?php echo base_url() ?>assets/front_template/img/logo.png" alt="Logo"></a>
            </div>
            <nav class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="home.html">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <!-- <li class="dropdown-header">Profile</li> -->
                            <li><a href="index.html">Sejarah Perusahaan</a></li>
                            <!-- <li class="dropdown-header">Alternative Headers</li> -->
                            <li><a href="index-header-hero.html">Visi Misi Perusahaan</a></li>
                            <li><a href="index-header-product.html">Struktur Organisasi</a></li>
                            <li><a href="index-header-newsletter.html">Kontak Kami</a></li>
                        </ul>
                    </li>
                
                    <li><a href="components.html">Berita</a></li>
                    <li><a href="components.html">Karir</a></li>
                    <li><a href="components.html">Produk dan Layanan</a></li>
                    <li><a href="components.html">Forum Diskusi</a></li>
                    <li><a href="contact.html">Katalog File</a></li>
                </ul>
            </nav>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </div>




    <!-- Carousel Header -->
    <header>
        <div id="carousel-header" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators hidden-xs">
                <li data-target="#carousel-header" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-header" data-slide-to="1"></li>
                <li data-target="#carousel-header" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive img-full" src="http://placehold.it/1900x800" alt="">
                    <div class="carousel-caption">
                        <h3>Slide 1</h3>
                        <p>Description for Slide 1</p>
                    </div>
                </div>
                <div class="item">
                    <img class="img-responsive img-full" src="http://placehold.it/1900x800" alt="">
                    <div class="carousel-caption">
                        <h3>Slide 2</h3>
                        <p>Description for Slide 2</p>
                    </div>
                </div>
                <div class="item">
                    <img class="img-responsive img-full" src="http://placehold.it/1900x800" alt="">
                    <div class="carousel-caption">
                        <h3>Slide 3</h3>
                        <p>Description for Slide 3</p>
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-header" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#carousel-header" data-slide="next">
                <span class="icon-next"></span>
            </a>
        </div>

    </header>






    <!-- Call to Action -->
    <div class="sec-alternative" style="background-image: url(<?php echo base_url() ?>assets/front_template/img/odd_background.png)">
        <div class="container cta">
            <div class="row">
                <div class="col-md-8">
                    <p>
                        This could be your <span>Website</span>
                        <br/>
                        <span>Check out all layouts and features</span>
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="cta-button">
                        <a href="#demos" class="btn btn-primary">Buy Theme for 10$</a> <span><a href="#">or see more</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>



   
   

    <!-- icon  Listing -->
    <section class="page-section">
        <div class="container" style="margin-top: 10px;">
            <div class="row">
                <div class="col-sm-3  col-md-3" style="text-align: center;">
                    <i class="fas fa-newspaper" style="font-size: 90px; color:#FF5800; "></i>
                    <h2>Berita</h2>
                </div>
                 <div class="col-sm-3 col-md-3 " style="text-align: center;">
                    <i class="fas fa-box-open" style="font-size: 90px; color:#FF5800;"></i>
                    <h2>Produk dan Layanan</h2>
                </div>
                 <div class="col-sm-3  col-md-3" style="text-align: center;">
                    <i class="fa fa-phone" style="font-size: 90px; color:#FF5800;"></i>
                    <h2>kontak Kami</h2>
                </div>
                 <div class="col-sm-3  col-md-3" style="text-align: center;">
                    <i class="fas fa-project-diagram" style="font-size: 90px; color:#FF5800;"></i>
                    <h2>Struktur Oraganisasi</h2>
                </div>
            </div>
            <hr>
        </div>
    </section>
    <!-- icon listing -->

   

    <!-- Header Listing -->
    <section class="page-section" id="sliders">
        <div class="container">
            <div class="row margin-bottom-50">
                <div class="col-md-12 text-center">
                    <h1 class="title-section"><span class="title-regular">More <strong>Headers?</strong></span><br/>Click on the Demos below.</h1>
                    <hr class="title-underline-center">
                    <p class="lead">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                        <br/>sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>
                </div>
            </div>
            <div class="row margin-bottom-60">
                <div class="col-sm-3">
                    <div class="panel panel-default">
                        <div class="panel-heading post-thumb">
                            <img class="img img-responsive" src="https://via.placeholder.com/150x100C/O https://placeholder.com/" />
                        </div>
                        <div class="panel-body post-body">
                            <a class="label label-default" href="#">Label</a>
                            <h3 class="post-title">
                                <a href="#">Judul Artikel</a>
                            </h3>

                            <div class="post-author">
                                <small>22 Jam yang lalu</small>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel panel-default">
                        <div class="panel-heading post-thumb">
                            <img class="img img-responsive" src="https://via.placeholder.com/150x100C/O https://placeholder.com/" />
                        </div>
                        <div class="panel-body post-body">
                            <a class="label label-default" href="#">Label</a>
                            <h3 class="post-title">
                                <a href="#">Judul Artikel</a>
                            </h3>

                            <div class="post-author">
                                <small>22 Jam yang lalu</small>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel panel-default">
                        <div class="panel-heading post-thumb">
                            <img class="img img-responsive" src="https://via.placeholder.com/150x100C/O https://placeholder.com/" />
                        </div>
                        <div class="panel-body post-body">
                            <a class="label label-default" href="#">Label</a>
                            <h3 class="post-title">
                                <a href="#">Judul Artikel</a>
                            </h3>

                            <div class="post-author">
                                <small>22 Jam yang lalu</small>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel panel-default">
                        <div class="panel-heading post-thumb">
                            <img class="img img-responsive" src="https://via.placeholder.com/150x100C/O https://placeholder.com/" />
                        </div>
                        <div class="panel-body post-body">
                            <a class="label label-default" href="#">Label</a>
                            <h3 class="post-title">
                                <a href="#">Judul Artikel</a>
                            </h3>

                            <div class="post-author">
                                <small>22 Jam yang lalu</small>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="owl-example" class="owl-carousel">
            <div> <img src="http://placehold.it/80x40" alt=""></div>
            <div> <img src="http://placehold.it/80x40" alt=""> </div>
            <div> <img src="http://placehold.it/80x40" alt=""> </div>
            <div> <img src="http://placehold.it/80x40" alt=""> </div>
            <div> <img src="http://placehold.it/80x40" alt=""> </div>
            <div> <img src="http://placehold.it/80x40" alt=""> </div>
        </div>
    </section>






    <!-- FOOTER 1 -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 ">
                    <div>
                        <a href="index.html">
                            <img class="footer-logo" src="<?php echo base_url() ?>assets/front_template/img/logo-footer.png" alt="logo">
                        </a>
                    </div>
                    <div>
                        <address class="margin-bottom-30">
                            <p>Samplestreet 3<br/>
                            34117 Kassel<br/>
                            Germany</p>
                        </address>
                    </div>
                    <div class="margin-bottom-30">
                        <p><i class="fa fa-phone"></i> +49 561 00 00 00 00
                            <br/>
                            <i class="fa fa-fax"></i> +49 561 00 00 00 00</p>
                    </div>
                    <div>
                        <a href="https://lautenschlager.de">www.lautenschlager.de</a>
                        <br/>
                        <a href="mailto:info@lautenschlager.de">info@lautenschlager.de</a>
                    </div>
                </div>
                <div class="col-md-3 footer-menu">
                    <h4>About Us</h4>
                    <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                    <a href="about-us.html">
                        <button class="btn btn-primary">Read More</button>
                    </a>
                </div>
                <div class="col-md-3 footer-blog">
                    <h4>RECENT BLOG POSTS</h4>
                    <ul>
                        <li><a href="#">Blog Entry 1<br/></a> <a href="#">February 10 / John Doe </a></li>
                        <li><a href="#">Blog Entry 2<br/></a> <a href="#">March 14 / Jane Doe </a></li>
                        <li><a href="#">Blog Entry 3<br/></a> <a href="#">April 06 / Jenny Doe </a></li>
                        <li><a href="#">Blog Entry 4<br/></a> <a href="#">June 25 / James Doe </a></li>
                    </ul>
                </div>
                <div class="col-md-3  footer-menu">
                    <h4>NAVIGATE</h4>
                    <ul>
                        <a href="index.html">
                            <li>Home</li>
                        </a>
                        <a href="about-me.html">
                            <li>About Me</li>
                        </a>
                        <a href="about-us.html">
                            <li>About Us</li>
                        </a>
                        <a href="our-team.html">
                            <li>Our Team</li>
                        </a>
                        <a href="blog-right-sidebar.html">
                            <li>Blog</li>
                        </a>
                        <a href="contact.html">
                            <li>Contact</li>
                        </a>
                    </ul>
                </div>

            </div>
        </div>
    </footer>

    <!-- FOOTER 2 -->
    <footer class="page-section-no-padding  footer2-container">
        <div class="container">
            <div class="row">
                <!-- Copyright -->
                <div class="col-xs-6">
                    <p>Follow me on <a href="https://twitter.com/lautenschlagera" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #38A1F3;"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a></p>
            		<p>Template created for free commercial use by Andreas Lautenschlager.<br>More free downloads under <a href="https:/lautenschlager.de" target="_blank">lautenschlager.de</a></p>
            		<a rel="license" href="http://creativecommons.org/licenses/by/4.0/" target="_blank"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" class="fixed"></a><br>This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/4.0/" target="_blank">Creative Commons Attribution 4.0 International License</a>.
                </div>

                <!-- Social Links -->
                <div class="text-right col-xs-6 footer2-social-container">
                    <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="#" title="Google-plus" target="_blank"><i class="fa fa-google-plus"></i></a>
                    <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="#" title="Behance" target="_blank"><i class="fa fa-behance"></i></a>
                    <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                    <a href="#" title="Youtube" target="_blank"><i class="fa fa-youtube"></i></a>
                    <a href="#" title="Dribbble" target="_blank"><i class="fa fa-dribbble"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->

    <!-- Loads Bootstrap Main JS -->
    <script src="<?php echo base_url() ?>assets/front_template/bootstrap/js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url() ?>assets/front_template/bootstrap/js/ie10-viewport-bug-workaround.js"></script>

    <!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

   
</body>

</html>