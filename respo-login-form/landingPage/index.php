
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Ruhuna University Navigation System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts - which you want to use - (rest you can just remove) -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">  
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>

<body id="top">
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade ybrowser</a> to improve your experience.</p>
    <![endif]-->

    <header>
        <!-- NAVIGATION -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- LOGO -->
                    <a class="navbar-brand page-scroll" href="#page-top">
                        <img src="img/logo.png" alt="">
                    </a>
                    <!-- END LOGO -->

                </div>

                <!-- TOGGLE NAV -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li><a class="page-scroll" href="#top">Home</a>
                        </li>
                        <li><a class="page-scroll" href="#services">Features</a>
                        </li>
                        <li><a class="page-scroll" href="#screenshots">Screenshots</a>
                        </li>
                        <li><a class="page-scroll" href="#contact">Contact</a>
                        </li>
                        <?php
                            session_start();
                            if(isset($_SESSION['user_name'])==true)
                                echo '<li><a class="page-scroll" href="/respo-login-form/landingPage/logout.php">Logout</a>
                            </li>';
                        ?>
                        
                    </ul>
                </div>
                <!-- TOGGLE NAV -->

            </div>
            <!-- /.container -->
        </nav>
        <!-- END NAVIGATION -->
    </header>

    <!-- HOME -->
    <div id="home-area">
        <div class="overlay">
            <div class="container">
                <div class="row">

                    <!-- HOME CONTENT -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="home-content wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
                            <h1>Ruhuna University Navigational System</h1>
                            <p><i>An unfamiliar outsider</i> who visit the university will not find the locations straightforward.Our application will guide you to choose locations.And we have ground map of the university to choose new places for buildings to assist engineers.</p>
                            
                        </div>
                    </div>
                    <!-- END HOME CONTENT -->

                    <!-- HOME FEATURE IMAGE -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="home-feature pull-right center-block wow bounceIn" data-wow-duration="1s" data-wow-delay="1s">
                            <img class="img-responsive" src="img/app.png" alt="">
                        </div>
                    </div>
                    <!-- END HOME FEATURE IMAGE -->

                </div>
            </div>
        </div>
    </div>
    <!-- END HOME -->

    <!-- SERVICES -->
    <section id="services" class="section text-center">
        <div class="container">
            <h2 class="section-title wow fadeIn">Features</h2>
            <div class="row">

                <!-- SINGLE SERVICE -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-service text-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="service-content text-left">
                            <!--<i class="fa fa-desktop fa-3x"></i>-->
                            <a href="http://localhost/respo-login-form/landingPage/ruhun-ground[new]/" target="_blank"><h3>Ground Plan</h3></a>
                            <p>This shows ground plan of the university where each department locations in Science Faculty.</p>
                            
                        </div>
                    </div>
                </div>
                <!-- END SINGLE SERVICE -->

                <!-- SINGLE SERVICE -->
                <!--<div class="col-md-4 col-sm-6">
                    <div class="single-service text-left wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="service-title">
                            
                        </div>
                        <div class="service-content">
                            <a href="http://localhost/respo-login-form/landingPage/MapSeries/"><h3>People Finder</h3></a>
                            <p>This service brings you more realistic experience of virtual tour inside university with additional details.</p>
                            
                        </div>
                    </div>
                </div>-->
                <!-- END SINGLE SERVICE -->

                <!-- SINGLE SERVICE -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-service text-left wow fadeInRight" data-wow-duration="1s" data-wow-delay=".6s">
                        <div class="service-title">
                            <!--<i class="fa fa-code fa-3x"></i>-->
                        </div>
                        <div class="service-content">
                            <a href="http://localhost/respo-login-form/landingPage/paths[new]/" target="_blank"><h3>Path Drawer</h3></a>
                            <p>You will see different available paths from one source to other destination.</p>
                            
                        </div>
                    </div>
                </div>
                <!-- END SINGLE SERVICE -->

                
                <!-- SINGLE SERVICE -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-service text-left wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.2s">
                        <div class="service-title">
                            <!--<i class="fa fa-cog fa-3x"></i>-->
                        </div>
                        <div class="service-content">
                            <a href="http://localhost/respo-login-form/landingPage/special-loc/" target="_blank"><h3>Special Locations</h3></a>
                            <p>This shows a collections of venues inside university with differentiable markers.</p>
                            
                        </div>
                    </div>
                </div>
                <!-- END SINGLE SERVICE -->

                
                
                <!-- END SINGLE SERVICE -->
                
				<!-- SINGLE SERVICE -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-service text-left wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.5s">
                        <div class="service-title">
                            <!--<i class="fa fa-rocket fa-3x"></i>-->
                        </div>
                        <div class="service-content">
                            <a href="http://localhost/respo-login-form/landingPage/custom-polygon[new]/" target="_blank"><h3>Custom Polygon Drawer</h3></a>
                            <p>This allows user to draw custom polygons to visualize specific area.</p>
                            
                        </div>
                    </div>
                </div>
                <!-- END SINGLE SERVICE -->
                <!-- SINGLE SERVICE -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-service text-left wow fadeInRight" data-wow-duration="1s" data-wow-delay=".9s">
                        <div class="service-title">
                            <!--<i class="fa fa-shopping-cart fa-3x"></i>-->
                        </div>
                        <div class="service-content">
                            <a href="http://localhost/respo-login-form/landingPage/custom-marker[new]/" target="_blank"><h3>Custom Locations</h3></a>
                            <p>This service help you to keep remember the places in the university map.</p>
                            
                        </div>
                    </div>
                </div>
                <!-- END SINGLE SERVICE -->
                <!-- SINGLE SERVICE -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-service text-left wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.5s">
                        <div class="service-title">
                            <!--<i class="fa fa-rocket fa-3x"></i>-->
                        </div>
                        <div class="service-content">
                            <a href="http://localhost/respo-login-form/landingPage/networkLines[new]/" target="_blank"><h3>Underlying cables</h3></a>
                            <p>This shows ground plan of the university with underlying network,network,water and electric cables.</p>
                            
                        </div>
                    </div>
                </div>
                <!-- END SINGLE SERVICE -->
            </div>
            <!-- SINGLE SERVICE -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-service text-left wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.5s">
                        <div class="service-title">
                            <!--<i class="fa fa-rocket fa-3x"></i>-->
                        </div>
                        <div class="service-content">
                            <a href="http://localhost/respo-login-form/landingPage/labFinder/" target="_blank"><h3>Lab Finder</h3></a>
                            <p>This  fascilitates to search practical labs in each department and find them.</p>
                            
                        </div>
                    </div>
                </div>
                <!-- SINGLE SERVICE -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-service text-left wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.5s">
                        <div class="service-title">
                            <!--<i class="fa fa-rocket fa-3x"></i>-->
                        </div>
                        <div class="service-content">
                            <a href="http://localhost/respo-login-form/landingPage/Storytelling-MapTour/" target="_blank"><h3>All pic collector</h3></a>
                            <p>This shows ground each and every image which is tagged by location.Identify person or any location and refers to that place.</p>
                            
                        </div>
                    </div>
                </div>
                <!-- END SINGLE SERVICE -->
            <!--.row-->
        </div>
        <!--/.container -->
    </section>
    <!-- END SERVICES -->

    <!-- PORTFOLIO -->
    <section id="screenshots" class="section text-center">
        <div class="container">
            <h2 class="section-title wow fadeIn">Screenshots</h2>
            <div class="row">
                <div class="portfolio-gallery wow pulse">

                    <!-- SINGLE PORTFOLIO -->
                    <div class="single-portfolio">
                        <a href="img/portfolio/01.png" class="prettyPhoto" title="Single Portfolio" >
                            <img src="img/portfolio/01.png" alt="" class="img-responsive center-block">
                        </a>
                    </div>
                    <!-- END SINGLE PORTFOLIO -->

                    <!-- SINGLE PORTFOLIO -->
                    <div class="single-portfolio">
                        <a href="img/portfolio/02.png" class="prettyPhoto" title="Single Portfolio">
                            <img src="img/portfolio/02.png" alt="" class="img-responsive center-block">
                        </a>
                    </div>
                    <!-- END SINGLE PORTFOLIO -->

                    <!-- SINGLE PORTFOLIO -->
                    <div class="single-portfolio">
                        <a href="img/portfolio/03.png" class="prettyPhoto" title="Single Portfolio">
                            <img src="img/portfolio/03.png" alt="" class="img-responsive center-block">
                        </a>
                    </div>
                    <!-- END SINGLE PORTFOLIO -->

                    <!-- SINGLE PORTFOLIO -->
                    <div class="single-portfolio">
                        <a href="img/portfolio/04.png" class="prettyPhoto" title="Single Portfolio">
                            <img src="img/portfolio/04.png" alt="" class="img-responsive center-block">
                        </a>
                    </div>
                    <!-- END SINGLE PORTFOLIO -->

                    <!-- SINGLE PORTFOLIO -->
                    <div class="single-portfolio">
                        <a href="img/portfolio/05.png" class="prettyPhoto" title="Single Portfolio">
                            <img src="img/portfolio/05.png" alt="" class="img-responsive center-block">
                        </a>
                    </div>
                    <!-- END SINGLE PORTFOLIO -->

                    <!-- SINGLE PORTFOLIO -->
                    <div class="single-portfolio">
                        <a href="img/portfolio/06.png" class="prettyPhoto" title="Single Portfolio">
                            <img src="img/portfolio/06.png" alt="" class="img-responsive center-block">
                        </a>
                    </div>
                    <!-- END SINGLE PORTFOLIO -->

                    <!-- SINGLE PORTFOLIO -->
                    <div class="single-portfolio">
                        <a href="img/portfolio/07.png" class="prettyPhoto" title="Single Portfolio">
                            <img src="img/portfolio/07.png" alt="" class="img-responsive center-block">
                        </a>
                    </div>
                    <!-- END SINGLE PORTFOLIO -->

                    <!-- SINGLE PORTFOLIO -->
                    <div class="single-portfolio">
                        <a href="img/portfolio/08.png" class="prettyPhoto" title="Single Portfolio">
                            <img src="img/portfolio/08.png" alt="" class="img-responsive center-block">
                        </a>
                    </div>
                    <!-- END SINGLE PORTFOLIO -->


                </div>
                <!--./portfolio-gallery-->
            </div>
        </div>
        <!--/.container-->
    </section>
    <!-- END PORTFOLIO -->

    

    <!-- GET TRIAL -->
    <section id="get-trial" class="section text-center">
        <div class="container">
            <h4 class="wow fadeInLeft" data-wow-duration="1s">If you like our Android App then you can download it for FREE</h4>
            <a class="button get-trial wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s" href="https://drive.google.com/file/d/0B-z57j5mBYXec0x2NFVVQXNveHc/view?usp=sharing">Get the App</a>
        </div>
    </section>
    <!-- END GET TRIAL -->

    <!-- CONTACT US -->
    <section id="contact" class="section text-center">
        <div class="container">
            <h2 class="section-title">Contact Us</h2>
            <div class="row">

                <!-- CONTACT FORM -->
                <div class="col-md-7 col-md-offset-1 text-left wow fadeInLeft" data-wow-duration="1s">
                    <form action="contact/contact-handler.php" method="post" class="contact-form  wow fadeInLeft">
                        <div class="form-group">
                            <input type="text" required class="form-control" name="fullname" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" required class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" required class="form-control" name="subject" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea required class="form-control" rows="5" name="message" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                        	<label for="nocomment">Leave This Field Empty</label>
							<input id="nocomment" value="" name="nocomment" />
                        </div>
                        <input type="hidden" name="v_error" id="v-error" value="Required" />
						<input type="hidden" name="v_email" id="v-email" value="Enter a valid email" />
                        <button type="submit" class="pull-left send-button button">Send Message</button>
                    </form>
                </div>
                <!-- END CONTACT FORM -->

                <!-- CONTACT INFO -->
                <div class="col-md-3">
                    <div class="contact-info text-left wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                        <h3>Get In Touch</h3>
                        <p><span><i class="fa fa-map-marker"></i></span> Dept. of Computer Science,University of Ruhuna,Matara</p>
                        <p><span><i class="fa fa-phone"></i></span>  +94 041 2222681/2 Ext 4801/2</p>
                        
                    </div>
                    
                </div>
                <!-- END CONTACT INFO -->

            </div>
        </div>
    </section>
    <!-- END CONTACT US -->

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="row">

                <!-- FOOTER MENU -->
                <div class="col-md-6">
                    <div class="footer-menu">
                        <ul class="list-inline">
                            <li><a href="http://localhost/respo-login-form/landingPage/index.php#top">Home</a>
                            </li>
                            
                            <li><a href="http://localhost/respo-login-form/landingPage/index.php#contact">Contact</a>
                            </li>
                            <li><a href="http://localhost/respo-login-form/landingPage/index.php#screenshots">Screenshots</a>
                            </li>
                            <li><a href="http://localhost/respo-login-form/landingPage/index.php#services">Features</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END FOOTER MENU -->

                <!-- FOOTER CONTENT -->
                <div class="col-md-6">
                    <div class="footer-content text-right">
                        <p>&copy; 2015 All Rights Reserved, <a href="http://www.sci.ruh.ac.lk/computer/">DCS</a>
                        </p>
                    </div>
                </div>
                <!-- END FOOTER CONTENT -->

            </div>
            <!-- /.row -->
        </div>
        <!-- ./container -->
    </footer>
    <!-- END FOOTER -->


        <!-- js files -->
    <script src="js/vendor/jquery-1.10.2.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/prettyPhoto.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
