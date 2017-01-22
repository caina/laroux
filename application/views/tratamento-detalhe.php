<div class="overClickPopUp"></div>
<div id="mediaPopUp">
	<div class="videoWrapper">
		<a href="javascript:void(0)" title="Fechar PopUp" class="closePopUp"></a>
		<iframe
			width="560"
			height="349"
			src="http://www.youtube.com/embed/<?php echo $treatment->getVideoId() ?>?rel=0&hd=1"
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
<div id="tratamento" class="blurContent">
	<a href="javascript:history.back()" class="bkLink">Voltar</a>
	<div class="borderTop"></div>
	<article id="article">
		<div class="c50p fl innerMedia">
			<div id="mediaContainer">
				<div class="mediaImage">
					<?php if ($treatment->hasVideo()): ?>
						<a href="#video" onclick="return false" data-lightbox="video-lightbox" title="Assistir vídeo">
							<picture>
								<img src="<?php echo $treatment->getVideoImage(); ?>" alt=""/>
							</picture>
							<span><strong>Clique</strong> e assista o vídeo.</span>
						</a>
					<?php else: ?>
						<picture>
							<img src="<?php echo $treatment->getVideoImage(); ?>" alt=""/>
						</picture>	
					<?php endif ?>
				</div>
				<div class="skewLine"></div>
				<img class="brush-up-arrow" src="<?php echo base_url("assets/img/brush-up-arrow.png")?>"></img>
				<div class="cb"></div>
			</div>
			<aside class="relacionados HideMobile">
				<img class="brush-down-arrow" src="<?php echo base_url("assets/img/brush-down-arrow.png")?>">
				<h2>Problemas Relacionados</h2>

				<?php foreach ($problems->list as $problem): ?>
					<div class="relatedItem">
						<a href="<?php echo $problem->getLink() ?>" title="<?php echo $problem->title ?>">
							<img src="<?php echo $problem->getDetailPhoto() ?>" alt=""/>
							<div>
								<?php echo $problem->getInvertedTitle() ?>
							</div>
						</a>
						<a href="<?php echo $problem->getLink() ?>" class="lkMais" rel="nofollow">SAIBA MAIS</a>
					</div>
				<?php endforeach; ?>

			</aside>
		</div>
		<div class="mainArticle">
			<header>
				<h1><?php echo $treatment->getTitle() ?></h1>
			</header>
			<div class="mainTxt">
				<?php echo $treatment->descricao ?>
				<div class="duvidasCnt">
					<h2>Dúvidas frequentes</h2>
					<ul>
						<?php foreach ($doubts->list as $doubt): ?>
							<li>
								<h3><?php echo $doubt->title ?></h3>
								<div class="respostaInt">
									<?php echo $doubt->description ?>
								</div>
							</li>
						<?php endforeach; ?>

					</ul>
				</div>
			</div>
		</div>
		<aside class="relacionados ShowMobile">
				<img class="brush-down-arrow" src="<?php echo base_url("assets/img/brush-down-arrow.png")?>">
				<h2>Problemas Relacionados</h2>

				<?php foreach ($problems->list as $problem): ?>
					<div class="relatedItem">
						<a href="<?php echo $problem->getLink() ?>" title="<?php echo $problem->title ?>">
							<img src="<?php echo $problem->getDetailPhoto() ?>" alt=""/>
							<div>
								<?php echo $problem->getInvertedTitle() ?>
							</div>
						</a>
						<a href="<?php echo $problem->getLink() ?>" class="lkMais" rel="nofollow">SAIBA MAIS</a>
					</div>
				<?php endforeach; ?>

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
