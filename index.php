<?php
$title = '';
?>
<!DOCTYPE html>
<html>
	<head>
		<?php require('includes/head.php') ?>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-11958202-8', 'thesourabh.github.io');
		  ga('send', 'pageview');
		</script>
	</head>
	<body>
		<div class="main">
			<!-- Header -->
			<?php require('includes/header.php') ?>
			<!-- Header close -->
			<!-- Content body -->
			<div class="content">
				<div class="col fleft">
					<h2>Now Showing</h2>
					<a href="movie.php?m=1&d=1"><div class="movie-box"><img alt="picture" src="images/posters/1.jpg" /></div></a>
					<a href="movie.php?m=2&d=1"><div class="movie-box"><img alt="picture" src="images/posters/2.jpg" /></div></a>
					<a href="movie.php?m=3&d=1"><div class="movie-box"><img alt="picture" src="images/posters/3.jpg" /></div></a>
				</div>
				<div class="col fright">
					<h2>Coming Soon</h2>
					<a href="movie.php?m=4&d=1"><div class="movie-box"><img alt="picture" src="images/posters/4.jpg" /></div></a>
					<a href="movie.php?m=5&d=1"><div class="movie-box"><img alt="picture" src="images/posters/5.jpg" /></div></a>
					<a href="movie.php?m=6&d=1"><div class="movie-box"><img alt="picture" src="images/posters/6.jpg" /></div></a>
				</div>
				<div class="col fleft">
					<h2>Promotions</h2>
					<a href="#"><div class="movie-box">
					Student Deal*: Get 50% off by showing a valid student ID card from any recognized educational institution.
					</div></a>
					<a href="#"><div class="movie-box">
					SBI Tuesdays*: Use your SBI Credit Card and get 1 movie ticket free on purchase of 2 on Tuesdays.
					</div></a>
				</div>
				<div class="clearfix"></div>
			</div>
			<!-- Content body close -->
			<!-- Footer -->
			<?php require('includes/footer.php') ?>
			<!-- Footer close -->
		</div>
	</body>
</html>