<?php include 'header.php'; ?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>user</h1>
            <ol class="breadcrumb">
              <li><a href="<?=base_url('dash');?>/dashboard">Dashboard</a></li>
              <li class="active">setting</li>
            </ol>
            <?php if($success!=''){ ?>
            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <?=$success;?>
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
                <form class="form-horizontal" method="post" action="<?=base_url('dash');?>/user/setting/<?=md5($data->id_user);?>">                  
                  <div class="form-group">
                    <label for="" class="col-lg-2 control-label">Password lama</label>
                    <div class="col-lg-4">
                      <input name="old_password" type="password" class="form-control" id="nama_produk" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-lg-2 control-label">Password baru</label>
                    <div class="col-lg-4">
                      <input name="password" type="password" class="form-control" id="nama_produk" placeholder="">
                    </div>
                    <small style="color:red;">*password minimal 6 karakter</small>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-lg-2 control-label">Konfirmasi password baru</label>
                    <div class="col-lg-4">
                      <input name="passconf" type="password" class="form-control" id="passconf" placeholder="" >
                    </div>
                  <!-- <a href="<?=base_url('dash');?>/user/password" data-toggle="modal" data-href="#change-password-form">Change password</a> -->
                  </div>
                  <div class="clearfix"></div>
                  <br><br>
                  <div style="text-align:center;">
                    <button class="btn btn-primary save-product" type="submit" name="simpan" value=1>Simpan</button>
                  </div>                      
                  
                  </div>
                </form>            
              </div>
            </div><!-- /.row -->

      </div><!-- /#page-wrapper -->   
<?php include 'footer.php'; ?>
