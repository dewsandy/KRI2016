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
            <h2>Daftar Halaman</h2>
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped tablesorter">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Untuk Halaman</th>                    
                    <th width="18%">Action</th>                    
                  </tr>
                </thead>
                <tbody>
                  <?php $i=0;foreach ($data as $data) { $i++;?>
                  <tr>
                    <td><?=$i;?></td>
                    <td><?=$data->judul;?></td>
                    <td><?=$data->for_page;?></td>				
                    <td>
                      <a href="<?=base_url('dash')?>/page/edit/<?=$data->id_page;?>" type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>                      
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