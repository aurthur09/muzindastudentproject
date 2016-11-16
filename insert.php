<?php
?> 
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Twist Airlines</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		
	<!-- 
	//////////////////////////////////////////////////////

	
	DESIGNED & DEVELOPED by Aurthur NHamburo
		

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<div class="page-inner">
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.php">Twist Airlines <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="features.php">Features</a></li>
						<li><a href="tour.php">Tour</a></li>
						<li class="has-dropdown">
							<a href="#">Check Me Out</a>
							<ul class="dropdown">
								<li><a href="pricing.php">Book Now</a></li>
								<li><a href="tour.php">Promotion Plans</a></li>
								<li><a href="features.php">News</a></li>
								<li><a href="pricing.php">Flights</a></li>
							</ul>
						</li>
						<li><a href="pricing.php">Pricing</a></li>
						<li class="active"><a href="contact.php">Contact</a></li>
						<li class="btn-cta"><a href="pricing.php"><span>Book Now</span></a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>
    <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image:url(images/our engines.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-15em">

						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">We value you our customers</span>
							<h1>Thank You For Booking With Us</h1>	
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	<p>thank for booking with us, we will get in touch soon to confirm your details including your passport number.  </p>
 <?php
 $servername = "localhost";
 $dbusername = "root";
 $dbpassword = "";
 $dbname = "testing";
 
 $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
 
	$name = $_GET["name"];
	$address = $_GET["address"];
	$phonenumber = $_GET["phone number"];
	$email = $_GET["email"];
	$travellingdate = $_GET["travelling date"];
	$fromto = $_GET["from - to"];
	$class  = $_GET["class"];
	$onewayroundtrop = $_GET["oneway / round trip"];
	mysql_Connect("localhost","root","");
	mysql_select_db("testing");
	mysql_query("insert into test values('$name','$address','$phonenumber','$email','$travellingdate','$fromto','$class','$onewayroundtrop')");
	
	
	?>-
<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>About <span class="footer-logo">Twist Airlines</span></h3>
						<p>Twist Airlines , new kid on the block with super exciting and cheap prices and overboard services. Book with us today! tomorrow might be too late for the experience of today. fly with us "we twist you there"</p>
					</div>
				</div>

				<div class="col-md-4 col-md-push-1">
					<div class="gtco-widget">
						<h3>Links</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Knowledge Base</a></li>
							<li><a href="#">Career</a></li>
							<li><a href="#">Press</a></li>
							<li><a href="#">Terms of services</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>Contact Us On</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> +263734300522</a></li>
							<li><a href="#"><i class="icon-mail2"></i> info@Twist Airlines.co.zw</a></li>
							<li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
						</ul>
					</div>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; All Rights Reserved.</small> 
						<small class="block">Designed by <a href="Aurthur Nhamburo" target="_blank">Aurthur Nhamburo</a></small>
					</p>
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>


<body>
</body>
</html>