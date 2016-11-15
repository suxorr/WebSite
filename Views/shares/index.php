<div class="">
	<a href="<?php echo ROOT_PATH?>shares/add" class="btn-success btn btw-share">Share something</a>
	<?php	foreach($viewModel as $item) : ?>
		<div class="well">
			<h3><?php echo $item['title']?></h3>
		</div>
	<?php endforeach; ?>
</div>