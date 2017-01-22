<div class="overClickPopUp"></div>
<div id="mediaPopUp">
	<div class="videoWrapper">
		<a href="javascript:void(0)" title="Fechar PopUp" class="closePopUp"></a>
	    <iframe
				width="560"
				height="349"
				src="http://www.youtube.com/embed/<?php echo $problem->getVideoId() ?>?rel=0&hd=1"
				frameborder="0"
				allowfullscreen>
			</iframe>
	</div>

	<div class="formPopContainer">
		<h2>Marque já a sua consulta.</h2>
		<?php  echo $email_form ?>
		<span>Solicite via <strong>on-line</strong> a sua consulta com nossos especialistas.</span>
	</div>
</div>
<div id="problema" class="blurContent">
	<a href="javascript:history.back()" class="bkLink">Voltar</a>
	<div class="borderTop"></div>
	<article id="article">
		<div class="c50p fr innerMedia">
			<div id="mediaContainer">
				<div class="mediaImage">
					<?php if ($problem->hasVideo()): ?>
						<a href="#video" data-lightbox="video-lightbox" title="Assistir vídeo">
							<picture>
								<img src="<?php echo $problem->getDetailPhoto(); ?>" alt=""/>
							</picture>
							<span><strong>Clique</strong> e assista o vídeo.</span>
						</a>	
					<?php else: ?>
						<picture>
							<img src="<?php echo $problem->getDetailPhoto(); ?>" alt=""/>
						</picture>
					<?php endif ?>
				</div>
				<div class="skewLine"></div>
				<img class="brush-up-arrow" src="<?php echo base_url("assets/img/brush-up-arrow.png")?>"></img>
				<div class="cb"></div>
			</div>

		</div>
		<div class="mainArticle">
			<header>
				<h1><?php echo $problem->title ?></h1>
			</header>
			<div class="mainTxt">
				<?php echo $problem->description ?>
				<div class="duvidasCnt">
					<h2>Dúvidas frequentes</h2>
					<ul>
						<?php foreach ($doubts->list as $doub): ?>
						<li>
							<h3><?php echo $doub->title ?></h3>
							<div class="respostaInt">
								<?php echo $doub->description ?>
							</div>
						</li>
					<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
		<aside class="tratIndicados">
			<img class="brush-down-arrow-trat" src="<?php echo base_url("assets/img/brush-down-arrow-trat.png") ?>"/>
			<h2>Tratamentos Indicados</h2>
			<ul>
				<?php foreach ($treatments->list as $treatment): ?>
					<li>
						<a href="<?php echo $treatment->getLink() ?>">
							<img src="<?php echo $treatment->getThumb() ?>" 
								 width="<?php echo $treatment->THUMB_WIDTH ?>" 
								 height="<?php echo $treatment->THUMB_HEIGHT ?>"
							/>

							<div class="titleBox">
								<span><?php echo $treatment->title ?></span>
								<?php echo $treatment->getEye(); ?>
							</div>
						</a>
						<a href="" class="lkMais" rel="nofollow">Saiba mais</a>
					</li>
				<?php endforeach; ?>
			</ul>
			<div class="cb"></div>
		</aside>
	</article>
</div>
<div id="marcarConsulta">
	<div class="txtLeft">
		<h2>Marque já a sua consulta.</h2>
		<p>Solicite via on-line a sua consulta com nossos especialistas.</p>
	</div>
	<?php echo $email_form ?>
	<small class="txtAlter">Solicite via <strong>on-line</strong> a sua consulta com nossos especialistas.</small>
</div>
