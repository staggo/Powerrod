<!--scripts-->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo $this->config->item('js_path'); ?>bootstrap.min.js"></script>
<script src="<?php echo $this->config->item('js_path'); ?>bootstrap-datetimepicker.min.js"></script>

<script src="<?php echo $this->config->item('js_path'); ?>datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="http://cdn.datatables.net/plug-ins/e9421181788/integration/bootstrap/3/dataTables.bootstrap.js"></script>
<script src="<?php echo $this->config->item('js_path'); ?>datatables/shCore.js"></script>
<script src="<?php echo $this->config->item('js_path'); ?>datatables/demo.js"></script>
<script src="<?php echo $this->config->item('js_path'); ?>site.js"></script>

<script type="text/javascript" language="javascript" class="init">
	$(document).ready(function() {
		$('#event_list').dataTable({
			"pageLength": 25,
			 "searching": false,
			 "lengthChange": false,
			 "paging": false,
			"order": [[ 2, "desc" ]]
		});
	} );
</script>

<script type="text/javascript" language="javascript" class="init">
	$(document).ready(function() {
		$('#example, #call_list').dataTable({
			"pageLength": 25
		});
	} );
</script>
<script>

$("#logged_date").datetimepicker({format: 'dd/mm/yyyy hh:ii'});
</script>

<!--script src="<?php echo $this->config->item('js_path'); ?>datatables/-->

</body>
</html>