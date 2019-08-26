<?php include 'header.php'; ?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Users</h1>
            <ol class="breadcrumb">
              <li><a href="<?=base_url('dash');?>/dashboard">Dashboard</a></li>
              <li class="active">Users</li>
            </ol>
            <?php if($alert=='success'){ ?>
            <div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              We're using <a class="alert-link" href="http://tablesorter.com/docs/">Tablesorter 2.0</a> for the sort function on the tables. Read the documentation for more customization options or feel free to use something else!
            </div>
            <?php } ?>
          </div>
        </div><!-- /.row -->
<?php if($this->auth_m->get_user()->level!='5'){ ?>
        <div class="row">
          <div class="col-lg-12">
            <h3>Admins</h3>
            <a href="<?=base_url('dash');?>/user/add" type="button" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah</a>
            <br><br>
            <div class="table-responsive">
              <table class="table table-hover table-striped tablesorter datatable">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>username</th>
                    <th>alamat</th>                    
                    <th>no. telp</th>
                    <th>level</th>
                    <th>status</th>
                    <th>action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=0;foreach ($datas as $data) { $i++;?>
                  <tr class="<?php 
                    if($data->level==1) echo 'active';
                  ?>">
                    <td><?=$i;?></td>
                    <td><?= "[".$data->id_user."] ".$data->username;?></td>
                    <td><?=$data->alamat_user;?></td>
                    <td><?=$data->notelp_user;?></td>
                    <td><?php if($data->level == 0 ) echo 'Super Admin';?></td>
                    <td><?php if($data->status == 1 ){ echo 'verified'; }else echo'deleted';?></td>
                    <td>
                      <a href="<?=base_url('dash');?>/user/edit/<?=$data->id_user;?>" type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>
                      <a href="<?=base_url('dash');?>/user/delete/<?=$data->id_user;?>" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus</a>
                    </td> 
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>                     
<?php } ?>
        <div class="row">
          <div class="col-lg-12">
            <h3>Sales</h3>
            <?php if($this->auth_m->get_user()->level!='5'){ ?>
            <a href="<?=base_url('dash');?>/user/add_member" type="button" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah</a>
            <br><br>
            <?php } ?>
            <div class="table-responsive">
              <table class="table table-hover table-striped tablesorter datatable">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>username</th>
                    <th>alamat</th>                    
                    <th>no. telp</th>
                    <th>level</th>
                    <th>status</th>
                    <th>action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=0;foreach ($datas2 as $data) { $i++;?>
                  <tr class="<?php 
                    if($data->level==1) echo 'active';
                  ?>">
                    <td><?=$i;?></td>
                    <td><?= "[".$data->id_user."] ".$data->username;?></td>
                    <td><?=$data->alamat_user;?></td>
                    <td><?=$data->notelp_user;?></td>
                    <td><?php if($data->level == 0 ) echo 'Super Admin';?></td>
                    <td><?php if($data->status == 1 ){ echo 'verified'; }else echo'deleted';?></td>
                    <td>
                      <a href="<?=base_url('dash');?>/user/edit/<?=$data->id_user;?>" type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>
                      <a href="<?=base_url('dash');?>/user/delete/<?=$data->id_user;?>" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus</a>
                    </td> 
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div><!-- /.row -->        
        
      </div><!-- /#page-wrapper -->
<?php include 'footer.php'; ?>