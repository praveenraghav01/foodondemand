<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title Of Site -->
    <title>Food On Demand | Home</title>
    <meta name="description" content="Food On Demand is a food ordering platform which brings restaurants and food lovers together. Food ordering online is easier than any other platforms.">
    <meta name="keywords" content="food, order online, restaurant, reservation, book a table, foodies, cafe, recipes, menu, dishes, chefs and cooking experts ">
    <meta name="author" content="iglyphic">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Fav and Touch Icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="images/ico/favicon.png">

    <!-- CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/component.css" rel="stylesheet">

    <!-- CSS Font Icons -->
    <link rel="stylesheet" href="icons/linearicons/style.css">
    <link rel="stylesheet" href="icons/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="icons/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="icons/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="icons/rivolicons/style.css">
    <link rel="stylesheet" href="icons/flaticon-line-icon-set/flaticon-line-icon-set.css">
    <link rel="stylesheet" href="icons/flaticon-streamline-outline/flaticon-streamline-outline.css">
    <link rel="stylesheet" href="icons/flaticon-thick-icons/flaticon-thick.css">
    <link rel="stylesheet" href="icons/flaticon-ventures/flaticon-ventures.css">

    <!-- CSS Custom -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>


<body class="home">

    <div id="introLoader" class="introLoading"></div>

    <!-- start Container Wrapper -->
    <div class="container-wrapper">

        <!-- start Header -->
        <header id="header">
            <!-- start Navbar (Header) -->
            <nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">

                <div class="container">

                    <div class="logo-wrapper">
                        <div class="logo">
                            <a href="index.php"><img src="images/logo.png" alt="Logo" /></a>
                        </div>
                    </div>

                    <div id="navbar" class="navbar-nav-wrapper navbar-arrow">

                        <ul class="nav navbar-nav" id="responsive-menu">

                            <li>
                                <a href="index.php">Home</a>
                            </li>

                            <li>
                                <a href="restaurant.php">restaurant</a>
                            </li>

                            <li>
                                <a href="order-online.php">order</a>
                            </li>

                            <!--<li>
                                <a href="#">Page</a>
                                <ul>
                                    <li>
                                        <a href="user.html">User</a>
                                        <ul>
                                            <li><a href="user-empty.html">Dashboard - Empty</a></li>
                                            <li><a href="user-profile.html">Profile</a></li>
                                            <li><a href="user-profile-update.html">Profile Update</a></li>
                                            <li><a href="user-favourite-restaurant.html">Favourite Restaurant</a></li>
                                            <li><a href="user-change-pass.html">Change Password</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Account</a>
                                        <ul>
                                            <li><a href="login.php">Login Page</a></li>
                                            <li><a href="login.php">Register Page</a></li>
                                            <li><a href="account-forgot-password-page.html">Forgot Password Page</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#">Restaurant</a>
                                        <ul>
                                            <li><a href="restaurant-owner-dashboard.html">Restaurant Owner Dashboard</a></li>
                                            <li><a href="restaurant-detail.html">Restaurant Detail</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">NetPay Form <span class="new-feature">New</span></a>
                                        <ul>
                                            <li><a href="netpay-form-step-one.html">NetPay Form One</a></li>
                                            <li><a href="netpay-form-step-two.html">NetPay Form Two</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="staff.html">Our Staff</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="careers.html">Careers</a></li>
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="404-error-page.html">404 - Error Page</a></li>
                                </ul>
                            </li>-->

                        </ul>

                    </div>
                    <!--/.nav-collapse -->
                <?php
                    
