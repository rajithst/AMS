<!-- jQuery -->
<script src="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?> "></script>

<!-- select2 Core JavaScript -->
<script src="<?php echo base_url('assets/js/select2.min.js'); ?>"></script>

<!-- jQuery UI -->
<script src="<?php echo base_url('assets/js/jquery-ui.min.js'); ?> "></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

<!-- Sweetalert JavaScript -->
<script src="<?php echo base_url('assets/js/sweetalert.min.js'); ?>"></script>

<!-- Application Core JavaScript -->
<script src="<?php echo base_url('assets/js/application.js'); ?>"></script>


<script type="text/javascript">
  var now = new Date();
  var formated_date = now.getDate() + ' / ' + now.getMonth() + ' / ' + now.getFullYear();
  $('#date').val(formated_date);

  $.fn.modal.Constructor.prototype.enforceFocus = function () {};

</script>
