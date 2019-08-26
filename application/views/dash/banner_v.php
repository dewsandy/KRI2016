<?php include 'header.php'; ?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Banner</h1>
            <ol class="breadcrumb">
              <li><a href="<?=base_url('dash');?>/dashboard">Dashboard</a></li>
              <li class="active">Banner</li>
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
            <h2>Daftar Banner Homepage</h2>
            <a href="<?=base_url('dash');?>/banner/add" type="button" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah</a>
            <br><br>
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped tablesorter">
                <thead>
                  <tr>
                    <th>No.</th>                    
                    <th>Gambar</th>                    
                    <th>Action</th>                    
                  </tr>
                </thead>
                <tbody>
                  <?php $i=0;foreach ($datas as $data) { $i++;?>
                  <tr>
                    <td><?=$i;?></td>                    
					<td><img src='<?=base_url().$data->banner;?>' width='150' height='100'><br/><br/></td>
                    <td>
                      <a href="<?=base_url('dash');?>/banner/edit/<?=$data->id_banner;?>" type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>
                      <a href="<?=base_url('dash');?>/banner/delete/<?=$data->id_banner;?>" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus</a>
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