<?php include 'header.php'; ?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Kategori</h1>
            <ol class="breadcrumb">
              <li><a href="<?=base_url('dash');?>/dashboard">Dashboard</a></li>
              <li class="active">Kategori</li>
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
            <h2>Daftar kategori</h2>
            <a href="<?=base_url('dash');?>/kategori/add" type="button" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah</a>
            <br><br>
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped tablesorter">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Kategori</th>
                    <th>Action</th>                    
                  </tr>
                </thead>
                <tbody>
                  <?php $i=0;foreach ($datas as $data) { $i++;?>
                  <tr>
                    <td><?=$i;?></td>
                    <td><?="[".$data->id_kategori."] ".ucwords($data->kategori);?></td>
                    <td>
                      <a href="<?=base_url('dash');?>/kategori/edit/<?=$data->id_kategori;?>" type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>
                      <a href="<?=base_url('dash');?>/kategori/delete/<?=$data->id_kategori;?>" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus</a>
                    </td>                    
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->   
<?php include 'footer.php'; ?>