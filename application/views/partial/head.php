<!DOCTYPE html>
<html>
<head>
	<title>Laroux</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, user-scalable=yes">
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/min.css") ?>">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,900" rel="stylesheet">

	<link href="<?php echo base_url("assets/fonts/Swis721CnBT.css") ?>" rel="stylesheet">
	<link href="<?php echo base_url("assets/fonts/Swis721RomanBT.css") ?>" rel="stylesheet">
	<link href="<?php echo base_url("assets/fonts/Swis721LtBT.css") ?>" rel="stylesheet">
</head>
<body>

	<a href="javascript:void(0)" title="Menu" class="<?php echo($home == true)?"noBg":"insidePage" ?>" id="openNav">MENU<div></div></a>
	<div class="overlayMenu"></div>
	<header id="header" class="<?php echo($home == true)?"capaSite":"insidePage" ?>">
		<div id="logo-site">
			<h1>
				<a href="<?php echo site_url(); ?>" title="La Roux">
					<img src="<?php echo base_url("assets/img/logo_la_roux.png") ?>" width="306" alt="logo la roux" />
				</a>
			</h1>
		</div>
		<!-- <a href="" id="closeNavLk" class="bkLink">Voltar</a> -->
		<nav class="containerNav">
			<ul class="mainNav">
				<li class="itemMenu">
					<a href="<?php echo site_url("problemas"); ?>">Problemas</a>
					<span class="closeCntUls"></span>
					<div class="containerUls">
						<ul>
							<span>Rosto</span>
							
							<?php foreach ($head_problems->getFaceProblems() as $problem): ?>
							<li>
								<a href="<?php echo $problem->getLink() ?>" title="ROSTO - <?php echo $problem->title ?>"><?php echo $problem->title ?></a>
							</li>
							<?php endforeach; ?>

						</ul>
						<ul>
							<span>Pele</span>
							<?php foreach ($head_problems->getBodyProblems() as $problem): ?>
								<li>
									<a href="<?php echo $problem->getLink() ?>" title="CORPO - <?php echo $problem->title ?>"><?php echo $problem->title ?></a>
								</li>
							<?php endforeach; ?>
						</ul>
						<ul>
							<span>Ambos</span>
							<?php foreach ($head_problems->getBothProblems() as $problem): ?>
								<li>
									<a href="<?php echo $problem->getLink() ?>" title="Ambos - <?php echo $problem->title ?>"><?php echo $problem->title ?></a>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</li>
				<li class="itemMenu">
					<a href="<?php echo site_url("tratamento"); ?>">Tratamento</a>
					<span class="closeCntUls"></span>
					<div class="containerUls">
						<ul>
							<span>Rosto</span>
							
							<?php foreach ($head_tratamentos->getFaceTReatments() as $treatment): ?>
							<li>
								<a href="<?php echo $treatment->getLink() ?>" title="ROSTO - <?php echo $treatment->title ?>"><?php echo $treatment->title ?></a>
							</li>
							<?php endforeach; ?>

						</ul>
						<ul>
							<span>Pele</span>
							<?php foreach ($head_tratamentos->getBodyTReatments() as $treatment): ?>
								<li>
									<a href="<?php echo $treatment->getLink() ?>" title="CORPO - <?php echo $treatment->title ?>"><?php echo $treatment->title ?></a>
								</li>
							<?php endforeach; ?>
						</ul>
						<ul>
							<span>Ambos</span>
							<?php foreach ($head_tratamentos->getBothTreatments() as $treatment): ?>
								<li>
									<a href="<?php echo $treatment->getLink() ?>" title="Ambos - <?php echo $treatment->title ?>"><?php echo $treatment->title ?></a>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</li>
				<li>
					<a href="<?php echo site_url("/"); ?>">Início</a>
				</li>
				<li>
					<a href="<?php echo site_url("blog"); ?>">Blog</a>
				</li>
			</ul>
		</nav>
		<!-- <div class="allLinks">
			<div class="navCol">
				<span>Rosto</span>
				<ul>
					<?php foreach ($head_tratamentos->getFaceTReatments() as $treatment): ?>
						<li>
							<a href="<?php echo $treatment->getLink() ?>" title="ROSTO - <?php echo $treatment->title ?>"><?php echo $treatment->title ?></a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="navCol">
				<span>Corpo</span>
				<ul class="ul-2-colum">
					<?php foreach ($head_tratamentos->getBodyTReatments() as $treatment): ?>
						<li>
							<a href="<?php echo $treatment->getLink() ?>" title="CORPO - <?php echo $treatment->title ?>"><?php echo $treatment->title ?></a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div> -->
	</header>