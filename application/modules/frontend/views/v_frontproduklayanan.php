 <!--================Blog Area =================-->
    <section class="blog_area mt-3 mb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                                <h2 class="mt-3"><?php echo $judul ?></h2>
                            <hr>

                              <?php 


                            for ($i = 0; $i < count($produk); $i++) { ?>
                                <?php if ($i % 2) { ?>
                                
                                    <!-- echo $produk[$i]['nama_produk'];
                                    echo '<br>'; -->

                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <img src="<?php echo base_url() ?>assets/gambar/produk/<?php echo $produk[$i]['gambar_produk'] ?>" alt="" width="100%">
                                        </div>
                                        <div class="col-md-6">
                                            <h3><?php echo $produk[$i]['nama_produk'] ?></h3>
                                            <?php echo $produk[$i]['deskripsi_produk'] ?>
                                        </div>
                                    </div>   
                                    <hr>

                                <?php }else{ ?>
                                
                                  <!--   echo $produk[$i]['nama_produk'];
                                    echo '<br>';
 -->
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <h3><?php echo $produk[$i]['nama_produk'] ?></h3>
                                            <?php echo $produk[$i]['deskripsi_produk'] ?>
                                        </div>
                                        <div class="col-md-6">
                                            <img src="<?php echo base_url() ?>assets/gambar/produk/<?php echo $produk[$i]['gambar_produk'] ?>" width="100%">
                                        </div>
                                    </div>  
                                    <hr>
                                <?php } ?>
                            


                            <?php  } ?>
                            


<!-- 
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <img src="http://placehold.it/370x200" alt="" class="d-block w-100">
                                    
                                </div>
                                <div class="col-md-6">
                                    <h3><?php echo $produk->nama_produk ?></h3>
                                    <?php echo $produk->deskripsi_produk ?>
                                    
                                </div>
                                
                            </div>   

                            <hr>

                            <div class="row">
                                <div class="col-md-6">
                                    <h3><?php echo $produk->nama_produk ?></h3>

                                    <?php echo $produk->deskripsi_produk ?>
                                    
                                </div>
                                <div class="col-md-6">
                                    <img src="http://placehold.it/370x200" alt="" class="d-block w-100">
                                    
                                </div>
                                
                            </div>     --> 
                           
                        </article>
                    </div>
                </div>
               
            </div>
        </div>
    </section>



  
  