@session_start();
if (!isset($_SESSION['username'])) 
{
    
                 echo '  <div class="nav-mini-wrapper">
                        <ul class="nav-mini sign-in">
                            <li><a href="login.php">login</a></li>
                            <li><a href="login.php">register</a></li>
                        </ul>
                    </div>';
                   }
                    else
                    {
                        echo '<a href="user.php">'.$_SESSION['name'].'</a>';
                    }
                    ?>


                </div>

                <div id="slicknav-mobile"></div>

            </nav>
            <!-- end Navbar (Header) -->
        </header>
        <!-- end Header -->

        <!-- start Main Wrapper -->
        <div class="main-wrapper">

            <!-- start hero-header -->
            <div class="hero" style="background-image:url('images/hero-header/index-banner.png');">
                <div class="container">

                    <h1>tickle your tastebuds</h1>
                    <p>Find amazing selection of local restaurant delivering food to your door</p>

                    <div class="main-search-form-wrapper">

                        <form action="restimg.php" method="post">

                            <div class="form-holder">
                                <div class="row gap-0">

                                    <div class="col-xss-6 col-xs-6 col-sm-6">
                                        <input class="form-control" name="city" placeholder="e.g. H.NO 6L / Model Town / Jalandhar" />
                                    </div>

                                    <div class="col-xss-6 col-xs-6 col-sm-6">
                                        <input class="form-control" placeholder="Find a restaurant" />
                                    </div>

                                </div>

                            </div>

                            <div class="btn-holder">
                                <button class="btn" type="submit"><i class="ion-android-search"></i></button>
                            </div>

                        </form>

                    </div>


                </div>

            </div>
            <!-- end hero-header -->

            <div class="post-hero">

                <div class="container">

                    <div class="row">

                        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

                            <div class="ticker-wrapper">

                                <div class="latest-job-ticker ticker-inner">


                                    <ul class="ticker-list">
                                        <li>
                                            <a href="#">
                                                <span class="labeling">Get Offer</span> Free Bottle Of Beer - <span class="font-italic">Only available through our online ordering system - Bayleaf Restauant</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="labeling">Get Offer</span> 10% Discount - <span class="font-italic">Breast of chicken tikka grilled. - Rainbow Restauant</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>


                        </div>

                    </div>

                </div>

            </div>

            <!-- start order process -->
            <div class="order-process-step bg-light pt-80 pb-80">
                <div class="container frontend">

                    <div class="clearfix"></div>

                    <!--Facts-->

                    <!--Process Block-->

                    <div class="block process-block">
                        <!--<h2>The process</h2>
                            <h5>4 Steps for Success</h5>-->

                        <div class="row text-center">
                            <ol class="process">
                                <li class="col-md-3 col-sm-6 col-xs-6"><i class="fa fa-cutlery" aria-hidden="true"></i>
                                    <h4>Pick a restaurant</h4>

                                </li>
                                <li class="col-md-3 col-sm-6 col-xs-6"> <i class="fa fa-car"></i>
                                    <h4>Order a takeaway</h4>

                                </li>
                                <li class="col-md-3 col-sm-6 col-xs-6"> <i class="fa fa-beer"></i>
                                    <h4>Your food is delivered</h4>

                                </li>
                                <li class="col-md-3 col-sm-6 col-xs-6"> <i class="fa fa-thumbs-o-up"></i>
                                    <h4>Happy, enjoy</h4>

                                </li>
                            </ol>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <!--/Process Block-->
                    <div class="clearfix"></div>

                    <!--/Facts-->

                </div>
            </div>
            <!-- end order process -->

            <!-- start banner section -->
            <div class="bt-block-home-parallax pt-80 pb-80" style="background-image: url(images/reparallax-one.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="lookbook-product">
                                <h2>Delicious food is just a click away! Explore our enlisted restaurants – we believe, you will love them. </h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end banner section -->

            <div class="container pt-80 pb-80">

                <div class="row">

                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

                        <div class="section-title">

                            <h3>discover new restaurant &amp; book now </h3>

                        </div>

                    </div>

                </div>

                <div class="row gap-40">

                    <div class="col-xs-4 col-sm-2 mb-20">
                        <a href="#"><img src="images/brands/10.png" alt="image" /></a>
                    </div>

                    <div class="col-xs-4 col-sm-2 mb-20">
                        <a href="#"><img src="images/brands/02.png" alt="image" /></a>
                    </div>

                    <div class="col-xs-4 col-sm-2 mb-20">
                        <a href="#"><img src="images/brands/04.png" alt="image" /></a>
                    </div>

                    <div class="col-xs-4 col-sm-2 mb-20">
                        <a href="#"><img src="images/brands/18.png" alt="image" /></a>
                    </div>

                    <div class="col-xs-4 col-sm-2 mb-20">
                        <a href="#"><img src="images/brands/16.png" alt="image" /></a>
                    </div>

                    <div class="col-xs-4 col-sm-2 mb-20">
                        <a href="#"><img src="images/brands/14.png" alt="image" /></a>
                    </div>

                </div>


            </div>


            <!-- Download App Start -->
            <div class="download-app-area">
                <div class="download-app-sec" style="background:url(images/download-app.jpg) bottom center no-repeat fixed;
        background-size:cover;">
                    <div class="mask">
                        <div class="container">
                            <div class="col-lg-7 col-md-7 col-sm-12 container-cell left-container col-md-push-1">
                                <div class="app-content row">
                                    <div class="inner">
                                        <h2 class="logo-content">Food On Demand in your pocket!</h2>
                                        <h4 class="logo-subtitle">Get our app, it's the fastest way to order food on the go.</h4>
                                        <!--<p class="content">
                                            Keep an eye on Food On Demand, it is already on your way. Come back here for checkout the latest updates.
                                        </p>-->
                                        <ul class="list-inline appstore-buttons">
                                            <li><a href="#" class="btn-store btn-appstore">App Store</a></li>
                                            <li><a href="#" class="btn-store btn-googleplay">Google Play</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 right-align">
                                <div class="left-area visible-lg">
                                    <img src="images/mobilev2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <!--Download App End -->

            <!-- start footer -->
            <footer class="footer-wrapper-area">

                <!-- start footer area -->
                <div class="footer-area-content">
                    <!-- Newsletter -->
                   <!-- <div id="footer-newsletter" class="pt-40 pb-40">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h3><i class="fa fa-envelope-o"></i>Keep in touch, Join our newsletter</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <div class="newsletter-02">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="enter your email ">
                                            <button class="btn btn-primary">subscribe</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>-->
                    <!-- END: Newsletter -->

                  <!--  <div class="container">
                        <div class="footer-wrapper style-3">
                            <footer class="type-1">
                                <div class="footer-columns-entry">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3">
                                            <h3 class="column-title">Popular cities</h3>
                                            <ul class="column">
                                                <li><a href="#">Food delivery London</a></li>
                                                <li><a href="#">Food delivery Ambleside</a></li>
                                                <li><a href="#">Food delivery Huddersfield</a></li>
                                            </ul>
                                            <h3 class="column-title">Popular Areas</h3>
                                            <ul class="column">
                                                <li><a href="#">Food delivery Abergavenny</a></li>
                                                <li><a href="#">Food delivery Cardiff</a></li>
                                                <li><a href="#">Food delivery Crewe</a></li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <h3 class="column-title">Popular cuisines</h3>
                                            <ul class="column">
                                                <li><a href="all-cuisines.html">All Cuisine</a></li>
                                                <li><a href="#">Italian in Italy</a></li>
                                                <li><a href="#">Chinese Food in China</a></li>
                                                <li><a href="#">Dessert in Turkish</a></li>
                                                <li><a href="#">Seafood in European</a></li>
                                                <li><a href="#">Chinese food in Tapes</a></li>
                                                <li><a href="#">Middle Eastern in French</a></li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>

                                        <div class="col-md-3 col-sm-3">
                                            <h3 class="column-title">restaurants search</h3>
                                            <ul class="column">
                                                <li><a href="restaurant-search.html">Search restaurant </a></li>
                                                <li><a href="#">Search by keyword</a></li>
                                                <li><a href="#">Search by location</a></li>
                                                <li><a href="#">Search zip code</a></li>
                                                <li><a href="#">Search by category</a></li>
                                                <li><a href="#">Search by place</a></li>
                                                <li><a href="#">Search by city</a></li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>

                                        <div class="col-md-3 col-sm-3">
                                            <h3 class="column-title">Food On Demand</h3>
                                            <ul class="column">
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="blog.html">News</a></li>
                                                <li><a href="#">Terms and conditions</a></li>
                                                <li><a href="privacy-policy.html"> Privacy policy</a></li>
                                                <li><a href="#">Food On Demand free App for Android and iPhone</a></li>
                                                <li><a href="careers.html">Careers</a></li>

                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        </div>
                    </div>


                </div>-->
                <!-- footer area end -->

                <div class="bottom-footer">

                    <div class="container">

                        <div class="row">

                            <div class="col-sm-4 col-md-4">

                                <p class="copy-right">&#169; Copyright 2016 Food On Demand</p>

                            </div>

                            <div class="col-sm-4 col-md-4">

                                <ul class="bottom-footer-menu">
                                    <li>Developed By &nbsp;<a href="https://www.facebook.com/praveensinghraghav96">Praveen Raghav</a></li>
                                   
                                </ul>

                            </div>

                            <div class="col-sm-4 col-md-4">
                                <ul class="bottom-footer-menu for-social">
                                    <li><a href="#"><i class="ri ri-twitter" data-toggle="tooltip" data-placement="top" title="twitter"></i></a></li>
                                    <li><a href="#"><i class="ri ri-facebook" data-toggle="tooltip" data-placement="top" title="facebook"></i></a></li>
                                    <li><a href="#"><i class="ri ri-google-plus" data-toggle="tooltip" data-placement="top" title="google plus"></i></a></li>
                                    <li><a href="#"><i class="ri ri-youtube-play" data-toggle="tooltip" data-placement="top" title="youtube"></i></a></li>
                                </ul>
                            </div>

                        </div>

                    </div>

                </div>

            </footer>
            <!-- end footer -->

        </div>
        <!-- end Main Wrapper -->

    </div>
    <!-- / .wrapper -->
    <!-- end Container Wrapper -->


    <!-- start Back To Top -->
    <div id="back-to-top">
        <a href="#"><i class="ion-ios-arrow-up"></i></a>
    </div>
    <!-- end Back To Top -->


    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-modalmanager.js"></script>
    <script type="text/javascript" src="js/bootstrap-modal.js"></script>
    <script type="text/javascript" src="js/smoothscroll.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/jquery.slicknav.min.js"></script>
    <script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-tokenfield.js"></script>
    <script type="text/javascript" src="js/typeahead.bundle.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="js/jquery-filestyle.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.js"></script>
    <script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
    <script type="text/javascript" src="js/handlebars.min.js"></script>
    <script type="text/javascript" src="js/jquery.countimator.js"></script>
    <script type="text/javascript" src="js/jquery.countimator.wheel.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script type="text/javascript" src="js/easy-ticker.js"></script>
    <script type="text/javascript" src="js/jquery.introLoader.min.js"></script>
    <script type="text/javascript" src="js/jquery.responsivegrid.js"></script>
    <script type="text/javascript" src="js/customs.js"></script>


</body>

</html>