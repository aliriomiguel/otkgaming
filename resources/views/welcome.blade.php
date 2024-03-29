<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>OTK Gaming</title>
        <link rel="icon" href="favicon.png" type="image/png">
        <link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Montaga&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative&display=swap" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="css/responsive.css" rel="stylesheet" type="text/css">
        <link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
        <link href="css/animate.css" rel="stylesheet" type="text/css">

        <script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.isotope.js"></script>
        <script type="text/javascript" src="js/wow.js"></script>
        <script type="text/javascript" src="js/classie.js"></script>
        <script type="text/javascript" src="js/magnific-popup.js"></script>

    </head>
    <body>
        <header class="header" id="header">
            <!--header-start-->
            <div class="container">
                <figure class="logo animated fadeInDown delay-07s">
                    <a href="#"><img src="img/logo.png" alt=""></a>
                </figure>
                <h3 class="animated fadeInDown delay-07s text-muted"><small>Welcome To The</small></h3>
                <h1 class="animated fadeInDown delay-07s">Oval Table Knights</h1>
                <ul class="we-create animated fadeInUp delay-1s">
                    <li>We are a gamers guild that loves playing Videogames and D&D.</li>
                </ul>
                <a class="link animated fadeInUp delay-1s servicelink" href="#service">Get Started</a>
            </div>
        </header>
        <!--header-end-->

	    <nav class="main-nav-outer" id="test">
            <!--main-nav-start-->
            <div class="container">
                <ul class="main-nav">
                    <li><a href="#header">Home</a></li>
                    <li><a href="#service">Games We Play</a></li>
                    <li><a href="#Portfolio">News</a></li>
                    <li class="small-logo"><a href="#header"><img src="img/small-logo.png" alt=""></a></li>
                    <li><a href="#client">Clients</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <a class="res-nav_click" href="#"><i class="fa fa-bars"></i></a>
            </div>
        </nav>
        <!--main-nav-end-->
        <section class="main-section" id="service">
            <!--main-section-start-->
            <div class="container">
                <h2 class="oval_title">Games We Play</h2>
                <h6>We offer exceptional service with complimentary hugs.</h6>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
                        {{-- Aqui va un foreach de los servicios --}}
                        @foreach($services as $service)
                        <div class="service-list">
                            <div class="service-list-col1">
                                <img src="/img/icons/{{$service->icon}}" alt="service-icon">
                            </div>
                            <div class="service-list-col2">
                                <h3>{{$service->name}}</h3>
                                <p>{{$service->description}}</p>
                            </div>
                        </div>
                        @endforeach
                        <div class="service-list">
                            <div class="service-list-col1">
                                <i class="fa fa-gear"></i>
                            </div>
                            <div class="service-list-col2">
                                <h3>web development</h3>
                                <p>Proin iaculis purus consequat sem digni ssim. Digni ssim porttitora .</p>
                            </div>
                        </div>
                        <div class="service-list">
                            <div class="service-list-col1">
                                <i class="fa fa-apple"></i>
                            </div>
                            <div class="service-list-col2">
                                <h3>mobile design</h3>
                                <p>Proin iaculis purus consequat digni sem digni ssim. Purus donec porttitora entum.</p>
                            </div>
                        </div>
                        <div class="service-list">
                            <div class="service-list-col1">
                                <i class="fa fa-medkit"></i>
                            </div>
                            <div class="service-list-col2">
                                <h3>24/7 Support</h3>
                                <p>Proin iaculis purus consequat sem digni ssim. Sem porttitora entum.</p>
                            </div>
                        </div>
                    </div>
                    <figure class="col-lg-8 col-sm-6  text-right wow fadeInUp delay-02s">
                        <img src="img/macbook-pro.png" alt="">
                    </figure>
    
                </div>
            </div>
        </section>

        {{-- La seccion de news va a hacer con un card group en los posts que no estan destacados y en los featured
        usaremos https://getbootstrap.com/docs/4.3/components/card/#image-overlays --}}
        <!--main-section-end-->
        <section class="main-section alabaster">
            <!--main-section alabaster-start-->
            <div class="container">
                <div class="row">
                    <figure class="col-lg-5 col-sm-4 wow fadeInLeft">
                        <img src="img/iphone.png" alt="">
                    </figure>
                    <div class="col-lg-7 col-sm-8 featured-work">
                        <h2>featured work</h2>
                        <P class="padding-b">Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit.</P>
                        <div class="featured-box">
                            <div class="featured-box-col1 wow fadeInRight delay-02s">
                                <i class="fa fa-magic"></i>
                            </div>
                            <div class="featured-box-col2 wow fadeInRight delay-02s">
                                <h3>magic of theme development</h3>
                                <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. </p>
                            </div>
                        </div>
                        <div class="featured-box">
                            <div class="featured-box-col1 wow fadeInRight delay-04s">
                                <i class="fa fa-gift"></i>
                            </div>
                            <div class="featured-box-col2 wow fadeInRight delay-04s">
                                <h3>neatly packaged</h3>
                                <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. </p>
                            </div>
                        </div>
                        <div class="featured-box">
                            <div class="featured-box-col1 wow fadeInRight delay-06s">
                                <i class="fa fa-dashboard"></i>
                            </div>
                            <div class="featured-box-col2 wow fadeInRight delay-06s">
                                <h3>SEO optimized</h3>
                                <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. </p>
                            </div>
                        </div>
                        <a class="Learn-More" href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </section>
        <!--main-section alabaster-end-->

        <script type="text/javascript">
            $(document).ready(function(e) {
    
                $('#test').scrollToFixed();
                $('.res-nav_click').click(function() {
                    $('.main-nav').slideToggle();
                    return false
    
                });
    
          /* $('.Portfolio-box').magnificPopup({
            delegate: 'a',
            type: 'image'
          }); */
    
            });
        </script>
    
        <script>
            wow = new WOW({
                animateClass: 'animated',
                offset: 100
            });
            wow.init();
        </script>
    
    
        <script type="text/javascript">
            $(window).load(function() {
    
                $('.main-nav li a, .servicelink').bind('click', function(event) {
                    var $anchor = $(this);
    
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top - 102
                    }, 1500, 'easeInOutExpo');
                    /*
                    if you don't want to use the easing effects:
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1000);
                    */
                    if ($(window).width() < 768) {
                        $('.main-nav').hide();
                    }
                    event.preventDefault();
                });
            })
        </script>
    
        <script type="text/javascript">
            $(window).load(function() {
    
    
                var $container = $('.portfolioContainer'),
                    $body = $('body'),
                    colW = 375,
                    columns = null;
    
    
                $container.isotope({
                    // disable window resizing
                    resizable: true,
                    masonry: {
                        columnWidth: colW
                    }
                });
    
                $(window).smartresize(function() {
                    // check if columns has changed
                    var currentColumns = Math.floor(($body.width() - 30) / colW);
                    if (currentColumns !== columns) {
                        // set new column count
                        columns = currentColumns;
                        // apply width to container manually, then trigger relayout
                        $container.width(columns * colW)
                            .isotope('reLayout');
                    }
    
                }).smartresize(); // trigger resize to set container width
                /* $('.portfolioFilter a').click(function() {
                    $('.portfolioFilter .current').removeClass('current');
                    $(this).addClass('current');
    
                    var selector = $(this).attr('data-filter');
                    $container.isotope({
    
                        filter: selector,
                    });
                    return false;
                }); */
    
            });
        </script>
        
    </body>
</html>
