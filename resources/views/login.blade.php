<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ATLAS ARTIST</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- end Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,500,600,700,800,300' rel='stylesheet' type='text/css'>
    <!-- owl carousel SLIDER -->
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <!-- end awesome icons -->
    <link rel="stylesheet" href="../css/font-awesome.css">
    <!-- lightbox -->
    <link href="../css/prettyPhoto.css" rel="stylesheet">

    <!-- Animation Effect CSS -->
    <link rel="stylesheet" href="../css/animation.css">
    <!-- Main Stylesheet CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/artist-css.css">

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="../css/settings.css" media="screen" />
    <!-- artist css -->
    <link rel="stylesheet" href="../css/login-css.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{url('style.css')}}">
    <title>Login Form - Tutsmake.com</title>

</head>
<body>
<section id="works" class="dark-wrapper color-333">
    <div class="container">
        <div class="title text-center">

            <h2>this is ATLAS</h2>

            <h3>Art is here</h3>
            <hr>
        </div>
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <!-- Tabs Titles -->

                <!-- Icon -->
                <div class="fadeIn first">
                    <img src="demos/unknown.png" id="icon" alt="User Icon" />
                </div>

                <!-- Login Form -->


                    <form action="{{url('post-login')}}" method="POST" id="logForm">
                        {{ csrf_field() }}

                        <div class="form-label-group">
                            <input type="email" name="email" id="inputEmail" class="fadeIn second" placeholder="Email address" >
                            @if ($errors->has('email'))
                                <span class="error">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <div class="form-label-group">
                            <input type="password" name="password" id="inputPassword" class="fadeIn third" placeholder="Password">
                            @if ($errors->has('password'))
                                <span class="error">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        <input type="submit" class="fadeIn fifth" value="Sign In" action="index.php">
                        <div id="formFooter">
                            not registerd?
                            <a class="underlineHover" href="registration">Creat an acount</a>

                        </div>
                    </form>

                <!-- Remind Passowrd -->


            </div>
        </div>

    </div>
</section>

<!--/ FOOTER SECTION-->
<section id="footer" class="footer-wrapper text-center">
    <div class="container">
        <div class="title text-center" data-scroll-reveal="enter from the bottom after 0.5s">
            <div class="aligncenter">
                <a href="index.php" class="navbar-brand">ATLAS</a>
                <p>All rights reserved by Atlas. Any copy of this site
                    It is illegal.</p>
                <p>Designed in 2019</p>
                <a data-scroll-reveal="enter from the bottom after 0.3s" href="#works"><i class="fa fa-angle-up"></i></a>
            </div>
        </div>    <!-- end title -->
    </div>  <!-- end container -->
</section><!--/ Footer  End -->
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/smooth-scroll.js"></script>
<script src="../js/jquery.parallax-1.1.3.js"></script>
<script src="../js/jquery.easypiechart.min.js"></script>
<script src="../js/owl.carousel.js"></script>
<script src="../js/jquery.jigowatt.js"></script>
<script src="../js/custom.js"></script>
<script src="../js/jquery.unveilEffects.js"></script>
<script src="../js/jquery.isotope.min.js"></script>

<script>
	(function ($) {
		var $container = $('.masonry_wrapper'),
			colWidth = function () {
				var w = $container.width(),
					columnNum = 1,
					columnWidth = 0;
				if (w > 1200) {
					columnNum  = 3;
				} else if (w > 900) {
					columnNum  = 3;
				} else if (w > 600) {
					columnNum  = 2;
				} else if (w > 300) {
					columnNum  = 1;
				}
				columnWidth = Math.floor(w/columnNum);
				$container.find('.item').each(function() {
					var $item = $(this),
						multiplier_w = $item.attr('class').match(/item-w(\d)/),
						multiplier_h = $item.attr('class').match(/item-h(\d)/),
						width = multiplier_w ? columnWidth*multiplier_w[1]-4 : columnWidth-4,
						height = multiplier_h ? columnWidth*multiplier_h[1]*0.5-4 : columnWidth*0.5-4;
					$item.css({
						width: width,
						height: height
					});
				});
				return columnWidth;
			}

		function refreshWaypoints() {
			setTimeout(function() {
			}, 1000);
		}

		$('nav.portfolio-filter ul li a').on('click', function() {
			var selector = $(this).attr('data-filter');
			$container.isotope({ filter: selector }, refreshWaypoints());
			$('nav.portfolio-filter ul li a').removeClass('active');
			$(this).addClass('active');
			return false;
		});

		function setPortfolio() {
			setColumns();
			$container.isotope('reLayout');
		}

		isotope = function () {
			$container.isotope({
				resizable: true,
				itemSelector: '.item',
				masonry: {
					columnWidth: colWidth(),
					gutterWidth: 0
				}
			});
		};
		isotope();
		$(window).smartresize(isotope);
	}(jQuery));
</script>

<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="../js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="../js/jquery.themepunch.revolution.min.js"></script>

<script type="text/javascript">
	var revapi;
	jQuery(document).ready(function() {
		revapi = jQuery('.tp-banner').revolution(
			{
				delay:9000,
				startwidth:1170,
				startheight:500,
				hideThumbs:10,
				fullWidth:"off",
				fullScreen:"on",
				fullScreenOffsetContainer: ""
			});
	});	//ready
</script>



<!-- Animation Scripts-->
<script src="../js/scrollReveal.js"></script>
<script>
	(function($) {
		"use strict"
		window.scrollReveal = new scrollReveal();
	})(jQuery);
</script>

<!-- Portofolio Pretty photo JS -->
<script src="../js/jquery.prettyPhoto.js"></script>
<script type="text/javascript">
	(function($) {
		"use strict";
		jQuery('a[data-gal]').each(function() {
			jQuery(this).attr('rel', jQuery(this).data('gal'));
		});
		jQuery("a[data-gal^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',slideshow:false,overlay_gallery: false,theme:'light_square',social_tools:false,deeplinking:false});
	})(jQuery);
</script>

<!-- Video Player o-->
<script src="../js/jquery.mb.YTPlayer.js"></script>
<script type="text/javascript">
	(function($) {
		"use strict"
		$(".player").mb_YTPlayer();
	})(jQuery);
</script>
</body>
</html>







