<!-- jQuery -->
<script src="<?= base_url() ?>/assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?= base_url() ?>/assets/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="<?= base_url() ?>/assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="<?= base_url() ?>/assets/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?= base_url() ?>/assets/js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="<?= base_url() ?>/assets/js/custom.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
	$(function(){
		if ($('#settingsTab a[href="#features"]').length > 0) {
			$('#settingsTab a[href="#features"]').tab('show');
		}
		if ($('#select2').length > 0) {
			$('#select2').select2();
		}

		if ($('#datatables').length > 0) {
			$('#datatables').DataTable();
		}
	});
</script>
</body>

</html>
