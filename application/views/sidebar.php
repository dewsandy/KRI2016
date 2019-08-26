<!--========== BLOG SIDEBAR ==========-->
                <div class="col-md-3">
					<div>
						<div class="search-fullscreen-overlay search-fullscreen-overlay-show">
                                <div class="search-fullscreen-overlay-content">
                                    <div class="search-fullscreen-input-group">
                                        <form  action="<?= base_url('berita/cari_post')?>" method="post">
										<input name="s" class="form-control search-fullscreen-input" placeholder="Cari Informasi" type="text">
                                        <button class="c" type="button"><i class="search-fullscreen-search-icon fa fa-search"></i></button>
										</form>
                                    </div>
                                </div>
                        </div><br>
					</div>
					<div class="margin-b-30">
						<div class="blog-sidebar">
						<div class="blog-sidebar-heading">
							<i class="blog-sidebar-heading-icon icon-calendar"></i>
                            <h4 class="blog-sidebar-heading-title">Pembukaan KRI 2016</h4>
                        </div>
						</div>
                        <div class="blog-sidebar-content">
								 <div id="CDT"></div>
						</div>
                    </div>
					<div class="margin-b-30">
					</div>
					<!-- Blog Sidebar -->
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
                    <!-- End Blog Sidebar -->
					
                    <!-- Blog Sidebar -->
                    <div class="blog-sidebar margin-b-30">
                        <div class="blog-sidebar-heading">
                            <i class="blog-sidebar-heading-icon icon-book-open"></i>
                            <h4 class="blog-sidebar-heading-title">Berita Terbaru</h4>
                        </div>
                        <div class="blog-sidebar-content blog-sidebar-content-height scrollbar mCustomScrollbar _mCS_5 mCS-autoHide" style="position: relative; overflow: visible;"><div id="mCSB_5" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside" tabindex="0"><div id="mCSB_5_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                            <!-- Latest Tutorials -->
							<?php foreach($side_berita as $d){ ?>
                            <article class="latest-tuts">
                                <div class="latest-tuts-media">
                                    <img class="latest-tuts-media-img radius-circle mCS_img_loaded" src="<?= base_url().$d->image?>" alt="">
                                </div>
                                <div class="latest-tuts-content">
                                    <h5 class="latest-tuts-content-title"><a href="<?= base_url('berita/detail').'/'.$d->slug_judul?>"><?= $d->judul?></a></h5>
                                    <small class="latest-tuts-content-time"><?= $berita_m->humanTiming(strtotime($d->tanggal)).' yang lalu'?></small>
                                </div>
                            </article>                        
							<?php } ?>
                            <!-- End Latest Tutorials -->
                        </div></div>
						</div>
                    </div>
                    <!-- End Blog Sidebar -->
						
					<!-- Blog Sidebar -->
                    <div class="blog-sidebar">
                        <div class="blog-sidebar-heading">
                            <i class="blog-sidebar-heading-icon icon-documents"></i>
                            <h4 class="blog-sidebar-heading-title">Kategori</h4>
                        </div>
                        <div class="blog-sidebar-content">
                            <!-- Blog Grid Tags -->
                            <ul class="list-inline blog-sidebar-tags">
								<?php foreach($side_kategori as $d){ ?>
                                <li><a class="radius-50" href="#"><?= $d->kategori?>(<?= $d->total?>)</a></li>
								<?php } ?>
                            </ul>
                            <!-- End Blog Grid Tags -->
                        </div>
                    </div>	
						                    
					
                    <!-- Blog Sidebar 
                    <div class="blog-sidebar margin-b-30">
                        <div class="blog-sidebar-heading">
                            <i class="blog-sidebar-heading-icon icon-chat"></i>
                            <h4 class="blog-sidebar-heading-title">Twitter feed</h4>
                        </div>
                        <div class="blog-sidebar-content blog-sidebar-content-height scrollbar mCustomScrollbar _mCS_7 mCS-autoHide" style="position: relative; overflow: visible;"><div id="mCSB_7" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside" tabindex="0"><div id="mCSB_7_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                            
                            <ul class="list-unstyled twitter-feed">
                                <li class="twitter-feed-item">
                                    <div class="twitter-feed-media">
                                        <img class="twitter-feed-media-img radius-circle mCS_img_loaded" src="assets/img/250x250/01.jpg" alt="">
                                    </div>
                                    <div class="twitter-feed-content">
                                        <strong class="twitter-feed-profile-name">Dr.Cafee</strong>
                                        <span class="twitter-feed-profile-nickname"><a class="twitter-feed-profile-nickname-link" href="#">@DrCafee</a></span>
                                        <span class="twitter-feed-posted-time">4h</span>
                                        <p class="twitter-feed-paragraph">Sequat ultrices metus et malesuada.</p>
                                        <a class="twitter-feed-link" href="#">http://bit.ly/1c0UN3Y</a>
                                    </div>
                                </li>
                                <li class="twitter-feed-item">
                                    <div class="twitter-feed-media">
                                        <img class="twitter-feed-media-img radius-circle mCS_img_loaded" src="assets/img/250x250/04.jpg" alt="">
                                    </div>
                                    <div class="twitter-feed-content">
                                        <strong class="twitter-feed-profile-name">Nickos</strong>
                                        <span class="twitter-feed-profile-nickname"><a class="twitter-feed-profile-nickname-link" href="#">@Nicko</a></span>
                                        <span class="twitter-feed-posted-time">5h</span>
                                        <p class="twitter-feed-paragraph">Nam bibendum urna in arcu mollis suscipit.</p>
                                        <a class="twitter-feed-link" href="#">http://bit.ly/1c0UN3Y</a>
                                    </div>
                                </li>
                                <li class="twitter-feed-item">
                                    <div class="twitter-feed-media">
                                        <img class="twitter-feed-media-img radius-circle mCS_img_loaded" src="assets/img/250x250/02.jpg" alt="">
                                    </div>
                                    <div class="twitter-feed-content">
                                        <strong class="twitter-feed-profile-name">PhotoStudio</strong>
                                        <span class="twitter-feed-profile-nickname"><a class="twitter-feed-profile-nickname-link" href="#">@PS</a></span>
                                        <span class="twitter-feed-posted-time">7h</span>
                                        <p class="twitter-feed-paragraph">Curabitur leo turpis, tempus id tincidunt non, pharetra sed urna.</p>
                                        <a class="twitter-feed-link" href="#">http://bit.ly/1c0UN3Y</a>
                                    </div>
                                </li>
                                <li class="twitter-feed-item">
                                    <div class="twitter-feed-media">
                                        <img class="twitter-feed-media-img radius-circle mCS_img_loaded" src="assets/img/250x250/03.jpg" alt="">
                                    </div>
                                    <div class="twitter-feed-content">
                                        <strong class="twitter-feed-profile-name">Mr.Dog</strong>
                                        <span class="twitter-feed-profile-nickname"><a class="twitter-feed-profile-nickname-link" href="#">@Mr.Dog</a></span>
                                        <span class="twitter-feed-posted-time">1d</span>
                                        <p class="twitter-feed-paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        <a class="twitter-feed-link" href="#">http://bit.ly/1c0UN3Y</a>
                                    </div>
                                </li>
                            </ul>                            
                        </div></div>
						</div>
                    </div>
                     End Blog Sidebar -->

                    <!-- Featured Article -->
                    <a class="featured-article margin-b-30" href="#">
                        <img class="img-responsive" src="assets/img/970x647/26.jpg" alt="">
                        <div class="featured-article-content-wrap">
                            <div class="featured-article-content">
                                <p class="featured-article-content-title">Preview: First look at new device</p>
                                <small class="featured-article-content-time">10 Aug, 2016</small>
                            </div>
                        </div>
                    </a>
                    <!-- End Featured Article -->

                    <!-- Blog Sidebar -->
                    <div class="blog-sidebar">
                        <div class="blog-sidebar-heading">
                            <i class="blog-sidebar-heading-icon icon-paperclip"></i>
                            <h4 class="blog-sidebar-heading-title">Tags</h4>
                        </div>
                        <div class="blog-sidebar-content">
                            <!-- Blog Grid Tags -->
                            <ul class="list-inline blog-sidebar-tags">
								<?php foreach($side_tag as $d){ ?>
                                <li><a class="radius-50" href="#"><?= $d->tag?>(<?= $d->total?>)</a></li>
								<?php } ?>
                            </ul>
                            <!-- End Blog Grid Tags -->
                        </div>
                    </div>
                    <!-- End Blog Sidebar -->
                </div>
                <!--========== END BLOG SIDEBAR ==========-->