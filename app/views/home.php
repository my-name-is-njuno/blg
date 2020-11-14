<?php
	include_once include_path('header.php');
	include_once include_path('sidenav.php');
	include_once include_path('topnav.php');
?>

<?php
	$page = 1;
	if (isset($_GET['url'])) {
		$pages = explode('/', rtrim($_GET['url'], '/'));
		if (isset($pages[2])) {
		    $page = $pages[2];
		}
	} 

	$total_pages = $data['total_pages'];

 ?>

<section class="blog-list px-3 py-5 p-md-5">

	<div class="container">
		<?php foreach ($data['posts'] as $value): ?>
			<div class="item mb-5">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?= get_img('post/'.$value->post_image) ?>" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="<?php url_to('show/'.$value->post_slug) ?>">
						    	<?= $value->post_title ?>
						    </a></h3>
						    <div class="meta mb-1"><span class="date">Published on <?= formatedDateshow($value->post_created_at) ?></span><span class="time"><?= $value->post_read_mins ?></span><span class="comment"><a href="#"><?= $value->category_name; ?></a></span></div>
						    <div class="intro">
						    	<?= $value->post_description ?>
						    </div>
						    <a class="more-link" href="<?php url_to('show/'.$value->post_slug) ?>">Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->
		<?php endforeach ?>
	</div>









	



		


		<nav class="blog-nav nav nav-justified my-5">
				<?php if ($page > 1): ?>
					<?php $pg = $page - 1; ?>
					<a class="nav-link-prev nav-item nav-link d-none rounded-left" href="<?php url_to('posts/home/'.$pg); ?>">Previous</a>
				<?php endif ?>
				<?php if ($page < $total_pages): ?>
					<?php $pgg = $page +1;  ?>
					<a class="nav-link-next nav-item nav-link rounded" href="<?php url_to('posts/home/'.$pgg) ?>">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
				<?php endif ?>
		</nav>
	
</section>






<?php
include_once include_path('modal-contact.php');
include_once include_path('modal-website.php');
include_once include_path('modal-desktop-app.php');
include_once include_path('footer.php');
?>
