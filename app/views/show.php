<!DOCTYPE html>
       <html lang="en">
       <head>
           <title>JN Media - <?= $data['blog']->post_title ?> </title>

           <!-- Meta -->
           <meta charset="utf-8">
           <meta http-equiv="X-UA-Compatible" content="IE=edge">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <meta name="description" content="<?= $data['blog']->post_description ?>">
           <meta name="keywords" content="<?= $data['blog']->post_keywords ?>">
           <meta name="author" content="Petero Njuno">
           <link rel="shortcut icon" href="<?php url_to('app/tools/assets/images/favicon/android-icon-72x72.png') ?>">

           <!-- FontAwesome JS-->
           <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>

           <!-- Theme CSS -->
           <link id="theme-style" rel="stylesheet" href="<?php url_to('app/tools/assets/css/theme-1.css') ?>">
           <link id="theme-style" rel="stylesheet" href="<?php url_to('app/tools/assets/css/custom.css') ?>">


           <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5fb346728fbbd6001256e60f&product=inline-share-buttons" async="async"></script>



           <!-- Global site tag (gtag.js) - Google Analytics -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=G-5XPJ9YFJFD"></script>
			<script>
			  window.dataLayer = window.dataLayer || [];
			  function gtag(){dataLayer.push(arguments);}
			  gtag('js', new Date());

			  gtag('config', 'G-5XPJ9YFJFD');
			</script>
       </head>

       <body>
<?php
	
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
				 <div class="sharethis-inline-share-buttons"></div>
			    <nav class="blog-nav nav nav-justified my-5">
				  <a class="nav-link-prev nav-item nav-link rounded-left" href="<?php url_to('') ?>">Go Back Home <i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
				  
				</nav>
				
				
				
		    </div><!--//container-->
		    
	    </article>











<?php
include_once include_path('modal-contact.php');
include_once include_path('modal-website.php');
include_once include_path('modal-desktop-app.php');
include_once include_path('footer.php');
?>