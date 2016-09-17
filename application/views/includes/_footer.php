<!-- jQuery -->
<script src="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?> "></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

<!-- Application Core JavaScript -->
<script src="<?php echo base_url('assets/js/application.js'); ?>"></script>


<script type="text/javascript">
  // $('#asset_register').addClass('active');
  var now = new Date();
  var formated_date = now.getDate() + ' / ' + now.getMonth() + ' / ' + now.getFullYear();
  $('#date').val(formated_date);
</script>
