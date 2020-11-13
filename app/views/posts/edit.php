<?php
include_once include_path('header-admin.php');
include_once include_path('sidenav-admin.php');
include_once include_path('topnav-admin.php');
?>


		<main>
            <div class="container">
                <h4 class="mt-1">Edit Blog Post</h4>
                
               
                <?php include_once include_path('message.php'); ?>
                <div class="card mb-4">
                <div class="card-body">
                  
				<div class="row justify-content-center">
				  <div class="col-sm-10 justify-content-center">
                      <form method="POST" action="<?php url_to('posts/edit/'.$data['post']->id); ?>"  enctype="multipart/form-data">


                      	<div class="form-group">
								<label for="my-input">Post Title</label>
								<input type="text" name="post_title" class="form-control form-control-lg" value="<?php echo $data['post_title']; ?>" required>
								<span class="form-text text-danger"><?php echo $data['post_title_err'] ?></span>
							</div>


							<div class="form-group">
								<label for="my-input">Summary Description</label>
								<textarea type="text" name="post_description" class="form-control form-control-lg" required><?php echo $data['post_description']; ?></textarea>
								<span class="form-text text-danger"><?php echo $data['post_description_err'] ?></span>
							</div>



							<div class="form-group">
								<label for="my-input">Post Content</label>
								<textarea type="text" name="post_content" class="form-control form-control-lg sm" required><?php echo $data['post_content']; ?></textarea>
								<span class="form-text text-danger"><?php echo $data['post_content_err'] ?></span>
							</div>

							<div class="form-group">
								<label for="my-input">Post Image</label>
								<input type="file" name="post_image" class="form-control-file form-control-lg" id="post_image">
								<span class="form-text text-danger"><?php echo $data['post_image_err'] ?></span>
								<br>	
								Current Image
								<img src="<?php echo get_img('post/'.$data['post']->post_image) ?>" alt="" width = "100" >
							</div>






							<div class="form-group">
								<label for="my-select">Category</label>
								<select id="my-select" class="custom-select" name="post_category_id">
									<option value="">Choose Category</option>
									<?php foreach ($data['categorys'] as $v): ?>
										<option value="<?= $v->id ?>" <?php if ($v->id == $data['post_category_id']): echo 'selected'; ?><?php endif ?>
										><?= $v->category_name ?></option>
									<?php endforeach ?>
								</select>
								<span class="form-text text-danger"><?php echo $data['post_category_id_err'] ?></span>
							</div>



							<div class="form-group">
								<label for="my-input">Post Read Minutes</label>
								<input type="text" name="post_read_mins" class="form-control form-control-lg" value="<?php echo $data['post_read_mins']; ?>" required>
								<span class="form-text text-danger"><?php echo $data['post_read_mins_err'] ?></span>
							</div>



							<button type="submit" class="btn btn-primary">Update Blog Post</button>

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