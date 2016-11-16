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

	 
	DESIGNED & DEVELOPED by Aurthur Nhamburo
		
	

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
						<li class="active"><a href="pricing.php">Pricing</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li class="btn-cta"><a href="pricing.php"><span>Book Now</span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/booking.com.png)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-15em">

						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">Check OUT our Plans for you</span>
							<h1>Plans for everyone, Pick one That suits you best.</h1>	
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
	
	
	
	<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Choose The Best Plan For You</h2>
					<p>Join over 10 000 others and counting who have already felt the Twist.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="price-box">
						<h2 class="pricing-plan">Economy Class</h2>
						<div class="price"><sup class="currency">$</sup>350<small>/WR/ regional - sub regional</small></div>
						<p>Suitable for family and casual trips</p>
						<hr>
						<ul class="pricing-info">
							<li>stereo fuse</li>
							<li>unlimited food</li>
							<li>comfortable seats</li>
							<li>magazines and limited wifi</li>
						</ul>
						<a href="#" class="btn btn-default btn-sm">Book Now</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="price-box">
						<h2 class="pricing-plan">Business Class</h2>
						<div class="price"><sup class="currency">$</sup>520<small>/WR/ REGIONAL</small></div>
						<p>travelling on business? then this is best</p>
						<hr>
						<ul class="pricing-info">
							<li>spacious seats </li>
							<li>portable table</li>
							<li>newspaper/magazines/tv</li>
							<li>unlimited wifi</li>
						</ul>
						<a href="#" class="btn btn-default btn-sm">Book Now</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="price-box popular">
						<div class="popular-text">Popular</div>
						<h2 class="pricing-plan">first class</h2>
						<div class="price"><sup class="currency">$</sup>900<small>/WR/ regional and international</small></div>
						<p>Basically you have it all</p>
						<hr>
						<ul class="pricing-info">
							<li>Unlimitted on everything</li>
							<li>+ extras</li>
					
						</ul>
						<a href="#" class="btn btn-primary btn-sm">Book Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- booking form starts here -->
 <div class="container" style="width:500px;">
 <form name="Booking Form" action="insert.php" method="post">
 <h3 align="center">Booking Form</h3>
 <table>
 <tr>
 <td>Enter Name </td>
 <td><input type="text" name="t1" id="t1"></td>
 </tr>
 <tr>
 <td> Address </td>
 <td><input type="text" name="t2" id="t2"></td>
 </tr>
 <tr>
 <td> Phone Number </td>
 <td><input type="text" name="t3" id="t3"></td>
 </tr>
 <tr>
 <td> Email </td>
 <td><input type="text" name="t4" id="t4"></td>
 </tr>
 <tr>
 <td> Travelling Date </td>
 <td><input type="date" name="t5" id="t5"></td>
 </tr>
 <tr>
 <td> From - To </td>
 <td><input type="text" name="t6" id="t6"></td>
 </tr>
 <tr>
 <td> Class </td>
 <td><input type="text" name="t7" id="t7"></td>
 </tr>
 <tr>
 <td>One way / Round Trip</td>
 <td><input type="text" name="t8" id="t8"></td>
 </tr>
 <tr>
 <td><input type="submit" name="b1" value="submit" class="btn btn" onClick="aa()";></td>
 </tr>
 </table>
    <p>thank you for booking with us we will call you shortly to confirm more details.</p>
    </form>
    
    
    <script type="text/javascript">
    function aa()
	{
	var xmlhttp;
	xmlhttp=new XMLHttpRequest();
    xml.open("GET","insert.php?nm="+document.getelementbyId("t1").value+"&name="+document.getelementId("t2").value+"&address="+document.getelementbyId("t3").value+"phone number="+document.getelementId("t4").value+"&email="+document.getelement("t5").value+"travelling date="+document.getelement("t6").value+"from - to="+document.getelement("t7").value+"class="+document.getelementbyId("t8").value+"one way / round trip",false);
	xmlhttp.send(null);
	}
    </script>
    </div>
   
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>Frequently Asked Questions</h2>
                    <img src="images/twisting power.jpg" width="500px" height="150px" alt="twisting power">
					<p>We understand you better and we know you have many questions , some of them have been answered here</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<ul class="fh5co-faq-list">
						<li class="animate-box">
							<h2>What is Twist Airlines</h2>
							<p>An International Airline brought to you to bring great affordable packages to accomodate all and share the twisting experience .</p>
						</li>
						<li class="animate-box">
							<h2>What languages are available?</h2>
							<p>Our staff can speak up to 60 languages also with translating machines on aid , we can never miss a word .</p>
						</li>
						<li class="animate-box">
							<h2>Any extra Charges whe i book online</h2>
							<p>Not at all thats actually a double discount on your side.</p>
						</li>
						<li class="animate-box">
							<h2>Can i Book in Advance paying in installments?</h2>
							<p>We want everyone to fly , come to us and we will assist you with necessary arrangemnts.</p>
						</li>
						<li class="animate-box">
							<h2>How do I get involved with Twist Airlines features?</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</li>
						<li class="animate-box">
							<h2>What else is for free</h2>
							<p>More and more every day subscribe for our news letter and keep checking on this site for extra exciting packages.</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	
	<div id="gtco-subscribe">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Subscribe</h2>
					<p>Be the first to know about the new packages.</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Your Email">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<button type="submit" class="btn btn-default btn-block">Subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>About <span class="footer-logo">Twist Airlines</span></h3>
						<p>Twist Airlines , new kid on the block with super exciting and cheap prices and overboard services. Book with us today! tomorrow might be too late for the experience of today. fly with us "we twist you there</p>
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
						<h3>Contact Us On </h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> +263734300522</a></li>
							<li><a href="#"><i class="icon-mail2"></i> info@Twistairlines.co.zw</a></li>
							<li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
						</ul>
					</div>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy;. All Rights Reserved.</small> 
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

