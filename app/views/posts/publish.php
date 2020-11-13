<?php
include_once include_path('header-admin.php');
include_once include_path('sidenav-admin.php');
include_once include_path('topnav-admin.php');
?>



<main>

	<div class="container">

			<center>
				<?php if ($data['post']->post_published): ?>
					<h4>
						Publish <?= $data['post']->post_title ?>
					</h4>

					<form class="mb-3" method="post" action="<?php url_to('posts/publish/'.$data['post']->id); ?>">
						<p>Are You sure you want to publish this post??</p>
						<button type="submit" class="btn btn-success">Yes, Publish post please</button>
					</form>
				<?php else: ?>
					<h4>
						Unpublish <?= $data['post']->post_title ?>
					</h4>
					<form class="mb-3" method="post" action="<?php url_to('posts/publish/'.$data['post']->id); ?>">
						<p>Are You sure you want to Unpublish this post??</p>
						<button type="submit" class="btn btn-danger">Yes, Unpublish post please</button>
					</form>
				<?php endif ?>
				
				
				<?php include_once include_path('message.php'); ?>

				
				
				<button class="btn btn-success"><a href="<?php url_to('posts/show/'.$data['post']->id);?>" class="text-white">No, Take me back</a></button>
			</center>



			



	</div>
</main>




<?php
include_once include_path('footer-admin.php');
?>