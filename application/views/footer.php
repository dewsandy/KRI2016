<!--========== FOOTER ==========-->
        <footer id="footer" class="footer">
            <div class="container">
                
                <!-- end row -->

                <div class="row margin-b-50">
                    <div class="col-md-3 col-sm-6 col-xs-6 xs-full-width md-margin-b-50">
                        <h3 class="footer-title">Temukan Kami</h3>
                        <!-- News List -->
                        <address style="color:#fff;">
							<?= str_replace(array("\r\n","\r","\n","\\r","\\n","\\r\\n"),"<br/>",$web->alamat);?>
							<span class="icon-phone-sign"></span> Telp : <?= $web->telp?> <br/> Fax : <?= $web->fax?><br><br>
							Email<br><span class="icon-email"></span><?= $web->email?><br>
						</address>
                        <!-- End News List -->
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 xs-full-width md-margin-b-50">
                        <h3 class="footer-title">Berita</h3>
                        <!-- News Media -->
                        <ul class="list-unstyled footer-media">
							<?php  foreach($foot_berita as $d){?>
                            <li class="footer-media-item">
                                <div class="footer-media-poster">
                                    <img class="footer-media-img radius-circle" src="<?= base_url().$d->image?>" alt="">
                                </div>
                                <div class="footer-media-info">
                                    <a class="footer-media-link" href="<?= base_url('berita/detail').'/'.$d->slug_judul?>">
                                        <?= $berita_m->truncateHtml($d->judul,20)?>
                                    </a>
                                    <small class="footer-media-date">
										<?php
											$date = date_create($d->tanggal);
											echo date_format($date, 'M d, Y');
										?>
									</small>
                                </div>
                            </li>
							<?php } ?>
						</ul>
                        <!-- End News Media -->
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 xs-full-width xs-margin-b-50">
                        <h3 class="footer-title">Tags</h3>
                        <!-- Tags -->
                        <ul class="list-inline footer-tags margin-b-30">
                            <?php  foreach($foot_tag as $d){?>
                            <li><a class="radius-50" href="#"><?= $d->tag?></a></li>
							<?php } ?>
                        </ul>
                        <!-- End Tags -->

                        <h3 class="footer-title">Support</h3>
                        <!-- News List -->
                        <ul class="list-unstyled footer-news-list">
                            <li class="footer-news-list-item">
                                <i class="footer-news-list-icon fa fa-angle-right"></i>
                                <a class="footer-news-list-link" href="#">FAQ</a>
                            </li>
                            <!-- <li class="footer-news-list-item">
                                <i class="footer-news-list-icon fa fa-angle-right"></i>
                                <a class="footer-news-list-link" href="#">Forum</a>
                            </li>
                            <li class="footer-news-list-item">
                                <i class="footer-news-list-icon fa fa-angle-right"></i>
                                <a class="footer-news-list-link" href="#">Support</a>
                            </li> -->
                        </ul>
                        <!-- End News List -->
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 xs-full-width">
                        <!-- Video -->
                        <h3 class="footer-title">Streaming</h3>
                        <div class="footer-video">
                            <img class="img-responsive" src="http://localhost/kri/asset/upload/page/IMG-20160417-WA0017.jpg " alt="">
                            <div class="footer-video-player">
                                <a class="popup-youtube" href="<?= $web->stream?>" title="Better">
                                    <img src="assets/img/widgets/video-play.png" alt="" width="35" height="35">
                                </a>
                            </div>
                        </div>
                        <h4 class="footer-video-title">
                            <a class="footer-video-title-link" href="blog_single_post_video.html">Streaming Lomba KRI 2016</a>
                        </h4>
                        <!-- End Video -->
                    </div>
                </div>
                <!--// end row -->

                <!-- Copyright -->
                <ul class="list-inline footer-copyright">
                    <li class="footer-copyright-item">Copyright © KRI 2016 | Politeknik Elektronika Negeri Surabaya </li>
                    
                    <!-- <li class="footer-copyright-item-toggle-trigger"><a class="footer-toggle-trigger footer-toggle-trigger-style" href="javascript:void(0);">Info Lainnya</a></li>-->
                </ul>
                <!-- End Copyright -->

                <!-- Collapse -->
                <div class="footer-toggle-collapse footer-toggle" style="display: none;">
                    <div class="row">
                        <div class="col-sm-4 sm-margin-b-50">
                            <h4 class="footer-toggle-title">United States</h4>
                            <p class="footer-toggle-text">1600 Amphitheatre Parkway, Mountain View, CA 94043</p>
                            <p class="footer-toggle-text">Phone: +1 650-253-0000</p>
                            <a class="footer-toggle-link" href="#">Email: us.prothemes.net@gmail.com</a>
                        </div>
                        <div class="col-sm-4 sm-margin-b-50">
                            <h4 class="footer-toggle-title">Canada</h4>
                            <p class="footer-toggle-text">1253 McGill College Montreal, Quebec, H3B 2Y5</p>
                            <p class="footer-toggle-text">Phone: +1 514-670-8700</p>
                            <a class="footer-toggle-link" href="#">Email: canada.prothemes.net@gmail.com</a>
                        </div>
                        <div class="col-sm-4">
                            <h4 class="footer-toggle-title">Australia</h4>
                            <p class="footer-toggle-text">Level 5, 48 Pirrama Road, Pyrmont, NSW 2009</p>
                            <p class="footer-toggle-text">Phone: +61 2 9374 4000</p>
                            <a class="footer-toggle-link" href="#">Email: australia.prothemes.net@gmail.com</a>
                        </div>
                    </div>
                    <!--// end row -->
                </div>
                <!-- End Collapse -->
            </div>
        </footer>
        <!--========== END FOOTER ==========-->
    </div>
    <!-- END WRAPPER -->
