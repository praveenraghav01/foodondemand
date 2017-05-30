<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title Of Site -->
    <title>Food On Demand | Restaurant</title>
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


<body class="not-transparent-header">

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
                                            <li><a href="login.html">Login Page</a></li>
                                            <li><a href="login.html">Register Page</a></li>
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

            <div class="second-search-restaurant-wrapper">

                <div class="container">

                    <form>

                        <div class="second-search-result-inner">
                            <span class="labeling">Search a restaurant</span>
                            <div class="row">

                                <div class="col-xss-12 col-xs-6 col-sm-6 col-md-5">
                                    <div class="form-group form-lg">
                                        <input type="text" class="form-control" placeholder="e.g. SW6 6LG / SW6 / London" />
                                    </div>
                                </div>

                                <div class="col-xss-12 col-xs-6 col-sm-6 col-md-5">
                                    <div class="form-group form-lg">
                                        <input type="text" class="form-control" placeholder="Find a restaurant" />
                                    </div>
                                </div>

                                <div class="col-xss-12 col-xs-6 col-sm-4 col-md-2">
                                    <button class="btn btn-block">Search</button>
                                </div>

                            </div>
                        </div>

                    </form>



                </div>

            </div>

            <!-- start hero-header -->
            <div class="breadcrumb-wrapper">

                <div class="container">

                    <ol class="breadcrumb-list booking-step">
                        <li><a href="#">Home</a></li>
                        <li><span>Restaurant</span></li>
                    </ol>

                </div>

            </div>
            <!-- end hero-header -->

            <div class="section sm">

                <div class="container">

                    <div class="sorting-wrappper alt">

                        <div class="GridLex-grid-middle">

                            <div class="GridLex-col-3_sm-12_xs-12">

                                <div class="sorting-header">
                                    <h3 class="sorting-title">254 restaurant</h3>
                                </div>

                            </div>

                            <div class="GridLex-col-5_sm-6_xs-6_xss-12">

                                <div class="sorting-content">

                                    <div class="form-group GridLex-gap-10-wrappper">

                                        <div class="GridLex-grid-middle">

                                            <div class="GridLex-col-5_sm-6_xs-12">
                                                <label>Service:</label>
                                            </div>

                                            <div class="GridLex-col-7_sm-6_xs-12">
                                                <select class="selectpicker form-control" data-show-subtext="true">
													<option value="0">Reservation</option>
													<option value="1" >Delivery</option>
													<option value="2" >Collection</option>
												</select>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="GridLex-col-4_sm-6_xs-6_xss-12">

                                <div class="sorting-content">

                                    <div class="form-group GridLex-gap-10-wrappper">

                                        <div class="GridLex-grid-middle">

                                            <div class="GridLex-col-3_sm-6_xs-12">
                                                <label>Cuisine:</label>
                                            </div>

                                            <div class="GridLex-col-9_sm-6_xs-12">
                                                <select class="selectpicker form-control" data-show-subtext="true">
													<option value="0">Burger</option>
													<option value="1">Chicken</option>
													<option value="2">Chinese</option>
													<option value="3">Fast Food</option>
													<option value="4">Indian</option>
													<option value="5">Italian</option>
												</select>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="company-grid-wrapper top-company-2-wrapper">

                        <div class="GridLex-gap-30">
                            
                            
                            <div class="GridLex-grid-noGutter-equalHeight">

<?php include "restimg.php";?>
                             
                            </div>
                        </div>

                    </div>

                    <div class="pager-wrapper">

                        <ul class="pager-list">
                            <li class="paging-nav"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                            <li class="paging-nav"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="number">
                                <span class="mr-5"><span class="font600">page</span></span>
                            </li>
                            <li class="form">
                                <form>
                                    <input type="text" value="1" class="form-control">
                                </form>
                            </li>
                            <li class="number">
                                <span class="mr-5">/</span> <span class="font600">79</span>
                            </li>
                            <li class="paging-nav"><a href="#">go</a></li>
                            <li class="paging-nav"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            <li class="paging-nav"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>

                    </div>

                </div>

            </div>
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