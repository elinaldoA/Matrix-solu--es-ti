
<?php
	$mensagem=0;
	@$mensagem = $_POST['mensagem'];
?>

<!Doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Matrix soluções TI</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="favicon.ico">
        <!-- Place favicon.ico in the root directory -->
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/slicknav.min.css">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/animate-text.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
		
		<!-- Ruby CSS -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="css/responsive.css">
		
		<!-- Color CSS -->
		<link rel="stylesheet" href="css/color/color7.css">
		<!--<link rel="stylesheet" href="css/color/color1.css">-->
		<!--<link rel="stylesheet" href="css/color/color2.css">-->
		<!--<link rel="stylesheet" href="css/color/color3.css">-->
		<!--<link rel="stylesheet" href="css/color/color4.css">-->
		<!--<link rel="stylesheet" href="css/color/color5.css">-->
		<!--<link rel="stylesheet" href="css/color/color6.css">-->
		<!--<link rel="stylesheet" href="css/color/color8.css">-->
		<!--<link rel="stylesheet" href="css/color/color9.css">-->

		<link rel="stylesheet" href="#" id="colors">
		
    </head>
    <body>
    	<?php
    		if ($mensagem=="enviado"): ?>
    			<h1>Mensagem enviada, agradecemos seu contato!</h1>
    	<?php else: ?>
		<!-- Header Area -->
		<header id="header" class="header">
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-2 col-xs-2">
							<div class="logo">
								<a href="index.html"><img src="img/logo.png" height="45"></a>
							</div>
						</div>
						<div class="col-md-9 col-sm-10">
							<div class="mobile-menu"></div>
							<nav class="navbar navbar-default">
								<div class="collapse navbar-collapse">
									<ul id="nav" class="nav navbar-nav">
										<li class="current"><a href="#slider">home</a>
										</li>
										<li><a href="#Services">Serviços</a></li>
										</li>
										<li><a href="#team">Sobre</a></li>
										<li><a href="#contact">Contato</a></li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--/ End Header Area -->
		
		<!-- Slider Area -->
		<section id="slider">
				<div class="single-slider" style="background-image:url('img/slider1.jpg')">
					<div id="particles-js"></div>
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="text">
									<h1 class="cd-headline clip is-full-width">
										Websites
										<span class="cd-words-wrapper">
											<b class="is-visible">Profissionais</b>
											<b>Responsivos</b>
											<b>Elegantes</b>
											<b>Leves & intuitivos</b>
										</span>
									</h1>
									<p>Seja bem vindo, deixe o desenvolvimento conosco.<br> Seu negócio merece sempre o melhor será um prazer te ter aqui!</p>
									<div class="button-head">
										<div class="button">
											<span></span>
											<a href="#" class="btn">Saiba mais</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		</section>
		<!--/ End Slider Area -->
		
		<!-- features Area -->
		<section id="features" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Nossas caracteristicas</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.9s">
						<div class="feature-left">
							<img src="img/computer.png" alt="#">
						</div>	
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.9s">
						<div class="feature-right">
							<div class="single-right">
								<i class="fa fa-desktop" aria-hidden="true"></i>
								<div class="right-content">
									<h3>Desenvolvimento Web</h3>
									<P>Websites, profissionais, responsivos, leves, intuitivos e dinâmicos. </P>
								</div>
							</div>
							<div class="single-right">
								<i class="fa fa-mobile" aria-hidden="true"></i>
								<div class="right-content">
									<h3>Design</h3>
									<P>Website que se adptam a diversos dispositivos simultaneamente sem que perca a beleza e a elegância de nossas aplicações</P>
								</div>
							</div>
							<div class="single-right">
								<i class="fa fa-database" aria-hidden="true"></i>
								<div class="right-content">
									<h3>Custo beneficio</h3>
									<P>Soluções com os melhores preços do mercado.</P>
								</div>
							</div>
							<div class="single-right">
								<i class="fa fa-line-chart" aria-hidden="true"></i>
								<div class="right-content">
									<h3>Nossos recursos</h3>
									<P>Conheça nossos recursos, pacotes e benefícios é escolha a melhor plataforma para o seu negócio.</P>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End features Area -->
		
		<!-- Start Service area -->
		<section id="Services" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Serviços <span>Exclusivos</span></h2>
							<p>Criamos Soluções exclusivas e criativas para nossos incríveis clientes</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.4s">
						<div class="single-service">
							<i class="fa fa-laptop" aria-hidden="true"></i>
							<h3>Websites</h3>
							<p>Desenvolvemos sites profissionais, responsivos, leves, intuitivos e dinâmicos.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.5s">
						<div class="single-service">
							<i class="fa fa-tablet" aria-hidden="true"></i>
							<h3>Design responsivo</h3>
							<p>Layouts que adaptam automaticamente a desktops, tabletes e smartphones.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.6s">
						<div class="single-service">
							<i class="fa fa-users" aria-hidden="true"></i>
							<h3>Redes sociais</h3>
							<p>links para redes sociais tais como ex (instagram, facebook, twitter, linkedin...)</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.7s">
					<div class="single-service">
							<i class="fa fa-life-ring" aria-hidden="true"></i>
							<h3>Atendimento</h3>
							<p>Atendimento 24 horas por dia <br> 7 dias da semana.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.8s">
						<div class="single-service">
							<i class="fa fa-globe" aria-hidden="true"></i>
							<h3>Google maps</h3>
							<p>Sua marca será encontrada de qualquer lugar do mundo.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.9s">
						<div class="single-service">
							<i class="fa fa-database" aria-hidden="true"></i>
							<h3>Custo beneficio</h3>
							<p>Ofereçemos as melhores soluções, com os melhores preços do mercado.</p>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End Service -->

		<!-- Pricing Table -->
		<section class="p-table4 section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Nossos planos</h2>
							<p>Conheça nossos recursos, pacotes e benefícios é escolha a melhor plataforma para o seu negócio.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- Single Table -->
					<div class="col-md-3 col-sm-3 col-xs-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="title-head">
									<h2 class="title">Bronze</h2>
								</div>
								<div class="price">
									<p class="amount"><span>R$</span>699,00</p>
								</div>	
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<li>Até 6 páginas</li>
								<li>Layout personalizado</li>
								<li>Design responsivo</li>
								<li>Botões com links para as redes sociais</li>
								<li>I - Formulário de contato</li>
								<li>-</li>
								<li>-</li>
							</ul>
							<div class="button-head">
								<div class="button">
									<span></span>
									<a href="#" class="btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Compre</a>
								</div>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
					<!-- Single Table -->
					<div class="col-md-3 col-sm-3 col-xs-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="title-head">
									<h2 class="title">Prata</h2>
								</div>
								<div class="price">
									<p class="amount"><span>R$</span>899,00</p>
								</div>	
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<li>Até 6 páginas</li>
								<li>Layout personalizado</li>
								<li>Design responsivo</li>
								<li>Botões com links para as redes sociais</li>
								<li>I - Formulário de contato</li>
								<li>Gerenciador de arquivos</li>
								<li>I - Formulário de orçamento</li>
							</ul>
							<div class="button-head">
								<div class="button">
									<span></span>
									<a href="#" class="btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Compre</a>
								</div>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
					<!-- Single Table -->
					<div class="col-md-3 col-sm-3 col-xs-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="title-head">
									<h2 class="title">Ouro</h2>
								</div>
								<div class="price">
									<p class="amount"><span>R$</span>1.599,00</p>
								</div>	
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<li>Até 12 páginas</li>
								<li>Layout personalizado</li>
								<li>Design responsivo</li>
								<li>Botões com links para as redes sociais</li>
								<li>I - Formulário de contato</li>
								<li>Chat online</li>
								<li>-</li>
							</ul>
							<div class="button-head">
								<div class="button">
									<span></span>
									<a href="#" class="btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Compre</a>
								</div>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="title-head">
									<h2 class="title">Diamante</h2>
								</div>
								<div class="price">
									<p class="amount"><span>R$</span>2.999,00</p>
								</div>	
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<li>Até 24 páginas</li>
								<li>Layout personalizado</li>
								<li>Design responsivo</li>
								<li>Botões com links para as redes sociais</li>
								<li>I - Formulário de contato</li>
								<li>Chat online</li>
								<li>I - Blog interno</li>
							</ul>
							<div class="button-head">
								<div class="button">
									<span></span>
									<a href="#" class="btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Compre</a>
								</div>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
				</div>	
			</div>	
		</section>	
		<!--/ End Pricing Table -->
		<section id="team" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>A empresa</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.9s">
						<div class="single-team">
							<img class="img-responsive" src="img/logo.png">
						</div>	
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.9s">
						<div class="feature-right">
							<div class="single-team">
								<div class="single-team">
									<h3>Nossa história</h3><br>
									<P>A Matrix Soluções TI nasceu em 2016, somos uma agência especializada em desenvolvimento de aplicações tecnológicas atendemos empresas de pequeno, médio ou grande portes de diversos segmentos. 

									Focamos sempre em soluções especificas para cada negócio, o que proporciona entregar aos nossos clientes excelência em sistemas, proporcionando tranquilidade, praticidade e segurança para gerir seus negócios.</P>
								</div>
							</div>
						</div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.9s">
						<div class="single-team">
							<img class="img-responsive" src="img/missão.jpg">
						</div>	
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.9s">
						<div class="feature-left">
							<div class="single-team">
								<div class="single-team">
									<h3>Missão</h3><br>
									<P>Atender com excelência as demandas de nossos clientes a partir do desenvolvimento de soluções tecnológicas e serviços que contribuam para a otimização de processos diários realizados pelas as empresas, mantendo a segurança dos dados, agilidade e praticidade.</P>
								</div>
							</div>
						</div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.9s">
						<div class="single-team">
							<img class="img-responsive" src="img/visão.jpg">
						</div>	
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.9s">
						<div class="feature-left">
							<div class="single-team">
								<div class="single-team">
									<h3>Visão</h3><br>
									<P>Ser uma empresa referência reconhecida como a melhor opção tecnológica. Por nossos clientes, colaboradores e investidores.</P>
								</div>
							</div>
						</div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.9s">
						<div class="single-team">
							<img class="img-responsive" src="img/valores.jpg">
						</div>	
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.9s">
						<div class="single-head">
							<div class="single-team">
								<div class="single-team">
									<h3>Valores</h3><br>
									<p>Inovação</p>
									<p>Comprometimento</p>
									<p>Responsabilidade</p>
									<p>Ética</p>
									<p>Qualidade</p>
									<p>Excelência</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</section>
		<!--/ End features Area -->	
		
		<!--/ contact Area -->
		<section id="contact" class="contact section" data-stellar-background-ratio="0.5">
				<div class="container">
					<div class="row">
						<div class="contact-head">
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="contact-left">
									<h3>Contate <span>nós agora</span></h3>
									<p class="p1">Orçamentos, Dúvidas & Suportes</p>
									<p class="text-center"> Obrigado!</p>
									
								</div>
							</div>
							<div class="col-md-8 col-sm-8 col-xs-12">
								<div class="contact-right">
									<div class="row">
										<form class="form" method="post" action="email.php">
											<div class="col-md-6">
												<div class="form-group">
													<input name="nome" type="text" placeholder="Nome completo">
												</div>
												<div class="form-group">
													<input name="assunto" type="text" placeholder="Assunto">
												</div>
												<div class="form-group">
													<input name="email" type="email" placeholder="seu email">
												</div>
												<div class="button">
													<button type="submit" class="btn primary">Contactar<i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<textarea name="mensagem" placeholder="Sua mensagem aqui"></textarea>
												</div>
												
											</div>
										</form>
									</div>
								<!--/ End Contact Form -->
								</div>
							</div>
						</div>
					</div>
				</div>
		</section>
		<!--/ End contact Area -->
		
		
		<!-- Footer Area -->
		<footer id="footer" class="footer section">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="single-footer">
								<div class="logo">
									<img src="img/logo.png" height="40">
								</div>
								<p></p>
								<div class="contact">
									<p class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>Serra - Espirito Santo, Brasil</p>
									<p class="mail-add"><i class="fa fa-envelope-o" aria-hidden="true"></i>contato@matrixsolucoesti.com</p>
									<p class="call"><i class="fa fa-phone-square" aria-hidden="true"></i>+ 55 (27) 99952-8864</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="single-footer">
								<h2><i class="fa fa-sliders" aria-hidden="true"></i>mapa do site</h2>
								<span><i class="fa fa-caret-right" aria-hidden="true"></i>home</span>
								<span><i class="fa fa-caret-right" aria-hidden="true"></i>serviços</span>
								<span><i class="fa fa-caret-right" aria-hidden="true"></i>sobre</span>
								<span><i class="fa fa-caret-right" aria-hidden="true"></i>contato</span>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="single-footer">
								<h2><i class="fa fa-edit" aria-hidden="true"></i>ASSINATURA DE NEWSLETTER</h2>
								<p>Subscreva a nossa newsletter para receber todas as novidades na sua caixa de entrada.</p>
								<div class="mail">
									<input type="email" placeholder="Insira seu email">
									<button class="button"><a href="#">nos inscreva</a></button>
									<i class="fa fa-lock"  class="icon"></i>
									<p>Seu endereço de e-mail é 100% seguro para nós</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->

			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="copyright-content">
								<p>Copyright 2018 | Todos os direitos reservados</p>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<ul class="social">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-instagram"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->
			
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
		<script src="js/colors.js"></script>
        <script src="js/jquery.nav.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/jquery.slicknav.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
		<script src="js/isotope.pkgd.min.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/animate-text.js"></script>
		<script src="js/particles.min.js"></script>
		<script src="js/particle-code.js"></script>
		<script src="js/jquery.counterup.min.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyC0RqLa90WDfoJedoE3Z_Gy7a7o8PCL2jw"></script>
        <script type="text/javascript" src="js/gmaps.min.js"></script>
        <script src="js/main.js"></script>
    <?php endif; ?>
    </body>
</html>