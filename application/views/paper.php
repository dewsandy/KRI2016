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
					<div class="divider-v3"><div class="divider-v3-element divider-v3-element-bg radius-50">Paper</div></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris id condimentum risus. Vivamus sit amet sapien quis nulla tempus placerat. Ut nisi sem, tristique quis tortor porttitor, pulvinar accumsan sem. Nullam ullamcorper rutrum egestas. Nunc mauris leo, venenatis id mauris eget, elementum varius metus. Curabitur euismod, libero quis porta varius, turpis lectus fermentum metus, ut hendrerit enim nibh pellentesque elit. Aliquam sodales vestibulum iaculis. Ut et pulvinar metus. </p>
				<div class="margin-b-40"></div>
                    <!-- Table Wrap -->
                    <div class="table-wrap">
                        <div class="table-wrap-header">
                            <h3 class="table-wrap-header-title">Paper Simposium</h3>
                            <ul class="list-inline table-wrap-header-tools ul-li-lr-0">
                                <li class="table-wrap-header-tools-item theme-icons-wrap"><a href="javascript:void(0);"><i class="theme-icons theme-icons-dark-hover theme-icons-xs radius-circle fa fa-bell-o"></i></a></li>
                                <li class="table-wrap-header-tools-item theme-icons-wrap"><a href="javascript:void(0);"><i class="theme-icons theme-icons-dark-hover theme-icons-xs radius-circle fa fa-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="table-wrap-body">
                            <div class="table-responsive">
                                <!-- Table Hover -->
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Header 1</th>
                                            <th>Header 2</th>
                                            <th>Header 3</th>
                                            <th>Header 4</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Item #1</td>
                                            <td>Apple</td>
                                            <td>100GB</td>
                                            <td>
												<button type="button" class="btn-green-bg btn-base-animate-to-top btn-base-sm radius-5">Unduh
													<span class="btn-base-element-md"><i class="btn-base-element-icon fa fa-download"></i></span>
												</button>
											</td>
                                        </tr>
                                        <tr>
                                            <td>Item #2</td>
                                            <td>Envato</td>
                                            <td>200GB</td>
                                            <td>
												<button type="button" class="btn-green-bg btn-base-animate-to-top btn-base-sm radius-5">Unduh
													<span class="btn-base-element-md"><i class="btn-base-element-icon fa fa-download"></i></span>
												</button>
											</td>
                                        </tr>
                                        <tr>
                                            <td>Item #3</td>
                                            <td>Microsoft</td>
                                            <td>300GB</td>
											<td>
												<button type="button" class="btn-green-bg btn-base-animate-to-top btn-base-sm radius-5">Unduh
													<span class="btn-base-element-md"><i class="btn-base-element-icon fa fa-download"></i></span>
												</button>
											</td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                                <!-- End Table Hover -->
                            </div>
                        </div>
                    </div>
                    <!-- End Table Wrap -->
				</div>
    			<?php include('sidebar.php') ?>
    			</div>
		            <!--// end row -->
		        </div>

		        
		        <!-- End Pagers v2 -->
		        
		      
		    </div>
	<?php include('footer.php') ?>   