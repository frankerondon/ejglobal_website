<?php
	session_start();
	require 'requirelanguage.php';
	$ban= false;
	
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
		
		<script>function loadScript(a){var b=document.getElementsByTagName("head")[0],c=document.createElement("script");c.type="text/javascript",c.src="https://tracker.metricool.com/resources/be.js",c.onreadystatechange=a,c.onload=a,b.appendChild(c)}loadScript(function(){beTracker.t({hash:"f923819e61c4c12abe0ee63989c3120b"})});</script>
	
	</head>

	<body>

	  <!-- ======= Header ======= -->
	  <header id="header">
		<div class="container">

		  <div id="logo" class="pull-left">
		  <!--
			<h1><a href="#intro" class="scrollto">Reve<span>al</span></a></h1>-->
			<!-- Uncomment below if you prefer to use an image logo -->
			<a href="#intro"><img src="assets/img/Imagen2.png" alt=""></a>
			
		  </div>

		  <nav id="nav-menu-container">
			<ul class="nav-menu">
			  <li class="menu-active"><a href="#intro"><?php echo $lang["header_home"]?></a></li>
			  <li><a href="#about"><?php echo $lang["header_company"]?></a></li>
			  <li><a href="#services"><?php echo $lang["header_products"]?></a></li>
			  <li><a href="#markets"><?php echo $lang["header_markets"]?></a></li>
			  <li><a href="#contact"><?php echo $lang["header_contact"]?></a></li>
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
	  
	  
		<?php
			if(isset($_GET['ban1'])){
				$ban1=$_GET['ban1'];
				if($ban1=='1'){						
					$notificacion=$lang["section_contact_final"];
					echo '<script type="text/javascript">',
						'alert("'.$notificacion.'");',
					'</script>'
					;
				}
				else{
					$notificacion=$lang["section_contact_final1"];
					echo '<script type="text/javascript">',
						'alert("'.$notificacion.'");',
					'</script>'
					;
				}
					
			}
		?>

		<!-- ======= About Section ======= -->
		<section id="about" class="wow fadeInUp">
		  <div class="container">
		  <div class="section-header">
		  
		
			  <h2 class="text-center"><?php echo $lang["section_about_title"]?></h2>
			  <br/>
			 
			  
			  <p><?php echo $lang["section_about_descripcion1"]?></p>
				<br>
				
				<p><?php echo $lang["section_about_descripcion2"]?></p>
					
			</div>
		  
		  </div>
		</section><!-- End About Section -->

		<!-- ======= Services Section ======= -->
		<section id="services">
		  <div class="container">
			<div class="section-header">
			  <h2 class="text-center"><?php echo $lang["section_products_title"]?></h2>
			  <!--
			  <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>-->
			</div>

			<div class="row">
		
				<div class="col-md-3">
					<figure class="card card-product">
						<div class="img-wrap"> 
							<img src="assets/img/productos/bombas-hidraulicas.png">
							<!--
							<a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>-->
						</div>
						<figcaption class="info-wrap">
							<h6 class="title text-dots" style="text-align:center"><a href="details.php"><?php echo $lang["section_products1"]?></a></h6>
							

							
						</figcaption>
					</figure> <!-- card // -->
				</div> <!-- col // -->
				
				<div class="col-md-3">
					<figure class="card card-product">
						<div class="img-wrap"> <img src="assets/img/productos/electricity.jpg">
						<!--
						<a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>-->
						</div>
						<figcaption class="info-wrap">
							<h6 class="title text-dots" style="text-align:center"><a href="details.php"><?php echo $lang["section_products2"]?></a></h6>
							
						</figcaption>
					</figure> <!-- card // -->
				</div> <!-- col // -->
				
				<div class="col-md-3">
					<figure class="card card-product">
						<div class="img-wrap"><img src="assets/img/productos/hvac.jpg"> 
						<!--
						<a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>-->
						</div>
						<figcaption class="info-wrap">
							<h6 class="title text-dots" style="text-align:center"><a href="details.php"><?php echo $lang["section_products3"]?></a></h6>
							
						</figcaption>
					</figure> <!-- card // -->
				</div> <!-- col // -->
				
				<div class="col-md-3">
					<figure class="card card-product">
						<div class="img-wrap"> <img src="assets/img/productos/instrumentacion1.jpg">
						<!--
							<a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>-->
						</div>
						<figcaption class="info-wrap">
							<h6 class="title text-dots" style="text-align:center"><a href="details.php"><?php echo $lang["section_products4"]?></a></h6>
							
						</figcaption>
					</figure> <!-- card // -->
				</div> <!-- col // -->
				
				<div class="col-md-12">
					<br>
				</div>
				
				<div class="col-md-3">
					<figure class="card card-product">
						<div class="img-wrap"> 
							<img src="assets/img/productos/tuberia.png">
							<!--
							<a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>-->
						</div>
						<figcaption class="info-wrap">
							<h6 class="title text-dots" style="text-align:center"><a href="details.php"><?php echo $lang["section_products5"]?></a></h6>
							
						</figcaption>
					</figure> <!-- card // -->
				</div> <!-- col // -->
				
				<div class="col-md-3">
					<figure class="card card-product">
						<div class="img-wrap"> <img src="assets/img/productos/valvulas.png">
						<!--
						<a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>-->
						</div>
						<figcaption class="info-wrap">
							<h6 class="title text-dots" style="text-align:center"><a href="details.php"><?php echo $lang["section_products6"]?></a></h6>
							
						</figcaption>
					</figure> <!-- card // -->
				</div> <!-- col // -->
				
				<div class="col-md-3">
					<figure class="card card-product">
						<div class="img-wrap"><img src="assets/img/productos/it1.jpg"> 
						<!--
						<a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>-->
						</div>
						<figcaption class="info-wrap">
							<h6 class="title text-dots" style="text-align:center"><a href="details.php"><?php echo $lang["section_products7"]?></a></h6>
							
						</figcaption>
					</figure> <!-- card // -->
				</div> <!-- col // -->
				
				<div class="col-md-3">
					<figure class="card card-product">
						<div class="img-wrap"> <img src="assets/img/productos/plc.jpg">
						<!--
							<a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>-->
						</div>
						<figcaption class="info-wrap">
							<h6 class="title text-dots" style="text-align:center"><a href="details.php"><?php echo $lang["section_products8"]?></a></h6>
							
						</figcaption>
					</figure> <!-- card // -->
				</div> <!-- col // -->
			</div>

		  </div>
		</section><!-- End Services Section -->


		<!-- ======= Portfolio Section ======= -->
		
		<section id="markets">
			
			<div class="container">
				<div class="section-header">
				  <h2 class="text-center"><?php echo $lang["section_markets_title"]?></h2>
				</div>	

					<div class="col-md-12 text-center">

						<button class="btn btn-default filter-button" data-filter="all"><?php echo $lang["section_markets1"]?></button>
						<button class="btn btn-default filter-button" data-filter="photo"><?php echo $lang["section_markets2"]?></button>
						<button class="btn btn-default filter-button" data-filter="webdesign"><?php echo $lang["section_markets3"]?></button>
						<button class="btn btn-default filter-button" data-filter="graphic"><?php echo $lang["section_markets4"]?></button>
						<button class="btn btn-default filter-button" data-filter="energy"><?php echo $lang["section_markets5"]?></button>
						
					
					</div>
					
				<div class="row">
				
					<div class="col-md-3 filter energy">
						<div class="each-item">
							<img class="port-image" src="assets/img/portfolio/energy9.jpg"/>
							
						</div>
					</div>
					
					
					<div class="col-md-3 filter webdesign">
						<div class="each-item">
							<img class="port-image" src="assets/img/portfolio/refinery1.jpg"/>
							
						</div>
					</div>
					
					<div class="col-md-3 filter photo">
						<div class="each-item">
							<img class="port-image" src="assets/img/portfolio/upstream2.jpg"/>
							
						</div>
					</div>
					
					<div class="col-md-3 filter photo">
						<div class="each-item">
							<img class="port-image" src="assets/img/portfolio/upstream4.jpg"/>
							
						</div>
					</div>
					
					<div class="col-md-3 filter webdesign">
						<div class="each-item">
							<img class="port-image" src="assets/img/portfolio/refinery2.jpg"/>
							
						</div>
					</div>
					
					
					<div class="col-md-3 filter graphic">
						<div class="each-item">
							<img class="port-image" src="assets/img/portfolio/g_industry1.jpg"/>
							
						</div>
					</div>
					
					<div class="col-md-3 filter graphic">
						<div class="each-item">
							<img class="port-image" src="assets/img/portfolio/g_industry5.jpg"/>
							
						</div>
					</div>
					
					<div class="col-md-3 filter graphic">
						<div class="each-item">
							<img class="port-image" src="assets/img/portfolio/g_industry6.jpg"/>
							
						</div>
					</div>
					
					<div class="col-md-3 filter webdesign">
						<div class="each-item">
							<img class="port-image" src="assets/img/portfolio/refinery3.jpg"/>
							
						</div>
					</div>
					
					<div class="col-md-3 filter energy">
						<div class="each-item">
							<img class="port-image" src="assets/img/portfolio/energy5.jpg"/>
							
						</div>
					</div>
					
					<div class="col-md-3 filter energy">
						<div class="each-item">
							<img class="port-image" src="assets/img/portfolio/energy8.jpg"/>
							
						</div>
					</div>
					
					
					
					<div class="col-md-3 filter photo">
						<div class="each-item">
							<img class="port-image" src="assets/img/portfolio/upstream1.jpg">
							
						</div>
					</div>
	
				</div>
				
			</div>
		</section>

		<!-- ======= END Markets Section ======= -->

		<!-- ======= Contact Section ======= -->
		<section id="contact" class="wow fadeInUp">
		  <div class="container">
			<div class="section-header">
			  <h2 class="text-center"><?php echo $lang["section_contact_title"]?></h2>
			  
			</div>

			<div class="row contact-info">

			  <div class="col-md-6">
				<div class="contact-address">
				  <i class="ion-ios-location-outline"></i>
				  <h3><?php echo $lang["section_contact1"]?></h3>
				  <address>8300 NW 53RD ST SUITE #350 <br>Miami, FL 33166</address>
				</div>
			  </div>
			
			

			  <div class="col-md-6">
				<div class="contact-email">
				  <i class="ion-ios-email-outline"></i>
				  <h3><?php echo $lang["section_contact2"]?></h3>
				  <p><a href="mailto:info@example.com">info@ejglobalsolutions.com</a></p>
				</div>
			  </div>

			</div>
		  </div>

		  <div class="container mb-4">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3591.486591495392!2d-80.33390038524362!3d25.820506683610144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9bbd097e2ec7b%3A0xc79dd935062a00a4!2s8300%20NW%2053rd%20St%20%23350%2C%20Doral%2C%20FL%2033166%2C%20EE.%20UU.!5e0!3m2!1ses-419!2sve!4v1590688359008!5m2!1ses-419!2sve" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
		  </div>

		  <div class="container">
			<div class="form">
			  <form action="forms/contact.php" method="post" role="form" class="php-email-form">
				<div class="form-row">
				  <div class="form-group col-md-6">
					<input type="text" name="name" class="form-control" id="name" placeholder="<?php echo $lang["section_contact4"]?>" data-rule="minlen:4" data-msg="<?php echo $lang["section_contact_data1"]?>" required>
					<!--
					<div class="validate"></div>-->
				  </div>
				  <div class="form-group col-md-6">
					<input type="email" class="form-control" name="email" id="email" placeholder="<?php echo $lang["section_contact5"]?>" data-rule="email" data-msg="<?php echo $lang["section_contact_data2"]?>" required>
					<!--
					<div class="validate"></div>-->
				  </div>
				</div>
				<div class="form-group">
				  <input type="text" class="form-control" name="subject" id="subject" placeholder="<?php echo $lang["section_contact6"]?>" data-rule="minlen:4" data-msg="<?php echo $lang["section_contact_data3"]?>" required>
				  <!--
				  <div class="validate"></div>-->
				</div>
				<div class="form-group">
				  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="<?php echo $lang["section_contact_data4"]?>" placeholder="<?php echo $lang["section_contact7"]?>" required></textarea>
				  <!--
				  <div class="validate"></div>-->
				</div>

				<!--
				<div class="mb-3">
				  <div class="loading"><?php //echo $lang["section_contact_data5"]?></div>
				  <div class="error-message"></div>
				  <div class="sent-message"><?php //echo $lang["section_contact_data6"]?></div>
				</div>-->

				<div class="text-center"><button type="submit" name="submit"><?php echo $lang["section_contact8"]?></button></div>
			  </form>
			</div>

		  </div>
		</section><!-- End Contact Section -->

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