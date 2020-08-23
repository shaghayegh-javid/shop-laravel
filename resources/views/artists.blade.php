<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
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

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="../css/settings.css" media="screen" />
    <!-- artist css -->
    <link rel="stylesheet" href="../css/artist-css.css">
    {{-- select2 --}}
    <link href="../css/select2.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body data-spy="scroll" data-offset="25">
   
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
                        <a href="index.html" class="navbar-brand">ATLAS</a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{route('home')}}" class="int-collapse-menu">Home</a></li>
                            <li><a data-scroll href="{{route('home')}}#offers" class="int-collapse-menu">Offers</a></li>
                            <li><a href="{{route('reduction')}}" class="int-collapse-menu">Reduction</a></li>
                            <li><a href="{{route('login')}}">Login</a></li>
                            <li><a href="{{route('registration')}}">register</a></li>
                            <li><a  href="{{route('favourites')}}" class="int-collapse-menu">Favorites</a></li>
                            <li><a href="{{url('cart',ucfirst(Auth()->user()->id))}}" class="int-collapse-menu"><i class="material-icons">add_shopping_cart</i></a></li>
                            <li><a data-scroll href="#about" class="int-collapse-menu">about</a></li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">CATEGORY<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    @foreach ($category as $cat)
                                        <li><a href="{{ url('category',$cat->id) }}">{{ $cat->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    
    <!-- ARTIST LIST SECTION -->    
    <section id="works" class="dark-wrapper color-333">
        <div class="container">
            <div class="title text-center">
                <h2>this is ATLAS</h2>
                <hr>
            </div>
            <div>
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

                
                <table id="myTable">
                    <tr class="head-of-table">
                        <th style="width:20%;">picture</th>
                        <th style="width:30%;">Name</th>
                        <th style="width:50%;">
                            <select onchange="select_state()" class="js-example-basic-single" name="state">
                                <option value="All">all Art</option>
                                <option  value="carpenter">carpentery</option>   
                                <option value="painter">painter</option>
                                <option value="macrame">macrame</option>
                                <option value="other">other</option>
                            </select>
                        </th>
                    </tr>
                    @foreach ($artists as $artist)
                        <tr class="clickable-row" data-href="{{ url('artist',$artist->id) }}">
                            <td><img  src="data:image/png;base64,{{ chunk_split(base64_encode($artist->picture)) }}" alt="" class="artist-image-list" ></td>
                            <td><h2>{{ $artist->name }}</h2></td>
                            <td><h3>{{ $artist->art }}</h3></td>
                        </tr>
                    @endforeach
                </table>
            </div>     
        </div>     
    </section>

    <!--/ FOOTER SECTION-->  
    <section id="footer" class="footer-wrapper text-center">
        <div class="container">
            <div class="title text-center" data-scroll-reveal="enter from the bottom after 0.5s">
            <div class="aligncenter">     
                <a href="index.html" class="navbar-brand">ATLAS</a>
                <p>All rights reserved by Atlas. Any copy of this site
                    It is illegal.</p>
                <p>Designed in 2019</p>
                <a data-scroll-reveal="enter from the bottom after 0.3s" href="#home"><i class="fa fa-angle-up"></i></a>
            </div>    <!-- end title -->
        </div>  <!-- end container -->
    </section><!--/ Footer  End --> 

    {{-- search artist by name --}}
    <script>
        function myFunction() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue,txtValue2;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
        
            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                tdd = tr[i].getElementsByTagName("td")[2];
                if (td || tdd) {
                    txtValue = td.textContent || td.innerText;
                    txtValuee = tdd.textContent || tdd.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1 || txtValuee.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
        function select_state() {
            var  filter, table, tr, td, i, txtValue;
            filter = $(".js-example-basic-single").val().toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[2];
                if (td) {
                    txtValue = td.textContent;
                    if (txtValue.toUpperCase().indexOf(filter) > -1 || filter == "ALL") { 
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        } 
    </script>

    
    <!-- SECTION CLOSED -->
    
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
    {{-- select2 --}}
    <script src="../js/select2.js"></script>
    <script>
        $('.js-example-basic-single').select2({
        });
    </script>
    {{-- search in list --}}
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
            $(".clickable-row").click(function() { 
                window.location = $(this).data("href");
            });
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