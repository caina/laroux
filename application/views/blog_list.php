<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="post_list">
				<?php foreach ($posts->list as $post): ?>

				<h2 class="title bottom top-2">
					<a href="<?php echo $post->getLink() ?>">
						<?php echo $post->title ?>
					</a> 
				</h2>

				<div class="image-post bottom left"> 
					<a href="<?php echo $post->getLink() ?>">
						<img src="<?php echo $post->getImage() ?>" max-width="330px">
					</a>  
				</div>

				<div class="post-content">
					<?php echo $post->getEye() ?>
					<a href="<?php echo $post->getLink() ?>" class="button small color">Leia mais</a>
				</div>

				<?php endforeach ?>
			</div>
		</div>

		<div class="col-md-4">
			<div class="row">
				<div class="col-md-12">
					<form action="<?php echo site_url("blog/pesquisa") ?>" method="GET">
				       <input name="search" type="text" class="search" value="Search in blog" onBlur="if(this.value == '') { this.value = 'Pesquisar'; }" 
				       onfocus="if(this.value == 'Pesquisar') { this.value = ''; }" />
				       <input type="submit" value="" class="submit-search" />
				     </form>
				</div>				
			</div>

			<div class="row">
				<div class="col-md-12">
					<h2 class="title bottom-2">
						Categorias <span class="line"></span>
					</h2>
					<ul class="square-list categories bottom">
						<?php foreach ($categorias->list as $categoria): ?>
							<li>
								<a href="<?php echo $categoria->getLink() ?>"><?php echo $categoria->title; ?></a>
							</li>
						<?php endforeach ?>      
					</ul>
				</div>				
			</div>

		</div>
	</div>
</div>