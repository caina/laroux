
<div class="row">
	<div class="col-md-12">
		<!-- <form action="<?php echo site_url("blog/pesquisa") ?>" method="GET">
	       <input name="search" type="text" class="search" value="Search in blog" onBlur="if(this.value == '') { this.value = 'Pesquisar'; }" 
	       onfocus="if(this.value == 'Pesquisar') { this.value = ''; }" />
	       <input type="submit" value="" class="submit-search" />
	     </form> -->
	     <form class="form-inline" action="<?php echo site_url("blog/pesquisa") ?>" method="GET">
		  <div class="form-group">
		    <input type="text" class="form-control" name="search" placeholder="Pesquisar">
		  </div>
		  <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i> Pesquisar</button>
		</form>

	</div>				
</div>

<div class="row">
	<div class="col-md-12">
		<h2 class="title bottom-2">
			Categorias
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