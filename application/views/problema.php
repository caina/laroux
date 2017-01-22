<div class="grid">
	<div class="grid-sizer"></div>
	<?php foreach ($problems->list as $problem): ?>
		<div class="grid-item">
			<a href="<?php echo $problem->getLink() ?>">
				<img src="<?php echo $problem->getListingPhoto() ?>" rel="preload"/>
				<div class="titleBox touchItem">
					<span><?php echo $problem->title ?></span>
					<?php echo $problem->eye ?>
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
