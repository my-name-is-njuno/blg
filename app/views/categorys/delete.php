<?php
include_once include_path('header-admin.php');
include_once include_path('sidenav-admin.php');
include_once include_path('topnav-admin.php');
?>


<main>

	<div class="container">

		<div class="row">
			<div class="col-sm-12">
				 <h4 class="mt-4">
				 	<?php if (!$data['items']['count']): ?>
				 		Delete <?= $data['category']->category_name ?>
				 	<?php else: ?>
				 		<?= $data['category']->category_name ?> Cannot be deleted.
				 	<?php endif ?>
				 </h4>
              
			</div>
		</div>


		<?php include_once include_path('message.php'); ?>



		<?php if ($data['items']['count'] == 0): ?>
			<center>
				
				<form class="mb-3" method="post" action="<?php url_to('categorys/delete/'.$data['category']->id); ?>">
					<p>Are You sure you want to delete this post category??</p>
					<button type="submit" class="btn btn-danger">Yes, Delete category please</button>
				</form>
				<button class="btn btn-success"><a href="<?php url_to('categorys/show/'.$data['category']->id);?>" class="text-white">No, Take me back</a></button>
			</center>


		<?php else: ?>
			<div>
				

				<h4>
					This category has <?= $data['items']['count']; ?> items.
				</h4>
				
				

				
				<p class="lead"><?= $data['category']->category_name ?> has post items records so cannot be deleted.</p>
				<ul>
					<?php foreach ($data['items']['data'] as $value): ?>
						<li>
							<a href="<?php url_to('posts/show/'.$value->id) ?>" class=""><?= $value->post_item; ?></a>
						</li>
					<?php endforeach ?>
					
				</ul>
			</div>
		<?php endif ?>
	



	</div>
</main>



<?php
include_once include_path('footer-admin.php');
?>