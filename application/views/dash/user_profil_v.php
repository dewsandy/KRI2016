<?php include 'header.php'; ?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>user</h1>
            <ol class="breadcrumb">
              <li><a href="<?=base_url('dash');?>/dashboard">Dashboard</a></li>
              <!-- <li><a href="<?=base_url('dash');?>/user">user</a></li> -->
              <li class="active">Profile</li>
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

          <div class="row">
              <div class="col-lg-12"> 
                <form class="form-horizontal" method="post" action="<?=base_url();?>dash/user/myprofile/" enctype="multipart/form-data">                  
                  <div class="form-group">
                    <label for="" class="col-lg-2 control-label">Username</label>
                    <div class="col-lg-4">
                      <input value="<?=$data->username;?>" name="username" type="text" class="form-control" id="username" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-lg-2 control-label">Name</label>
                    <div class="col-lg-4">
                      <input value="<?=$data->nama;?>" name="nama" type="text" class="form-control" id="firstname" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-4">
                      <input value="<?=$data->email;?>"name="email" type="email" class="form-control" id="telpon" placeholder="">
                    </div>
                  </div>                  
                  <div class="clearfix"></div>
                  <br><br>
                  <div style="text-align:center;">
                    <button class="btn btn-primary save-product" type="submit" name="simpan" value=1>Save</button>
                  </div>                      
                  
                  </div>
                </form>

              </div>
            </div><!-- /.row -->

      </div><!-- /#page-wrapper -->   
<?php include 'footer.php'; ?>