
<?php
include_once include_path('header-admin.php');
include_once include_path('sidenav-admin.php');
include_once include_path('topnav-admin.php');
?>



<?php
	$pages = explode('/', rtrim($_GET['url'], '/'));
	if (isset($pages[2])) {
	    $page = $pages[2];
	} else {
	    $page = 1;
	}


	$total_pages = $data['total_pages'];

 ?>


<main>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4 class="mt-1">All Blog Posts</h4>
	            <?php 
					include_once include_path('message.php');
				?>
	            
			</div>
			
		</div>



		<div class="row mb-2 d-flex justify-content-end">
			<?php if (get_sess('logged_in_user_role') == 1): ?>
				<a class="align-item-end btn btn-dark m-1" href="<?php url_to('posts/create') ?>">New Blog Post <i class="fa fa-plus"></i></a>
			<?php endif ?>
	        
	    </div>

		<div class="row">
			<div class="col-sm-12">
				<table class="table table-sm table-bordered dt">
					<thead>
						<tr>
							<th width="50%">
								Blog Title
							</th>
							<th width="10%" class="text-center">
								Writer
							</th>
							<th width="10%" class="text-center">
								Category
							</th>
							<th width="10%"  class="text-center">
							 	Publish
							</th>
							<th class="text-center">
								Actions
							</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($data['posts'] as $v): ?>
							<tr>
								<td>
									<?= $v->post_title; ?>
								</td>
								<td class="">
									<?= $v->user_name; ?>
								</td>
								<td class="">
									<?= $v->category_name; ?>
								</td>
								<td class="text-center"">
									<?php if ($v->post_published): ?>
										<a href="<?php url_to('posts/publish/'.$v->id) ?>">Unpublish</a>
									<?php else: ?>
										<a href="<?php url_to('posts/publish/'.$v->id) ?>">Publish</a>
									<?php endif ?>
								</td>
								<td class="text-center">
									<a href="<?php url_to('posts/edit/'.$v->id) ?>">
										<span class="mx-1 text-primary"><i class="fa fa-edit"></i></span>
									</a>
									<a href="<?php url_to('posts/show/'.$v->id) ?>">
										<span class="mx-1 text-success"><i class="fa fa-eye"></i></span>
									</a>
									<a href="<?php url_to('posts/delete/'.$v->id) ?>">
										<span class="mx-1 text-danger"><i class="fa fa-trash"></i></span>
									</a>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>




		<div class="row">
			<div class="col-sm-12">
				<nav aria-label="Page navigation example">
				<ul class="pagination">
				    <li class="page-item"><a class="page-link" href="<?php url_to('posts/home/1'); ?>">First</a></li>
				    <?php for ($p = max(1, $page - 5); $p <= min($page + 5, $total_pages); $p++) { ?>
				        <li class="page-item <?= $page == $p ? 'active' : ''; ?>"><a href="<?php url_to('posts/home/'.$p); ?>" class="page-link"><?= $p; ?></a></li>
				    <?php } ?>
				    ...
				    <li class="page-item"><a class="page-link" href="<?php url_to('posts/home/'.$total_pages); ?>">Last</a></li>
				</ul>
			</nav>
			</div>
		</div>



		
	</div>

</main>





<?php
include_once include_path('footer-admin.php');
?>