<?php include 'header.php'; ?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1><?= $title;?></h1>
            <ol class="breadcrumb">
              <li><a href="<?=base_url('dash');?>">Dashboard</a></li>
              <li><a href="<?=base_url('dash');?>/prestasi">Prestasi</a></li>
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
            <form class="form-horizontal" method="post" action="<?=base_url('dash');?>/prestasi/add">
              <!--<div class="form-group">
                <label for="prestasi" class="col-lg-2 control-label">Parent</label>
                <div class="col-lg-4">
                  <select name="id_parent" type="text" class="form-control" id="id_propinsi">
                    <option value="">-- pilih parent --</option>
                    <?php foreach ($prestasi as $k) { ?>
                    <option value="<?=$k->id_prestasi;?>"><?=ucwords($k->nama_prestasi);?></option>
                    <?php } ?>
                  </select>
                </div>
              </div> -->
              <div class="form-group">
                <label for="prestasi" class="col-lg-2 control-label">Nama Prestasi</label>
                <div class="col-lg-4">
                  <input name="prestasi" type="text" class="form-control" id="prestasi" placeholder="Info Lain-Lain" required>
                </div>
              </div>
			  <div class="form-group">
                <label for="tingkat" class="col-lg-2 control-label">Tingkat</label>
                <div class="col-lg-4">
                  <select name="tingkat" type="text" class="form-control" id="id_propinsi" required>
					<option value="">-- pilih Tingkat --</option>					
					<?php foreach ($tingkat as $k) { ?>
					<option value="<?=$k;?>"><?=ucwords($k);?></option>
					<?php } ?>
				   </select>
                </div>
              </div>
			  <div class="form-group">
                <label for="tahun" class="col-lg-2 control-label">Tahun</label>
                <div class="col-lg-4">
                  <input name="tahun" type="number" class="form-control" id="prestasi" placeholder="Info Lain-Lain" required>
                </div>
              </div>
			  <div class="form-group">
                <label for="jenis" class="col-lg-2 control-label">Jenis</label>
                <div class="col-lg-4">
                  <select name="jenis" type="text" class="form-control" id="id_propinsi" required>
					<option value="">-- pilih Jenis --</option>					
					<?php foreach ($jenis as $k) { ?>
					<option value="<?=$k;?>" ><?=ucwords($k);?></option>
					<?php } ?>
				   </select>
                </div>
              </div>
			  <!--<div class="form-group">
                <label for="prestasi" class="col-lg-2 control-label">Keterangan prestasi</label>
                <div class="col-lg-4">
                  <textarea name="keterangan"  type="text" class="form-control" required ></textarea>
                </div>
              </div>
			   <div class="form-group">
                <label for="prestasi" class="col-lg-2 control-label">Status prestasi</label>
                <div class="col-lg-4">
					<input name="umum" type="radio"  value="0"> Untuk Admin Saja<br/>
					<input name="umum" checked="true" type="radio" value="1"> Untuk Semua
                </div>
              </div>-->
			  
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
<?php include 'footer.php'; ?>