<?php
	include_once include_path('header.php');
	include_once include_path('sidenav.php');
	include_once include_path('topnav.php');
?>




<article class="about-section py-5">
	<div class="container">
		<h2 class="title mb-3">About Me</h2>

		<p>In 2015, a neighbour introduced me to programming, now I am a web and software applications developer with over 5 years’ experience developing a wide range of websites and desktop applications for window operating system for a range of clients. I have proven expertise in building hospital management applications and responsive websites. I understand the software development project lifecycle in depth and am very capable at all aspects of development from project planning to requirements gathering through to writing and testing code, creating documentation and support.  </p>
		<figure><img class="img-fluid" src="<?= get_img('header_bg.jpg') ?>" alt="image"></figure>
		<h5 class="mt-5">About The Blog</h5>
		<p>On this blog website, I post blogs on different subject, but mostly on web and software development. I also post opinions on various aspects of our lifes like elections, agriculture and healthcare insurance and the way they can be improved by current technology. Other topics covered include udemy course rankings, geography and history of various stuffs, career as a developer, artificial intelligence, accounting among others things. Kindly note that what is posted here will be based on my opinions, so relax, is just an opinion from a nobody.</p>
		<h5 class="mt-5">My Skills and Experiences</h5>
		<section class="regions">
            
            <div class="container flex">
                <div class="card p-2">
                    <h4>
                        C#
                    </h4>
                    <img src="<?= get_img('skills/csharp.png') ?>" alt="">
                </div>
                <div class="card p-2">
                    <h4>
                        GO
                    </h4>
                    <img src="<?= get_img('skills/go.png') ?>" alt="">
                </div>
                <div class="card p-2">
                    <h4>
                        Node Js
                    </h4>
                    <img src="<?= get_img('skills/node.png') ?>" alt="">
                </div>
                <div class="card p-2">
                    <h4>
                        Python
                    </h4>
                    <img src="<?= get_img('skills/python.png') ?>" alt="">
                </div>
                <div class="card p-2">
                    <h4>
                        Ruby
                    </h4>
                    <img src="<?= get_img('skills/ruby.png') ?>" alt="">
                </div>
                <div class="card p-2">
                    <h4>
                        Php
                    </h4>
                    <img src="<?= get_img('skills/php.png') ?>" alt="">
                </div>
            </div>
        </section>
		
		<p>I have practical experience in all programming languages listed above. C sharp is my favourite programming laguage followed closely by Javascript (nodejs - not a programming a programming language). C sharp is what I use when making Desktop application, Nodejs is what i use for web development. I also love working with php, I find php easy to debug than other other languages.</p>

		
	</div>
</article><!--//about-section-->

<section class="cta-section theme-bg-light py-5">
	<div class="container text-center">
		<h2 class="heading">Updates</h2>
		<div class="intro">Follow me on social media for updates.</div>
		<ul class="social-list list-inline py-3 mx-auto">
             <li class="list-inline-item"><a href="https://twitter.com/my_name_is_juno" target="_blank"><i class="fab fa-twitter fa-fw"></i></a></li>
             <li class="list-inline-item"><a href="https://www.instagram.com/my_name_is_njuno/" target="_blank"><i class="fab fa-instagram fa-fw"></i></a></li>

         </ul><!--//social-list-->
	</div><!--//container-->
</section>




<?php
include_once include_path('modal-contact.php');
include_once include_path('modal-website.php');
include_once include_path('modal-desktop-app.php');
include_once include_path('footer.php');
?>
