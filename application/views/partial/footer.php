<?php If($home){ ?> <?php } else {?>
 	<a class="topoDoSite blurContent"></a>
 	<footer id="footer" class="blurContent">
		<div class="c50p oh tac fl">
			<div class="box-sigaNos">
				<h4>Siga a <strong>LaRoux</strong> no</h4>
				<a href="<?php echo $configuration->email ?>"><img src="<?php echo base_url("assets/img/mail-icon.png") ?>"></a>
				<a href="<?php echo $configuration->facebook ?>"><img src="<?php echo base_url("assets/img/face-icon.png") ?>"></a>
				<a href="<?php echo $configuration->instagram ?>"><img src="<?php echo base_url("assets/img/insta-icon.png") ?>"></a>
				<a href="<?php echo $configuration->youtube ?>"><img src="<?php echo base_url("assets/img/play-icon.png") ?>"><span>Conheça a <strong>clínica</strong></span></a>
			</div>
		</div>
		<div class="c50p tal oh fl">
			<div class="box-news">
				<h4>Assine a nossa <strong>Newsletter</strong></h4>
				<form action="<?php echo site_url("/home/saveNews") ?>" id="news_save">
					<input type="hidden" name="token_rdstation" value="ae7d4ae17482072d92d7e9e6f90c58a2">
					<input type="hidden" name="identificador" value="newsletter">
					<input type="email" placeholder="Insira seu email aqui" name="email">
					<input type="submit" value="">
				</form>
				<br>
				<p>Receba <strong>novidades</strong>, <strong>dicas</strong> e <strong>ofertas</strong> da <strong>La Roux</strong></p>
			</div>
		</div>
		<div class="cb tar signature">
			<a href="http://agenciacow.com.br/" rel="NO-FOLLOW" title="Agência COW"><img src="<?php echo base_url("assets/img/agencia-cow.png") ?>" /></a>
		</div>
 		<div class="bottomLine">
 			@<strong>LAROUX<?php echo date("Y") ?></strong> - <?php echo $configuration->endereco_rodape ?> - <strong>Fone:</strong> <?php echo $configuration->phone_fixo ?> I <?php echo $configuration->phone_celular ?>
 		</div>
 	</footer>
<?php }  ?>
	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.min.js") ?>"></script>
	<script type ='text/javascript' src="https://d335luupugsy2.cloudfront.net/js/integration/stable/rd-js-integration.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/min.js") ?>"></script>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-90562228-1', 'auto');
	  ga('send', 'pageview');

	</script>
</body>
</html>
