<?php
session_start();
require 'requirelanguage.php';
?>



<!DOCTYPE html>
<html lang="en">

	<head>
	  <meta charset="utf-8">
	  <meta content="width=device-width, initial-scale=1.0" name="viewport">

	  <title>E&J Global Solutions</title>
	  <meta content="" name="descriptison">
	  <meta content="" name="keywords">

	  <!-- Favicons -->
	  <!--
	  <link href="assets/img/favicon.png" rel="icon">
	  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">-->
	  <link rel="shortcut icon" type="image/png" href="assets/img/ej_icon.png">

	  <!-- Google Fonts -->
	  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

	  <!-- Vendor CSS Files -->
	  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
	  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
	  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

	  <!-- Template Main CSS File -->
	  <link href="assets/css/style.css" rel="stylesheet">

	  
		<!--Porducts And services header-->
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		
		
		<link rel="stylesheet" type="text/css" href="assets/css/style3.css">
		
		<meta name="google-site-verification" content="GNy4xWuMaSl8X_U-Zbvgz9RDF-rqlRGVRuzEZevyBcc"/>
	
	</head>

	<body>

	  <!-- ======= Header ======= -->
	  <header id="header">
		<div class="container">

		  <div id="logo" class="pull-left">
		  <!--
			<h1><a href="#intro" class="scrollto">Reve<span>al</span></a></h1>-->
			<!-- Uncomment below if you prefer to use an image logo -->
			<a href="index.php"><img src="assets/img/Imagen2.png" alt=""></a>
			
		  </div>

		  <nav id="nav-menu-container">
			<ul class="nav-menu">
			  <li><a href="index.php"><?php echo $lang["header_home"]?></a></li>
			  <li><a href="index.php#about"><?php echo $lang["header_company"]?></a></li>
			  <li><a href="index.php#services"><?php echo $lang["header_products"]?></a></li>
			  <li><a href="index.php#markets"><?php echo $lang["header_markets"]?></a></li>
			  <li><a href="index.php#contact"><?php echo $lang["header_contact"]?></a></li>
			  <li><a href="changelanguage.php?language=es">ES</a></li>
			  <li><a href="changelanguage.php?language=en">EN</a></li>
			  
			</ul>
		  </nav><!-- #nav-menu-container -->
		</div>
	  </header><!-- End Header -->

	  <!-- ======= Intro Section ======= -->
	  <section id="intro">

		<div class="intro-content">
		<i>
		  <h2><?php echo $lang["carousel0"]?> <span><?php echo $lang["carousel1"]?></span><br><?php echo $lang["carousel2"]?></h2></i>
		  
		</div>

		<div id="intro-carousel" class="owl-carousel">
		  <div class="item" style="background-image: url('assets/img/intro-carousel/industry1.jpg');"></div>
		  <div class="item" style="background-image: url('assets/img/intro-carousel/industry2.jpg');"></div>
		  <div class="item" style="background-image: url('assets/img/intro-carousel/industry3a1.jpg');"></div>
		  <div class="item" style="background-image: url('assets/img/intro-carousel/industry4a.jpg');"></div>
		</div>

	  </section><!-- End Intro Section -->

	  <main id="main">
	  
	  <!--
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>Success!</strong> This alert box could indicate a successful or positive action.
			</div>
	  -->

		<!-- ======= About Section ======= -->
		<section id="about" class="wow fadeInUp">
			<div class="container">
				<div class="section-header">
					
					  
					<h2 class="text-center"><?php echo $lang["section_details1"]?></h2>
					<br/>

					<h5 class="text-center"><?php echo $lang["section_details2"]?>. <?php echo $lang["section_details3"]?></h5>

				</div>
				<br>
				
				
				<div class="text-center"> <button type="submit" name="submit" class="btn success"><a href="index.php#contact"><strong><?php echo $lang["header_contact"]?></strong></a></button> </div>
				
				
				<!--
				<div class="text-center"><input type="submit" name="submitt" value="Contacto"></div>-->
				
				<!--
				<div class="text-center"> <button type="submit" name="submit" class="btn success" onclick="alert()"><strong><?php echo $lang["header_contact"]?></strong></button> </div>
				-->
				
			
				<?php 
				/*
					if($_REQUEST['submitt']){
						header('index.php#contact');
						exit();
					}*/
				?>
				

			</div>
		</section><!-- End About Section -->

		<!-- ======= Services Section ======= -->

	  </main><!-- End #main -->

	  <!-- ======= Footer ======= -->
	  <footer id="footer">
		<div class="container">
		  <div class="copyright">
			&copy; 2020 <strong><span>E&J GLOBAL SOLUTIONS, INC.</span></strong> All Rights Reserved
		  </div>
		  
		</div>
	  </footer><!-- End Footer -->

	  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

	  <!-- Vendor JS Files -->
	  <script src="assets/vendor/jquery/jquery.min.js"></script>
	  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
	  <!--
	  <script src="assets/vendor/php-email-form/validate.js"></script>-->
	  <script src="assets/vendor/wow/wow.min.js"></script>
	  <script src="assets/vendor/venobox/venobox.min.js"></script>
	  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
	  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
	  <script src="assets/vendor/superfish/superfish.min.js"></script>
	  <script src="assets/vendor/hoverIntent/hoverIntent.js"></script>

	  <!-- Template Main JS File -->
	  <script src="assets/js/main.js"></script>
	  <script src="assets/js/main3.js"></script>
	</body>
</html>