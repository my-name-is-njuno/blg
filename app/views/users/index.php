<?php
include_once include_path('header-admin.php');
include_once include_path('sidenav-admin.php');
include_once include_path('topnav-admin.php');
?>





<article class="blog-post px-3 py-5 p-md-5">
	<div class="container">
		<h3 class="title mb-2">Users (<?php echo $data['users']['count'] ?>)</h3>
		<?php include_once include_path('message.php'); ?>
		<table	class="table dt table-bordered">
			<thead>
				
				<tr>
                          <th width="30%">
                            Name
                          </th>
                          <th width="7%" class="text-center">
                            Blogs
                          </th>
                          <th width="7%">
                            Status
                          </th>
                          <th width="7%">
                            Role 
                          </th>
                          <th width="20%">
                            Joined On
                          </th>
                          
                          <th class="text-center">
                            Deactivate
                          </th>
                        </tr>
			</thead>
			<tbody>
				<?php foreach ($data['users']['data'] as $user): ?>
					<tr>
                              <td>
                                <?= $user->user_name ?>
                              </td>
                              <td class="text-center">
                              	<?= $user->cnt ?>
                              </td>
                              <td class="text-center">
                                <?php if ($user->user_active): ?>
                                  <span class="text-success"><i class="fa fa-check"></i></span><?php else: ?>
                                  <span class="text-danger"><i class="fa fa-times"></i></span>
                                <?php endif ?>
                              </td>
                              <td>
                                <a href="<?php url_to('roles/show/'.$user->rid) ?>"><?= $user->role_name; ?></a>
                              </td>
                              <td>
                                <?= formatedDateshow($user->user_at) ?>
                              </td>
                              
                              <td class="text-center">
                                <?php if ($user->user_active): ?>
                                  <a href="<?php url_to('users/deactivate/'.$user->id) ?>" class="text-danger mx-1"><i class="fa fa-times"></i></a>
                                <?php else: ?>
                                  <a href="<?php url_to('users/deactivate/'.$user->id) ?>" class="text-dark mx-1">Activate User</a>
                                <?php endif ?>
                                	<a href="<?php url_to('users/edit/'.$user->id) ?>">
										<span class="mx-1 text-primary"><i class="fa fa-edit"></i></span>
									</a>
									<a href="<?php url_to('users/show/'.$user->id) ?>">
										<span class="mx-1 text-success"><i class="fa fa-eye"></i></span>
									</a>
                                	<a href="<?php url_to('users/delete/'.$v->id) ?>">
										<span class="mx-1 text-danger"><i class="fa fa-trash"></i></span>
									</a>
                              </td>
                            </tr>
                        
				<?php endforeach ?>
			</tbody>
		</table>
	</div>

</article>




<?php
include_once include_path('footer-admin.php');
?>