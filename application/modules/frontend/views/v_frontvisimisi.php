 <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="<?php echo base_url() ?>assets/frontend_temp/assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2><?php echo $judul ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <!--================Blog Area =================-->
    <section class="blog_area mt-3 mb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                           <!--  <div class="blog_item_img">
                                <a href="#" class="blog_item_date">
                                    <p>Berdiri Sejak</p>
                                    <p><?php echo date('d M Y',strtotime($cprofile->tanggal_beridiri)) ?></p>
                                </a>
                            </div> -->

                            <div class="blog_details">
                                <a class="d-inline-block" href="single-blog.html">
                                    <h2>Visi Misi <?php echo $cprofile->nama_perusahaan ?></h2>
                                </a>
                                <p><?php echo $cprofile->visimisi_perusahaan ?></p>
                            </div>
                        </article>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
  