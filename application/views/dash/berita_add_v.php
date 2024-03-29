<?php include 'header.php'; ?>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Berita</h1>
            <ol class="breadcrumb">
              <li><a href="<?=base_url('dash');?>/">Dashboard</a></li>
              <li><a href="<?=base_url('dash');?>/berita">Berita</a></li>
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
            <form method="post" action="<?=base_url('dash');?>/berita/add" class="form-horizontal" role="form" enctype="multipart/form-data">
              <div class="form-group">
				<div class="col-lg-2">
					<label for="jenis" class="col-lg-2 control-label">Judul</label>
				</div>
                <div class="col-lg-6">
                  <input name="title" value="" type="text" class="form-control" id="title" placeholder="Title">
                </div>
              </div>
			  <div class="form-group">
                    <div class="col-lg-2">
						<label for="banner_image" class="col-lg-2 ">Image</label>
					</div>
					<div class="col-lg-4">                        						
					   <input type="file" id="banner_image" name="banner_image">
                    </div>					
              </div>
			  <div class="form-group">
				<div class="col-lg-2">
					<label for="jenis" class="col-lg-2 control-label">Kategori</label>
				</div>
				<div class="col-lg-6">
					<select name="idk" type="text" class="form-control" id="id_propinsi" required>
					<option value="">-- pilih kategori --</option>					
					<?php foreach ($kategori as $k) { ?>
					<option value="<?=$k->id_kategori;?>" ><?=ucwords($k->kategori);?></option>
					<?php } ?>
				   </select>
				</div>
              </div>			  
              <div class="form-group">
                <div class="col-lg-2">
					<label for="jenis" class="col-lg-2 control-label">Summary Berita</label>
				</div>
				<div class="col-lg-6">
                  <textarea cols="80" id="editor2" name="summary" rows="50"></textarea>
				</div>                
              </div>				  
			  <div class="form-group">
                <div class="col-lg-2">
					<label for="jenis" class="col-lg-2 control-label">Isi Berita</label>
				</div>
				<div class="col-lg-6">
                  <textarea cols="80" id="editor1" name="content" rows="50"></textarea>
				</div>                
              </div>				  			            
              <div class="form-group">
                <div class="col-lg-12">
                  <button class="btn btn-primary" type="submit" name="simpan" value="1">Simpan</button>
                </div>
              </div>
            </form>
          </div>         
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    <script type="text/javascript">
      var cktext='editor1';
    </script>    
    <?php include 'footer.php'; ?>
    <?php include 'tinymce_1.php'; ?>