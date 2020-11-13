<?php
include_once include_path('header-admin.php');
include_once include_path('sidenav-admin.php');
include_once include_path('topnav-admin.php');
?>





<div class="main">
	<center>
		<h4>
			Delete <?php echo $data['user']->user_name; ?>
		</h4>
		<?php
			include_layouts('message.php');
		?>
	</center>
	<center>
		<form class="" method="post" action="<?php url_to('users/delete/'.$data['user']->id); ?>">
		<p>Are You sure you want to delete this user??</p>
		<button class="btn btn-danger" type="submit">Yes, Delete user please</button>
	</form>
	<button class="btn btn-dark m-1"><a class="text-white" href="<?php url_to('users/show/'.$data['user']->id);?>">No, Take me back</a></button>
	</center>

</div>







<?php
include_once include_path('footer-admin.php');
?>
