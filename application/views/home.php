<div id="backgroundSlider">
	<div class="fatherSlides">

		<?php foreach ($banners->list as $banner): ?>
			<div>
				<img src="<?php echo $banner->getImage() ?>">
			</div>
		<?php endforeach; ?>

	</div>
</div>
<div id="linksDestaques">
	<div data-number="0" class="itemDestHome">
		<div class="centerFix">
			<h2><a href="<?php echo site_url("corpo/tratamento") ?>" title="">Beleza e saúde para o seu Corpo.</a></h2>
			<a href="<?php echo site_url("corpo/tratamento") ?>" class="lkMais" rel="nofollow">Saiba Mais</a>
		</div>
	</div>
	<div data-number="1" class="itemDestHome">
		<div class="centerFix">
			<h2><a href="<?php echo site_url("problemas") ?>" title="">O que você pretende tratar?</a></h2>
			<span>Descubra o tratamento ideal para a sua necessidade.</span>
			<a href="<?php echo site_url("problemas") ?>" class="lkMais" rel="nofollow">Saiba Mais</a>
		</div>
	</div>
	<div data-number="2" class="itemDestHome">
		<div class="centerFix">
			<h2><a href="<?php echo site_url("rosto/tratamento") ?>" title="">Cuidados especiais para o seu Rosto.</a></h2>
			<a href="<?php echo site_url("rosto/tratamento") ?>" class="lkMais" rel="nofollow">Saiba Mais</a>
		</div>
	</div>
</div>
