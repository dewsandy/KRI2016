    <?php include('header.php') ?>       
	<?php include('navbar.php') ?>
    <section class="breadcrumbs-v1">
        <div class="container">			
            <h2 class="breadcrumbs-v1-title">
				<?php if(isset($s)){ ?>
					Pencarian : "<?= $s?>"
				<?php } else { ?>
					Berita
				<?php } ?>				
			</h2>
            <ol class="breadcrumbs-v1-links">
                <li><a href="<?= base_url()?>">Beranda</a></li>                
                <?php if(isset($s)){ ?>
				<li><a href="<?= base_url('berita')?>">Berita</a></li>                
				<li class="active">Pencarian</li>
				<?php } else { ?>
				<li class="active">Berita</li>
				<?php } ?>				
            </ol>
        </div>
    </section>
	<div class="bg-color-sky-light">
        <div class="content-md container">
            <div class="row">
				<div class="col-md-9">
					<?php  
						if(count($data) == 0)
							echo '<h3>Tidak ada hasil untuk : '.$s.'</h3>';												
					?>
					<?php foreach($data as $d) { ?>
					<div class="col-md-4 md-margin-b-30" style="margin-bottom:30px;">
						<!-- News v8 -->
						<article class="news-v8 news-list">
							<div class="news-v8-img-effect">
								 <!--========== gambar ==========-->
								<img class="img-responsive" src="<?= base_url().$d->image?>" alt="">
								<div class="news-v8-img-effect-center-align">
									<div class="theme-icons-wrap">
										<a class="image-popup-vertical-fit" href="<?= base_url().$d->image?>" title="">
											<i class="theme-icons theme-icons-white-bg theme-icons-md radius-3 icon-focus"></i>
										</a>
									</div>
								</div>
							</div>
							<!--// end image effect -->
							<div class="news-v8-wrap">
								<div class="news-v8-content" style="min-height: 150px;">									
									<h4 class="news-v8-title"><a href="<?= base_url('berita/detail').'/'.$d->slug_judul?>"><?= $d->judul?></a></h4>
								</div>
								<div class="news-v8-footer">
									<ul class="list-inline news-v8-footer-list">
										<!--<li class="news-v8-footer-list-item">
											<i class="news-v8-footer-list-icon icon-profile-male"></i>
											<a class="news-v8-footer-list-link" href="#"></a>
										</li>-->
										<li class="news-v8-footer-list-item">
											<i class="news-v8-footer-list-icon icon-clock"></i>
											<?php
												$date = date_create($d->tanggal);
												echo date_format($date, 'd-m-Y');
											?>
										</li>
									</ul>
								</div>
							</div>
							<!--// end wrap -->
							<div class="news-v8-more">
								<h3 class="news-v8-more-link">Quick Info</h3>
								<div class="news-v8-more-info">
									<div class="news-v8-more-info-body">
										<div class="margin-b-20">
											<?= $berita_m->truncateHtml($d->full,350)?>
										</div>										
									</div>
								</div>
							</div>
							<!--// end more -->
						</article>
						<!-- End News v8 -->
					</div>
					<?php } ?>
					
					<div class="col-md-12" style="margin-top:2%;">
						<?= $paginator;?>
					</div>
				</div>
    			<?php include('sidebar.php') ?>
    			</div>
		            <!--// end row -->
		        </div>

		        
		        <!-- End Pagers v2 -->
		        
		      
		    </div>
	<?php include('footer.php') ?>   