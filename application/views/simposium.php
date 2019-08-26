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
				<li><a href="<?= base_url('simposium')?>">Simposium</a></li>                
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
				<div class="row margin-b-30">
            <div class="col-sm-6">
				<div class="divider-v3"><div class="divider-v3-element divider-v3-element-bg radius-50">Daftar</div></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris id condimentum risus. Vivamus sit amet sapien quis nulla tempus placerat. Ut nisi sem, tristique quis tortor porttitor, pulvinar accumsan sem. Nullam ullamcorper rutrum egestas. Nunc mauris leo, venenatis id mauris eget, elementum varius metus. Curabitur euismod, libero quis porta varius, turpis lectus fermentum metus, ut hendrerit enim nibh pellentesque elit. Aliquam sodales vestibulum iaculis. Ut et pulvinar metus. </p>
				<div class="margin-b-40"></div>
				<div class="form-modal-nav">
				<a class="form-modal-daftar" href="javascript:void(0);">
				<button type="button" class="btn-green-brd btn-base-animate-to-top btn-base-md radius-7">Daftar Peserta
                        <span class="btn-base-element-md"><i class="btn-base-element-icon fa fa-users"></i></span>
                </button>
				</a>
				</div>
			</div>
            <div class="col-sm-6 sm-margin-b-30">
				<div class="divider-v3"><div class="divider-v3-element divider-v3-element-bg radius-50">Masuk</div></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris id condimentum risus. Vivamus sit amet sapien quis nulla tempus placerat. Ut nisi sem, tristique quis tortor porttitor, pulvinar accumsan sem. Nullam ullamcorper rutrum egestas. Nunc mauris leo, venenatis id mauris eget, elementum varius metus. Curabitur euismod, libero quis porta varius, turpis lectus fermentum metus, ut hendrerit enim nibh pellentesque elit. Aliquam sodales vestibulum iaculis. Ut et pulvinar metus. </p>
				<div class="margin-b-40"></div>
				<div class="form-modal-nav">
					<a class="form-modal-masuk" href="javascript:void(0);">
					<button type="button" class="btn-blue-brd btn-base-animate-to-top btn-base-md radius-7">Masuk Peserta
							<span class="btn-base-element-md"><i class="btn-base-element-icon fa fa-users"></i></span>
					</button>
					</a>
				</div>
			</div>
        </div>
    		</div>
		            <!--// end row -->
		</div>

		        
		        <!-- End Pagers v2 -->
		        
		      
		    </div>
	<?php include('footer.php') ?>   