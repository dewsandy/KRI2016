<?php include 'header.php'; ?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1><?= $title;?></h1>
            <ol class="breadcrumb">
              <li><a href="<?=base_url('dash');?>">Dashboard</a></li>
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
			<div class="search">
              <form method="GET" action="" class="form-inline" role="form">                
                <div class="form-group">
                  <input value="<?=$s?>" name="s" type="text" class="form-control" id="" placeholder="Judul">
				  <select name="idk" type="text" class="form-control" id="id_propinsi">
					<option value="">-- pilih kategori --</option>					
					<?php foreach ($kategori as $k) { ?>
					<option value="<?=$k->id_kategori;?>" <?=($idk==$k->id_kategori)?'selected':'';?> ><?=ucwords($k->kategori);?></option>
					<?php } ?>
				   </select>
                </div>
                <button type="submit" class="btn btn-primary">Cari</button>
              </form>
            </div>
            <h2>Daftar Berita / Info</h2>
            <a href="<?=base_url('dash');?>/berita/add" type="button" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah</a>
            <br><br>
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped tablesorter">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Konten</th>
                    <th>Kategori</th>
                    <th width="12%">Tanggal dibuat</th>
                    <!--<th>Image</th>-->
                    <th width="18%">Action</th>                    
                  </tr>
                </thead>
                <tbody>
                  <?php $i=$offset;foreach ($data as $data) { $i++;?>
                  <tr>
                    <td><?=$i;?></td>
                    <td><?=$data->judul;?></td>
                    <td><?= strip_tags($data->overview);?></td>
                    <td><?=$data->kategori;?></td>				
                    <td><?=date("d/m/Y",strtotime($data->tanggal));?></td>				
                    <!--<td>
						<?php if(!empty($data->image) and ($data->image!='-')){?>
						<img src='<?=$data->image;?>' width='100' height='80'>
						<?php }?>
					</td>-->
                    <td>
                      <a href="<?=base_url('dash')?>/info/delete/<?=$data->id_berita;?>" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus</a>
                      <a href="<?=base_url('dash')?>/info/view/<?=$data->id_berita;?>" type="button" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> Lihat</a>
                    </td>                              
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
			<?=$paginator?>
          </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->   
<?php include 'footer.php'; ?>