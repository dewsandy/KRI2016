<?php include 'header.php'; ?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>prestasi</h1>
            <ol class="breadcrumb">
              <li><a href="<?=base_url('dash');?>/dashboard">Dashboard</a></li>
              <li class="active">prestasi</li>
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
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-12">
            <div class="search">
              <form method="GET" action="" class="form-inline" role="form">                
                <div class="form-group">
                  <input value="<?=$s?>" name="s" type="text" class="form-control" id="" placeholder="Judul">
				  <select name="thn" type="text" class="form-control" id="id_propinsi">
					<option value="">-- pilih tahun --</option>					
					<?php foreach ($tahun as $k) { ?>
					<option value="<?=$k->tahun;?>" <?=($thn==$k->tahun)?'selected':'';?> ><?=ucwords($k->tahun);?></option>
					<?php } ?>
				   </select>
				   <select name="tkt" type="text" class="form-control" id="id_propinsi">
					<option value="">-- pilih Tingkat --</option>					
					<?php foreach ($tingkat as $k) { ?>
					<option value="<?=$k;?>" <?=($tkt==$k)?'selected':'';?> ><?=ucwords($k);?></option>
					<?php } ?>
				   </select>
                </div>
                <button type="submit" class="btn btn-primary">Cari</button>
              </form>
            </div>
			<h2>Daftar Prestasi Teknik Komputer</h2>
            <a href="<?=base_url('dash');?>/prestasi/add" type="button" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah</a>
            <br><br>
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped tablesorter">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Prestasi</th>
                    <th>Tahun</th>
                    <th>Tingkat</th>
                    <th>Jenis</th>
                    <th>Action</th>                    
                  </tr>
                </thead>
                <tbody>
                  <?php $i=$offset;foreach ($datas as $data) { $i++;?>
                  <tr>
                    <td><?=$i;?></td>
                    <td><?="[".$data->id_prestasi."] ".ucwords($data->prestasi);?></td>
                    <td><?=$data->tahun?></td>
                    <td><?=$data->tingkat?></td>
                    <td><?=$data->jenis?></td>
                    <td>
                      <a href="<?=base_url('dash');?>/prestasi/edit/<?=$data->id_prestasi;?>" type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>
                      <a href="<?=base_url('dash');?>/prestasi/delete/<?=$data->id_prestasi;?>" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus</a>
                    </td>                    
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
			<?= $paginator;?>
          </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->   
<?php include 'footer.php'; ?>