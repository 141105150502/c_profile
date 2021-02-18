
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
    <!-- Hero Area End -->
    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="<?php echo base_url() ?>assets/gambar/berita/<?php echo $getberita->gambar_berita ?>" alt="" width='770px' height='385'>
                              <!--   <a href="#" class="blog_item_date">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a> -->
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="single-blog.html">
                                    <h2><?php echo $getberita->judul_berita ?></h2>
                                </a>
                                <p><?php echo $getberita->isi_berita ?></p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i> <?php echo date('d M Y',strtotime($getberita->tanggal_berita)) ?></a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>

                      

                        
                    </div>
                </div>
                  <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Search Keyword'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btns" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Search</button>
                            </form>
                        </aside>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Kategori</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="<?php echo base_url() ?>frontend/list_berita?unset=1" class="d-flex">
                                        <p>Semua Berita</p>
                                        <p>(<?php echo $this->db->get('t_berita')->num_rows(); ?>)</p>
                                    </a>
                                </li> 

                                <?php foreach ($kategori_berita as $kateg): ?>
                                    <li>
                                        <a href="<?php echo base_url() ?>frontend/list_berita/?filter=<?php echo $kateg->id_kategoriberita ?>" class="d-flex">
                                            <p><?php echo $kateg->kategori_berita ?></p>
                                            <p>
                                                (<?php echo $this->db->get_where('t_berita', ['tkat_id' => $kateg->id_kategoriberita])->num_rows(); ?>)
                                            </p>
                                        </a>
                                    </li>
                                <?php endforeach ?>
                             <!--    <li>
                                    <a href="#" class="d-flex">
                                        <p>Travel news</p>
                                        <p>(10)</p>
                                    </a>
                                </li> -->
                                
                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
                            <?php 
                            $this->db->order_by('tanggal_berita', 'desc');
                            $beritaterbaru = $this->db->get('t_berita', 5)->result(); ?>
                            <?php foreach ($beritaterbaru as $bt): ?>
                                <div class="media post_item">
                                    <img src="<?php echo base_url() ?>assets/gambar/berita/<?php echo $bt->gambar_berita ?>" alt="post" width="80px" height="80px">
                                    <div class="media-body">
                                        <a href="<?php echo base_url() ?>frontend/detile_berita/<?php echo $bt->id_berita ?>">
                                            <h3><?php echo (str_word_count($bt->judul_berita) >10 ? substr($bt->judul_berita,0,25).".." : $bt->judul_berita) ;?>    </h3>
                                        </a>
                                        <p><?php echo date('d M Y',strtotime($bt->tanggal_berita)) ?></p>
                                    </div>
                                </div>
                            <?php endforeach ?>

                        <!--     <div class="media post_item">
                                <img src="<?php echo base_url() ?>assets/frontend_temp/assets/img/post/post_2.png" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>The Amazing Hubble</h3>
                                    </a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div> -->
                            
                        </aside>
                        <aside class="single_sidebar_widget tag_cloud_widget">
                            <h4 class="widget_title">Tag Clouds</h4>
                            <ul class="list">
                                <li>
                                    <a href="#">project</a>
                                </li>
                                <li>
                                    <a href="#">love</a>
                                </li>
                                <li>
                                    <a href="#">technology</a>
                                </li>
                                <li>
                                    <a href="#">travel</a>
                                </li>
                                <li>
                                    <a href="#">restaurant</a>
                                </li>
                                <li>
                                    <a href="#">life style</a>
                                </li>
                                <li>
                                    <a href="#">design</a>
                                </li>
                                <li>
                                    <a href="#">illustration</a>
                                </li>
                            </ul>
                        </aside>


                        <aside class="single_sidebar_widget instagram_feeds">
                            <h4 class="widget_title">Instagram Feeds</h4>
                            <ul class="instagram_row flex-wrap">
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="assets/img/post/post_5.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="assets/img/post/post_6.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="assets/img/post/post_7.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="assets/img/post/post_8.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="assets/img/post/post_9.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="assets/img/post/post_10.png" alt="">
                                    </a>
                                </li>
                            </ul>
                        </aside>


                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>

                            <form action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Subscribe</button>
                            </form>
                        </aside>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
   