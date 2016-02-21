
<!DOCTYPE html>
<html>
<head>
<title>Project Cumbre Tech</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Appload Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/styles.css?v=1.6" rel="stylesheet">
<!-- js -->
<script src="js/jquery.min.js"></script>
<script src="js/scripts.js?v=1.7"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	<body class="cbp-spmenu-push">
		<!-- header -->
		<div class="header-bg">
					<section class="navigation">
							<div class="container-fluid">
								<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
								  <nav class="pull">
									<ul class="nav">
									  <li><a href="#home" class="scroll">Home</a></li>
									  <li><a href="#about" class="scroll">About</a></li>
									  <li><a href="#services" class="scroll">Services</a></li>
									 
									</ul>
								  </nav>
								</div>
							</div>
						</section>
						<div class="header-top">
							<div class="container">
								<div class="head-logo">
									<a href="index.html">Mobile App</a>
								</div>
								<div class="top-nav">
								<?php
									include_once("image.php");
								?>
                                </div>	
								
								<div class="clearfix"> </div>
							</div>
						</div>
			<div class="banner-info">
				<!-- container -->
				<div class="container">
					<div class="col-md-5 slid">
						<!--- banner Slider starts Here --->
							<script src="js/responsiveslides.min.js"></script>
						 <script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 4
							  $("#slider4").responsiveSlides({
								auto: true,
								pager: true,
								nav: true,
								speed: 500,
								namespace: "callbacks",
								before: function () {
								  $('.events').append("<li>before event fired.</li>");
								},
								after: function () {
								  $('.events').append("<li>after event fired.</li>");
								}
							  });
						
							});
						  </script>
						<!----//End-slider-script---->
						<div  id="top" class="callbacks_container">
							<ul class="rslides" id="slider4">
								<li>
									<?php
									include_once("mobileimage.php");
									?>
								</li>
								<li>
									<div class="mobile-device">
										<img src="images/mobile2.png" alt="" />
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-7 banner-info-left">
						<h2></h2>
						<p></p>
						<div class="banner-buttons">
							<div class="banner-button">
								<a href="#"><img src="images/1.png" alt="" /></a>
							</div>
							<div class="banner-button green-button">
								<a href="#"><img src="images/2.png" alt="" /></a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!-- //container -->
			</div>
		</div>
		<!-- //header -->
		<!-- banner-bottom -->
		<div id="services" class="banner-bottom">
			<!-- container -->
			<div class="container">
				<div class="banner-text">
					<h3>Services</h3>
					<p></p>
				</div>
				<div class="banner-bottom-grids">
					<div class="col-md-4 banner-bottom-grid">
						<div class="services-icon">
							<span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
						</div>
						<h4></h4>
						<p></p>
					</div>
					<div class="col-md-4 banner-bottom-grid red">
						<div class="services-icon">
							<span class="glyphicon glyphicon-th-large glyphicon-phone" aria-hidden="true"></span>
						</div>
						<h4></h4>
						<p></div>
					<div class="col-md-4 banner-bottom-grid green">
						<div class="services-icon">
							<span class="glyphicon glyphicon-th-large glyphicon-thumbs-up" aria-hidden="true"></span>
						</div>
						<h4></h4>
						<p> </p>
					</div>
					<div class="clearfix"> </div>
				</div>	
			</div>
			<!-- //container -->
		</div>
		<!-- //banner-bottom -->
		<!-- about -->
		<div id="about" class="about">
			<!-- container -->
			<div class="container">
				<div class="about-info">
					<h3>About Us</h3>
					<p class="caption">
					</p>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //about -->
		<!-- features -->
		
		<!-- //features -->
		<!-- plans -->
		
		<!-- //plans -->
		<!-- mail -->
		
		<!-- //mail -->
		<!-- footer -->
		<?php
		include_once("footer.php");
		?>
		<!-- //footer -->
		<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
									<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- content-Get-in-touch -->
	</body>
</html>
