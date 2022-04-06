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

	<div id="initial-loader" class="padded"><span id="loader-text"></span></div>
	<div id="main-body">
	<section id="page-structure" class="ajax">
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
                        <iframe src="//www.beatstars.com/embed/widget/?id=535191&theme=light&autoplay=no" width="100%" height="600" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    	</section>
        <script src="https://w.soundcloud.com/player/api.js" type="text/javascript"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" type="text/javascript"></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/r70/three.min.js'></script>
		<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-18/CopyShader.js'></script>
		<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/141552/03_glitch.js'></script>
		<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-18/EffectComposer.js'></script>
		<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-18/RenderPass.js'></script>
		<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-18/ShaderPass.js'></script>
		<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-18/MaskPass.js'></script>
		<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/141552/08_texturepass.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.min.js'></script>
		<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-18/GlitchPass.js'></script>
        <script>
        $(document).ready(function() {
            var finishLine = SC.Widget("finish-line");
            $("#enter").click(function() {
                $("#first-page").hide();
                $("#third-page").hide();
                $("#second-page").show();
                finishLine.play();
            });
            $("#shop").click(function() {
                $("#first-page").hide();
                $("#second-page").hide();
                $("#third-page").show();
                finishLine.pause();
            });
            $(".return").click(function() {
                $("#first-page").hide();
                $("#third-page").hide();
                $("#second-page").show();
            });

	// CANVAS & MOBILE TEST
	var windowWidth = $(window).width(),
		windowHeight = $(window).height();
	var isMobile = navigator.userAgent.match(/mobile/i);
	var webGLTrue = false;

	if (window.WebGLRenderingContext) {
		webGLTrue = true;
	}

	// CLASSES
	if (isMobile) {
		$('body').addClass('mobile');
	}
	else if (!isMobile) {
		$('body').addClass('desktop');
	}

	// GLOBAL VARIABLES
	var img,
		canvas,
		container,
		imgRatio,
		containerRatio;
	var screenShotCanvas,
		canvasDataURL,
		canvasImage,
		screenCaptured = false,
		animateable = true,
		popstate = false,
		isFourOhFour = false,
		inputReady = true;

	var seriously,
	    sourceImage,
	    layers,
	    edge,
	    blend1,
	    linearGreen,
	    scale1,
	    blend2,
	    linearPurple,
	    scale2,
	    blend3,
	    blend4,
	    blend5,
	    target;

	// INITIAL LOAD FUNCTIONS
	startupFunctions();

	$(window).load(function(){
		if (webGLTrue) {
			captureScreen($('.ajax'));
		}
		initialLoader();
	});

	function startupFunctions() {
		if (isMobile) {
			$('body').removeClass('noscroll');
		}

		widowControl();
	}

	// IMAGE FUNCTIONS
	function imageFunctions() {

		var slickDrag = false;
		if (isMobile) {
			slickDrag = true; 
		}
	}

	// DEBOUNCE FUNCTION
	function debounce(func, wait, immediate) {
		var timeout;

		return function() {
			var context = this, args = arguments;
			var later = function() {
				timeout = null;
				if (!immediate) func.apply(context, args);
			}; 
			var callNow = immediate && !timeout;
			clearTimeout(timeout);
			timeout = setTimeout(later, wait);
			if (callNow) func.apply(context, args);
		};
	};

	var debounceAdjust = debounce(function() {
		widowControl();
	}, 50);
  
	window.addEventListener('resize', debounceAdjust);

	// WIDOW CONTROL
	function widowControl() {
		windowWidth = $(window).width();
		var widowElements = $('h1, h2, h3, h4, h5, h6, li, p, figcaption, .case-study-tagline, .large-cta').not('.discovery_cell p, #site-nav li, footer li');


		widowElements.each(function() {
			$(this).html($(this).html().replace(/&nbsp;/g, ' '));
		});

		if (windowWidth > 640) {
			widowElements.each(function() {
			    $(this).html($(this).html().replace(/\s((?=(([^\s<>]|<[^>]*>)+))\2)\s*$/,'&nbsp;$1'));
			});
		}
	};

	// HTML CANVAS & INITIAL LOAD FUNCTIONS
	function captureScreen(element) {
		html2canvas(element, {
			letterRendering: true,
			allowTaint: true,
      onrendered: function(canvas){
        screenShotCanvas = canvas;
				canvasDataURL = screenShotCanvas.toDataURL();
        canvasImage = new Image();
        canvasImage.src = canvasDataURL;
        screenCaptured = true;
        console.log(canvas);
      }
    });
	}

	function initialLoader() {
		$('body').removeClass('noscroll');

		var loadText = 'loading...-adolescent music...-preparing your entry...';
		var loaderDone = false;
		$.each(loadText.split(''), function(i, letter){
			setTimeout(function(){
				if (letter === "-") {
					$('#loader-text').html($('#loader-text').html() + "<br>");
				} else {
					$('#loader-text').html($('#loader-text').html() + letter);
				}
			}, 70*i);
		});

		setTimeout(function(){
			loaderDone = true;
		}, 4000);


		//check to make sure the document has been fully loaded before removing loader
		var readyStateCheckInterval = setInterval(function() {
		    if (document.readyState === "complete" && loaderDone ) {
		        clearInterval(readyStateCheckInterval);
				$('#initial-loader').velocity({
					translateZ: 0,
				    opacity: 0
				}, {
					display: 'none',
					delay: 0,
					duration: 800
				});

				if (webGLTrue) {
		        	loadPageCanvas();

			        setTimeout(function(){
			        	removePageCanvas();
			        	$('#initial-loader').remove();
			        }, 500);
				}
				else {
					setTimeout(function(){
			        	$('#initial-loader').remove();
			        }, 1001);
				}
		    }
		}, 10);
	}



	// GLITCHING
	function initializeGlitch(image, height) {
		var container,
			stats;

		var camera,
			scene,
			sceneBG,
			renderer,
			composer,
			composerScene;

		var mesh,
			light,
			dotEffect,
			shiftEffect,
			sepiaEffect;

		var glitchDtSize = 100,
			glitchDelay = 1,
			glitchAmplification = .5;

		var fps = 20;
		if (isFourOhFour) {
			fps = 5;
		}

		var SCREEN_WIDTH = window.innerWidth;
		var SCREEN_HEIGHT = height;
		var ratio = SCREEN_WIDTH / SCREEN_HEIGHT;

		if (height > 4096){
			SCREEN_HEIGHT = 4096;
		}

		var windowHalfX = window.innerWidth / 2;
		var windowHalfY = height / 2;

		var delta = 0.1;

		function init(){
			scene = new THREE.Scene();
			sceneBG = new THREE.Scene();

			camera = new THREE.OrthographicCamera( -windowHalfX, windowHalfX, windowHalfY, -windowHalfY, 1, 10000 );
		    camera.position.z = 100;

			//background
			background = new THREE.MeshBasicMaterial({
			  map: THREE.ImageUtils.loadTexture(image),
			  depthTest: false
			});

			background.map.needsUpdate = true;
			var plane = new THREE.PlaneBufferGeometry(1, 1);

			var bgMesh = new THREE.Mesh(plane, background);
			bgMesh.position.z = 1;
			bgMesh.scale.set( SCREEN_WIDTH, height, 1 );
			sceneBG.add(bgMesh);

			bgMesh.material.map.needsUpdate = true;


			var sceneMask = new THREE.Scene();

			renderer = new THREE.WebGLRenderer();
			renderer.setClearColor( 0xffffff );
			renderer.setSize( window.innerWidth, window.innerHeight );
			renderer.setPixelRatio( window.devicePixelRatio );
			renderer.autoClear = false;

			renderer.gammaInput = true;
			renderer.gammaOutput = true;

			renderBackground = new THREE.RenderPass( sceneBG, camera);

			$(renderer.domElement).attr('id', 'loader').css('height', height);
			$('#main-body').append( renderer.domElement );
			
			var rtParameters = { minFilter: THREE.LinearFilter, magFilter: THREE.LinearFilter, format: THREE.RGBFormat, stencilBuffer: true };

			var clearMask = new THREE.ClearMaskPass();

			composer = new THREE.EffectComposer( renderer, new THREE.WebGLRenderTarget( SCREEN_WIDTH, SCREEN_HEIGHT, rtParameters ) );
			renderScene = new THREE.TexturePass( composer.renderTarget2 );
			composer.addPass(renderBackground);
			composer.addPass(clearMask);

			composer1 = new THREE.EffectComposer( renderer, new THREE.WebGLRenderTarget( SCREEN_WIDTH, SCREEN_HEIGHT, rtParameters ) );

			var glitch = new THREE.GlitchPass(glitchDtSize, glitchDelay, glitchAmplification);
			glitch.renderToScreen = true;
			
			composer1.addPass(renderScene);
			composer1.addPass(glitch);

			renderScene.uniforms[ 'tDiffuse' ].value = composer.renderTarget2;
		}

		function render() {
			renderer.clear();
			composer.render(delta);
			composer1.render(delta);
		}

		function animate() {
			if (animateable){
				setTimeout(function(){
					render();
					requestAnimationFrame( animate );
				}, 1000 / fps);
			}
		}

		init();
		animate();
	}

	function loadPageCanvas() {
		$('html').velocity('scroll', {
			axis: 'y',
			duration: 1000,
			mobileHA: false
		});

		animateable = true;

		initializeGlitch(canvasDataURL, screenShotCanvas.height);

		$('#loader').velocity({
		    opacity: [1, 0]
		}, {
			duration: 1000
		});
	}


	function removePageCanvas() {
		$('#loader').velocity({
		    opacity: 0
		}, {
			delay: 500,
			duration: 1000
		});

		setTimeout(function(){
			animateable = false;
			$('#loader').remove();
		}, 1600);
	}

	function loadPageStatic() {
		$('body').prepend('<div id="initial-loader" class="padded" style="opacity: 0;"><span id="loader-text"></span></div>');

		$('#initial-loader').velocity({
			translateZ: 0,
		    opacity: 1
		}, {
			duration: 150
		});
	}

	function removePageStatic() {
		var loadText = 'Loaded';
		$.each(loadText.split(''), function(i, letter){
			setTimeout(function(){
				$('#loader-text').html($('#loader-text').html() + letter);
			}, 60*i);
		});

		$('#initial-loader').velocity({
			translateZ: 0,
		    opacity: 0
		}, {
			display: 'none',
			delay: 900,
			duration: 500
		});

		setTimeout(function(){
			$('#initialLoader').remove();
		}, 1401);
	}    
});
        </script>
    </body>
</html>