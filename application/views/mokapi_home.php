<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>M-OKAPI</title> 
	<link rel="stylesheet" href="<?php echo base_url("assets/css/animate.css");?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/icomoon.css");?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css");?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/magnific-popup.css");?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/flexslider.css");?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/style.css");?>">
	<script src="<?php echo base_url("assets/js/modernizr-2.6.2.min.js");?>"></script>
	</head>
	<body>
        
	<div class="fh5co-loader"></div>
		<div class="row" style="margin: inherit; text-align: center;height: inherit;">
			<div class="col-md-1" style = "background-color: #ccc"> </div>
			<div class="col-md-11" style="height: inherit;">
				<div id="page">
						<nav class="fh5co-nav" role="navigation">
							<div class="container-fluid">
								<div class="row">
									<div class="top-menu">
										<div class="container">
											<div class="row">
												<div class="col-sm-7 text-left menu-1">
													<ul>
														<li><a href="#"><img src="<?php echo base_url("assets/images/M-okapi 4.png");?>" width="20%"></a></li>
														<li><a href="<?php echo site_url('utilisateur/form_authentification') ?>">Se connecter</a></li>
                                                        <li><a href="<?php echo site_url('utilisateur/form_inscription') ?>">Creer un compte</a></li> 
                                                         
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</nav>

						<aside id="fh5co-hero">
							<div class="container">
								<div class="row">
									<div class="col-md-8">
										<div class="flexslider animate-box">
											<ul class="slides">
										   	<li style="background-image: url(images/img_bg_1.jpg);">
										   		<div class="overlay-gradient"></div>
										   		<div class="container-fluid">
										   			<div class="row">
											   			<div class="col-md-10 col-md-offset-1 slider-text">
											   				<div class="slider-text-inner">
											   					<h1>Plus besoin de souffir, <br/> la solution est la</h1>
											   					<img src="<?php echo base_url("assets/images/ges1.jpg");?>" width="20%"> 
											   				</div>
											   			</div>
											   		</div>
										   		</div>
										   	</li>
										   	<li style="background-image: url(images/img_bg_2.jpg);">
										   		<div class="overlay-gradient"></div>
										   		<div class="container-fluid">
										   			<div class="row">
											   			<div class="col-md-10 col-md-offset-1 slider-text">
											   				<div class="slider-text-inner">
											   					<h1>ternir compte <br/> de vos resources</h1>
											   					<img src="<?php echo base_url("assets/images/ges2.jpg");?>" width="20%">
											   				</div>
											   			</div>
											   		</div>
										   		</div>
										   	</li>
										   	<li style="background-image: url(images/img_bg_3.jpg);">
										   		<div class="overlay-gradient"></div>
										   		<div class="container-fluid">
										   			<div class="row">
											   			<div class="col-md-10 col-md-offset-1 slider-text">
											   				<div class="slider-text-inner">
											   					<h1>Prevention <br/> a 100%</h1>
											   					<img src="<?php echo base_url("assets/images/ges3.jpg");?>" width="20%">
											   				</div>
											   			</div>
											   		</div>
										   		</div>
										   	</li>
										   	<li >
										   		<div class="overlay-gradient"></div>
										   		<div class="container-fluid">
										   			<div class="row">
											   			<div class="col-md-10 col-md-offset-1 slider-text">
											   				<div class="slider-text-inner">
											   					<h1>A Dieu <br/> les credis</h1>
											   					<img src="<?php echo base_url("assets/images/ges4.jpg");?>" width="20%">
											   				</div>
											   			</div>
											   		</div>
										   		</div>
										   	</li>	
										   	<li style="background-image: url(images/img_bg_3.jpg);">
										   		<div class="overlay-gradient"></div>
										   		<div class="container-fluid">
										   			<div class="row">
											   			<div class="col-md-10 col-md-offset-1 slider-text">
											   				<div class="slider-text-inner">
											   					<h1>Avec nous, <br/> votre poche est toujours rempli</h1>
											   					<img src="<?php echo base_url("assets/images/ges5.jpg");?>" width="20%">
											   				</div>
											   			</div>
											   		</div>
										   		</div>
										   	</li>			   	
										  	</ul>
									  	</div>
									</div>
									<div class="col-md-4">
										<div class="side animate-box">
												<div class="col-md-12 col-md-offset-0 text-center fh5co-heading fh5co-heading-sidebar">
													<h2><span>Bienvenue </span></h2>
												</div>
												<div class="fh5co-staff">
													<h3>M-OKAPI</h3> 
										 			<p>Votre gestionnaire de budget optimisé</p>
												</div>
											</div>
									</div>
								</div>
							</div>
							<nav class="fh5co-nav" role="navigation">
							<div class="container-fluid">
								<div class="row">
									<div class="top-menu" style="text-decoration-color: #ccc">
										Gaetan
										 
									</div>
								</div>
							</div>
						</nav>
			</div>
			<div class="col-md-1" style = "background-color: #ccc"> </div>
		</div>
		</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="<?php echo base_url("assets/js/jquery.min.js");?>"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url("assets/js/jquery.easing.1.3.js");?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url("assets/js/bootstrap.min.js");?>"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url("assets/js/jquery.waypoints.min.js");?>"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url("assets/js/jquery.flexslider-min.js");?>"></script>
	<!-- Magnific Popup -->
	<script src="<?php echo base_url("assets/js/jquery.magnific-popup.min.js");?>"></script>
	<script src="<?php echo base_url("assets/js/magnific-popup-options.js");?>"></script>
	<!-- Main -->
	<script src="<?php echo base_url("assets/js/main.js");?>"></script>
	</body>
</html>

