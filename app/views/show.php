<?php
	include_once include_path('header.php');
	include_once include_path('sidenav.php');
	include_once include_path('topnav.php');
?>






	    <article class="blog-post px-3 py-5 p-md-5">
		    <div class="container">
			    <header class="blog-post-header">
				    <h2 class="title mb-2"><?php echo $data['blog']->post_title; ?></h2>
				    <div class="meta mb-3"><span class="date">Published <?php echo getFullAge($data['blog']->post_created_at) ?> ago</span><span class="time"><?php echo $data['blog']->post_read_mins ?></span><span class="comment"><a href="#">Category - <b><?php echo $data['blog']->category_name ?></b> </a></span></div>
			    </header>
			    
			    <div class="blog-post-body">
				    <figure class="blog-banner">
				        <a href=""><img class="img-fluid" src="<?php echo get_img('post/'.$data['blog']->post_image) ?>" alt="image"></a>
				        <figcaption class="mt-2 text-center image-caption">Image Credit: <a href="?ref=devblog" target="_blank">made4dev.com (Premium Programming T-shirts)</a></figcaption>
				    </figure>
				    
				    <?= $data['blog']->post_content ?>

				   
			    </div>
				    
			    <nav class="blog-nav nav nav-justified my-5">
				  <a class="nav-link-prev nav-item nav-link rounded-left" href="index.html">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
				  <a class="nav-link-next nav-item nav-link rounded-right" href="blog-list.html">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
				</nav>
				
				
				
		    </div><!--//container-->
	    </article>











<?php
include_once include_path('modal-contact.php');
include_once include_path('modal-website.php');
include_once include_path('modal-desktop-app.php');
include_once include_path('footer.php');
?>