
<?php include 'header.php'; ?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <?php if($edit=='dash'){ ?>
            <h1>Admin</h1>
			<?php } else { ?>
			<h1>Member</h1>
			<?php } ?>
            <ol class="breadcrumb">
              <li><a href="<?=base_url('dash');?>/dashboard">Dashboard</a></li>
              <?php if($add=='dash'){ ?>
              <li><a href="<?=base_url('dash');?>/user/admin">Admin</a></li>
              <?php } else { ?>
              <li><a href="<?=base_url('dash');?>/user/member">Member</a></li>
              <?php } ?>
              <li class="active">Add</li>
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

<?php if($add=='dash'){ ?>
        <div class="row">
          <div class="col-lg-12">
            <form class="form-horizontal" method="post" action="<?=base_url('dash');?>/user/add">
              <div class="form-group">
                <label for="user" class="col-lg-2 control-label">Username</label>
                <div class="col-lg-4">
                  <input value="" name="username" type="text" class="form-control" id="username" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="user" class="col-lg-2 control-label">Password</label>
                <div class="col-lg-4">
                  <input value="" name="password" type="password" class="form-control" id="password" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="user" class="col-lg-2 control-label">Password Confirm</label>
                <div class="col-lg-4">
                  <input value="" name="passconf" type="password" class="form-control" id="passconf" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="user" class="col-lg-2 control-label">Name</label>
                <div class="col-lg-4">
                  <input value="" name="nama_user" type="text" class="form-control" id="email" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="user" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-4">
                  <input value="" name="alamat" type="email" class="form-control" id="firstname" placeholder="">
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

<?php if($add=='member'){ ?>
        <div class="row">
          <div class="col-lg-12">
            <form class="form-horizontal" method="post" action="<?=base_url('dash');?>/user/add_member">
              <div class="form-group">
                <label for="user" class="col-lg-2 control-label">Username</label>
                <div class="col-lg-4">
                  <input value="" name="username" type="text" class="form-control" id="username" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="user" class="col-lg-2 control-label">Password</label>
                <div class="col-lg-4">
                  <input value="" name="password" type="password" class="form-control" id="password" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="user" class="col-lg-2 control-label">Password Confirm</label>
                <div class="col-lg-4">
                  <input value="" name="passconf" type="password" class="form-control" id="passconf" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="user" class="col-lg-2 control-label">Name</label>
                <div class="col-lg-4">
                  <input value="" name="nama_user" type="text" class="form-control" id="email" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="user" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-4">
                  <input value="" name="alamat" type="email" class="form-control" id="firstname" placeholder="">
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

      </div><!-- /#page-wrapper -->
<?php include 'footer.php'; ?>