<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

  <!-- Basic Page Needs -->
  <meta charset="utf-8">
  <title>La Roux - Biomedicina e estética</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- CSS Style -->
  <link rel="stylesheet" href="<?php echo base_url("assets/blog/css/style.css") ?>">
  <link rel="alternate stylesheet" href="<?php echo base_url("assets/blog/css/skins/red.css") ?>" title="red">
  
  
  <!-- Small Icons -->
  <link rel="stylesheet" href="<?php echo base_url("assets/blog/css/icons.css"); ?>"> 
  
  <!-- Start JavaScript -->
  
    <script src="<?php echo base_url("assets/blog/js/jquery-1.7.2.min.js")?>"></script> 
    <script src="<?php echo base_url("assets/blog/js/jquery.easing.1.3.min.js")?>"></script>
    <script src="<?php echo base_url("assets/blog/js/jquery-ui.min.js")?>"></script> 
    <script src="<?php echo base_url("assets/blog/js/ddsmoothmenu.js")?>"></script> 
    <script src="<?php echo base_url("assets/blog/js/jquery.flexslider.js")?>"></script> 
    <script src="<?php echo base_url("assets/blog/js/jquery.eislideshow.js")?>"></script> 
    <script src="<?php echo base_url("assets/blog/js/jquery.iconmenu.js")?>"></script> 
    <script src="<?php echo base_url("assets/blog/js/colortip.js")?>"></script> 
    <script src="<?php echo base_url("assets/blog/js/tytabs.js")?>"></script> 
    <script src="<?php echo base_url("assets/blog/js/jquery.prettyPhoto.js")?>"></script> 
    <script src="<?php echo base_url("assets/blog/js/jquery.isotope.min.js")?>"></script>
    <script src="<?php echo base_url("assets/blog/js/selectnav.js")?>"></script> 
    <script src="<?php echo base_url("assets/blog/js/jquery.ui.totop.js")?>"></script>
    <script src="<?php echo base_url("assets/blog/js/custom.js")?>"></script>
    
  
  <!-- End JavaScript -->

  <!--[if lt IE 9]>
      <script src="js/html5.js"></script>
  <![endif]-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/min.css") ?>">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,900" rel="stylesheet">

  <link href="<?php echo base_url("assets/fonts/Swis721CnBT.css") ?>" rel="stylesheet">
  <link href="<?php echo base_url("assets/fonts/Swis721RomanBT.css") ?>" rel="stylesheet">
  <link href="<?php echo base_url("assets/fonts/Swis721LtBT.css") ?>" rel="stylesheet">
  <script type="text/javascript" src="<?php echo base_url("assets/js/min.js") ?>"></script>
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
                <li><a href="" title="">Ambos 1</a></li>
                <li><a href="" title="">Ambos 2</a></li>
                <li><a href="" title="">Ambos 3</a></li>
                <li><a href="" title="">Ambos 3</a></li>
                <li><a href="" title="">Ambos 5</a></li>
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
                <li><a href="" title="">Ambos 1</a></li>
                <li><a href="" title="">Ambos 2</a></li>
                <li><a href="" title="">Ambos 3</a></li>
                <li><a href="" title="">Ambos 3</a></li>
                <li><a href="" title="">Ambos 5</a></li>
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
    </header>
