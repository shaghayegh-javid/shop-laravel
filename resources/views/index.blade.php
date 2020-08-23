<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
    
    <title>ATLAS</title>
	<!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- end Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,500,600,700,800,300' rel='stylesheet' type='text/css'>
    <!-- owl carousel SLIDER -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- end awesome icons -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- lightbox -->
    <link href="css/prettyPhoto.css" rel="stylesheet">
    
    <!-- Animation Effect CSS -->
    <link rel="stylesheet" href="css/animation.css">
    <!-- Main Stylesheet CSS -->
    <link rel="stylesheet" href="css/style.css">
    
	<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body data-spy="scroll" data-offset="25">
<div class="animationload"><div class="loader">Loading...</div></div> <!-- End Preloader -->
       
    <!--/HEADER SECTION -->
    <header class="header">
        <div class="container">
            <div class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a href="index.php" class="navbar-brand">ATLAS <br> </a>
                        <div class="searchBox">
                            <input class="searchInput"type="text" name="" placeholder="Search">
                            <button class="searchButton" href="#">
                                <i class="material-icons">search</i>
                            </button>
                        </div>
                    </div><!-- end navbar-header -->

                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            {{--login mode--}}
                            @if (ucfirst(Auth()->user()) != null)
                            <li class="active"><a data-scroll href="#home" class="int-collapse-menu">Home</a></li>
                            <li><a data-scroll href="#offers" class="int-collapse-menu">Offers</a></li>
                            <li><a href="{{route('reduction')}}" class="int-collapse-menu">Reduction</a></li>
                            <li><a href="{{route('logout')}}">Logout</a></li>
                            <li><a  href="{{route('favourites')}}" class="int-collapse-menu">Favorites</a></li>
                            <li><a data-scroll href="#about" class="int-collapse-menu">about</a></li>
                            <li><a href="{{url('cart',ucfirst(Auth()->user()->id))}}" class="int-collapse-menu"><i class="material-icons">add_shopping_cart</i></a></li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">CATEGORY<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    @foreach ($category as $cat)
                                        <li><a href="{{ url('category',$cat->id) }}">{{ $cat->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @endif
                                @if (ucfirst(Auth()->user()) == null)
                                    <li class="active"><a data-scroll href="#home" class="int-collapse-menu">Home</a></li>
                                    <li><a data-scroll href="#offers" class="int-collapse-menu">Offers</a></li>
                                    <li><a href="{{route('login')}}">Login</a></li>
                                    <li><a href="{{route('registration')}}">register</a></li>
                                    <li><a data-scroll href="#about" class="int-collapse-menu">about</a></li>
                                @endif
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </div>
        </div><!-- end container -->
    </header><!-- end header -->
	

    <section id="home" class="sliderwrapper clearfix">
	    <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
       			  <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                        <!-- MAIN IMAGE -->
                        <img src="demos/slider2.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
        				<div class="tp-dottedoverlay twoxtwo"></div>
 
                        <!-- LAYER NR. 3 -->
                         <div class="tp-caption rev-video  customin customout start"
                            data-x="center"
                            data-hoffset="0"
                            data-y="140"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1000"
                            data-start="500"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><hr class="topline"><h2>24-hour<br> response  <br> ;)</h2><hr class="bottomline">
                        </div>
    
                        <!-- LAYER NR. 4 -->
                         <div class="tp-caption rev-video2 customin customout start"
                            data-x="center"
                            data-hoffset="0"
                            data-y="340"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="2200"
                            data-start="500"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><p> join atlas </p>
                        </div>
                    </li>
                    
                     <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                        <!-- MAIN IMAGE -->
                        <img src="demos/slide1.jpg"  alt="slidebg2"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
        				<div class="tp-dottedoverlay twoxtwo"></div>
                        
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption rev-video skewfromleft customout"
                            data-x="center"
                            data-y="140"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="800"
                            data-start="1500"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            data-endeasing="Power1.easeIn"
                            data-captionhidden="on"
                            style="z-index: 6"><hr class="topline"><h2> Variety  <br> of goods</h2><hr class="bottomline">
                        </div>
    
                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption rev-video2 skewfromright customout"
                            data-x="center" data-hoffset="0"
                            data-y="340"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="800"
                            data-start="1700"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            data-endeasing="Power1.easeIn"
                            data-captionhidden="on"
                            style="z-index: 7"><p> join atlas </p>
                        </div>
                    </li>
					
					<li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                        <!-- MAIN IMAGE -->
                        <img src="demos/parallax_02.jpg"  alt="slidebg3"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
        				<div class="tp-dottedoverlay twoxtwo"></div>
                        
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption rev-video skewfromleft customout"
                            data-x="center"
                            data-y="140"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="800"
                            data-start="1500"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            data-endeasing="Power1.easeIn"
                            data-captionhidden="on"
                            style="z-index: 6"><hr class="topline"><h2>Fast and cheap <br>delivery</h2><hr class="bottomline">
                        </div>
    
                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption rev-video2 skewfromright customout"
                            data-x="center" data-hoffset="0"
                            data-y="340"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="800"
                            data-start="1700"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            data-endeasing="Power1.easeIn"
                            data-captionhidden="on"
                            style="z-index: 7"><p> join atlas </p>
                        </div>
                    </li>
		          </ul>
		          <div class="tp-bannertimer"></div>
            </div>
		</div>
    </section><!-- end slider-wrapper -->
	
            

    <!--/ offers SECTION -->
    <section id="offers" class="dark-wrapper">
        <div class="container">
            <div class="title text-center">
                <h2>Offers</h2>
                <hr>
            </div><!-- end title -->
                 

                 
				<div class="norow">
					<div class="masonry_wrapper" data-scroll-reveal="enter from the bottom after 0.5s">

                    <?php $i=0;  ?>

                        @foreach ($rand_keys = array_rand($posts, 6) as $post)
                                    <div class="item entry item-h2 photography print">
                                   <?php $u= $posts[$post]->artistID; ?>
                                 <a href="{{ url('artist/'.$u.' ') }}"><img src="data:image/png;base64,{{ chunk_split(base64_encode($posts[$post]->post)) }}" alt="" class="img-responsive">
                                 <?php $i++; ?>
                                    <div class="hovereffect">

                                        <div class="buttons">
                                            <h4>{{ $posts[$post]->price }}</h4>
                                            <h5>$rial$</h5>
                                        </div><!-- end buttons -->
                                    </div><!-- end hovereffect -->
                                 </a>
                              </div>

                        @endforeach

				</div><!-- end portfolio-masonry -->
			</div><!-- end row -->      
        </div> <!-- end Container-->      
    </section><!-- end work -->



<!--/ FEATURE SECTION -->
<section id="featured_parallax" class="parallax" style="background-image: url('demos/buy.jpg');" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="20">
    <div class="overlay">
        <div class="container">
            <div class="featured-box" data-effect="slide-bottom">
                {{--<h3>THIS IS ATLAS <br>THE ART IS HERE</h3>--}}
                <img class="img-respnsive" src="images/banner.png"  >
            </div>
        </div><!-- end container -->
    </div><!-- end overlay -->
</section><!--/ Featured Parallex -->



    <!--/ ABOUT SECTION -->
    <section id="about" class="about-wrapper">
        <div class="container">
            <div data-scroll-reveal="enter from the bottom after 0.3s" class="title text-center">
                <h2>About us</h2>
                {{--<p>ETIAM DIGNISSIM LEO VESTIBULUM VOLUTPAT MORB</p>--}}
                <hr>
            </div><!-- end title -->

            <div class="clearfix">
                <div class="widget-wrapper">
                    <div class="container">
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                            <div class="widget">
                                <h3>HOW WE MADE <span>Atlas</span> AND WHY?</h3>
                                <p>
                                    We also used laravel.Laravel is a free, open-source PHP web framework,
                                    created by Taylor Otwell and intended for the development of web applications following the model–view–controller
                                    architectural pattern and based on Symfony. Laravel is a web application framework with expressive, elegant syntax.</a> </p>

                            </div><!-- end widget -->
                        </div><!-- end col-lg-6 -->


                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <div class="widget">
                                <div class="entry">
                                    <img src="images/banner.png" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <div class="buttons">
                                            <a class="st" rel="bookmark" href="images/banner.png"><i class="fa fa-link"></i></a>
                                        </div><!-- end buttons -->
                                    </div><!-- end magnifier -->
                                    <div class="post-type">
                                        <i class="fa fa-picture-o"></i>
                                    </div><!-- end pull-right -->
                                </div><!-- end entry -->
                            </div><!-- end widget -->
                        </div><!-- end col-lg-6 -->
                    </div><!-- end container -->
                </div>
            </div>

        </div><!-- end container -->

    </section><!-- End About Section -->

        
    <!--/ FOOTER SECTION-->  
    <section id="footer" class="footer-wrapper text-center">
        <div class="container">
            <div class="title text-center" data-scroll-reveal="enter from the bottom after 0.5s">
            <div class="aligncenter">     
                <a href="index.php" class="navbar-brand">ATLAS</a>
                <p>All rights reserved by Atlas. Any copy of this site
                    It is illegal.</p>
                <p>Designed in 2019</p>
                <a data-scroll-reveal="enter from the bottom after 0.3s" href="#home"><i class="fa fa-angle-up"></i></a>
            </div>
            </div>    <!-- end title -->
        </div>  <!-- end container -->
    </section><!--/ Footer  End --> 
     
     
    <!-- SECTION CLOSED -->


    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>   
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/smooth-scroll.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/jquery.easypiechart.min.js"></script>
    <script src="js/owl.carousel.js"></script>
	<script src="js/jquery.jigowatt.js"></script>
    <script src="js/custom.js"></script>
	<script src="js/jquery.unveilEffects.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
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
    <script type="text/javascript" src="js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
        
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
    <script src="js/scrollReveal.js"></script>
    <script>
        (function($) {
        "use strict"
            window.scrollReveal = new scrollReveal();
            })(jQuery);
    </script>
    
    <!-- Portofolio Pretty photo JS -->       
    <script src="js/jquery.prettyPhoto.js"></script>
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
    <script src="js/jquery.mb.YTPlayer.js"></script>    
    <script type="text/javascript">
      (function($) {
        "use strict"
          $(".player").mb_YTPlayer();
        })(jQuery);	
    </script>
    
</body>
</html>