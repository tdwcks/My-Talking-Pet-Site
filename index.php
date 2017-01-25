<!DOCTYPE html>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>My Talking Pet</title>
<meta name="description" content="Bring Photos of your Pet to life!"/>
</head>
<body>
	<?php include_once("analyticstracking.php") ?>
	<?php include 'includes/header.php'; ?>
	<article class="home">
		<section class="hero">
			<img class="lazy" data-original="images/bg.jpg">
			<div class="grid-container">
				<div class="row">
					<div class="col-6">
						<h1>Bring photos of your </br> pet to life!</h1>
						<div class="button-holder">
							<a class="ios-store" href="https://itunes.apple.com/gb/app/my-talking-pet/id662090840?mt=8"></a>
							<a class="play-store" href="https://play.google.com/store/apps/details?id=info.wobamedia.mytalkingpet.plus&hl=en_GB"></a>
						</div>
						<div class="image">
							<iframe allowfullscreen="" frameborder="0" height="315" src="http://www.youtube.com/embed/cYMCLz5PQVw" width="420"></iframe>
						</div>
					</div> <!-- col-6 -->
				</div> <!-- row -->
			</div> <!-- grid-container -->
		</section> <!-- hero -->
		<section class="about">
			<div class="grid-container">
				<div class="col-6">
					<img class="lazy" data-original="images/logo-white.svg">
				</div>
				<div class="col-6">
					<p>For iPad, iPhone and iPod touch, and now all Android devices.</p>
					<p>Take a photo or choose from your photo gallery, then speak into the microphone to see your pet realistically speak back to you!</p>
					<p>Share it as a video on Facebook, or email it as a special greeting to your friends and family.</p>
					<p>Change the voice from big dog to little cat or anything in between.</p>
				</div>
			</div>
		</section>
		<section class="screen-slider">
			<div class="grid-container">
				<div class="swiper-container">
			        <div class="swiper-wrapper">
			            <div class="swiper-slide"><img class="lazy" data-original="images/iphone7-1.png"></div>
			            <div class="swiper-slide"><img class="lazy" data-original="images/iphone7-2.png"></div>
			            <div class="swiper-slide"><img class="lazy" data-original="images/iphone7-3.png"></div>
			            <div class="swiper-slide"><img class="lazy" data-original="images/iphone7-4.png"></div>
			            <div class="swiper-slide"><img class="lazy" data-original="images/iphone7-4.png"></div>
			        </div>
			        <!-- Add Pagination -->
			        <div class="swiper-pagination"></div>
			        <div class="swiper-button-next"></div>
        			<div class="swiper-button-prev"></div>
			    </div>
			</div>
		</section>
	</article> <!-- home -->
	<?php include 'includes/footer.php'; ?>
</body>

</html>