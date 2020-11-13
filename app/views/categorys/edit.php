<?php
include_once include_path('header-admin.php');
include_once include_path('sidenav-admin.php');
include_once include_path('topnav-admin.php');
?>



<main>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h4>
					Edit <?php echo $data['category']->category_name ?>
				</h4>				
			</div>
		</div>

		<?php include_once include_path('message.php'); ?>


		<div class="row justify-content-center">
			<div class="col-sm-8">
				<form method="POST" action="<?php url_to('categorys/edit/'.$data['category']->id); ?>">
					<div class="form-group">
						<label for="">Category Name</label>
						<input type="text" name="category_name" class="form-control" value="<?php echo $data['category_name']; ?>">
					</div>
					<div class="form-group">
						 <button type="submit" class="btn btn-primary">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</main>









<?php
include_once include_path('footer-admin.php');
?>