<div class="sidebar-content-overlay"></div>
<!-- End Sidebar Content Overlay -->

<!-- Back To Top -->
<a href="javascript:void(0);" class="js-back-to-top back-to-top-theme"></a>
<!-- End Back To Top -->

<!--========== JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) ==========-->
<!-- CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/plugins/html5shiv.js"></script>
<script src="assets/plugins/respond.min.js"></script>
<![endif]-->
<script type="text/javascript" src="assets/plugins/jquery.migrate.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- END CORE PLUGINS -->

<!-- PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="assets/plugins/jquery.back-to-top.js"></script>
<script type="text/javascript" src="assets/plugins/jquery.smooth-scroll.js"></script>
<script type="text/javascript" src="assets/plugins/jquery.animsition.min.js"></script>
<script type="text/javascript" src="assets/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="assets/plugins/counter/waypoints.min.js"></script>
<script type="text/javascript" src="assets/plugins/counter/jquery.counterup.min.js"></script>
<script type="text/javascript" src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery.wow.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery.equal-height.js"></script>
<script type="text/javascript" src="assets/plugins/jquery.html5.video.vide.js"></script>
<script type="text/javascript" src="assets/plugins/jquery.appear.js"></script>
<script type="text/javascript" src="assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script type="text/javascript" src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/plugins/validation/jquery.validate.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- PAGE LEVEL SCRIPTS -->
<script type="text/javascript" src="assets/scripts/app.js"></script>
<script type="text/javascript" src="assets/scripts/components/header-sticky.js"></script>
<script type="text/javascript" src="assets/scripts/components/animsition.js"></script>
<script type="text/javascript" src="assets/scripts/components/scrollbar.js"></script>
<script type="text/javascript" src="assets/scripts/components/counters.js"></script>
<script type="text/javascript" src="assets/scripts/components/magnific-popup.js"></script>
<script type="text/javascript" src="assets/scripts/components/form-modal.js"></script>
<script type="text/javascript" src="assets/scripts/components/rev-slider.js"></script>
<script type="text/javascript" src="assets/scripts/components/animated-headline.js"></script>
<script type="text/javascript" src="assets/scripts/components/wow.js"></script>
<script type="text/javascript" src="assets/scripts/components/equal-height.js"></script>
<script type="text/javascript" src="assets/scripts/components/progress-bar.js"></script>
<script type="text/javascript" src="assets/scripts/portfolio/portfolio-slider-4-col-grid.js"></script>
<script type="text/javascript" src="assets/scripts/components/owl-carousel.js"></script>
<script type="text/javascript" src="assets/scripts/components/comment-form.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!--========== END JAVASCRIPTS ==========-->
<script>
	var revapi;
	jQuery(document).ready(function() {		
		revapi = jQuery("#rev_slider").revolution({
			sliderType:"standard",
			sliderLayout:"auto",
			delay:9000,
			navigation: {
				arrows:{enable:true}				
			},			
			gridwidth:1230,
			gridheight:400		
		});		
	});	/*ready*/
</script>

<!-- END BODY -->
    </body>
<!-- END BODY -->



</html>