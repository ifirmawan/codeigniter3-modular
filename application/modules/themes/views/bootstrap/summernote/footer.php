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
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script type="text/javascript">
	$(function(){
		if ($('#settingsTab a[href="#features"]').length > 0) {
			$('#settingsTab a[href="#features"]').tab('show');
		}
		if ($('#summernote').length > 0) {
			$('#summernote').summernote();
		}
	});
</script>
</body>

</html>
