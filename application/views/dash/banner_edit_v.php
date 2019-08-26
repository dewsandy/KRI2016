<?php include 'header.php'; ?>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>banner</h1>
            <ol class="breadcrumb">
              <li><a href="<?=base_url('dash');?>/">Dashboard</a></li>
              <li><a href="<?=base_url('dash');?>/banner">banner & Staff</a></li>
              <li class="active"><?=ucwords($title);?></li>
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
            <form method="post" action="<?=base_url('dash');?>/banner/edit/<?= $data->id_banner;?>" class="form-horizontal" role="form" enctype="multipart/form-data">              						  
			  <div class="form-group">
                   	<label for="banner_image" class="col-lg-2 control-label">Gambar</label>
					<div class="col-lg-4">                        						
					   <?php if($data->banner != '-') { ?>
						<img src='<?=base_url().$data->banner;?>' width='150' height='100'><br/><br/>
						<?php } ?>
					   <input type="file" id="banner_image" name="banner_image">
                    </div>					
              </div>			                
              <div class="form-group">
                <div class="col-lg-12">
                  <button class="btn btn-primary" type="submit" name="simpan" value="1">Simpan</button>
                </div>
              </div>
			  <input type="hidden" id="curr_img" name="curr_img" value="<?php echo $data->banner?>">
            </form>
          </div>         
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->    
    <?php include 'footer.php'; ?>
              </div>			  