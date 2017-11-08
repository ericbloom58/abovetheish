<!DOCTYPE html>
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<meta name="viewport" content="width=device-width">
	
	<title>ATI | Above the Ish</title>
	
    <!-- This file is part of a site template for sale at ThemeForest.net.
         See: http://themeforest.net/user/dilipkumar/portfolio
         Copyright 2013 Dilip Kumar -->

    <!-- CSS-->
	<link rel="stylesheet" type="text/css" href="/css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="/css/foundation.css"/>
	<link rel="stylesheet" type="text/css" href="/css/style.css"/>
	<link rel="stylesheet" type="text/css" href="/css/flexslider.css"/>
	<link rel="stylesheet" type="text/css" href="/css/prettyphoto.css" />

    <!-- FAVICON-->
	<link rel="shortcut icon" href="/images/favicon.ico">

    <!-- GOOGLE WEBFONT-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800' rel='stylesheet' type='text/css'>

</head>
<body>

<!--Slider wrap section-->
<div class="slider">
	<div class="row">
		<!--Header section-->
		<div class="twelve columns" id="header">
			<div class="four columns logo uppercase">
				<h1><a href="/">Above the Ish</a></h1>
			</div>

			<div class="eight columns no-padding">
				<ul id="navigation">
					<li><a href="/">Home</a></li>
					<li><a href="/pages/aboutus">About Us</a></li>
					<li><a href="/pages/services">Services</a></li>	
					<li><a href="/pages/memberbenefits">Membership Benefits</a></li>
					<li><a href="/users/login">Member Log-In</a></li>
					<li><a href="/pages/findanadvisor">Find an Advisor</a></li>
					<!--<li><a href="mailto:someone@website.com">Find an Advisor</a></li>-->
				</ul>
			</div>

<!--			<div class="two columns ">
				<ul class="social-networks">
					<li><a href="#"><img src="images/tweet.png" alt=""/></a></li>
					<li><a href="#"><img src="images/fb.png" alt=""/></a></li>
					<li><a href="#"><img src="images/ghub.png" alt=""/></a></li>
					<li><a href="#"><img src="images/linkedin.png" alt=""/></a></li>
				</ul>
			</div>-->
		</div>
		<!--Header section-->

	</div>
</div>
<!--Slider wrap section-->

            <?php echo $this->Session->flash(); ?>
            <?php echo $this->fetch('content'); ?>

<div class="space80"></div>
<div class="clear"></div>

<!-- Footer section -->
<div class="footer">
	<div class="row">
		<!-- Contact details widget -->
		<div class="three columns footer-widget">
			<h6>Contact</h6>
			<ul class="contact-details">
				<li class="address">#12B, Abcd Street xyz company XY 12345</li>
				<li class="phone">+1800 1234 5678</li>
				<li class="email">Support@website.com</li>
				<li class="email">johndoe@website.com</li>
			</ul>
		</div>
		<!-- Contact details widget -->

		<!-- News widget -->
		<div class="six columns footer-widget">
		</div>
		<!-- News widget -->

		<!-- About widget -->
		<div class="three columns footer-widget">
			<h6>About</h6>
                        <p>Here at Above the Ish we will help you compare and select different Intuit Products.</p>
                </div>
		<!-- About widget -->


		<!-- Footer copyright -->
		<div class="twelve columns no-padding copyright-wrap">
			<div class="four columns copy">
			</div>

			<div class="eight columns">
				<ul class="footer-nav">
					<li><a href="/">Home</a></li>
					<li><a href="/pages/aboutus">About Us</a></li>
					<li><a href="/pages/services">Services</a></li>	
					<li><a href="/pages/memberbenefits">Membership Benefits</a></li>
					<li><a href="/admin_login">Member Log-In</a></li>
					<li><a href="/pages/findanadvisor">Find an Advisor</a></li>
				</ul>
			</div>
		</div>
		<!-- Footer copyright -->
	</div>
</div>
<!-- Footer section -->


<!-- //SCRIPTS -->
<script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/js/foundation.min.js"></script>
<script type="text/javascript" src="/js/app.js"></script>
<script type="text/javascript" src="/js/modernizr.foundation.js"></script>
<script type="text/javascript" src="/js/jquery.foundation.tabs.js"></script>
<script type="text/javascript" src="/js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script type="text/javascript" src="/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="/js/jquery.prettyphoto.js"></script>
<script type="text/javascript" src="/js/main.js"></script>

<!-- //TWEETS PLUGIN -->
<script type="text/javascript" src="tfeed/jquery.tweet.js"></script>
<!-- Preloader -->
<script type="text/javascript">
       //<![CDATA[
	$(document).ready(function () {
		$('.tweet').tweet({
		username: "envato",
		modpath: 'tfeed/',
		count: 2,
		loading_text: 'loading twitter feed...',
		});
		});
       //]]>
</script> 

<!-- Preloader -->
<script type="text/javascript">
       //<![CDATA[
	$(window).load(function() {
		jQuery(".list_carousel").fadeIn(1000).show();
	});
	//]]>
</script> 

</body>
</html>
