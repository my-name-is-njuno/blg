<?php
include_once include_path('header-admin.php');
include_once include_path('sidenav-admin.php');
include_once include_path('topnav-admin.php');
?>



	<main>
            <div class="container">
                <h4 class="mt-1">Add New Employee Roles</h4>
                
                

                <?php include_once include_path('message.php'); ?>

                	

                <div class="card mb-4">
                <div class="card-body">
                  
				<div class="row justify-content-center">
				  <div class="col-sm-8 justify-content-center">
                      <form method="POST" action="<?php url_to('roles/create'); ?>">
                      		<div class="form-group">
								<label for="my-input">Role Name</label>
								<input type="text" name="role_name" class="form-control form-control-lg" value="<?php echo $data['role_name']; ?>" required>
								<span class="form-text text-danger"><?php echo $data['role_name_err'] ?></span>
							</div>

							<button type="submit" class="btn btn-primary btn-lg">Add New Role</button>

                      </form>
	              </div>
				  </div>
                  
	          	</div>
	        </div>
	    </div>
	</main>















<?php
include_once include_path('footer-admin.php');
?>
