<?php
include_once include_path('header-admin.php');
include_once include_path('sidenav-admin.php');
include_once include_path('topnav-admin.php');
?>


<main>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				 <h4 class="mt-1 text-center">
				 	<?php if ($data['user']->user_active): ?>
				 		Deactivate <?= $data['user']->user_name; ?>
				 	<?php else: ?>
				 		Activate <?= $data['user']->user_name; ?>
				 	<?php endif ?>
				 </h4>

              
			</div>
		</div>
		<?php include_once include_path('message.php'); ?>
		<div class="row">
			<div class="col-sm-12">
				<?php if ($data['user']->user_active): ?>
					<center>

						<form class="mb-3" method="post" action="<?php url_to('users/activate/'.$data['user']->id); ?>">
							<p>Are You sure you want to deactivate this user??</p>
							<button type="submit" class="btn btn-danger">Yes, Deactivate User please</button>
						</form>
						<button class="btn btn-success"><a href="<?php url_to('users/show/'.$data['user']->id);?>" class="text-white">No, Take me back</a></button>
					</center>


				<?php else: ?>
					<center>

						<form class="mb-3" method="post" action="<?php url_to('users/activate/'.$data['user']->id); ?>">
							<p>Are You sure you want to activate this user??</p>
							<button type="submit" class="btn btn-success">Yes, Activate User please</button>
						</form>
						<button class="btn btn-danger"><a href="<?php url_to('users/show/'.$data['user']->id);?>" class="text-white">No, Take me back</a></button>
					</center>
				<?php endif ?>
			</div>
		</div>






	</div>
</main>



<?php
include_once include_path('footer-admin.php');
?>
