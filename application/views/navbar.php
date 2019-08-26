<header class="header navbar-fixed-top header-sticky">
            <!-- Search Field -->
            <div class="search-field">
                <div class="container">
                    <input type="text" class="form-control search-field-input" placeholder="Search for...">
                </div>
            </div>
            <!-- End Search Field -->

            <!-- Topbar Classic -->
            <div class="topbar-c theme-toggle-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-inline topbar-c-contacts">
                                <li class="topbar-c-contacts-item"><i class="topbar-c-contacts-icon icon-phone"></i> <?= $web->telp?></li>
                                <li class="topbar-c-contacts-item"><i class="topbar-c-contacts-icon icon-envelope"></i> <a class="topbar-c-contacts-link" href="javascript:void(0);"><?= $web->email?></a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-inline topbar-c-actions form-modal-nav">
                                <li class="topbar-c-actions-item"><a class="topbar-c-actions-link form-modal-login" href="javascript:void(0);">Login Peserta</a></li>
                                <!-- <li class="topbar-c-actions-item-divider">or</li>
                                <li class="topbar-c-actions-item"><a class="topbar-c-actions-link-border radius-50 form-modal-signup" href="javascript:void(0);"><i class="topbar-c-actions-icon icon-profile-male"></i> Register</a></li> -->
                            </ul>
                        </div>
                    </div><!--// End row -->
                </div>
            </div>
            <!-- End Topbar Classic -->
        
            <!-- Navbar -->
            <nav class="navbar mega-menu" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        
                        <!-- End Navbar Actions -->

                        <!-- Theme Toggle Trigger -->
                        <div class="theme-toggle-trigger topbar-toggle-trigger">
                            <a class="topbar-toggle-trigger-style" href="javascript:void(0);"></a>
                        </div>
                        <!-- End Theme Toggle Trigger -->

                        <!-- Logo -->
                        <div class="navbar-logo">
                            <a class="navbar-logo-wrap" href="">
                                <img class="navbar-logo-img" src="" alt="Ark">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="nav navbar-nav">
                                <!-- Home -->
                                <li class="nav-item dropdown">
                                    <a href="<?=base_url();?>home" class="nav-item-child dropdown-toggle"  >
                                        Beranda
                                    </a>
                                </li>
                                <!-- End Home -->
                                <li class="nav-item dropdown">
                                    <a class="nav-item-child dropdown-toggle" href="javascript:void(0);" data-toggle="dropdown">
    									Detail Kontes
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-submenu-child">Kontes Robot Seni Tari Indonesia (KRSI)</a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-submenu-child">Kontes Robot ABU Indonesia (KRAI)</a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <!-- Topbar -->
                                            <a class="dropdown-submenu-child">Kontes Robot Sepak Bola Indonesia (KRSBI)</a>
                                            
                                            <!-- End Topbar -->
                                        </li>
                                        <li class="dropdown-submenu">
                                            <!-- Footer -->
                                            <a class="dropdown-submenu-child">Kontes Robot Pemadam Api Indonesia (KRPAI)</a>
                                            
                                        </li>
    									  <li class="dropdown-submenu">
                                            <!-- Footer -->
                                            <a class="dropdown-submenu-child">Jadwal</a>
                                            
                                        </li>
										<li class="dropdown-submenu">
                                            <!-- Footer -->
                                            <a class="dropdown-submenu-child">Daftar Peserta KRI 2016</a>
                                            
                                        </li>
										<li class="dropdown-submenu">
                                            <!-- Footer -->
                                            <a class="dropdown-submenu-child">Download</a>
                                            
                                        </li>
    									
                                    </ul>
                                </li>
                                <!-- End Features -->
    							<li class="nav-item dropdown">
                                    <a class="nav-item-child dropdown-toggle" href="javascript:void(0);" data-toggle="dropdown">
    									Informasi
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-submenu-child">Agenda Kegiatan</a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-submenu-child">Info Transportasi</a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <!-- Topbar -->
                                            <a class="dropdown-submenu-child">S P P D</a>
                                            
                                            <!-- End Topbar -->
                                        </li>
                                        <li class="dropdown-submenu">
                                            <!-- Footer -->
                                            <a class="dropdown-submenu-child">Info Penginapan</a>
                                            
                                        </li>
    									
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-item-child dropdown-toggle" href="javascript:void(0);" data-toggle="dropdown">
    									Penonton
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-submenu-child">Info Tiket</a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-submenu-child">Alur Pemesanan Tiket</a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <!-- Topbar -->
                                            <a class="dropdown-submenu-child">Pesan Tiket</a>
                                            
                                            <!-- End Topbar -->
                                        </li>
                                        <li class="dropdown-submenu">
                                            <!-- Footer -->
                                            <a class="dropdown-submenu-child">Tata Tertib Penonton</a>
                                            
                                        </li>
    									
                                    </ul>
                                </li>
    							<li class="nav-item dropdown">
                                    <a class="nav-item-child dropdown-toggle" href="javascript:void(0);" data-toggle="dropdown">
    									Streaming
                                    </a>
    							</li>
    							<li class="nav-item dropdown">
                                    <a href="<?=base_url()?>berita" class="nav-item-child dropdown-toggle">
    									Berita
                                    </a>
    							</li>
                               
                                <!-- End Login -->
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
                <!--// End Container-->
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== FORM MODAL ==========-->
        <div class="form-modal">
            <div class="form-modal-wrap">
                <div class="form-modal-container">
                    <!-- Login Form -->
                    <div id="form-modal-login">
                        <div class="form-modal-heading">
                            <h2 class="form-modal-title">Login</h2>                           
                        </div>
                        <div class="clearfix margin-b-20">                            
                            <form class="form-modal-login-form" style="width:100%;">
                                <fieldset>
                                    <input class="form-control form-modal-input radius-3 margin-b-10" id="signin-email" type="text" placeholder="Username">
                                </fieldset>
                                <fieldset class="form-modal-input-group">
                                    <input class="form-control form-modal-input form-modal-input-form radius-3 margin-b-10" id="signin-password" type="text" placeholder="Password">
                                    <a class="form-modal-hide-password" href="javascript:void(0);">Hide</a>
                                </fieldset>
                                <fieldset>
                                    <button type="submit" class="btn-base-bg btn-base-sm btn-block radius-3">Login</button>
                                </fieldset>
                            </form>
                        </div>
                        <p class="form-modal-back-btn-message">Forgot your password? <a class="form-modal-back-btn" href="javascript:void(0);">Reset</a></p>                        
                    </div>
                    <!-- End Login Form -->

                    <!-- Signup -->
                    <div id="form-modal-signup">
                        <div class="form-modal-heading">
                            <h2 class="form-modal-title">Signup for free</h2>
                            <p class="form-modal-paragraph">Use Facebook or an email</p>
                        </div>
                        <div class="clearfix margin-b-20">
                            <div class="form-modal-connect">
                                <button type="button" class="btn-fb-bg btn-base-animate-to-top btn-base-sm btn-block radius-3">Facebook
                                    <span class="btn-base-element-sm radius-3"><i class="btn-base-element-icon fa fa-facebook"></i></span>
                                </button>
                            </div>
                            <div class="form-modal-divider">
                                <span class="form-modal-divider-text">or</span>
                            </div>
                            <form class="form-modal-login-form margin-b-20">
                                <fieldset>
                                    <input class="form-control form-modal-input radius-3 margin-b-10" id="signup-username" type="text" placeholder="Username">
                                </fieldset>
                                <fieldset>
                                    <input class="form-control form-modal-input radius-3 margin-b-10" id="signup-email" type="email" placeholder="Email Address">
                                </fieldset>
                                <fieldset class="form-modal-input-group">
                                    <input class="form-control form-modal-input form-modal-input-form radius-3 margin-b-10" id="signup-password" type="text" placeholder="Password">
                                    <a class="form-modal-hide-password" href="javascript:void(0);">Hide</a>
                                </fieldset>
                                <fieldset>
                                    <button type="submit" class="btn-base-bg btn-base-sm btn-block radius-3">Create Account</button>
                                </fieldset>
                            </form>
                            <div class="form-modal-back-btn-message">
                                By signing up you agree to the
                                <a href="#">Terms &amp; Conditions</a>
                                and
                                <a href="#">Privacy &amp; Policy</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Signup -->

                    <!-- Reset Password -->
                    <div id="form-modal-reset-password">
                        <div class="form-modal-heading">
                            <h2 class="form-modal-title">Reset password</h2>
                            <p class="form-modal-paragraph">Enter email to reset password</p>
                        </div>
                        <div class="clearfix margin-b-20">
                            <form class="form-modal-reset-form">
                                <fieldset>
                                    <input class="form-control form-modal-input radius-3 margin-b-10" id="reset-email" type="email" placeholder="Email Address">
                                </fieldset>
                                <fieldset class="margin-b-20">
                                    <button type="submit" class="btn-base-bg btn-base-sm btn-block radius-3">Reset</button>
                                </fieldset>
                                <div class="form-modal-back-btn-message">
                                    Already have account?
                                    <a class="form-modal-back-btn form-modal-back-btn-message-link" href="javascript:void(0);">Login</a>
                                </div>
                                <div class="form-modal-switcher">
                                    <div class="form-modal-switcher-item form-modal-back-btn-message">
                                        Don't have account?
                                        <a class="form-modal-back-btn-message-link" href="javascript:void(0);">Signup</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End Reset Password -->
                </div>
            </div>
            <a href="javascript:void(0);" class="form-modal-close-form">&times;</a>
        </div>
        <!--========== END FORM MODAL ==========-->