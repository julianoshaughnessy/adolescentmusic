<?php
$description = "Adolescent Music";
?>
<!DOCTYPE html>
<html lang="en">
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

        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="style/animate.css"/>

        <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"/></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"/></script>
        <![endif]-->
        <style>
        @font-face {
            font-family: "germanika";
            src: url("font/germanika.ttf") format("truetype");
        }
        @font-face {
            font-family: "VCR";
            src: url("font/VCR_OSD_MONO.ttf") format("truetype");
        }
        #first-page { 
            background: black;
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
            color: #CA0814;
        }
        #first-page .content *:hover {
            text-decoration: none;
            text-align: center;
            color: #CA0814;
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
          -webkit-text-size-adjust: none; }

        body {
          height: 100%;
          width: 100%;
          position: relative;
          overflow-x: hidden; }
        </style>
        <link rel='stylesheet prefetch' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/141552/style.css'>
    </head>
    <body>

    <div id="main-body">
    <section id="page-structure">
        <div id="first-page">
            <div id="main-body" class="content vertical-center ajax">
                <div class="container">
                    <div>
                        <img src="https://i.imgur.com/LKq46te.png" width="250px" height="250px" style="width: 250px; height: 250px;margin: auto;">
                    </div>
                    <div><a id="enter" href="javascript:void(0)">enter&nbsp;<i class="fa fa-arrow-right"></i></a></div>
                </div>
            </div>
        </div>
        <div id="second-page">
            <div class="content vertical-center">
                <div class="container">
                    <div class="logo">
                        <img src="https://i.imgur.com/Vn93OQJ.png">
                        <div>adolescent music</div>
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
                    </div>
                    <div class="player">
                        <iframe id="finish-line" width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/411752457&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
                        <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/390613080&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
                        <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/351684136&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
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
                                <img src="https://i.imgur.com/Vn93OQJ.png">
                                <div>adolescent music</div>
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
                        <iframe src="//www.beatstars.com/player/?storeId=66926" scrolling="no" width="100%" height="650" style="max-width:1024px;" frameborder="0" marginheight="0" marginwidth="0"> -- none -- </iframe>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <script src="https://w.soundcloud.com/player/api.js" type="text/javascript"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="//cdn.polyfill.io/v1/polyfill.min.js"></script>
    <script>window.lazySizesConfig = window.lazySizesConfig || {}; lazySizesConfig.lazyClass = 'lazyload'; lazySizesConfig.srcAttr = 'data-original'; lazySizesConfig.loadMode = 2; lazySizesConfig.expand = 600; lazySizesConfig.expFactor = 3;</script>
	<script src="https://nclud.com/js/lib.js"></script>
	<script src="https://nclud.com/js/three.js"></script>
        <script>
        $(document).ready(function() {
            var finishLine = SC.Widget("finish-line");
            $("#enter").click(function() {
                $("#first-page").hide();
                $("#third-page").hide();
                $("#second-page").show();
                // finishLine.play();
            });
            $("#shop").click(function() {
                $("#first-page").hide();
                $("#second-page").hide();
                $("#third-page").show();
                // finishLine.pause();
            });
            $(".return").click(function() {
                $("#first-page").hide();
                $("#third-page").hide();
                $("#second-page").show();
            });
        });
        </script>
    </body>
</html>