<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Newton Project</title>

		<link rel="stylesheet" href="./assets/css/style.min.css">
		<link rel="stylesheet" href="./assets/vendor/slick/slick-theme.css">
		<link rel="stylesheet" href="./assets/vendor/slick/slick.css">
		<link href="./assets/vendor/lightbox/css/lightbox.min.css" rel="stylesheet" />

		<!-- Animate -->
		<link rel="stylesheet" href="./assets/vendor/animate/animate.min.css">
	</head>

	<body>

		<header>
			<nav class="container">
				<ul>
					<li><a href="#" data-anchor="who-we-are">Quem somos</a></li>
					<li><a href="#" data-anchor="our-team">Equipe</a></li>
					<li><a href="#" data-anchor="our-space">Espaço</a></li>
					<li><a href="#" data-anchor="contact">Contato</a></li>
					<li><a href="#" class="search"><img src="./assets/img/icons/search.svg" alt="Busca"></a></li>
				</ul>
			</nav>
		</header>

		<main>
			<section class="main-banner">
				<div id="bannerSlide">
					<div class="banner-item item-one">
						<img src="./assets/img/slide.jpg" data-lazy="./assets/img/slide.jpg" alt="Slide One">
						<div class="banner-item__content">
							<div class="wow animate__animated animate__fadeInUp txt-center" data-wow-delay=".4s">
								<h1 class="title canaro txt-white">Lorem ipsum dolor sit amet - Slide 1</h1>
								<h2 class="txt-white canaro-ex-light">Lorem ipsum dolor sit amet</h2>
							</div>
						</div>
					</div>
					<div class="banner-item item-two">
					<img data-lazy="./assets/img/slide.jpg" alt="Slide Two">
						<div class="banner-item__content">
							<div class="wow animate__animated animate__fadeInUp txt-center" data-wow-delay=".4s">	
								<h1 class="title canaro txt-white">Lorem ipsum dolor sit amet - Slide 2</h1>
								<h2 class="txt-white canaro-ex-light">Lorem ipsum dolor sit amet</h2>
							</div>
						</div>
					</div>
					<div class="banner-item item-three">
						<img data-lazy="./assets/img/slide.jpg" alt="Slide Three">
						<div class="banner-item__content">
							<div class="wow animate__animated animate__fadeInUp txt-center" data-wow-delay=".4s">	
								<h1 class="title canaro txt-white">Lorem ipsum dolor sit amet - Slide 3</h1>
								<h2 class="txt-white canaro-ex-light">Lorem ipsum dolor sit amet</h2>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="who-we-are standard-block" id="who-we-are">
				<div class="container">
					<div class="img-wrapper">
						<img src="./assets/img/quem-somos.jpg" alt="Quem somos.">
					</div>
					<div class="block-content-wrapper wow animate__animated animate__fadeInRight" data-wow-delay=".4s">
						<div class="block-content">
							<h2 class="block-title">Quem somos</h2>
							<h3 class="block-subtitle">Lorem Ipsum dolor sit amet.</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis luctus bibendum scelerisque. Duis ornare et risus id faucibus. Fusce tincidunt leo elit. Suspendisse potenti. Nunc vestibulum dolor et risus viverra mattis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a ex quis sapien laoreet eleifend. </p>
							<a href="#" class="cta-button">Saiba mais</a>
						</div>
					</div>
				</div>
			</section>

			<section class="our-team standard-block" id="our-team">
				<div class="container">
					<div class="block-content-wrapper wow animate__animated animate__fadeInLeft" data-wow-delay=".4s">
						<div class="block-content">
							<h2 class="block-title">Nossa equipe</h2>
							<h3 class="block-subtitle">Lorem Ipsum dolor sit amet.</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis luctus bibendum scelerisque. Duis ornare et risus id faucibus. Fusce tincidunt leo elit. Suspendisse potenti. Nunc vestibulum dolor et risus viverra mattis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a ex quis sapien laoreet eleifend. </p>
						</div>
					</div>
					<div class="img-wrapper">
						<img src="./assets/img/nossa-equipe.jpg" alt="Nossa equipe.">
					</div>
				</div>
			</section>

			<section class="our-space" id="our-space">
				<div class="our-space-bg">
					<div class="container">
						<div class="block-content-wrapper wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
							<div class="block-content">
								<h2 class="block-title">Nossa espaço</h2>
								<h3 class="block-subtitle">Lorem Ipsum dolor sit amet.</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis luctus bibendum scelerisque. Duis ornare et risus id faucibus. Fusce tincidunt leo elit. Suspendisse potenti. Nunc vestibulum dolor et risus viverra mattis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a ex quis sapien laoreet eleifend. </p>
							</div>
						</div>
					</div>
					<div class="our-space-slide" id="ourSpaceSlide">
						<div>
							<a href="./assets/img/nosso-espaco.jpg" data-lightbox="our-sapce" data-title="My caption">
								<img src="./assets/img/nosso-espaco.jpg" alt="Nosso espaço">
							</a>
						</div>
						<div>
							<a href="./assets/img/nosso-espaco.jpg" data-lightbox="our-sapce" data-title="My caption">
								<img src="./assets/img/nosso-espaco.jpg" alt="Nosso espaço">
							</a>
						</div>
						<div>
							<a href="./assets/img/nosso-espaco.jpg" data-lightbox="our-sapce" data-title="My caption">
								<img src="./assets/img/nosso-espaco.jpg" alt="Nosso espaço">
							</a>
						</div>
					</div>
				</div>
			</section>

			<section class="contact" id="contact">
				<div class="container">
					<div class="contact-header">
						<div class="contact-header-wrapper">
							<h2 class="block-subtitle">Fale conosco</h2>
							<p>Quer conversar com a Health Clinic? Basta preencher o formulário abaixo e nós entraremos em contato assim que possível!</p>
						</div>	
					</div>
					<div class="contact-social">
							<a href="#" class="social-item wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
								<svg xmlns="http://www.w3.org/2000/svg" width="19.86" height="19.86" viewBox="0 0 19.86 19.86">
									<path d="M19.293,14.034l-4.344-1.862a.931.931,0,0,0-1.086.268l-1.924,2.351A14.378,14.378,0,0,1,5.066,7.917L7.416,5.994a.929.929,0,0,0,.268-1.086L5.822.563A.937.937,0,0,0,4.756.024L.721.955A.931.931,0,0,0,0,1.862a18,18,0,0,0,18,18,.931.931,0,0,0,.908-.721l.931-4.034a.942.942,0,0,0-.543-1.071Z" transform="translate(0 0)"/>
								</svg>	
								Telefone
							</a>
							<a href="#" class="social-item wow animate__animated animate__fadeInUp" data-wow-delay=".6s">
								<svg xmlns="http://www.w3.org/2000/svg" width="25.304" height="21" viewBox="0 0 25.304 21">
									<path d="M24.819,14.349a6.973,6.973,0,0,0-3.26-3.322,8.974,8.974,0,0,0-8.043.032,6.669,6.669,0,0,0-3.562,4.388,5.636,5.636,0,0,0,.717,4.176,7.7,7.7,0,0,0,5.241,3.424,9.651,9.651,0,0,0,4.574-.3c.888.344,1.678.9,2.539,1.314-.222-.745-.46-1.482-.713-2.216a7.166,7.166,0,0,0,2.366-2.614A5.667,5.667,0,0,0,24.819,14.349ZM14.356,4.37A10.664,10.664,0,0,0,5.62,3.69,8.89,8.89,0,0,0,1.038,7.3,6.762,6.762,0,0,0,.2,12.479a7.939,7.939,0,0,0,3.439,4.653c-.316.9-.617,1.791-.9,2.694,1.028-.538,2.056-1.1,3.085-1.646a11.451,11.451,0,0,0,3.859.546,6.493,6.493,0,0,1-.269-3.111,6.6,6.6,0,0,1,2.1-3.747,9.117,9.117,0,0,1,6.849-2.247,7.98,7.98,0,0,0-4.032-5.25h.028ZM16.183,14.9a1.038,1.038,0,1,1-1.328-1.34,1.049,1.049,0,0,1,1.328,1.34Zm5.055.1a1.061,1.061,0,0,1-1.662.285,1.579,1.579,0,0,1-.363-.77,1.167,1.167,0,0,1,.98-1.007A1.057,1.057,0,0,1,21.223,15h.016Zm-7.543-6.8a1.525,1.525,0,1,1,0-.013Zm-6.388.257A1.3,1.3,0,1,1,5.619,6.919,1.3,1.3,0,0,1,7.307,8.451Z" transform="translate(0.001 -3.06)"/>
								</svg>	
								Whatsapp
							</a>
							<a href="#" class="social-item wow animate__animated animate__fadeInUp" data-wow-delay=".8s">
								<svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21">
									<path d="M12.94,2.25A10.27,10.27,0,0,0,2.631,12.48a10.124,10.124,0,0,0,1.479,5.282L2.25,23.25l5.708-1.813A10.327,10.327,0,0,0,23.25,12.48,10.27,10.27,0,0,0,12.94,2.25Zm5.126,14.115a2.663,2.663,0,0,1-1.823,1.175c-.483.026-.5.375-3.133-.77a10.756,10.756,0,0,1-4.346-4.11,5.056,5.056,0,0,1-.973-2.74,2.921,2.921,0,0,1,1-2.143,1.01,1.01,0,0,1,.714-.3c.208,0,.342-.006.5,0s.384-.032.584.5.677,1.835.738,1.968a.478.478,0,0,1,0,.458,1.79,1.79,0,0,1-.279.426c-.138.148-.289.33-.412.443s-.28.261-.136.528a7.889,7.889,0,0,0,1.4,1.863,7.193,7.193,0,0,0,2.067,1.374c.259.141.413.125.573-.044s.686-.738.872-.992.359-.2.6-.109,1.507.776,1.766.916.431.212.493.323A2.165,2.165,0,0,1,18.067,16.365Z" transform="translate(-2.25 -2.25)"/>
								</svg>
								Webchat
							</a>
						</div>
					</div>
					<div class="contact-form">
						<div class="container">
							<form action="./api/phpmail.php" method="post" id="contactForm" class="form">
								<div class="form-group">
									<label for="name" class="hidden"></label>
									<input type="text" id="name" placeholder="Nome">

									<label for="email" class="hidden"></label>
									<input type="text" id="email" placeholder="E-mail">

									<label for="name" class="hidden"></label>
									<select name="subject" id="subject">
										<option value="" disabled selectd>Assunto</option>
										<option value="Assunto-1">Assunto 1</option>
										<option value="Assunto-2">Assunto 2</option>
										<option value="Assunto-3">Assunto 3</option>
									</select>
								</div>
								<div class="form-group">
									<textarea name="message" id="message" cols="30" rows="8" placeholder="Mensagem"></textarea>
								</div>
							</form>
							<div class="submit-wrapper">
								<a href="#" class="cta-button actFormExecuteAjax" id="submit">Enviar</a>
								</div>
						</div>
					</div>
				</div>
			</section>
		</main>

		<footer>
			<div class="container">
				<div class="footer-top">
					<p><a href="#">Quem somos</a></p>
					<p><a href="#">Especialidades</a></p>
					<p><a href="#">Blog</a></p>
					<p><a href="#">Contato</a></p>

					<div class="footer-social">
						<a href="#" class="footer-social__item">
							<img src="./assets/img/icons/linkedin.svg" alt="Linkedin">
						</a>
						<a href="" class="footer-social__item">
							<img src="./assets/img/icons/facebook.svg" alt="Facebook">
						</a>
						<a href="" class="footer-social__item">
							<img src="./assets/img/icons/instagram.svg" alt="Instagram">
						</a>
					</div>
				</div>
				<div class="disclaimer">
					<p>© <?php echo date("Y") ?> Health Clinic São Paulo - Todos os Direitos Reservados.</p>
				</div>
			</div>
		</footer>


	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="./assets/vendor/slick/slick.min.js"></script>
		<script src="./assets/js/script.min.js"></script>
		<script src="./assets/vendor/lightbox/js/lightbox.min.js"></script>

		<!-- Wow.js  -->
		<script src="./assets/vendor/wow.js/dist/wow.min.js"></script>
	
	</body>

</html>