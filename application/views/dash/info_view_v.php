<?php include 'header.php'; ?>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Berita</h1>
            <ol class="breadcrumb">
              <li><a href="<?=base_url('dash');?>/">Dashboard</a></li>
              <li><a href="<?=base_url('dash');?>/info">Info dari Member</a></li>
              <li class="active"><?=ucwords($title);?></li>
            </ol>           
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-12">
            <form method="post" action="return false" class="form-horizontal" role="form" enctype="multipart/form-data">
              <div class="form-group">
				<div class="col-lg-2">
					<label for="jenis" class="col-lg-2 control-label">Judul</label>
				</div>
                <div class="col-lg-6">
                  <input name="title" value="<?=$data->judul;?>" type="text" class="form-control" id="title" placeholder="Title">
                </div>
              </div>
			  <div class="form-group">
                    <div class="col-lg-2">
						<label for="banner_image" class="col-lg-2 ">Image</label>
					</div>	
					<div class="col-lg-4">                        
						<?php if($data->image != '-') { ?>
						<img src='<?=base_url().$data->image;?>' width='150' height='100'><br/><br/>
						<?php } ?>					
                    </div>					
              </div>			  
			  <div class="form-group">
				<div class="col-lg-2">
					<label for="jenis" class="col-lg-2 control-label">Kategori</label>
				</div>
				<div class="col-lg-6">
					<input name="title" value="<?=$data->kategori;?>" type="text" class="form-control" id="title" placeholder="Title">
				</div>
              </div>			  
              <div class="form-group">
                <div class="col-lg-2">
					<label for="jenis" class="control-label">Summary Berita</label>
				</div>
				<div class="col-lg-6">
                  <textarea cols="80" id="editor2" name="summary" rows="50"><?=$data->overview;?></textarea>
				</div>                
              </div>				  
			  <div class="form-group">
                <div class="col-lg-2">
					<label for="jenis" class="control-label">Isi Berita</label>
				</div>
				<div class="col-lg-6">
                  <textarea cols="80" id="editor1" name="content" rows="50"><?=$data->full;?></textarea>
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