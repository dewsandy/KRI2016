<?php include 'header.php'; ?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1><?= $title;?></h1>
            <ol class="breadcrumb">
              <li><a href="<?=base_url('dash');?>">Dashboard</a></li>
              <li><a href="<?=base_url('dash');?>/agenda">Agenda</a></li>
              <li class="active"><?= $title;?></li>
            </ol>
            <?php if($alert=='success'){ ?>
            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              Berhasil
            </div>
            <?php } ?>

            <?php if($alert=='failed'){ ?>
            <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              Gagal
            </div>
            <?php } ?>				
			
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-12">
            <form class="form-horizontal" method="post" action="<?=base_url('dash');?>/agenda/add">
              <!--<div class="form-group">
                <label for="agenda" class="col-lg-2 control-label">Parent</label>
                <div class="col-lg-4">
                  <select name="id_parent" type="text" class="form-control" id="id_propinsi">
                    <option value="">-- pilih parent --</option>
                    <?php foreach ($agenda as $k) { ?>
                    <option value="<?=$k->id_agenda;?>"><?=ucwords($k->nama_agenda);?></option>
                    <?php } ?>
                  </select>
                </div>
              </div> -->
              <div class="form-group">
                <label for="agenda" class="col-lg-2 control-label">Nama Agenda</label>
                <div class="col-lg-4">
                  <input name="agenda" type="text" class="form-control" id="agenda" placeholder="" required>
                </div>
              </div>			  
			  <div class="form-group">
                <label for="tanggal" class="col-lg-2 control-label">Tanggal</label>
                <div class="col-lg-4">
                  <input name="tanggal" type="text" class="form-control" id="date_start"  required>
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