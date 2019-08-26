<?php include 'header.php'; ?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Agenda</h1>
            <ol class="breadcrumb">
              <li><a href="<?=base_url('dash');?>/dashboard">Dashboard</a></li>
              <li><a href="<?=base_url('dash');?>/agenda">Agenda</a></li>
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
            <form class="form-horizontal" method="post" action="<?=base_url('dash');?>/agenda/edit/<?=$data->id_agenda;?>">
             <div class="form-group">
                <label for="agenda" class="col-lg-2 control-label">Nama Agenda</label>
                <div class="col-lg-4">
                  <input name="agenda" value="<?= $data->agenda?>" type="text" class="form-control" id="agenda" placeholder="Agenda" required>
                </div>
              </div>			  
			  <div class="form-group">
                <label for="tanggal" class="col-lg-2 control-label">Tanggal</label>
                <div class="col-lg-4">
                  <input name="tanggal" type="text" value="<?= date("d-m-Y",strtotime($data->tanggal))  ?>" class="form-control" id="date_start"  required>
                </div>
              </div>			  
			  <div class="form-group">
                <label for="lokasi" class="col-lg-2 control-label">Keterangan</label>
                <div class="col-lg-4">
                  <textarea cols="80" id="editor1" name="keterangan" rows="50"></textarea>
                </div>
              </div>			  			  
              <div class="form-group">
                <div class="col-lg-2"></div>
                <div class="col-lg-4">
                  <button class="btn btn-primary pull-right" type="submit" name="simpan" value="simpan">Simpan</button>                  
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