<header class="header text-center">
    <h1 class="blog-name pt-lg-4 mb-0"><a href="<?php url_to('') ?>">JN Media</a></h1>

    <nav class="navbar navbar-expand-lg navbar-dark">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
            aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navigation" class="collapse navbar-collapse flex-column">
            <div class="profile-section pt-3 pt-lg-0">
                <a href="<?php url_to('') ?>">
                    <img class="profile-image mb-3 rounded-circle mx-auto" src="<?php echo get_img('profile.png') ?>"  alt="image" >
                </a>



                <ul class="navbar-nav flex-column text-left">
                    <?php if (get_sess('logged_in')): ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php url_to('users') ?>"><i class="fa fa-users fa-fw mr-2"></i>Users
                                <span class="sr-only">(current)</span></a>
                        </li>
                        <?php if (get_sess('logged_in_user_id') == 1): ?>
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php url_to('roles') ?>"><i class="fa fa-users fa-fw mr-2"></i>Users Roles
                                    </a>
                            </li>
                        <?php endif ?>

                        <li class="nav-item active">
                            <a class="nav-link" href="<?php url_to('categorys') ?>"><i class="fas fa-blog fa-fw mr-2"></i>Blogs Categorys
                                </a>
                        </li>
                        
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php url_to('posts') ?>"><i class="fas fa-blog fa-fw mr-2"></i>Blogs
                                </a>
                        </li>

                    
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php url_to('users/logout') ?>"><i class="fas fa-blog fa-fw mr-2"></i>Logout
                                </a>
                        </li>
                    <?php endif ?>



                </ul>


            </div>
    </nav>
</header>