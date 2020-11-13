<?php
include_once include_path('header-admin.php');
include_once include_path('sidenav-admin.php');
include_once include_path('topnav-admin.php');
?>



<main>

	<div class="container">

			<center>
				<h4>
					Delete <?= $data['post']->post_title ?>
				</h4>
				
				<?php include_once include_path('message.php'); ?>

				
				<form class="mb-3" method="post" action="<?php url_to('posts/delete/'.$data['post']->id); ?>">
					<p>Are You sure you want to delete this post??</p>
					<button type="submit" class="btn btn-danger">Yes, Delete post please</button>
				</form>
				<button class="btn btn-success"><a href="<?php url_to('posts/show/'.$data['post']->id);?>" class="text-white">No, Take me back</a></button>
			</center>



			



	</div>
</main>




<?php
include_once include_path('footer-admin.php');
?>