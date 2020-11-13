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
						<?= $data['role']->role_name ?> User(s) (<?= $data['users']['count'] ?>)
					</h4>
				</div>
			</div>
			<?php include_once include_path('message.php'); ?>
			<div class="row">
				<div class="col-sm-12">
					
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					
					<table class="table table-sm table-bordered dt">
                      <thead>
                        <tr>
                          <th width="25%">
                            Name
                          </th>
                          <th>
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
                          
                          <th>
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
                                <a href="<?php url_to('users/show/'.$user->id) ?>" class=""><?= $user->cnt ?></a>
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
                              
                              <td>
                                <?php if ($user->user_active): ?>
                                  <a href="<?php url_to('users/deactivate/'.$user->id) ?>" class="">Deactivate User</a>
                                <?php else: ?>
                                  <a href="<?php url_to('users/deactivate/'.$user->id) ?>" class="">Activate User</a>
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
