<?php
	include_once include_path('header.php');
	include_once include_path('sidenav.php');
	include_once include_path('topnav.php');
?>



<article class="about-section py-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3>404 Error</h3>
				<span class="alert-danger alert">
					<?= $data['error'] ?> 
				</span>
			</div>
		</div>
	</div>	
</article>


<?php
	include_once include_path('footer.php');
?>