
<?php
include_once include_path('header-admin.php');
include_once include_path('sidenav-admin.php');
include_once include_path('topnav-admin.php');
?>






<main>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4 class="mt-1">All Blog Posts (<?= $data['posts']['count'] ?> )</h4>
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
							<th width="40%">
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
							<th width="10%"  class="text-center">
							 	Views
							</th>
							<th class="text-center">
								Actions
							</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($data['posts']['data'] as $v): ?>
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
								<td class="text-center">
									<?php if ($v->post_published): ?>
										<a href="<?php url_to('posts/publish/'.$v->id) ?>">Unpublish</a>
									<?php else: ?>
										<a href="<?php url_to('posts/publish/'.$v->id) ?>">Publish</a>
									<?php endif ?>
								</td>
								<td class="text-center">
									<?= $v->views_count ?>
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






		
	</div>

</main>





<?php
include_once include_path('footer-admin.php');
?>