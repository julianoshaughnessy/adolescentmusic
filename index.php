<!doctype html>
<html class="no-js" lang="en" ng-app="main">
<head>
    <title>Adolescent Music</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="copyright" content="&copy; adolescent music <?=date("Y");?>, All rights reserved."/>

    <link rel="canonical" href="//adolescentmusic.com"/>
    <link rel="shortcut icon" href="https://i.imgur.com/Vn93OQJ.png" type="image/x-icon"/>
    <link rel="icon" href="https://i.imgur.com/Vn93OQJ.png" type="image/png"/>

    <meta name="description" content="<?=$description;?>"/>
    <meta property="og:description" content="<?=$description;?>"/>
    <meta name="twitter:description" content="<?=$description;?>"/>

    <meta property="og:title" content="Adolescent Music"/>
    <meta property="og:image" content="https://i.imgur.com/Vn93OQJ.png"/>
    <meta property="og:site_name" content="Adolescent Music"/>
    <meta property="og:url" content="//adolescentmusic.com"/>
    <meta property="og:type" content="website"/>
    <meta property="og:locale" content="en-US" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="Adolescent Music" />
    <meta name="twitter:title" content="Adolescent Music" />
    <meta name="twitter:description" content="<?=$description;?>" />
    <meta name="twitter:image" content="https://i.imgur.com/Vn93OQJ.png" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/animate.css">
	<link rel="stylesheet" href="/css/main.css">
</head>

<body>
	<!--[if lte IE 9]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<div id="particles"></div>

    <div class="wrapper">
        <nav id="sidebar" class="active">
            <div class="sidebar-header">
                <h3>Adolescent Music</h3>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                </li>
                <li>
                    <a href="#!music"><i class="fa fa-headphones"></i> Music</a>
                </li>
                <li>
                    <a href="#!shop"><i class="fa fa-shopping-cart"></i> Beats Shop</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="http://instagram.com/adolescentmusic"><i class="fab fa-instagram"></i> Instagram</a>
                </li>
                <li>
                    <a href="http://twitter.com/adolescentmov"><i class="fab fa-twitter"></i> Twitter</a>
                </li>
                <li>
                    <a href="http://soundcloud.com/adolescentmov"><i class="fab fa-soundcloud"></i> Sound Cloud</a>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="fab fa-spotify"></i> Spotify (Soon™)</a>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="fab fa-apple"></i> Apple Music (Soon™)</a>
                </li>
            </ul>
        </nav>

        <div id="content">
            <button type="button" id="sidebarCollapse" class="navbar-btn active">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <script type="text/ng-template" id="pages/home.html">
                    <div class="enter-screen vertical-center">
                        <div class="container">
                            <div>
                                <img src="https://i.imgur.com/Vn93OQJ.png" width="250px" height="250px" style="width: 250px; height: 250px;margin: auto;margin-bottom:20px;">
                            </div>
                            <div><a href="#!music" class="btn btn-outline-danger btn-lgx">ENTER</a></div>
                        </div>
                    </div>
            </script>

            <script type="text/ng-template" id="pages/music.html">
                <div class="page">
                    <div class="vertical-center">
                        <div class="container" style="text-align: center;">
                            <div class="enter-screen">
                                <img src="https://i.imgur.com/Vn93OQJ.png" width="250px" height="250px" style="width: 250px; height: 250px;margin: auto;margin-bottom:20px;">
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <iframe id="headshot" width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/531867312&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
                                        <br><iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/449025528&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
                                        <br><iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/411752457&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
                                        <br><iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/390613080&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
                                        <br><iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/351684136&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </script>

            <script type="text/ng-template" id="pages/shop.html">
                <div class="enter-screen vertical-center">
                    <div class="container">
                        <div>
                            <img src="https://i.imgur.com/Vn93OQJ.png" width="250px" height="250px" style="width: 250px; height: 250px;margin: auto;margin-bottom:20px;">
                        </div>
                        <div>
                             <iframe src="//www.beatstars.com/player/?storeId=66926" scrolling="no" width="100%" height="650" style="max-width:1024px;" frameborder="0" marginheight="0" marginwidth="0"> -- none -- </iframe>
                        </div>
                    </div>
                </div>
            </script>

            <div ng-view></div>
        </div>
    </div>

	<script src="/js/vendor/modernizr-3.6.0.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script>window.jQuery || document.write('<script src="/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.5/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.5/angular-route.min.js"></script>
	<script src="/js/vendor/particles.min.js"></script>
	<script src="/js/plugins.js"></script>
	<script src="/js/main.js"></script>
</body>
</html>