
    <!--================Blog Area =================-->
    <section class="blog_area">
        <div class="container">
            <H4 class="mt-3 mb-3"><?php echo $judul; ?> </H4>
            <hr>
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <?php foreach ($list_berita as $lb): ?>
                           <!--  
                            <div class="row border mb-3">
                                <div class="col-md-4">
                                    <article class="blog_item" style="margin-bottom: 0px;">
                                        <div class="blog_item_img">
                                            <img class="card-img rounded-0" src="<?php echo base_url() ?>assets/gambar/berita/<?php echo $lb->gambar_berita ?>" alt="" width="200px" height="190px">
                                        </div>
                                    </article>  
                                </div>

                                <div class="col-md-8">
                                    <article class="blog_item">

                                        <div class="blog_details" style="padding-top: 5px ;">
                                            <a class="d-inline-block" href="single-blog.html">
                                                <h2><?php echo $lb->judul_berita ?></h2>
                                            </a>
                                            <p><?php echo (str_word_count($lb->ulasan_berita) >12 ? substr($lb->ulasan_berita,0,115).".." : $lb->ulasan_berita) ;?></p>
                                            <ul class="blog-info-link">
                                                <li><a href="#"><i class="fa fa-calendar"></i> <span class="badge badge-danger" style="background-color: #fb246a;"></span></a></li>
                                                <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                            </div> -->


                            <article class="blog_item" >
                                <div class="blog_details" style="padding-top: 5px ;">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="blog_item_img">
                                                <a href="">
                                                <img class="card-img rounded-0" src="<?php echo base_url() ?>assets/gambar/berita/<?php echo $lb->gambar_berita ?>" alt=""  width="200px" height="190px">
                                                </a>
                                            </div> 
                                        </div>
                                        <div class="col-md-8">
                                            <a class="d-inline-block" href="<?php echo base_url() ?>frontend/detile_berita/<?php echo $lb->id_berita ?>">
                                                <h2><?php echo $lb->judul_berita ?></h2>
                                            </a>
                                            <a class="d-inline-block" href="<?php echo base_url() ?>frontend/detile_berita/<?php echo $lb->id_berita ?>">
                                                <p><?php echo (str_word_count($lb->ulasan_berita) >12 ? substr($lb->ulasan_berita,0,115).".." : $lb->ulasan_berita) ;?></p>
                                            </a>
                                            <ul class="blog-info-link">
                                                <li><a href="#"><i class="fa fa-calendar"></i> <span class="badge badge-danger" style="background-color: #fb246a;"> <?php echo $lb->tanggal_berita ?></span></a></li>
                                                <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>  

                        <?php endforeach ?>
                       


                        


                      <!--   <div class="row">
                            <div class="col-md-4">
                                <article class="blog_item" >
                                    <div class="blog_item_img">
                                        <img class="card-img rounded-0" src="http://placehold.it/200x190" alt="">
                                    </div>
                                </article>  
                            </div>

                            <div class="col-md-8">
                                <article class="blog_item">

                                    <div class="blog_details" style="padding-top: 5px ;">
                                        <a class="d-inline-block" href="single-blog.html">
                                            <h2>Google inks pact for new 35-storey office</h2>
                                        </a>
                                        <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                            he earth it first without heaven in place seed it second morning saying.</p>
                                        <ul class="blog-info-link">
                                            <li><a href="#"><i class="fa fa-calendar"></i> <span class="badge badge-danger" style="background-color: #fb246a;">   5 Januari 2020</span></a></li>
                                            <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                        </div> -->


                   


                        <?php echo $tampil; ?>

                        <!-- <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav> -->
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
                                        <a href="single-blog.html">
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
    <!--================Blog Area =================-->
   