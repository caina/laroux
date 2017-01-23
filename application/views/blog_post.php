<div class="container blog">
	<div class="row">
		<div class="col-md-7">
			<div class="post_list">
				<h1><?php echo $post->title ?></h1>
			</div>
			<img src="<?php echo $post->getImage() ?>" class="img-fluid">

			<div class="post_content">
				<?php echo $post->entry ?>
			</div>
		</div>

		<div class="col-md-5">
			<?php echo $sidebar ?>
		</div>
	</div>
</div>
