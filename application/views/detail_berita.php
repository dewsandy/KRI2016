	<?php include('header.php') ?>       
	<?php include('navbar.php') ?>
    <section class="breadcrumbs-v1">
        <div class="container">			
            <h2 class="breadcrumbs-v1-title">
				Detail Berita				
			</h2>
            <ol class="breadcrumbs-v1-links">
                <li><a href="<?= base_url()?>">Beranda</a></li>                                
				<li><a href="<?= base_url('berita')?>">Berita</a></li>                
				<li class="active">Detail</li>
				
            </ol>
        </div>
    </section>
	<div class="bg-color-sky-light">       
        <!--========== PAGE CONTENT ==========-->
        <div class="content-sm container">
            <div class="row">
                <div class="col-md-9 md-margin-b-50">
                    <!-- Blog Grid -->
                    <article class="blog-grid margin-b-30">
                        <!-- Image -->                        
                        <?php if($page->image=='-') { ?>
							<!-- <img src="<?=base_url('asset')?>/images/blogs-img-02.jpg" class="img-responsive"/>							 --->
						<?php } else { ?>
							<img src="<?=base_url('').$page->image?>" class="img-responsive" />
						<?php } ?>
						<!-- End Image -->

                        <!-- Blog Grid Content -->
                        <div class="blog-grid-content">
                            <h2 class="blog-grid-title-lg"><a class="blog-grid-title-link" href="blog_single_standard.html"><?= $page->judul?></a></h2>
							<?= $page->full?>
                            <br/>
                            <!-- Blog Grid Tags -->                            
							<ul class="list-inline blog-sidebar-tags">								
                                <li><a class="radius-50 active" href="<?= base_url('berita/kategori').'/'.$page->id_kategori?>"><?= $page->kategori?></a></li>
								<?php foreach($tag as $d){ ?>
								<li><a class="radius-50" href="<?= base_url('berita/t').'/'.$d->slug_tag?>"><?= $d->tag?></a></li>                                
								<?php } ?>
                            </ul>
							<ul class="list-inline ul-li-lr-2 text-right sm-text-center margin-b-0">
								<li class="animate-theme-icons">
									<a class="animate-theme-icons-body animate-theme-icons-white-bg theme-icons-md radius-3" href="#">
										<i class="animate-theme-icons-element fa fa-facebook"></i>
									</a>
								</li>
								<li class="animate-theme-icons">
									<a class="animate-theme-icons-body animate-theme-icons-white-bg theme-icons-md radius-3" href="#">
										<i class="animate-theme-icons-element fa fa-twitter"></i>
									</a>
								</li>
							</ul>
                            <!-- End Blog Grid Tags -->
                        </div>
                        <!-- End Blog Grid Content -->
                    </article>
                    <!-- End Blog Grid -->

                </div>
				<?php include('sidebar.php') ?>
            </div>
            <!--// end row -->
        </div>
        <!--========== END PAGE CONTENT ==========-->

    </div>
	<?php include('footer.php') ?>   