<div class="grid">
	<div class="grid-sizer"></div>
	<?php foreach ($treatment->list as $treatment): ?>
		<div class="grid-item">
			<a href="<?php echo $treatment->getLink() ?>">
				<img src="<?php echo $treatment->getListingPhoto() ?>" rel="preload"/>
				<div class="titleBox">
					<span><?php echo $treatment->title ?></span>
					<?php echo $treatment->eye ?>
				</div>
			</a>
		</div>
	<?php endforeach; ?>
</div>

<div id="marcarConsulta">
	<div class="txtLeft">
		<h2>Marque já a sua consulta.</h2>
		<p>Solicite via on-line a sua consulta com nossos especialistas.</p>
	</div>
	<?php echo $email_form ?>
	<small class="txtAlter">Solicite via <strong>on-line</strong> a sua consulta com nossos especialistas.</small>
</div>
