<?php
include_once include_path('header-admin.php');
include_once include_path('sidenav-admin.php');
include_once include_path('topnav-admin.php');
?>



<main>
	
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h4 class="mt-4">Blog - <?= $data['post']->post_title ?> Views</h4>
              <?php include_once include_path('message.php'); ?>


            <!-- Main content -->
            
              
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

</main>







  <?php
    include_once include_path('footer-admin.php');
  ?>