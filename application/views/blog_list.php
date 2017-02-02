<div class="container blog">
	<div class="row">
		<div class="col-md-7">
			<div class="post_list">
				<?php foreach ($posts->list as $post): ?>

				<h2>
					<a href="<?php echo $post->getLink() ?>">
						<?php echo $post->title ?>
					</a> 
				</h2>

				<div class="image-post bottom left"> 
					<a href="<?php echo $post->getLink() ?>">
						<img src="<?php echo $post->getImage() ?>" class="img-fluid">
					</a>  
				</div>

				<div class="post-content">
					<?php echo $post->getEye() ?>
					<a href="<?php echo $post->getLink() ?>" class="button small color">Leia mais</a>
				</div>

				<?php endforeach ?>
			</div>
		</div>

		<div class="col-md-5">
			<?php echo $sidebar ?>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			
			<?php echo $posts->getMagicPagination($current_page) ?>

		</div>
	</div>
</div>