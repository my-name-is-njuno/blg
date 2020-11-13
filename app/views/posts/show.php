<?php
include_once include_path('header-admin.php');
include_once include_path('sidenav-admin.php');
include_once include_path('topnav-admin.php');
?>





<main>
            <div class="container">
                <h4 class="mt-1"><?= $data['post']->post_title ?></h4>
                
                
                <?php include_once include_path('message.php'); ?>
                <div class="card mb-4">
                <div class="card-body">
                  
      				  <?= $data['post']->post_content ?>
                  
	          	</div>
	        </div>
	    </div>
	</main>









<?php
include_once include_path('footer-admin.php');
?>