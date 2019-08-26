<!DOCTYPE html>               
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?=$title;?> - KRI 2016 Administor</title>
    <!--<link rel="shortcut icon" href="<?=base_url();?>asset/img/favicon.ico">-->
    <link href="<?=base_url();?>asset/dash/css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url();?>asset/dash/css/sb-admin.css" rel="stylesheet">
    <link href="<?=base_url();?>asset/dash/css/jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url();?>asset/dash/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url();?>asset/dash/css/morris-0.4.3.min.css">    
    <link rel="stylesheet" href="<?=base_url();?>asset/dash/datepicker/css/datepicker.css">    
    <script src="<?=base_url();?>asset/dash/js/jquery-1.10.2.js"></script>	
	<style>
		.paginate_button {
			margin-right:3px;
		}
		.paging_full_numbers span{
			margin-left : 5px;
			margin-right : 5px;
		}
	</style>
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?=base_url('dash');?>/dashboard">KRI <b>2016</b> | Admin Area</a>
        </div>        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">            
			<li class="<?=($title=='Dashboard')?'active':''?>"><a href="<?=base_url('dash/dashboard');?>/"><i class="fa fa-dashboard"></i> Dashboard</a></li>                                    
			<li class="dropdown <?=($title=='Fasilitas' or $title=='Tambah Fasilitas' or $title=='Ubah Fasilitas' or $title=='Papan' or $title=='Papan dari Member' or $title=='Lihat Papan Member')?'open':''?>">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Blog<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li <?=($title=='Kategori' or $title=='Tambah kategori' or $title=='Ubah Kategori')?'class="active"':''?>><a href="<?=base_url();?>dash/kategori"><i class="fa fa-arrow-right"></i> Kategori</a></li>            
					<li <?=($title=='Detail Berita / Info' or $title=='Berita / Info' or $title=='Tambah Berita / Info' or $title=='Ubah Berita / Info')?'class="active"':''?>><a href="<?=base_url();?>dash/berita"><i class="fa fa-file-text-o"></i> Berita / Info</a></li>						
					<li <?=($title=='Komentar')?'class="active"':''?>><a href="<?=base_url();?>dash/komen"><i class="fa fa-file-text-o"></i> Komentar</a></li>						
                </ul>
            </li>						
			<li class="dropdown <?=($title=='Fasilitas' or $title=='Tambah Fasilitas' or $title=='Ubah Fasilitas' or $title=='Papan' or $title=='Papan dari Member' or $title=='Lihat Papan Member')?'open':''?>">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Kontest<b class="caret"></b></a>
                <ul class="dropdown-menu">
					<li <?=($title=='Agenda' or $title=='Tambah Agenda' or $title=='Ubah Agenda')?'class="active"':''?>><a href="<?=base_url();?>dash/agenda"><i class="fa fa-arrow-right"></i> Data Agenda</a></li>
                    <li <?=($title=='Tim' or $title=='Tambah Tim' or $title=='Ubah Tim')?'class="active"':''?>><a href="<?=base_url();?>dash/tim"><i class="fa fa-user"></i> Tim</a></li>            					
                </ul>
            </li>															
			<li class="dropdown <?=($title=='Fasilitas' or $title=='Tambah Fasilitas' or $title=='Ubah Fasilitas' or $title=='Papan' or $title=='Papan dari Member' or $title=='Lihat Papan Member')?'open':''?>">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Web Site<b class="caret"></b></a>
                <ul class="dropdown-menu">
					<li <?=($title=='Banner' or $title=='Tambah Banner' or $title=='Ubah Banner')?'class="active"':''?>><a href="<?=base_url();?>dash/banner"><i class="fa fa-arrow-right"></i> Banner</a></li>
                    <li <?=($title=='Halaman' or $title=='Tambah Halaman' or $title=='Ubah Halaman')?'class="active"':''?>><a href="<?=base_url();?>dash/page"><i class="fa fa-arrow-right"></i> Halaman</a></li>	
                </ul>
            </li>															
			<li <?=($title=='Member' or $title=='Tambah Member' or $title=='Detail Member' )?'class="active"':''?>><a href="<?=base_url();?>dash/user/member"><i class="fa fa-user"></i> Member</a></li>			
            <li <?=($title=='Admin' or $title=='Tambah Admin' or $title=='Detail Admin')?'class="active"':''?>><a href="<?=base_url();?>dash/user/admin"><i class="fa fa-user"></i> Administrator</a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right navbar-user"> 					  						
			<!---<li class="dropdown alerts-dropdown">
              <a id="stok"  class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i>  Print Request <span id="count-notifikasi-stok" class="badge"></span> <b class="caret"></b></a>                                            
              <ul id="stok-notif" class="dropdown-menu">
                <div id="loading" style="display:none;"><br>Loading...<img src="<?=base_url();?>asset/dash/img/loading.gif"></div>                
              </ul>
            </li>-->
			<li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?=$user->nama;?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?=base_url('dash');?>/user/myprofile"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="<?=base_url('dash');?>/user/setting"><i class="fa fa-gear"></i> Settings</a></li>
                <li class="divider"></li>
                <li><a href="<?= base_url('dash')?>/user/logout"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>			
          </ul> 
        </div><!-- /.navbar-collapse -->
      </nav>