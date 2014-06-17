<html lang="pt">
	<head>
		<meta charset="utf-8" />
		<title>Itaituba Shopping</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="endogenese">

	    <!-- Le styles -->
	    <link href="/css/bootstrap.css" rel="stylesheet">

		<link href="/css/template.css" rel="stylesheet">

	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->

	</head>


	<body>

		<div class="container">

			<div class="row" id="menu">

				<div class="col-md-12">
					<nav class="navbar navbar-default" role="navigation">

						<!-- menu justificado -->
						<div id="menu_justificado" class="container-fluid hidden-xs">
					        <ul class="nav navbar-nav ">
						        <li><a href="/"><strong>HOME</strong></a></li>
						        <li class="active"><a href="/lojas/"><strong>LOJAS</strong></a></li>
						        <li><a href="/cinema.html"><strong>CINEMA</strong></a></li>
						        <li><a href="#"><strong>NOVIDADES</strong></a></li>
						        <li><a href="/quem_somos.html"><strong>QUEM SOMOS</strong></a></li>
					        </ul>
						</div>

						<!-- menu moblie -->
						<div class="container-fluid visible-xs">

							<div class="navbar-header">		        

				        		<!-- Menu responsivo-->
				        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						            <span class="sr-only">Toggle navigation</span>
						            <span class="icon-bar"></span>
						        	<span class="icon-bar"></span>
						            <span class="icon-bar"></span>
						        </button>
								
								<!-- Esse brand será exibido na versão para phone -->
								<a class="navbar-brand hidden-lg hidden-md hidden-sm" href="#">Itaituba Shopping</a>
							</div><!--/.navbar-header -->

							<div class="collapse navbar-collapse">
						        <ul class="nav navbar-nav ">
							        <li><a href="/"><strong>HOME</strong></a></li>
							        <li class="active"><a href="lojas/index.php"><strong>LOJAS</strong></a></li>
							        <li><a href="/cinema.html"><strong>CINEMA</strong></a></li>
							        <li><a href="#"><strong>NOVIDADES</strong></a></li>
							        <li><a href="/quem_somos.html"><strong>QUEM SOMOS</strong></a></li>
						        </ul>
						    </div><!--/.nav-collapse -->			
						
						</div><!---/.container-fluid-->
					</nav>
				</div>

			</div><!--/#menu-->

			<div class="row">

				<div class="col-md-12">
					<img class="banner_page" src="http://placehold.it/1138x300" alt="...">
					<!--  -->


				</div>

			</div><!--/#BANNER_LOJA-->

			<div class="row hidden-xs">
				<div class="col-md-12">
					<div class="btn-group btn-group-lg btn-group-ita"><!-- btn-group-justified" -->
						<a id="filtro_lojas" class="btn btn-default  btn-lg btn-primary btn_ativo" role="button">Listar por Lojas</a>
						<a id="filtro_categ" class="btn btn-default  btn-lg btn-primary" role="button">Listar por categorias</a>
					</div>

				</div>
			</div>

			<div class="row" id="corpo_loja">
				<div class="col-md-3">

					<!-- ESSE MENU É APRESENTADO QUANDO O BOTÃO 'LISTAR POR LOJA' ESTÁ ATIVO -->
					<div id="lista_lojas" class="ocultar">

						<ul>
			              <li><a id="loja1-m" href="#"> <img src="http://placehold.it/30x30"/> Loja 1</a></li>
			              <li><a id="loja2-m" href="#"> <img src="http://placehold.it/30x30"/> Loja 2</a></li>
			              <li><a id="loja3-m" href="#"> <img src="http://placehold.it/30x30"/> Loja 3</a></li>
			              <li><a id="loja4-m" href="#"> <img src="http://placehold.it/30x30"/> Loja 4</a></li>
			              <li><a id="loja5-m" href="#"> <img src="http://placehold.it/30x30"/> Loja 5</a></li>
			              <li><a id="loja6-m" href="#"> <img src="http://placehold.it/30x30"/> Loja 6</a></li>
			              <li><a id="loja7-m" href="#"> <img src="http://placehold.it/30x30"/> Loja 7</a></li>
			              <li><a id="loja8-m" href="#"> <img src="http://placehold.it/30x30"/> Loja 8</a></li>
			              <li><a id="loja9-m" href="#"> <img src="http://placehold.it/30x30"/> Loja 9</a></li>
			              <li><a id="loja10-m" href="#"> <img src="http://placehold.it/30x30"/> Loja 10</a></li>
			            </ul>
			        
					</div><!-- /#lista_lojas -->
						
						<!-- ESSE MENU SÓ É APRESENTADO QUANDO O USUÁRIO CLICA NO BOTÃO 'LISTAR POR CATEGORIA' -->
					 <div id="categoria_lojas">

								<a href="#" class="submenu">Restaurante</a>
								<div class="tgl">
									<ul>	
										<li><a id="loja1-mc" href="#"> <img src="http://placehold.it/30x30"/> Loja 1</a></li>
				              			<li><a id="loja2-mc" href="#"> <img src="http://placehold.it/30x30"/> Loja 2</a></li>
									</ul>
								</div>
							
								<a href="#" class="submenu">Eletrônicos</a>
								<div class="tgl">
									<ul>	
				              			<li><a id="loja3-mc" href="#"> <img src="http://placehold.it/30x30"/> Loja 3</a></li>
				              			<li><a id="loja4-mc" href="#"> <img src="http://placehold.it/30x30"/> Loja 4</a></li>
				              		</ul>
			              		</div>
							
								<a href="#" class="submenu">Roupas</a>
								<div class="tgl">
									<ul>	
				              			<li><a id="loja5-mc" href="#"> <img src="http://placehold.it/30x30"/> Loja 5</a></li>
				              			<li><a id="loja6-mc" href="#"> <img src="http://placehold.it/30x30"/> Loja 6</a></li>
				              		</ul>
			              		</div>
							
								<a href="#" class="submenu">Livraria</a>
								<div class="tgl">
									<ul>	
				              			<li><a id="loja7-mc" href="#"> <img src="http://placehold.it/30x30"/> Loja 7</a></li>
				              			<li><a id="loja8-mc" href="#"> <img src="http://placehold.it/30x30"/> Loja 8</a></li>
				              		</ul>
			              		</div>
							
								<a href="#" class="submenu">Livraria</a>
								<div class="tgl">
									<ul>	
						              <li><a id="loja9-mc" href="#"> <img src="http://placehold.it/30x30"/> Loja 9</a></li>
						              <li><a id="loja10-mc" href="#"> <img src="http://placehold.it/30x30"/> Loja 10</a></li>
						            </ul>
					        	</div>
							
			        
					</div><!-- /#categoria_lojas -->
				</div>
					
					<!-- AQUI SÃO REREPRESENTADAS TODAS AS LOJAS DO SHOPPING -->
				<div class="col-md-9">
					<div id="lojas_container">

						<div id="loja1" class="lojas">
							<div  id="logo_loja">
								<img src="http://placehold.it/700x150"/>
							</div>
							<h4 style="text-align:center">Loja 1</h4>
							<p>Lojas com produtos de telefonía, informática, cd´s, dvd´s, livros, revistas, esporte, eletrodomésticos, eletrônicos, brinquedos, bebés, meias e lingerie, relogios.  Preços baixos e ótimas ofertas de celulares, notebooks, TVs LED e 3D, geladeiras, câmeras digitais, tablets, DVDs e mais na Americanas.com. Compre já!</p>
							<p>Lojas com produtos de telefonía, informática, cd´s, dvd´s, livros, revistas, esporte, eletrodomésticos, eletrônicos, brinquedos, bebés, meias e lingerie, relogios.  Preços baixos e ótimas ofertas de celulares, notebooks, TVs LED e 3D, geladeiras, câmeras digitais, tablets, DVDs e mais na Americanas.com. Compre já!</p>						
						</div><!-- /.lojas -->

						<div id="loja2" class="lojas">
							<div  id="logo_loja">
								<img src="http://placehold.it/700x150"/>
							</div>
							<h4 style="text-align:center">Loja 2</h4>
							<p>Lojas com produtos de telefonía, informática, cd´s, dvd´s, livros, revistas, esporte, eletrodomésticos, eletrônicos, brinquedos, bebés, meias e lingerie, relogios.  Preços baixos e ótimas ofertas de celulares, notebooks, TVs LED e 3D, geladeiras, câmeras digitais, tablets, DVDs e mais na Americanas.com. Compre já!</p>
							<p>Lojas com produtos de telefonía, informática, cd´s, dvd´s, livros, revistas, esporte, eletrodomésticos, eletrônicos, brinquedos, bebés, meias e lingerie, relogios.  Preços baixos e ótimas ofertas de celulares, notebooks, TVs LED e 3D, geladeiras, câmeras digitais, tablets, DVDs e mais na Americanas.com. Compre já!</p>						
						</div><!-- /.lojas -->

						<div id="loja3" class="lojas">
							<div  id="logo_loja">
								<img src="http://placehold.it/700x150"/>
							</div>
							<h4 style="text-align:center">Loja 3</h4>
							<p>Lojas com produtos de telefonía, informática, cd´s, dvd´s, livros, revistas, esporte, eletrodomésticos, eletrônicos, brinquedos, bebés, meias e lingerie, relogios.  Preços baixos e ótimas ofertas de celulares, notebooks, TVs LED e 3D, geladeiras, câmeras digitais, tablets, DVDs e mais na Americanas.com. Compre já!</p>
							<p>Lojas com produtos de telefonía, informática, cd´s, dvd´s, livros, revistas, esporte, eletrodomésticos, eletrônicos, brinquedos, bebés, meias e lingerie, relogios.  Preços baixos e ótimas ofertas de celulares, notebooks, TVs LED e 3D, geladeiras, câmeras digitais, tablets, DVDs e mais na Americanas.com. Compre já!</p>						
						</div><!-- /.lojas -->

						<div id="loja4" class="lojas">
							<div  id="logo_loja">
								<img src="http://placehold.it/700x150"/>
							</div>
							<h4 style="text-align:center">Loja 4</h4>
							<p>Lojas com produtos de telefonía, informática, cd´s, dvd´s, livros, revistas, esporte, eletrodomésticos, eletrônicos, brinquedos, bebés, meias e lingerie, relogios.  Preços baixos e ótimas ofertas de celulares, notebooks, TVs LED e 3D, geladeiras, câmeras digitais, tablets, DVDs e mais na Americanas.com. Compre já!</p>
							<p>Lojas com produtos de telefonía, informática, cd´s, dvd´s, livros, revistas, esporte, eletrodomésticos, eletrônicos, brinquedos, bebés, meias e lingerie, relogios.  Preços baixos e ótimas ofertas de celulares, notebooks, TVs LED e 3D, geladeiras, câmeras digitais, tablets, DVDs e mais na Americanas.com. Compre já!</p>						
						</div><!-- /.lojas -->

						<div id="loja5" class="lojas">
							<div  id="logo_loja">
								<img src="http://placehold.it/700x150"/>
							</div>
							<h4 style="text-align:center">Loja 5</h4>
							<p>Lojas com produtos de telefonía, informática, cd´s, dvd´s, livros, revistas, esporte, eletrodomésticos, eletrônicos, brinquedos, bebés, meias e lingerie, relogios.  Preços baixos e ótimas ofertas de celulares, notebooks, TVs LED e 3D, geladeiras, câmeras digitais, tablets, DVDs e mais na Americanas.com. Compre já!</p>
							<p>Lojas com produtos de telefonía, informática, cd´s, dvd´s, livros, revistas, esporte, eletrodomésticos, eletrônicos, brinquedos, bebés, meias e lingerie, relogios.  Preços baixos e ótimas ofertas de celulares, notebooks, TVs LED e 3D, geladeiras, câmeras digitais, tablets, DVDs e mais na Americanas.com. Compre já!</p>						
						</div><!-- /.lojas -->

						<div id="loja6" class="lojas">
							<div  id="logo_loja">
								<img src="http://placehold.it/700x150"/>
							</div>
							<h4 style="text-align:center">Loja 6</h4>
							<p>Lojas com produtos de telefonía, informática, cd´s, dvd´s, livros, revistas, esporte, eletrodomésticos, eletrônicos, brinquedos, bebés, meias e lingerie, relogios.  Preços baixos e ótimas ofertas de celulares, notebooks, TVs LED e 3D, geladeiras, câmeras digitais, tablets, DVDs e mais na Americanas.com. Compre já!</p>
							<p>Lojas com produtos de telefonía, informática, cd´s, dvd´s, livros, revistas, esporte, eletrodomésticos, eletrônicos, brinquedos, bebés, meias e lingerie, relogios.  Preços baixos e ótimas ofertas de celulares, notebooks, TVs LED e 3D, geladeiras, câmeras digitais, tablets, DVDs e mais na Americanas.com. Compre já!</p>						
						</div><!-- /.lojas -->

						<div id="loja7" class="lojas">
							<div  id="logo_loja">
								<img src="http://placehold.it/700x150"/>
							</div>
							<h4 style="text-align:center">Loja 7</h4>
							<p>Lojas com produtos de telefonía, informática, cd´s, dvd´s, livros, revistas, esporte, eletrodomésticos, eletrônicos, brinquedos, bebés, meias e lingerie, relogios.  Preços baixos e ótimas ofertas de celulares, notebooks, TVs LED e 3D, geladeiras, câmeras digitais, tablets, DVDs e mais na Americanas.com. Compre já!</p>
							<p>Lojas com produtos de telefonía, informática, cd´s, dvd´s, livros, revistas, esporte, eletrodomésticos, eletrônicos, brinquedos, bebés, meias e lingerie, relogios.  Preços baixos e ótimas ofertas de celulares, notebooks, TVs LED e 3D, geladeiras, câmeras digitais, tablets, DVDs e mais na Americanas.com. Compre já!</p>						
						</div><!-- /.lojas -->

						<div id="loja8" class="lojas">
							<div  id="logo_loja">
								<img src="http://placehold.it/700x150"/>
							</div>
							<h4 style="text-align:center">Loja 8</h4>
							<p>Lojas com produtos de telefonía, informática, cd´s, dvd´s, livros, revistas, esporte, eletrodomésticos, eletrônicos, brinquedos, bebés, meias e lingerie, relogios.  Preços baixos e ótimas ofertas de celulares, notebooks, TVs LED e 3D, geladeiras, câmeras digitais, tablets, DVDs e mais na Americanas.com. Compre já!</p>
							<p>Lojas com produtos de telefonía, informática, cd´s, dvd´s, livros, revistas, esporte, eletrodomésticos, eletrônicos, brinquedos, bebés, meias e lingerie, relogios.  Preços baixos e ótimas ofertas de celulares, notebooks, TVs LED e 3D, geladeiras, câmeras digitais, tablets, DVDs e mais na Americanas.com. Compre já!</p>						
						</div><!-- /.lojas -->

						<div id="loja9" class="lojas">
							<div  id="logo_loja">
								<img src="http://placehold.it/700x150"/>
							</div>
							<h4 style="text-align:center">Loja 9</h4>
							<p>Lojas com produtos de telefonía, informática, cd´s, dvd´s, livros, revistas, esporte, eletrodomésticos, eletrônicos, brinquedos, bebés, meias e lingerie, relogios.  Preços baixos e ótimas ofertas de celulares, notebooks, TVs LED e 3D, geladeiras, câmeras digitais, tablets, DVDs e mais na Americanas.com. Compre já!</p>
							<p>Lojas com produtos de telefonía, informática, cd´s, dvd´s, livros, revistas, esporte, eletrodomésticos, eletrônicos, brinquedos, bebés, meias e lingerie, relogios.  Preços baixos e ótimas ofertas de celulares, notebooks, TVs LED e 3D, geladeiras, câmeras digitais, tablets, DVDs e mais na Americanas.com. Compre já!</p>						
						</div><!-- /.lojas -->

						<div id="loja10" class="lojas">
							<div  id="logo_loja">
								<img src="http://placehold.it/700x150"/>
							</div>
							<h4 style="text-align:center">Loja 10</h4>
							<p>Lojas com produtos de telefonía, informática, cd´s, dvd´s, livros, revistas, esporte, eletrodomésticos, eletrônicos, brinquedos, bebés, meias e lingerie, relogios.  Preços baixos e ótimas ofertas de celulares, notebooks, TVs LED e 3D, geladeiras, câmeras digitais, tablets, DVDs e mais na Americanas.com. Compre já!</p>
							<p>Lojas com produtos de telefonía, informática, cd´s, dvd´s, livros, revistas, esporte, eletrodomésticos, eletrônicos, brinquedos, bebés, meias e lingerie, relogios.  Preços baixos e ótimas ofertas de celulares, notebooks, TVs LED e 3D, geladeiras, câmeras digitais, tablets, DVDs e mais na Americanas.com. Compre já!</p>						
						</div><!-- /.lojas -->


					</div><!-- /#lojas_container-->
				</div>

			</div><!--/#CORPO_LOJA-->
			
			<div class="col-md-12">
				<div class="row" id="rodape">

					<p class="text-center">Siga-nos nas redes sociais</p>
					
					<div id="redes_sociais">
						<img src="/img/facebook.png" alt="Facebook"/>
						<img src="/img/twitter.png" alt="Twitter"/>
					</div>
					
					<p class="text-center">2014 - Itaituba Shopping - Todos os direitos reservados</p>
					<p class="text-center"><small>Desenvolvido por <a href="http://wwww.endogense.com.br">Endogênese</a></small></p>

				</div><!--/.rodape-->

			</div>


		</div> <!--/.CONTAINER-->

		<!-- Arquivos Javascripts
	    ================================================== -->
	    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
	    <script src="/js/jquery-1.11.0.min.js"></script>
	    <script src="/js/bootstrap.min.js"></script>

	    <script>

	    	
		    jQuery.fn.toggleText = function(a,b) {
		    	return   this.html(this.html().replace(new RegExp("("+a+"|"+b+")"),function(x){return(x==a)?b:a;
	    	}));
}

	    	$(document).ready(function(){
	    		
	    		$('.lojas').addClass('ocultar'); //ESCONDE TODAS AS LOJAS
	    		$('#categoria_lojas').addClass('ocultar'); //ESCONDE DE CATEGORIA DE LOJAS
	    		$('#lista_lojas').addClass('exibir'); //EXIBE A LISTA LATERAL QUE EXIBE TODAS AS LOJAS

	    		//DEFINE AS AÇÕES QUE OCORRERÃO QUANDO O USUÁRIO CLICAR NO BOTÃO 'LISTAR POR LOJAS'
	    		$('#filtro_lojas').click(function(){
	    			if($('#filtro_lojas').hasClass('btn_ativo')==false){
	    				$('#filtro_lojas').addClass('btn_ativo');
	    				$('#filtro_categ').removeClass('btn_ativo');
	    				$('#lista_lojas').addClass('exibir');
	    				$('#categoria_lojas').removeClass('exibir');
	    				
	    			}
	    		});

	    		//DEFINE AS AÇÕES QUE OCORRERÃO QUANDO O USUÁRIO CLICAR NO BOTÃO 'LISTAR POR CATEGORIA'
	    		$('#filtro_categ').click(function(){
	    			if($('#filtro_categ').hasClass('btn_ativo')==false){
	    				$('#filtro_categ').addClass('btn_ativo');
	    				$('#filtro_lojas').removeClass('btn_ativo');
	    				$('#categoria_lojas').addClass('exibir');
	    				$('#lista_lojas').removeClass('exibir');
	    				
	    			}
	    		});


	    		 // ########################################
	    		 // EVENTOS DAS LOJAS DA LISTA DE LOJAS
	    		 // ########################################

	    		//DEFINE AS AÇÕES QUE OCORRERÃO QUANDO O USUÁRIO CLICAR NO BOTÃO DA PRIMEIRA LOJA DA 'LISTA DE LOJAS'
	    		 $('#loja1-m').click(function(){
	    			if($('.lojas').hasClass('exibir'))
	    		 		$('.lojas').removeClass('exibir');

	    		 	$('#loja1').addClass('exibir');	
	    		 });
	    		 //DEFINE AS AÇÕES QUE OCORRERÃO QUANDO O USUÁRIO CLICAR NO BOTÃO DA SEGUNDA LOJA DA 'LISTA DE LOJAS'
	    		 $('#loja2-m').click(function(){
	    		 	if($('.lojas').hasClass('exibir'))
	    		 		$('.lojas').removeClass('exibir');

	    		 	$('#loja2').addClass('exibir');	
	    		 });
	    		 //DEFINE AS AÇÕES QUE OCORRERÃO QUANDO O USUÁRIO CLICAR NO BOTÃO DA TERCEIRA LOJA DA 'LISTA DE LOJAS'
	    		 $('#loja3-m').click(function(){
	    		 	if($('.lojas').hasClass('exibir'))
	    		 		$('.lojas').removeClass('exibir');

	    		 	$('#loja3').addClass('exibir');	
	    		 });
	    		 //DEFINE AS AÇÕES QUE OCORRERÃO QUANDO O USUÁRIO CLICAR NO BOTÃO DA QUARTA LOJA DA 'LISTA DE LOJAS'
	    		 $('#loja4-m').click(function(){
	    		 	if($('.lojas').hasClass('exibir'))
	    		 		$('.lojas').removeClass('exibir');

	    		 	$('#loja4').addClass('exibir');	
	    		 });
	    		 //DEFINE AS AÇÕES QUE OCORRERÃO QUANDO O USUÁRIO CLICAR NO BOTÃO DA QUINTA LOJA DA 'LISTA DE LOJAS'
	    		 $('#loja5-m').click(function(){
	    		 	if($('.lojas').hasClass('exibir'))
	    		 		$('.lojas').removeClass('exibir');

	    		 	$('#loja5').addClass('exibir');	
	    		 });
	    		 //DEFINE AS AÇÕES QUE OCORRERÃO QUANDO O USUÁRIO CLICAR NO BOTÃO DA SEXTA LOJA DA 'LISTA DE LOJAS'
	    		 $('#loja6-m').click(function(){
	    		 	if($('.lojas').hasClass('exibir'))
	    		 		$('.lojas').removeClass('exibir');

	    		 	$('#loja6').addClass('exibir');	
	    		 });
	    		 //DEFINE AS AÇÕES QUE OCORRERÃO QUANDO O USUÁRIO CLICAR NO BOTÃO DA SÉTIMA LOJA DA 'LISTA DE LOJAS'
	    		 $('#loja7-m').click(function(){
	    		 	if($('.lojas').hasClass('exibir'))
	    		 		$('.lojas').removeClass('exibir');

	    		 	$('#loja7').addClass('exibir');	
	    		 });
	    		 //DEFINE AS AÇÕES QUE OCORRERÃO QUANDO O USUÁRIO CLICAR NO BOTÃO DA OITAVA LOJA DA 'LISTA DE LOJAS'
	    		 $('#loja8-m').click(function(){
	    		 	if($('.lojas').hasClass('exibir'))
	    		 		$('.lojas').removeClass('exibir');

	    		 	$('#loja8').addClass('exibir');	
	    		 });
	    		 //DEFINE AS AÇÕES QUE OCORRERÃO QUANDO O USUÁRIO CLICAR NO BOTÃO DA NONA LOJA DA 'LISTA DE LOJAS'
	    		 $('#loja9-m').click(function(){
	    		 	if($('.lojas').hasClass('exibir'))
	    		 		$('.lojas').removeClass('exibir');

	    		 	$('#loja9').addClass('exibir');	
	    		 });
	    		 //DEFINE AS AÇÕES QUE OCORRERÃO QUANDO O USUÁRIO CLICAR NO BOTÃO DA DECIMA LOJA DA 'LISTA DE LOJAS'
	    		 $('#loja10-m').click(function(){
	    		 	if($('.lojas').hasClass('exibir'))
	    		 		$('.lojas').removeClass('exibir');

	    		 	$('#loja10').addClass('exibir');	
	    		 });

	    		 // ########################################
	    		 // EVENTOS DAS LOJAS DA LISTA DE CATEGORIA
	    		 // ########################################

	    		 //DEFINE AS AÇÕES QUE OCORRERÃO QUANDO O USUÁRIO CLICAR NO BOTÃO DA PRIMEIRA LOJA DA 'LISTA DE CATEGORIA'
	    		 $('#loja1-mc').click(function(){
	    			if($('.lojas').hasClass('exibir'))
	    		 		$('.lojas').removeClass('exibir');

	    		 	$('#loja1').addClass('exibir');	
	    		 });
	    		 //DEFINE AS AÇÕES QUE OCORRERÃO QUANDO O USUÁRIO CLICAR NO BOTÃO DA SEGUNDA LOJA DA 'LISTA DE CATEGORIA'
	    		 $('#loja2-mc').click(function(){
	    		 	if($('.lojas').hasClass('exibir'))
	    		 		$('.lojas').removeClass('exibir');

	    		 	$('#loja2').addClass('exibir');	
	    		 });
	    		 //DEFINE AS AÇÕES QUE OCORRERÃO QUANDO O USUÁRIO CLICAR NO BOTÃO DA TERCEIRA LOJA DA 'LISTA DE CATEGORIA'
	    		 $('#loja3-mc').click(function(){
	    		 	if($('.lojas').hasClass('exibir'))
	    		 		$('.lojas').removeClass('exibir');

	    		 	$('#loja3').addClass('exibir');	
	    		 });
	    		 //DEFINE AS AÇÕES QUE OCORRERÃO QUANDO O USUÁRIO CLICAR NO BOTÃO DA QUARTA LOJA DA 'LISTA DE CATEGORIA'
	    		 $('#loja4-mc').click(function(){
	    		 	if($('.lojas').hasClass('exibir'))
	    		 		$('.lojas').removeClass('exibir');

	    		 	$('#loja4').addClass('exibir');	
	    		 });
	    		 //DEFINE AS AÇÕES QUE OCORRERÃO QUANDO O USUÁRIO CLICAR NO BOTÃO DA QUINTA LOJA DA 'LISTA DE CATEGORIA'
	    		 $('#loja5-mc').click(function(){
	    		 	if($('.lojas').hasClass('exibir'))
	    		 		$('.lojas').removeClass('exibir');

	    		 	$('#loja5').addClass('exibir');	
	    		 });
	    		 //DEFINE AS AÇÕES QUE OCORRERÃO QUANDO O USUÁRIO CLICAR NO BOTÃO DA SEXTA LOJA DA 'LISTA DE CATEGORIA'
	    		 $('#loja6-mc').click(function(){
	    		 	if($('.lojas').hasClass('exibir'))
	    		 		$('.lojas').removeClass('exibir');

	    		 	$('#loja6').addClass('exibir');	
	    		 });
	    		 //DEFINE AS AÇÕES QUE OCORRERÃO QUANDO O USUÁRIO CLICAR NO BOTÃO DA SETIMA LOJA DA 'LISTA DE CATEGORIA'
	    		 $('#loja7-mc').click(function(){
	    		 	if($('.lojas').hasClass('exibir'))
	    		 		$('.lojas').removeClass('exibir');

	    		 	$('#loja7').addClass('exibir');	
	    		 });
	    		 //DEFINE AS AÇÕES QUE OCORRERÃO QUANDO O USUÁRIO CLICAR NO BOTÃO DA OITAVA LOJA DA 'LISTA DE CATEGORIA'
	    		 $('#loja8-mc').click(function(){
	    		 	if($('.lojas').hasClass('exibir'))
	    		 		$('.lojas').removeClass('exibir');

	    		 	$('#loja8').addClass('exibir');	
	    		 });
	    		 //DEFINE AS AÇÕES QUE OCORRERÃO QUANDO O USUÁRIO CLICAR NO BOTÃO DA NONA LOJA DA 'LISTA DE CATEGORIA'
	    		 $('#loja9-mc').click(function(){
	    		 	if($('.lojas').hasClass('exibir'))
	    		 		$('.lojas').removeClass('exibir');

	    		 	$('#loja9').addClass('exibir');	
	    		 });
	    		 //DEFINE AS AÇÕES QUE OCORRERÃO QUANDO O USUÁRIO CLICAR NO BOTÃO DA DECIMA LOJA DA 'LISTA DE CATEGORIA'
	    		 $('#loja10-mc').click(function(){
	    		 	if($('.lojas').hasClass('exibir'))
	    		 		$('.lojas').removeClass('exibir');

	    		 	$('#loja10').addClass('exibir');	
	    		 });


	    		 // ###############################
	    		 // EVENTOS DAS CATEGORIAS DE LOJAS
	    		 // ###############################

	    		 $('.tgl').css('display', 'none')
	    		 $('.submenu').click(function() {
					$(this).next().slideToggle('slow')
					.siblings('.tgl:visible').slideToggle('fast');
					$(this).siblings('.submenu').next('.tgl:visible').prev()
				
				});
	    		
	    	});
	    </script>


	</body>

</html>