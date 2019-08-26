<?php include 'header.php'; ?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Admin</h1>
            <ol class="breadcrumb">
              <li><a href="<?=base_url('dash');?>/dashboard">Dashboard</a></li>
              <li class="active">Admin</li>
            </ol>
            <?php if($alert=='success'){ ?>
            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              Success
            </div>
            <?php } ?>

            <?php if($alert=='failed'){ ?>
            <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              Failed
            </div>
            <?php } ?>
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-12">
            <div class="search">
              <form method="GET" action="" class="form-inline" role="form">                
                <div class="form-group">
                  <input value="<?=$s?>" name="s" type="text" class="form-control" id="" placeholder="Username">
                </div>                
                <button type="submit" class="btn btn-primary">Cari</button>
              </form>
            </div>
            <h3>Administrator</h3>
            <?php if($user->id_group == 1){ ?>
            <a href="<?=base_url('dash');?>/user/add" type="button" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah</a>
            <br><br>
            <?php } ?>
            <div class="table-responsive">
              <table class="table table-hover table-striped tablesorter">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Email</th>                        
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=0;foreach ($datas as $data) { $i++;?>
                  <tr class="<?php 
                    if($data->status==1) echo 'active';
                  ?>">
                    <td><?=$i;?></td>
                    <td><?= "[".$data->id_user."] ".$data->username;?></td>					
                    <td><?=$data->nama;?></td>
                    <td><?=$data->email;?></td>                   
                    <td><?php 
						if($data->status == 0) echo 'belum terverifikasi';
						else if($data->status == 1)	 echo 'aktif';
						else if($data->status == 2)	 echo 'banned';
					?></td>				
                    <td>
					  <?php if($data->status != 1) {?>
                      <a href="<?=base_url('dash');?>/user/active/<?=$data->id_user;?>/admin" type="button" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Aktifkan</a>
					  <?php } else { ?>
                      <a href="<?=base_url('dash');?>/user/banned/<?=$data->id_user;?>/admin" type="button" class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Banned</a>
					  <?php } ?>
                      <!-- <a href="<?=base_url('dash');?>/user/edit/<?=$data->id_user;?>" type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>-->
                      <a href="<?=base_url('dash');?>/user/del/<?=$data->id_user;?>/admin" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus</a>
                    </td>                    
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <?=$paginator?>
          </div>
        </div><!-- /.row -->        
        
      </div><!-- /#page-wrapper -->
<?php include 'footer.php'; ?>