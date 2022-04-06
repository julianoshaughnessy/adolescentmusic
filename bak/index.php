<?php
$description = "karorecordsworldwide";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Karo Records Worldwide</title>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="copyright" content="&copy; karorecordsworldwide <?=date("Y");?>, All rights reserved."/>
	<meta name="google-site-verification" content="14BexZMoP1gqvSbLZSfYigjUvfcXkroScK-HMUgMuqboi0" />

	<link rel="canonical" href="//karorecordsworldwide.com"/>
	<link rel="shortcut icon" href="https://i.imgur.com/obx06Fh.png" type="image/x-icon"/>
	<link rel="icon" href="https://i.imgur.com/obx06Fh.png" type="image/png"/>

	<meta name="description" content="<?=$description;?>"/>
	<meta property="og:description" content="<?=$description;?>"/>
	<meta name="twitter:description" content="<?=$description;?>"/>

	<meta property="og:title" content="karorecordsworldwide"/>
	<meta property="og:image" content="https://i.imgur.com/obx06Fh.png"/>
	<meta property="og:site_name" content="karorecordsworldwide"/>
	<meta property="og:url" content="//karorecordsworldwide.com"/>
	<meta property="og:type" content="website"/>
	<meta property="og:locale" content="en-US" />

	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="karorecordsworldwide" />
	<meta name="twitter:title" content="karorecordsworldwide" />
	<meta name="twitter:description" content="<?=$description;?>" />
	<meta name="twitter:image" content="https://i.imgur.com/obx06Fh.png" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="style/animate.css"/>

	<style>
	@font-face {
		font-family: "longshot";
		src: url("font/Long_Shot.ttf") format("truetype");
	}
	.btn-group-lg>.btn, .btn-lgx {
		padding: 0.95rem 1.5rem 0.5rem;
		font-size: 2.25rem;
		line-height: 0.8;
		border-radius: .3rem;
	}
	#first-page { 
		font-family: "VCR", Lato, sans-serif;
		font-size: 40px;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		width: 100%;
		height: 100%;
	}
	#first-page .vertical-center {
		min-height: 100%;
		min-height: 100vh;
		display: flex;
		align-items: center;
	}
	#first-page .content * {
		text-decoration: none;
		text-align: center;
	}
	#first-page .content button {
		font-family: "longshot", sans-serif;
	}

	#second-page { 
		background: rgb(255, 255, 255);
		font-family: 'germanika', sans-serif;
		font-size: 40px;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		width: 100%;
		height: 100%;
		display: none;
	}
	#second-page .vertical-center {
		min-height: 100%;
		min-height: 100vh;
		display: flex;
		align-items: center;
	}
	#second-page .content {
		text-align: center;
		color: white;
	}
	#second-page .content .logo {
		color: #CA0814;
		margin: auto;
	}
	#second-page .content .logo img {
		max-width: 150px;
		margin: auto;
	}
	#second-page .content .social {
		margin-bottom: 10px;
	}
	#second-page .content .social a {
		margin: 0px 20px;
		color: #CA0814;
		text-decoration: none;
	}

	#third-page { 
		background: rgb(255, 255, 255);
		font-family: 'germanika', sans-serif;
		font-size: 40px;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		width: 100%;
		height: 100%;
		display: none;
	}
	#third-page .vertical-center {
		min-height: 100%;
		min-height: 100vh;
		display: flex;
		align-items: center;
	}
	#third-page .content {
		text-align: center;
		color: white;
	}
	#third-page .content .logo {
		color: #CA0814;
		margin: auto;
	}
	#third-page .content .logo img {
		max-width: 150px;
		margin: auto;
	}
	#third-page .content .social {
		margin-bottom: 10px;
	}
	#third-page .content .social a {
		margin: 0px 20px;
		color: #CA0814;
		text-decoration: none;
	}
	#third-page .return {
		text-decoration: none;
		text-align: center;
		color: #CA0814;
	}
	#page-structure{
		height: 100vh;
	}
	html {
		min-height: 100%;
		height: 100%;
		-webkit-text-size-adjust: none; 
	}
	body {
		height: 100%;
		width: 100%;
		position: relative;
		overflow-x: hidden; 
		-webkit-overflow-scrolling:touch;
	}
	#main-body {
		overflow: inherit !important;
		-webkit-overflow-scrolling:touch;
	}
	nav,
	div,
	article,
	section,
	main,
	footer,
	header {
		display: block;
		position: relative;
		/*overflow: auto !important;*/
		-webkit-overflow-scrolling:touch;
	}
	#particles canvas {
		display: block;
		vertical-align: bottom;
		-webkit-transform: scale(1);
		-ms-transform: scale(1);
		transform: scale(1);
		opacity: 1;
		-webkit-transition: opacity .8s ease, -webkit-transform 1.4s ease;
		transition: opacity .8s ease, transform 1.4s ease;
	}

	#particles {
		width: 100%;
		height: 100%;
		position: fixed;
		z-index: -10;
		top: 0;
		left: 0
	}
	</style>
	<!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"/></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"/></script>
	<![endif]-->
