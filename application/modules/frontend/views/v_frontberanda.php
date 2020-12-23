<main>

    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php
                $aktif1 = 0;
                 foreach ($slide as $s1): ?>
                <li data-target="#<?php echo $s1->id_slider ?>" data-slide-to="<?php echo $aktif1 ?>" <?php if ($aktif1 == 0){echo 'class="active"'; $aktif1++;} ?>></li>
             <!--    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
                    
                <?php endforeach ?>
            </ol>
            <div class="carousel-inner">
                <?php 
                $aktif2 = 0;
                $slide2 = $this->db->get('t_slider')->result();
                foreach ($slide2 as $s2) {
                 ?>
                <div class="carousel-item <?php if($aktif2 == 0){echo "active";} ?>">
                    <img class="d-block w-100" src="<?php echo base_url('assets/gambar/slider/').$s2->gambar_slider; ?>" alt="First slide">
                    <div class="carousel-caption d-none d-md-block  mb-100">
                        <h1 class=" text-capitalize font-weight-bold"><?php echo $s2->judul_slider; ?></h1>
                        <p><?php echo $s2->minitext_slider; ?></p>
                    </div>
                </div>
                <!-- <div class="carousel-item">
                    <img class="d-block w-100" src="http://placehold.it/1400x500" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>sadsad sakdsad sadsad</h2>
                        <p>sadsa lsamdklsa lkasmdlas</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="http://placehold.it/1400x500" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>sadsad sakdsad sadsad</h2>
                        <p>sadsa lsamdklsa lkasmdlas</p>
                    </div>
                </div> -->

                <?php $aktif2++; } ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
    <!-- slider Area End-->



    <!-- Our Services Start -->
    <div class="our-services pt-5">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row d-flex justify-contnet-center">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-10"
                        style="border:10px solid #014b85; border-radius: 15%;">
                        <div class="services-ion">
                            <span class="fas fa-newspaper"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="job_listing.html">Berita</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-10"
                        style="border:10px solid #014b85; border-radius: 15%;">
                        <div class="services-ion">
                            <span class="fas fa-box-open"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="job_listing.html">Produk dan Layanan</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-10"
                        style="border:10px solid #014b85; border-radius: 15%;">
                        <div class="services-ion">
                            <span class="fa fa-phone"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="job_listing.html">kontak</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-10"
                        style="border:10px solid #014b85; border-radius: 15%;">
                        <div class="services-ion">
                            <span class="fas fa-project-diagram"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="job_listing.html">Struktur Oragnisasi</a></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- More Btn -->

        </div>
    </div>

    <hr>

    <!-- Support Company Start-->
    <div class="support-company-area support-padding fix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="right-caption">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2">
                            <span>What we are doing</span>
                            <h2><?php echo $profile->nama_perusahaan ?></h2>
                        </div>
                        <div class="support-caption">

                            <p><?php echo $profile->deskripsi_singkat ?></p>
                            <a href="about.html" class="btn post-btn">Profile Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="support-location-img">
                        <img src="<?php echo base_url() ?>assets/gambar/profile_perusahaan/<?php echo $profile->gambar_perusahaan ?>" alt="">
                        <div class="support-img-cap text-center">
                            <p>Sejak</p>
                            <span><?php echo date('Y',strtotime($profile->tanggal_beridiri))?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Support Company End-->

    <!-- How  Apply Process Start-->
    <div class=" apply-bg mt-10 pb-10 pt-10 mb-10"
        data-background="<?php echo base_url() ?>assets/frontend_temp/assets/img/gallery/how-applybg.png">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle white-text text-center">
                        <!-- <span></span> -->
                        <h2 style="margin-bottom: 5px !important;"> Produk Kami</h2>
                    </div>
                    <div class="owl-carousel owl-theme mb-20">
                        <?php foreach ($prdoukkami as $pr): ?>
                        <div class="item"><img width="240px" height="200px" src="<?php echo base_url() ?>assets/gambar/produk/<?php echo $pr->gambar_produk ?>" alt=""></div>
                            
                        <?php endforeach ?>
                       <!--  <div class="item"><img width="240px" height="200px" src="http://placehold.it/240pxx200" alt=""></div>
                        <div class="item"><img width="240px" height="200px" src="http://placehold.it/240pxx200" alt=""></div>
                        <div class="item"><img width="240px" height="200px" src="http://placehold.it/240pxx200" alt=""></div>
                        <div class="item"><img width="240px" height="200px" src="http://placehold.it/240pxx200" alt=""></div>
                        <div class="item"><img width="240px" height="200px" src="http://placehold.it/240pxx200" alt=""></div>
                        <div class="item"><img width="240px" height="200px" src="http://placehold.it/240pxx200" alt=""></div> -->

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- How  Apply Process End-->



    <!-- Blog Area Start -->
    <div class="home-blog-area">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <span>Our latest blog</span>
                        <h2>Our recent news</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($beritaterbaru as $bt): ?>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img width="370" height="210" src="<?php echo base_url() ?>assets/gambar/berita/<?php echo $bt->gambar_berita ?>">
                                <!-- Blog date -->
                                <div class="blog-date text-center">
                                    <!-- <span>3</span> -->
                                    <p><?php echo  time_since(strtotime($bt->tanggal_berita)) ?></p>
                                </div>
                            </div>
                            <div class="card-body border">
                                <h5 class="card-title"><?php echo substr($bt->judul_berita,0,35)."...";  ?></h5>
                                <p class="card-text"><?php echo (str_word_count($bt->ulasan_berita) >12 ? substr($bt->ulasan_berita,0,115).".." : $bt->ulasan_berita) ; ?></p>
                                <a href="<?php echo base_url() ?>frontend/detile_berita/<?php echo $bt->id_berita ?>" class="btn btn-primary">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                   
                <?php endforeach ?>
            <!--     <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="<?php echo base_url() ?>assets/frontend_temp/assets/img/blog/home-blog2.jpg"
                                    alt=""> -->
                                <!-- Blog date -->
                               <!--  <div class="blog-date text-center">
                                    <span>24</span>
                                    <p>Now</p>
                                </div>
                            </div>
                            <div class="card-body border">
                                <h5 class="card-title">1111111111111111111111111</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div> -->
                

             
            </div>

           
              




            <div class="row mx-auto">
                <div class="col-lg-12">
                    <div class="browse-btn2 text-center mt-50 mb-20">
                        <a href="<?php echo base_url() ?>frontend/list_berita" class="border-btn2">Berita Lainnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End -->


</main>