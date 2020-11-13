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
						Post Categories (<?= $data['categorys']['count'] ?>)
					</h4>
				</div>
			</div>

			
			
			<?php if (get_sess('logged_in_user_role') == 1): ?>
			  <div class="row mb-2 d-flex justify-content-end">
	              <a class="align-item-end btn btn-dark m-1" href="<?php url_to('categorys/create') ?>">New Post Category <i class="fa fa-plus"></i></a>
	          </div>
	        <?php endif ?>



			<div class="row">
				<div class="col-sm-12">
					
					<table class="table table-sm table-bordered dt">
					<thead>
						<tr>
							<th width="60%">
								Category Name
							</th>
							
							<th width="20%">
								Post Items
							</th>
							
							<th class="text-center">
								Actions
							</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($data['categorys']['data'] as $v): ?>
							<tr>
								<td>
									<?= $v->category_name; ?>
								</td>
								
								<td class="">
									<?= $v->cnt; ?>
								</td>
								
								<td class="text-center">
									<a href="<?php url_to('categorys/edit/'.$v->id) ?>">
										<span class="mx-1 text-primary"><i class="fa fa-edit"></i></span>
									</a>
									<a href="<?php url_to('categorys/show/'.$v->id) ?>">
										<span class="mx-1 text-success"><i class="fa fa-eye"></i></span>
									</a>
									<?php if ($v->cnt <= 0): ?>
										<a href="<?php url_to('categorys/delete/'.$v->id) ?>">
										<span class="mx-1 text-danger"><i class="fa fa-eye"></i></span>
									</a>
									<?php endif ?>
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