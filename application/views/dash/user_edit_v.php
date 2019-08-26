<?php include 'header.php'; ?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
			<?php if($edit=='dash'){ ?>
            <h1>User</h1>
			<?php } else { ?>
			<h1>Sales</h1>
			<?php } ?>
            <ol class="breadcrumb">
              <li><a href="<?=base_url('dash');?>/dashboard">Dashboard</a></li>
              <?php if($edit=='dash'){ ?>
              <li><a href="<?=base_url('dash');?>/user/admin">Admin</a></li>
              <?php } else { ?>
              <li><a href="<?=base_url('dash');?>/user/member">Sales</a></li>
              <?php } ?>
              <li class="active">Edit</li>
            </ol>
            <?php if($success=='success'){ ?>
            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              Success
            </div>
            <?php } ?>

            <?php if($error!=''){ ?>
            <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <?=$error;?>
            </div>
            <?php } ?>
          </div>
        </div><!-- /.row -->

<?php if($edit=='dash'){ ?>
        <div class="row">
          <div class="col-lg-12">
            <form class="form-horizontal" method="post" action="<?=base_url('dash');?>/user/edit/<?=$data->id_user;?>">
              <div class="form-group">
                <label for="user" class="col-lg-2 control-label">username</label>
                <div class="col-lg-4">
                  <input value="<?=$data->username;?>" name="username" type="text" class="form-control" id="username" placeholder="" disabled>
                </div>
              </div>
              <div class="form-group">
                <label for="user" class="col-lg-2 control-label">Name</label>
                <div class="col-lg-4">
                  <input value="<?=$data->nama_user;?>" name="nama_user" type="text" class="form-control" id="email" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="user" class="col-lg-2 control-label">Address</label>
                <div class="col-lg-4">
                  <input value="<?=$data->alamat_user;?>" name="alamat" type="text" class="form-control" id="firstname" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="user" class="col-lg-2 control-label">Phone</label>
                <div class="col-lg-4">
                  <input value="<?=$data->notelp_user;?>" name="phone" type="text" class="form-control" id="lastname" placeholder="">
                </div>
              </div>                           
              <div class="form-group">
                <label for="user" class="col-lg-2 control-label">status</label>
                <div class="col-lg-4">
                  <select name="status" type="text" class="form-control" id="id_status" placeholder="">
                    <option value="1" <?php if( $data->status == 1){echo 'selected';}?>>Verifed</option>
                    <option value="0" <?php if( $data->status == 0){echo 'selected';}?>>Deleted</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-2"></div>
                <div class="col-lg-4">
                  <button class="btn btn-primary pull-right" type="submit" name="simpan" value=1>Simpan</button>                  
                </div>
              </div>
            </form>            
          </div>
        </div><!-- /.row -->
<?php } ?>
<?php if($edit=='member'){ ?>
        <div class="row">
          <div class="col-lg-12">
            <form class="form-horizontal" method="post" action="<?=base_url('dash');?>/user/edit_member/<?=$data->id_user;?>">
              <div class="form-group">
                <label for="user" class="col-lg-2 control-label">username</label>
                <div class="col-lg-4">
                  <input value="<?=$data->username;?>" name="username" type="text" class="form-control" id="username" placeholder="" disabled>
                </div>
              </div>
              <div class="form-group">
                <label for="user" class="col-lg-2 control-label">Name</label>
                <div class="col-lg-4">
                  <input value="<?=$data->nama_user;?>" name="nama_user" type="text" class="form-control" id="email" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="user" class="col-lg-2 control-label">Address</label>
                <div class="col-lg-4">
                  <input value="<?=$data->alamat_user;?>" name="alamat" type="text" class="form-control" id="firstname" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="user" class="col-lg-2 control-label">Phone</label>
                <div class="col-lg-4">
                  <input value="<?=$data->notelp_user;?>" name="phone" type="text" class="form-control" id="lastname" placeholder="">
                </div>
              </div>                           
              <div class="form-group">
                <label for="user" class="col-lg-2 control-label">status</label>
                <div class="col-lg-4">
                  <select name="status" type="text" class="form-control" id="id_status" placeholder="">
                    <option value="1" <?php if( $data->status == 1){echo 'selected';}?>>Verifed</option>
                    <option value="0" <?php if( $data->status == 0){echo 'selected';}?>>Deleted</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-2"></div>
                <div class="col-lg-4">
                  <button class="btn btn-primary pull-right" type="submit" name="simpan" value=1>Simpan</button>                  
                </div>
              </div>
              
              <input type="hidden" name="idmeta" value="<?php echo (!empty($curr_sales))?$curr_sales->idmeta:''?>" readonly>
              
            </form>            
          </div>
        </div><!-- /.row -->
<?php } ?>

      </div><!-- /#page-wrapper -->   
<?php include 'footer.php'; ?>