</head>
<body>
	<div id="particles"></div>
	<div id="main-body">
		<section id="page-structure" class="ajax">
			<div id="first-page">
				<div id="main-body" class="content vertical-center ajax">
					<div class="container">
						<div>
							<img src="https://i.imgur.com/obx06Fh.png" width="250px" height="250px" style="width: 250px; height: 250px;margin: auto;">
						</div>
						<div><button type="button" class="btn btn-outline-danger btn-lgx">ENTER</button></div>
					</div>
				</div>
			</div>
			<div id="second-page">
				<div class="content vertical-center">
					<div class="container">
						<div class="logo">
							<img src="https://i.imgur.com/obx06Fh.png">
							<div>karorecordsworldwide</div>
						</div>
						<div class="row social">
							<div class="col-md-2 col-md-offset-1">
								<a target="_blank" href="javascript:void(0)"><i class="fa fa-soundcloud" style="font-size: 25px;"></i> soundcloud</a>
							</div>
							<div class="col-md-2">
								<a target="_blank" href="https://www.instagram.com/KaroRecords/"><i class="fa fa-instagram"></i> instagram</a>
							</div>
							<div class="col-md-2">
								<a target="_blank" href="https://twitter.com/KaroRecordsLLC"><i class="fa fa-twitter"></i> twitter</a>
							</div>
							<div class="col-md-2">
								<a target="_blank" href="mailto:me@julianoshaughnessy.com"><i class="fa fa-envelope"></i> contact</a>
							</div>
							<div class="col-md-2">
								<a id="shop" href="javascript:void(0)"><i class="fa fa-headphones"></i> shop</a>
							</div>
						</div>
						<div class="player">

						</div>
					</div>
				</div>
			</div>
			<div id="third-page">
				<div class="content vertical-center">
					<div class="container">
						<div class="row">
							<div class="col-md-offset-1 col-md-1">
								<div class="return pull-left hidden-sm hidden-xs" style="margin-top: 50px;">
									<a class="return" href="javascript:void(0)"><i class="fa fa-arrow-left"></i>&nbsp;return</a>
								</div>
							</div>
							<div class="col-md-8">
								<div class="logo">
									<img src="https://i.imgur.com/obx06Fh.png">
									<div>karorecordsworldwide</div>
								</div>
							</div>
						</div>
						<div class="row social">
							<div class="col-md-2 col-md-offset-1">
								<a target="_blank" href="http://soundcloud.com/adolescentmov"><i class="fa fa-soundcloud" style="font-size: 25px;"></i> soundcloud</a>
							</div>
							<div class="col-md-2">
								<a target="_blank" href="http://instagram.com/adolescentmusic"><i class="fa fa-instagram"></i> instagram</a>
							</div>
							<div class="col-md-2">
								<a target="_blank" href="http://twitter.com/adolescentmov"><i class="fa fa-twitter"></i> twitter</a>
							</div>
							<div class="col-md-2">
								<a target="_blank" href="mailto:me@julianoshaughnessy.com"><i class="fa fa-envelope"></i> contact</a>
							</div>
							<div class="col-md-2">
								<a id="shop" href="javascript:void(0)"><i class="fa fa-headphones"></i> shop</a>
							</div>
							<div class="col-md-2 hidden-md hidden-lg">
								<a class="return" href="javascript:void(0)"><i class="fa fa-arrow-left"></i>&nbsp;return</a>
							</div>
						</div>
						<div>

						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<script src="//karorecordsworldwide.com/script/particles.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function() {
			particlesJS.load('particles', '//karorecordsworldwide.com/script/particlesjs-config.json')

			// $("#enter").click(function() {
			// 	$("#first-page").hide();
			// 	$("#third-page").hide();
			// 	$("#second-page").show();
			// });
			// $("#shop").click(function() {
			// 	$("#first-page").hide();
			// 	$("#second-page").hide();
			// 	$("#third-page").show();
			// });
			// $(".return").click(function() {
			// 	$("#first-page").hide();
			// 	$("#third-page").hide();
			// 	$("#second-page").show();
			// });
		});
	</script>
</body>
</html>