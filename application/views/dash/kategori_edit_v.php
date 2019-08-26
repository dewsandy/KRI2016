<?php include 'header.php'; ?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>kategori</h1>
            <ol class="breadcrumb">
              <li><a href="<?=base_url('dash');?>/dashboard">Dashboard</a></li>
              <li><a href="<?=base_url('dash');?>/kategori">Kategori</a></li>
              <li class="active">Edit</li>
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
            <form class="form-horizontal" method="post" action="<?=base_url('dash');?>/kategori/edit/<?=$data->id_kategori;?>">
              <!--<div class="form-group">
                <label for="kategori" class="col-lg-2 control-label">Parent</label>
                <div class="col-lg-4">
                  <select name="id_parent" type="text" class="form-control" id="id_propinsi">
                    <option value="">-- no parent --</option>
                    <?php foreach ($kategori as $k) { ?>
                    <option value="<?=$k->id_kategori;?>" <?=($data->id_parent==$k->id_kategori)?'selected':'';?>><?=ucwords($k->nama_kategori);?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>-->
              <div class="form-group">
                <label for="kategori" class="col-lg-2 control-label">Nama kategori</label>
                <div class="col-lg-4">
                  <input value="<?=$data->kategori;?>" name="nama_kategori" type="text" class="form-control" id="nama_kategori" placeholder="Fashion">
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

      </div><!-- /#page-wrapper -->   
<?php include 'footer.php'; ?>