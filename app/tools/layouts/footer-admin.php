
<!-- Javascript -->
<script src="<?php url_to('app/tools/assets/plugins/jquery-3.3.1.min.js') ?>"></script>
<script src="<?php url_to('app/tools/assets/plugins/popper.min.js') ?>"></script>
<script src="<?php url_to('app/tools/assets/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<script>
	$(document).ready(function() {
		var dt = document.getElementsByClassName('dt');
		if (dt.length > 0) {
			$('.dt').DataTable();
		}

		var sm = document.getElementsByClassName('sm');
		$(document).ready(function() {
		  $('.sm').summernote({
		  	height: 300, 
		  });
		});
	})
</script>


</body>
</html>
