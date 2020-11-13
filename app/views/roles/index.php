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
						User Roles (<?= $data['roles']['count'] ?>)
					</h4>
				</div>
			</div>




			


			<?php include_once include_path('message.php'); ?>
			
			<?php if (get_sess('logged_in_user_role') == 1): ?>
				<div class="row mb-2 d-flex justify-content-end">
	                <a class="align-item-end btn btn-dark m-1" href="<?php url_to('roles/create') ?>">New User Role <i class="fa fa-plus"></i></a>
	            </div>
            <?php endif ?>

			<div class="row">
				<div class="col-sm-12">
					
					<table class="table table-sm table-bordered dt">
					<thead>
						<tr>
							<th width="50%">
								Role Name
							</th>
							
							<th width="30%">
								Number of Users
							</th>
							
							<th class="text-center">
								Actions
							</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($data['roles']['data'] as $v): ?>
							<tr>
								<td>
									<?= $v->role_name; ?>
								</td>
								
								<td class="">
									<?= $v->cnt; ?>
								</td>
								
								<td class="text-center">
									<a href="<?php url_to('roles/edit/'.$v->id) ?>">
										<span class="mx-1 text-primary"><i class="fa fa-edit"></i></span>
									</a>
									<a href="<?php url_to('roles/show/'.$v->id) ?>">
										<span class="mx-1 text-success"><i class="fa fa-eye"></i></span>
									</a>
									<?php if ($v->cnt <= 0): ?>
										<a href="<?php url_to('roles/delete/'.$v->id) ?>">
										<span class="mx-1 text-danger"><i class="fa fa-trash"></i></span>
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
