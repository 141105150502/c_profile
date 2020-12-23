 <!--================Blog Area =================-->
    <section class="blog_area mt-3 mb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                                <h2 class="mt-3">Karir</h2>
                           
                            <hr>    

                            <div id="accordion">
                                <?php foreach ($karir as $k): ?>
                                    <div class="card mb-3">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#<?php echo $k->id_karir ?>" style="color:black; font-weight: bold;">
                                                <?php   echo $k->posisi_karir ?>  
                                            </a>
                                        </div>
                                        <div id="<?php echo $k->id_karir ?>" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                <?php   echo $k->deskripsi_karir ?>    
                                            </div>
                                            <div class="card-footer" align="right">
                                                   <a href="<?php   echo $k->url_formapply ?>" class="btn">Lamar Sekarang</a>   
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                           
                        </article>
                    </div>
                </div>
               
            </div>
        </div>
    </section>


 