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
						<?= $data['category']->category_name ?> Post Items (<?= $data['posts']['count'] ?>)
					</h4>
				</div>
			</div>
			<?php include_once include_path('message.php'); ?>
			
			<div class="row">
				<div class="col-sm-12">
					
					<table class="table table-sm table-bordered dt">
					<thead>
						<tr>
							<th width="70%">
								Post Item
							</th>
							
							<th>
								Writer
							</th>
							<th  class="text-right">
								Views
							</th>
							
						</tr>
					</thead>
					<tbody>
						<?php foreach ($data['posts']['data'] as $v): ?>
							<tr>
								<td>
									<?= $v->post_item; ?>
								</td>
								
								<td class="">
									<?= $v->category_name; ?>
								</td>
								<td class="text-right" data-sort="<?= (float) $v->post_cost ?>">
									<?= number_format($v->post_cost); ?>
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