    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="<?=base_url();?>asset/dash/js/bootstrap.js"></script>
    <script src="<?=base_url();?>asset/dash/js/jquery-ui.min.js"></script>
    <script src="<?=base_url();?>asset/dash/js/jquery.dataTables.js"></script>
    <script type="text/javascript">
var base_url = '<?=base_url();?>';
var admin_url = '<?=admin_url();?>';
</script>
<script type="text/javascript">
$('.btn-danger').click(function(){
  return confirm('Are you sure delete this item?');
});
</script>
<script type="text/javascript">
  // $( "#tgl_lahir" ).datepicker({dateFormat: 'yy-mm-dd'});
  $( "#tgl_lahir" ).datepicker({
    changeMonth: true,
    changeYear: true,
    yearRange:'-90:+0',
    dateFormat: 'dd-mm-yy'
  });
  $( "#delivery_date" ).datepicker({
    dateFormat: 'dd-mm-yy'
  });
  $( ".tanggal" ).datepicker({
    dateFormat: 'dd-mm-yy'
  });
  
  $( "#date_start" ).datepicker({
    changeMonth: true,
    changeYear: true,
    yearRange:'-90:+0',
    dateFormat: 'dd-mm-yy'
  });
  $( "#date_end" ).datepicker({
    changeMonth: true,
    changeYear: true,
    yearRange:'-90:+0',
    dateFormat: 'dd-mm-yy'
  });
</script>
  </body>
</html>