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
    <!-- <script type="text/javascript" src="<?php echo base_url() ?>assets/templatefrontend/demos/js/styleswitcher.js"></script> -->

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