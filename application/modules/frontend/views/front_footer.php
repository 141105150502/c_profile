    <?php $profile = $this->db->get('t_profileperusahaan')->row(); ?>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-bg footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                       <div class="single-footer-caption mb-50">
                         <div class="single-footer-caption mb-30">
                             <div class="footer-tittle">
                                 <h4>tentang Kami</h4>
                                 <ul>
                                    <li><?php echo  $profile->nama_perusahaan ?></li>
                                    <li>alamat : <?php echo  $profile->alamat_perusahaan ?></li>
                                </ul>
                             </div>
                         </div>

                       </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Kontak Info</h4>
                                <ul>
                                    <li><a href="#">Phone : <?php echo  $profile->telepon_perusahaan ?></a></li>
                                    <li><a href="#">Email : <?php echo  $profile->email_perusahaan ?></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Link</h4>
                                <ul>
                                    <li><a href="<?php echo base_url() ?>frontend/front_produklayanan">Produk Dan Layanan</a></li>
                                    <li><a href="<?php echo base_url() ?>frontend/front_kontak">Kontak</a></li>
                                    <li><a href="<?php echo base_url() ?>frontend/list_berita">Berita</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                   <!--  <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Newsletter</h4>
                                <div class="footer-pera footer-pera2">
                                 <p>Heaven fruitful doesn't over lesser in days. Appear creeping.</p>
                             </div> -->
                             <!-- Form -->
                            <!--  <div class="footer-form" >
                                 <div id="mc_embed_signup">
                                     <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                     method="get" class="subscribe_form relative mail_part">
                                         <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                         class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                         onblur="this.placeholder = ' Email Address '">
                                         <div class="form-icon">
                                             <button type="submit" name="submit" id="newsletter-submit"
                                             class="email_icon newsletter-submit button-contactForm"><img src="<?php echo base_url() ?>assets/frontend_temp/assets/img/icon/form.png" alt=""></button>
                                         </div>
                                         <div class="mt-10 info"></div>
                                     </form>
                                 </div>
                             </div>
                            </div>
                        </div>
                    </div> -->
                </div>
               <!--  -->
               <!-- <div class="row footer-wejed justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6"> -->
                        <!-- logo -->
                       <!--  <div class="footer-logo mb-20">
                        <a href="index.html"><img src="<?php echo base_url() ?>assets/frontend_temp/assets/img/logo/logo2_footer.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                    <div class="footer-tittle-bottom">
                        <span>5000+</span>
                        <p>Talented Hunter</p>
                    </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="footer-tittle-bottom">
                            <span>451</span>
                            <p>Talented Hunter</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5"> -->
                        <!-- Footer Bottom Tittle -->
                       <!--  <div class="footer-tittle-bottom">
                            <span>568</span>
                            <p>Talented Hunter</p>
                        </div>
                    </div>
               </div> -->
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                     <div class="row d-flex justify-content-between align-items-center">
                         <div class="col-xl-10 col-lg-10 ">
                             <div class="footer-copy-right">
                                 <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved<!--  <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank"></a> -->
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                             </div>
                         </div>
                         <div class="col-xl-2 col-lg-2">
                             <div class="footer-social f-right">
                                <?php $cp = $this->db->get('t_profileperusahaan')->row(); ?>
                                 <a href="<?php echo  $profile->link_facebook ?>"><i class="fab fa-facebook-f"></i></a>
                                 <a href="<?php echo  $profile->link_twiter ?>"><i class="fab fa-twitter"></i></a>
                                 <a href="<?php echo  $profile->link_instagram ?>"><i class="fab fa-instagram"></i></a>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

  <!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="<?php echo base_url() ?>assets/frontend_temp/assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="<?php echo base_url() ?>assets/frontend_temp/assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="<?php echo base_url() ?>assets/frontend_temp/assets/js/popper.min.js"></script>
        <script src="<?php echo base_url() ?>assets/frontend_temp/assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="<?php echo base_url() ?>assets/frontend_temp/assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="<?php echo base_url() ?>assets/frontend_temp/assets/js/owl.carousel.min.js"></script>
        <script src="<?php echo base_url() ?>assets/frontend_temp/assets/js/slick.min.js"></script>
        <script src="<?php echo base_url() ?>assets/frontend_temp/assets/js/price_rangs.js"></script>
        
		<!-- One Page, Animated-HeadLin -->
        <script src="<?php echo base_url() ?>assets/frontend_temp/assets/js/wow.min.js"></script>
		<script src="<?php echo base_url() ?>assets/frontend_temp/assets/js/animated.headline.js"></script>
        <script src="<?php echo base_url() ?>assets/frontend_temp/assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="<?php echo base_url() ?>assets/frontend_temp/assets/js/jquery.scrollUp.min.js"></script>
        <script src="<?php echo base_url() ?>assets/frontend_temp/assets/js/jquery.nice-select.min.js"></script>
		<script src="<?php echo base_url() ?>assets/frontend_temp/assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="<?php echo base_url() ?>assets/frontend_temp/assets/js/contact.js"></script>
        <script src="<?php echo base_url() ?>assets/frontend_temp/assets/js/jquery.form.js"></script>
        <script src="<?php echo base_url() ?>assets/frontend_temp/assets/js/jquery.validate.min.js"></script>
        <script src="<?php echo base_url() ?>assets/frontend_temp/assets/js/mail-script.js"></script>
        <script src="<?php echo base_url() ?>assets/frontend_temp/assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="<?php echo base_url() ?>assets/frontend_temp/assets/js/plugins.js"></script>
        <script src="<?php echo base_url() ?>assets/frontend_temp/assets/js/main.js"></script>

        <script>
            $('.owl-carousel').owlCarousel({
                iitems:4,
                loop:true,
                margin:10,
                autoplay:true,
                autoplayTimeout:2000,
                autoplayHoverPause:true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:false
                    },
                    600:{
                        items:3,
                        nav:false
                    },
                    1000:{
                        items:5,
                        nav:false,
                        loop:true
                    }
                }
            })


        </script>
        
    </body>
</html>