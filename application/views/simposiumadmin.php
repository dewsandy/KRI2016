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
	<div class="bg-color-sky-light tab-v4">
        <div class="content-md container">
            <!-- Nav tabs -->
		
            <ul class="nav nav-tabs nav-tabs-left" role="tablist">
                <li class="" role="presentation">
                    <a class="tab-v4-nav-color-one" href="#tab-v4-1" aria-controls="tab-v4-1" role="tab" data-toggle="tab" aria-expanded="false">
						Data Peserta
                    </a>
                </li>
                <li role="presentation" class="">
                    <a class="tab-v4-nav-color-two" href="#tab-v4-2" aria-controls="tab-v4-2" role="tab" data-toggle="tab" aria-expanded="false">
                        Data Peserta
                    </a>
                </li>
                <li role="presentation" class="">
                    <a class="tab-v4-nav-color-three" href="#tab-v4-3" aria-controls="tab-v4-3" role="tab" data-toggle="tab" aria-expanded="false">
                        Data Peserta
                    </a>
                </li>
                <li role="presentation" class="">
                    <a class="tab-v4-nav-color-four" href="#tab-v4-4" aria-controls="tab-v4-4" role="tab" data-toggle="tab" aria-expanded="false">
                        Data Peserta
                    </a>
                </li>
                <li role="presentation" class="active">
                    <a class="tab-v4-nav-color-five" href="#tab-v4-5" aria-controls="tab-v4-5" role="tab" data-toggle="tab" aria-expanded="true">
                        Data Peserta
                    </a>
                </li>
            </ul>
            <!-- End Nav tabs -->

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade" id="tab-v4-1">
                    <!-- Accordrion v5 -->
                    <div class="accordion-v5">
                        <div class="panel-group" id="accordion-v5" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" href="#accordionV5CollapseOne" aria-expanded="false" aria-controls="accordionV5CollapseOne">
                                            Collapsible Group Item #1
                                        </a>
                                    </h4>
                                </div>
                                <div id="accordionV5CollapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                    <form class="login-form" action="" method="post" novalidate="novalidate">
											
											<div class="form-group">
											
												<input class="form-control" type="text" autocomplete="on" placeholder="Username" name="username">
											</div>
											<div class="form-group">
												<input class="form-control" type="password" autocomplete="on" placeholder="Password" name="password">
											</div>
											<div class="form-group">
												<button type="button" class="btn-teal-bg btn-base-animate-to-top btn-base-sm radius-9">Simpan
														<span class="btn-base-element-md"><i class="btn-base-element-icon fa fa-check"></i></span>
												</button>
												<button type="button" class="btn-pink-bg btn-base-animate-to-top btn-base-sm radius-9">Batal
														<span class="btn-base-element-md"><i class="btn-base-element-icon fa fa-close"></i></span>
												</button>
											</div>
										</form>
									</div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- End Accordrion v5 -->
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab-v4-2">
                    <!-- Accordrion v5 -->
                    <div class="accordion-v5">
                        <div class="panel-group" id="accordion-v5-2" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" href="#accordionV5-2-CollapseOne" aria-expanded="false" aria-controls="accordionV5-2-CollapseOne">
                                            Collapsible Group Item #1
                                        </a>
                                    </h4>
                                </div>
                                <div id="accordionV5-2-CollapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
										<form class="login-form" action="" method="post" novalidate="novalidate">
											
											<div class="form-group">
											
												<input class="form-control" type="text" autocomplete="on" placeholder="Username" name="username">
											</div>
											<div class="form-group">
												<input class="form-control" type="password" autocomplete="on" placeholder="Password" name="password">
											</div>
											<div class="form-group">
												<button type="button" class="btn-teal-bg btn-base-animate-to-top btn-base-sm radius-9">Simpan
														<span class="btn-base-element-md"><i class="btn-base-element-icon fa fa-check"></i></span>
												</button>
												<button type="button" class="btn-pink-bg btn-base-animate-to-top btn-base-sm radius-9">Batal
														<span class="btn-base-element-md"><i class="btn-base-element-icon fa fa-close"></i></span>
												</button>
											</div>
										</form>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#accordionV5-2-CollapseTwo" aria-expanded="false" aria-controls="accordionV5-2-CollapseTwo">
                                            Collapsible Group Item #2
                                        </a>
                                    </h4>
                                </div>
                                <div id="accordionV5-2-CollapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                                    <div class="panel-body">
                                    <form class="login-form" action="" method="post" novalidate="novalidate">
											
											<div class="form-group">
											
												<input class="form-control" type="text" autocomplete="on" placeholder="Username" name="username">
											</div>
											<div class="form-group">
												<input class="form-control" type="password" autocomplete="on" placeholder="Password" name="password">
											</div>
											<div class="form-group">
												<button type="button" class="btn-teal-bg btn-base-animate-to-top btn-base-sm radius-9">Simpan
														<span class="btn-base-element-md"><i class="btn-base-element-icon fa fa-check"></i></span>
												</button>
												<button type="button" class="btn-pink-bg btn-base-animate-to-top btn-base-sm radius-9">Batal
														<span class="btn-base-element-md"><i class="btn-base-element-icon fa fa-close"></i></span>
												</button>
											</div>
										</form>
									</div>
                                </div>
                            </div>
                            
                          
                        </div>
                    </div>
                    <!-- End Accordrion v5 -->
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab-v4-3">
                    <!-- Accordrion v5 -->
                    <div class="accordion-v5">
                        <div class="panel-group" id="accordion-v5-3" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" href="#accordionV5-3-CollapseOne" aria-expanded="false" aria-controls="accordionV5-3-CollapseOne">
                                            Collapsible Group Item #1
                                        </a>
                                    </h4>
                                </div>
                                <div id="accordionV5-3-CollapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#accordionV5-3-CollapseTwo" aria-expanded="false" aria-controls="accordionV5-3-CollapseTwo">
                                            Collapsible Group Item #2
                                        </a>
                                    </h4>
                                </div>
                                <div id="accordionV5-3-CollapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#accordionV5-3-CollapseThree" aria-expanded="false" aria-controls="accordionV5-3-CollapseThree">
                                            Collapsible Group Item #3
                                        </a>
                                    </h4>
                                </div>
                                <div id="accordionV5-3-CollapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#accordionV5-3-CollapseFour" aria-expanded="false" aria-controls="accordionV5-3-CollapseFour">
                                            Collapsible Group Item #4
                                        </a>
                                    </h4>
                                </div>
                                <div id="accordionV5-3-CollapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFive">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#accordionV5-3-CollapseFive" aria-expanded="false" aria-controls="accordionV5-3-CollapseFive">
                                            Collapsible Group Item #5
                                        </a>
                                    </h4>
                                </div>
                                <div id="accordionV5-3-CollapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Accordrion v5 -->
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab-v4-4">
                    <!-- Accordrion v5 -->
                    <div class="accordion-v5">
                        <div class="panel-group" id="accordion-v5-4" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" href="#accordionV5-4-CollapseOne" aria-expanded="false" aria-controls="accordionV5-4-CollapseOne">
                                            Collapsible Group Item #1
                                        </a>
                                    </h4>
                                </div>
                                <div id="accordionV5-4-CollapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#accordionV5-4-CollapseTwo" aria-expanded="false" aria-controls="accordionV5-4-CollapseTwo">
                                            Collapsible Group Item #2
                                        </a>
                                    </h4>
                                </div>
                                <div id="accordionV5-4-CollapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#accordionV5-4-CollapseThree" aria-expanded="false" aria-controls="accordionV5-4-CollapseThree">
                                            Collapsible Group Item #3
                                        </a>
                                    </h4>
                                </div>
                                <div id="accordionV5-4-CollapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#accordionV5-4-CollapseFour" aria-expanded="false" aria-controls="accordionV5-4-CollapseFour">
                                            Collapsible Group Item #4
                                        </a>
                                    </h4>
                                </div>
                                <div id="accordionV5-4-CollapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFive">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#accordionV5-4-CollapseFive" aria-expanded="false" aria-controls="accordionV5-4-CollapseFive">
                                            Collapsible Group Item #5
                                        </a>
                                    </h4>
                                </div>
                                <div id="accordionV5-4-CollapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Accordrion v5 -->
                </div>
                <div role="tabpanel" class="tab-pane fade active in" id="tab-v4-5">
                    <!-- Accordrion v5 -->
                    <div class="accordion-v5">
                        <div class="panel-group" id="accordion-v5-5" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" href="#accordionV5-5-CollapseOne" aria-expanded="false" aria-controls="accordionV5-5-CollapseOne" class="collapsed">
                                            Collapsible Group Item #1
                                        </a>
                                    </h4>
                                </div>
                                <div id="accordionV5-5-CollapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#accordionV5-5-CollapseTwo" aria-expanded="false" aria-controls="accordionV5-5-CollapseTwo">
                                            Collapsible Group Item #2
                                        </a>
                                    </h4>
                                </div>
                                <div id="accordionV5-5-CollapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#accordionV5-5-CollapseThree" aria-expanded="false" aria-controls="accordionV5-5-CollapseThree">
                                            Collapsible Group Item #3
                                        </a>
                                    </h4>
                                </div>
                                <div id="accordionV5-5-CollapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#accordionV5-5-CollapseFour" aria-expanded="false" aria-controls="accordionV5-5-CollapseFour">
                                            Collapsible Group Item #4
                                        </a>
                                    </h4>
                                </div>
                                <div id="accordionV5-5-CollapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFive">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#accordionV5-5-CollapseFive" aria-expanded="false" aria-controls="accordionV5-5-CollapseFive">
                                            Collapsible Group Item #5
                                        </a>
                                    </h4>
                                </div>
                                <div id="accordionV5-5-CollapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Accordrion v5 -->
                </div>
            </div>
            <!-- End Tab panes -->
        </div>
    </div>
	<?php include('footer.php') ?>   