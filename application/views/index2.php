<?php include('header.php') ?>
<?php include('navbar.php') ?>
	<!--========== SIDEBAR ==========-->
    <div class="sidebar-nav scrollbar">
        <a class="sidebar-trigger sidebar-nav-trigger" href="javascript:void(0);">
            <span class="sidebar-trigger-icon"></span>
        </a>
        <div class="sidebar-nav-content">
            <h3 class="sidebar-nav-title">Get In Touch </h3>
            <p class="sidebar-nav-about-text"><span class="fweight-400">Address:</span> 795 Folsom Ave, Suite 600, San Francisco, CA 94107</p>
            <p class="sidebar-nav-about-text"><span class="fweight-400">Phone:</span> +123 456 7890</p>
            <p class="sidebar-nav-about-text margin-b-40"><span class="fweight-400">Email:</span> <a class="sidebar-nav-about-link" href="#">prothemes.net@gmail.com</a></p>
            <input type="text" class="form-control sidebar-nav-comment-input margin-b-10 radius-3" placeholder="Your Name">
            <input type="email" class="form-control sidebar-nav-comment-input margin-b-10 radius-3" placeholder="Your e-Mail">
            <textarea class="form-control sidebar-nav-comment-input margin-b-30 radius-3" rows="3" placeholder="Your message"></textarea>
            <button type="button" class="btn-white-brd btn-base-sm radius-3">Submit</button>
        </div>
    </div>
    <!--========== END SIDEBAR ==========-->
    
    <!--========== REVOLUTION SLIDER ==========-->
    <div id="rev_slider" class="rev_slider"  data-version="5.0">
	    <ul>
	       <?php foreach($banner as $d){ ?>
	        <li data-transition="slideoverhorizontal">
	            
	            <img src="<?= base_url().$d->banner?>"  alt=""  width="1920" height="1280">							
	          
	            <div class="tp-caption tp-resizeme rs-parallaxlevel-0" 							
	                data-x="left" data-hoffset="80" 
	                data-y="top" data-voffset="450" 							
	                data-whitespace="normal"
	                data-transform_idle="o:1;"			
	                data-transform_in="o:0" 
	                data-transform_out="o:0" 							 
	                data-start="500" 
	                style="font-size:60px;line-height:66px; color:#fff"							 							
	                >DISCOVER THE WILD 
	            </div>
	        </li>
	       <?php } ?>
	    </ul>
	</div>
	<!-- END REVOLUTION SLIDER -->
    <!--========== END REVOLUTION SLIDER ==========-->

    <!--========== PAGE CONTENT ==========-->
	 <!--========== PAGE CONTENT ==========-->
	<div class="bg-color-sky-light">
        <div class="content-md container">
            <!-- Heading v1 -->
            <div class="heading-v1 text-center margin-b-80">
                <h2 class="heading-v1-title">Divisi dan Kategori</h2>
                <p class="heading-v1-text">Kontes Robot Indonesia 2016</p>
            </div>
            <!-- End Heading v1 -->

            <!-- Theme Portfolio -->
            <div class="theme-portfolio theme-portfolio-nav-v2">
                <!-- Portfolio Slider 4 Columns Grid -->
                <div id="portfolio-slider-4-col-grid" class="cbp">
                    <!-- Cbp Item -->
					<?php foreach($kompetisi as $krsbi) { ?>
					<div class="cbp-item">
                    <!-- News v8 -->
						<article class="news-v8">
							<div class="news-v8-img-effect" style="min-height:175px;">
								 <!--========== gambar ==========-->
								<img class="img-responsive" src="<?= base_url().$krsbi->image?>" alt="">
								<div class="news-v8-img-effect-center-align">
									<div class="theme-icons-wrap">
										<a class="image-popup-vertical-fit" href="http://localhost/kri/asset/upload/page/2016-krpai-icon2.jpg" title="">
											<i class="theme-icons theme-icons-white-bg theme-icons-md radius-3 icon-focus"></i>
										</a>
									</div>
								</div>
							</div>
							<!--// end image effect -->
							<div class="news-v8-wrap">
								<div class="news-v8-content">
									<span class="news-v8-category"><?= strtoupper($krsbi->for_page)?></span>
									<h2 class="news-v8-title"><a href="#"><?= $krsbi->judul?></a></h2>
								</div>
								<div class="news-v8-footer">
									<ul class="list-inline news-v8-footer-list">
										<li class="news-v8-footer-list-item">                                        
										</li>
										<li class="news-v8-footer-list-item">
											<i class="news-v8-footer-list-icon icon-clock"></i>
											<?php
												$date = date_create($krsbi->date_add);
												echo date_format($date, 'Y-m-d H:i:s');
											?>
										</li>
									</ul>
								</div>
							</div>
							<!--// end wrap -->
							<div class="news-v8-more">
								<div class="news-v8-more-link">Quick Info</div>
								<div class="news-v8-more-info">
									<div class="news-v8-more-info-body">
										<div class="margin-b-20">
											<span><?= $berita_m->truncateHtml($krsbi->isi,300)?><span>                                  
										</div>                                                                        
									</div>
								</div>
							</div>
							<!--// end more -->
						</article>
                    <!-- End News v8 -->
					</div>
					<?php } ?>
                    
                </div>
                <!-- End Portfolio Slider 4 Columns Grid -->
            </div>
            <!-- End Theme Portfolio -->
			
        </div>
		
    </div><!--bg color-->
	<section class="">
        <div class="content-md container">
            <div class="row">
                <div class="col-md-6 md-margin-b-30">
                    <!-- Team v3 -->
                    <div class="team-v3">
                        <div class="row">
                            <div class="col-sm-5 sm-margin-b-20">
                                <div class="team-v3-img-wrap">
									   <!--========== gambar ==========-->
                                    <img class="full-width img-responsive" src="<?= base_url().$pens->image?>" alt="">
                                    <ul class="list-inline team-v3-overlay-content ul-li-lr-1">
                                        <li class="theme-icons-wrap">
                                            <a href="#"><i class="theme-icons theme-icons-white-bg theme-icons-xs radius-3 fa fa-facebook"></i></a>
                                        </li>
                                        <li class="theme-icons-wrap">
                                            <a href="#"><i class="theme-icons theme-icons-white-bg theme-icons-xs radius-3 fa fa-twitter"></i></a>
                                        </li>
                                        <li class="theme-icons-wrap">
                                            <a href="#"><i class="theme-icons theme-icons-white-bg theme-icons-xs radius-3 fa fa-google-plus"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="team-v3-header">
                                    <h4 class="team-v3-member"><?= $pens->judul?></h4>
                                  
                                </div>
                                <p class="team-v3-paragraph"><?= $berita_m->truncateHtml($pens->isi,100)?></p>
                                
                            
                                <a class="team-v3-member-contact" href="#"><i>Lanjut Baca</i></a>
                            </div>
                        </div><!-- End row -->
                    </div>
                    <!-- End Team v3 -->
                </div>

                <div class="col-md-6">
                    <!-- Team v3 -->
                    <div class="team-v3">
                        <div class="row">
                            <div class="col-sm-5 sm-margin-b-20">
                                <div class="team-v3-img-wrap">
									   <!--========== gambar ==========-->
                                    <img class="full-width img-responsive" src="<?= base_url().$kri->image?>" alt="">
                                    <ul class="list-inline team-v3-overlay-content ul-li-lr-1">
                                        <li class="theme-icons-wrap">
                                            <a href="#"><i class="theme-icons theme-icons-white-bg theme-icons-xs radius-3 fa fa-facebook"></i></a>
                                        </li>
                                        <li class="theme-icons-wrap">
                                            <a href="#"><i class="theme-icons theme-icons-white-bg theme-icons-xs radius-3 fa fa-twitter"></i></a>
                                        </li>
                                        <li class="theme-icons-wrap">
                                            <a href="#"><i class="theme-icons theme-icons-white-bg theme-icons-xs radius-3 fa fa-google-plus"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="team-v3-header">
                                    <h4 class="team-v3-member"><?= $kri->judul?></h4>
                                  
                                </div>
                                <p class="team-v3-paragraph"><?= $berita_m->truncateHtml($kri->isi,100)?></p>
                                
                            
                                <a class="team-v3-member-contact" href="#"><i>Lanjut Baca</i></a>
                            </div>
                        </div><!-- End row -->
                    <!--// end row -->
                    </div>
                    <!-- End Team v3 -->
                </div>
            </div>
            <!--// end row -->
        </div>
    </section>
	<div class="bg-color-sky-light">
        <div class="content-md container">
           <div class="col-md-5">
				<div class="blog-sidebar margin-b-30">
                        <div class="blog-sidebar-heading">
                            <i class="blog-sidebar-heading-icon icon-calendar"></i>
                            <h4 class="blog-sidebar-heading-title">Agenda dan Event</h4>
                        </div>
                        <div class="blog-sidebar-content blog-sidebar-content-height scrollbar mCustomScrollbar _mCS_6 mCS-autoHide" style="position: relative; overflow: visible;"><div id="mCSB_6" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside" tabindex="0"><div id="mCSB_6_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                            <!--Timeline v2 -->
                            <ul class="timeline-v2">
                                <?php foreach($side_agenda as $d){ ?>
								<li class="timeline-v2-list-item">
                                    <i class="timeline-v2-badge-icon radius-circle fa fa-calendar"></i>
                                    <small class="timeline-v2-news-date">
										<?php
											$date = date_create($d->date_add);
											echo date_format($date, 'M d, Y');
										?>
									</small>
                                    <h5 class="timeline-v2-news-title"><a href="#"><?= $d->agenda?></a></h5>
                                </li>
                                <?php } ?>
                                <li class="clearfix" style="float: none;"></li>
                            </ul>
                            <!-- End Timeline v2 -->
                        </div></div>
						</div>
                    </div>
		   </div>
        </div>
    </div>
	
    </div>
    <!--========== END PAGE CONTENT ==========-->
<?php include('footer.php') ?>