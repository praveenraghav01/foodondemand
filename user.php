<?php require "login.class";
if (!isset($_SESSION['username'])) 
{
header("Location: login.php");
}
else{
if($_SESSION['type']==1)
{
  echo '<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title Of Site -->
    <title>Food On Demand | Vendor</title>
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

<!--SweetAlert-->

    <script src="dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>


<body class="not-transparent-header">';

@$id=$_GET['id'];
if($id==1)
{
   echo 'swal({
  title: "Welcome! '.$_SESSION['name'].'",
  text: "Thank You For Choosing FOOD ON DEMAND",
  imageUrl: "images/fod.png"
});';
}
else if($id==2)
{
   echo '<script>swal("Done", "Password Changed Successfully", "success");</script>';
}
echo '
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

                        
                        </ul>
                    </div>
                    <!--/.nav-collapse -->

<a href="user.php">'.$_SESSION['name'].'</a>
                </div>

                <div id="slicknav-mobile"></div>

            </nav>
            <!-- end Navbar (Header) -->
        </header>
        <!-- end Header -->

        <!-- start Main Wrapper -->
        <div class="main-wrapper">

            <!-- start breadcrumb -->
            <div class="breadcrumb-wrapper">

                <div class="container">

                    <ol class="breadcrumb-list booking-step">
                        <li><a href="#">Home</a></li>
                        <li><span>Restaurant Owner Dashboard</span></li>
                    </ol>

                </div>

            </div>
            <!-- end breadcrumb -->

            <div class="admin-container-wrapper">

                <div class="container">

                    <div class="GridLex-gap-15-wrappper">

                        <div class="GridLex-grid-noGutter-equalHeight">

                            <div class="GridLex-col-3_sm-4_xs-12">

                                <div class="admin-sidebar">

                                    <div class="admin-user-item for-employer">

                                        <div class="image">
                                            <img src="images/brands/06.png" alt="image" class="img-circle" />
                                        </div>

                                        <h4>'.$_SESSION['name'].'</h4>

                                    </div>

                                    <div class="admin-user-action text-center">

                                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="#" class="btn btn-primary btn-sm btn-inverse">Deactivate</a>

                                    </div>

                                    <ul class="admin-user-menu clearfix">
                                        <li class="active">
                                            <a href="#"><i class="fa fa-tachometer"></i> Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-user"></i> Profile</a>
                                        </li>
                                        <li>
                                            <a href="user-change-pass.php"><i class="fa fa-key"></i> Change Password</a>
                                        </li>
                                        <li>
                                            <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                                        </li>
                                    </ul>

                                </div>

                            </div>

                            <div class="GridLex-col-9_sm-8_xs-12">

                                <div class="admin-content-wrapper">

                                    <div class="admin-section-title">

                                        <h2>Restaurant Profile</h2>
                                        <p>Enquire explain another he in brandon enjoyed be service.</p>

                                    </div>

                                    <form class="post-form-wrapper" action="addmember.php" method="post" enctype="multipart/form-data">

                                        <div class="row gap-20">

                                            <div class="col-sm-6 col-md-4">

                                                <div class="form-group bootstrap-fileinput-style-01">
                                                    <label for="form-register-photo-2">Photo</label>
                                                    <input type=file name="hotelimage" required size=45>
                                                    <span class="font12 font-italic">** photo must not bigger than 1mb</span>
                                                </div>



                                            </div>

                                            <div class="clear"></div>

                                            <div class="col-sm-12 col-md-8">

                                                <div class="form-group">
                                                    <label>Restaurant Name:</label>
                                                    <input type="text" class="form-control" required name="hotel-name" placeholder="Arabian Grill">
                                                </div>

                                            </div>
                                            <div class="clear"></div>
                                            <div class="col-sm-6 col-md-4">

                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" required name="hotel-add" placeholder="254">
                                                </div>

                                            </div>

                                            <div class="col-sm-6 col-md-4">

                                                <div class="form-group">
                                                    <label>City/town</label>
                                                    <input type="text" class="form-control" required name="hotel-city" placeholder="Somewhere ">
                                                </div>

                                            </div>

                                            <div class="clear"></div>

                                            <div class="col-sm-6 col-md-4">

                                                <div class="form-group">
                                                    <label>Street</label>
                                                    <input type="text" class="form-control" required name="hotel-street" placeholder="Somewhere ">
                                                </div>

                                            </div>

                                            <div class="col-sm-6 col-md-4">

                                                <div class="form-group">
                                                    <label>Province/State</label>
                                                    <input type="text" class="form-control" required name="hotel-state" placeholder="Paris">
                                                </div>

                                            </div>

                                            <div class="clear"></div>

                                            <div class="col-sm-6 col-md-4">

                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <input type="text" class="form-control" pattern="[7-9]{1}[0-9]{9}" required name="hotel-mobile" placeholder="+91-7087606428">
                                                </div>

                                            </div>

                                            <div class="clear"></div>

                                            <div class="col-sm-12 col-md-12">

                                                <div class="form-group bootstrap3-wysihtml5-wrapper">
                                                    <label>Services</label>
                                                    <textarea class="bootstrap3-wysihtml5 form-control" required name="hotel-details" placeholder="Enter text ..." style="height: 200px;"></textarea>
                                                </div>

                                            </div>

                                            <div class="clear"></div>

                                            <div class="col-sm-12 mt-10">
                                                <button type="submit" class="btn btn-primary">Submit</button>&nbsp;
                                                <button type="reset" class="btn btn-warning">Cancel</button>
                                            </div>

                                        </div>

                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- start footer -->
            <footer class="footer-wrapper-area">

                <!-- start footer area -->
                <div class="footer-area-content">
                    <!-- Newsletter -->
                    <div id="footer-newsletter" class="pt-40 pb-40">
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
                    </div>
                    <!-- END: Newsletter -->

                    <div class="container">
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
                                                <li><a href="all-cuisines.php">All Cuisine</a></li>
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
                                                <li><a href="restaurant-search.php">Search restaurant </a></li>
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
                                            <h3 class="column-title">Thefoody</h3>
                                            <ul class="column">
                                                <li><a href="about-us.php">About Us</a></li>
                                                <li><a href="blog.php">News</a></li>
                                                <li><a href="#">Terms and conditions</a></li>
                                                <li><a href="privacy-policy.php"> Privacy policy</a></li>
                                                <li><a href="#">TheFoody free App for Android and iPhone</a></li>
                                                <li><a href="careers.php">Careers</a></li>

                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        </div>
                    </div>


                </div>
                <!-- footer area end -->

                <div class="bottom-footer">

                    <div class="container">

                        <div class="row">

                            <div class="col-sm-4 col-md-4">

                                <p class="copy-right">&#169; Copyright 2016 iGlyphic</p>

                            </div>

                            <div class="col-sm-4 col-md-4">

                                <ul class="bottom-footer-menu">
                                    <li><a href="#">Cookies</a></li>
                                    <li><a href="#">Policies</a></li>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Blogs</a></li>
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
}
';
}
else{

echo '<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title Of Site -->
    <title>Food On Demand | Profile</title>
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

	<!--SweetAlert-->
	
<script src="dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>


<body class="not-transparent-header">';

@$id=$_GET['id'];
if($id==1)
{
   echo '<script>swal("Welcome", "'.$_SESSION['name'].'", "success");</script>';

}
else if($id==2)
{
   echo '<script>swal("Done", "Password Changed Successfully", "success");</script>';
}
echo '
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
                                   

                        </ul>

                    </div>
                    <!--/.nav-collapse -->

                    <div class="nav-mini-wrapper">
<a href="user.php">'.$_SESSION['name'].'</a>
                    </div>

                </div>

                <div id="slicknav-mobile"></div>

            </nav>
            <!-- end Navbar (Header) -->
        </header>
        <!-- end Header -->

        <!-- start Main Wrapper -->
        <div class="main-wrapper">

            <!-- start breadcrumb -->
            <div class="breadcrumb-wrapper">

                <div class="container">

                    <ol class="breadcrumb-list booking-step">
                        <li><a href="#">Home</a></li>
                        <li><span>User Profile</span></li>
                    </ol>

                </div>

            </div>
            <!-- end breadcrumb -->

            <div class="admin-container-wrapper">

                <div class="container">

                    <div class="GridLex-gap-15-wrappper">

                        <div class="GridLex-grid-noGutter-equalHeight">

                            <div class="GridLex-col-3_sm-4_xs-12">

                                <div class="admin-sidebar">

                                    <div class="admin-user-item">

                                        <div class="image">
                                            <img src="images/man/01.jpg" alt="image" class="img-circle" />
                                        </div>

                                        <h4>'.$_SESSION['name'].' </h4>
                                        <p class="user-role">Foodies</p>

                                    </div>

                                    <div class="admin-user-action text-center">

                                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="#" class="btn btn-primary btn-sm btn-inverse">Deactivate</a>

                                    </div>

                                    <ul class="admin-user-menu clearfix">
                                        <li class="active">
                                            <a href="#"><i class="fa fa-tachometer"></i> Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-user"></i> Profile</a>
                                        </li>
                                        <li>
                                            <a href="user-change-pass.php"><i class="fa fa-key"></i> Change Password</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-bookmark"></i> Favourite Restaurant</a>
                                        </li>
                                        <li>
                                            <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                                        </li>
                                    </ul>

                                </div>

                            </div>

                            <div class="GridLex-col-9_sm-8_xs-12">

                                <div class="admin-content-wrapper">

                                    <div class="admin-section-title">

                                        <h2>Hello '.$_SESSION['name'].'</h2>
                                        
                                    </div>
                                    
                                    
                                    <div class="restaurant-item-grid-wrapper">
					
										<div class="GridLex-gap-30">
										
											<div class="GridLex-grid-noGutter-equalHeight">';
                                    include"db.php";
                                    $user=$_SESSION['username'];
                                    $sql="SELECT * FROM orders WHERE username='$user'";
                                    $result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) 
    {
echo '
											
                                            <div class="GridLex-col-4_sm-6_xs-6_xss-12">
												
													<div class="restaurant-item-grid">
														<a href="#">
															<div class="content">
																<h4 class="heading">'.$row['id'].'</h4>
																<p class="location"><i class="fa fa-map-marker text-primary"></i> '.$row['details'].'</p>
																<p class="date text-muted font12 font-italic">Amount: Rs '.$row['total'].'</p>
															</div>
															
														</a>
														
													</div>
													
												</div>
';



    }
    }
                                    echo '  
											</div>
											
										</div>
										
									</div>  ';

if ($result->num_rows == 0)
{
        echo '<div class="admin-empty-dashboard">
									
										<div class="icon">
											<i class="ion-ios-book-outline"></i>
										</div>
										
										<h4>You have no any activities yet!</h4>

										<a href="restaurant.php" class="btn btn-primary">Search Restaurant</a>
									
									</div>';
}

                            echo'    </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- start footer -->
            <footer class="footer-wrapper-area">

                <!-- start footer area -->
                <div class="footer-area-content">
                    <!-- Newsletter -->
                    <div id="footer-newsletter" class="pt-40 pb-40">
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
                    </div>
                    <!-- END: Newsletter -->

                    <div class="container">
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
                                                <li><a href="all-cuisines.php">All Cuisine</a></li>
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
                                                <li><a href="restaurant-search.php">Search restaurant </a></li>
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
                                            <h3 class="column-title">Thefoody</h3>
                                            <ul class="column">
                                                <li><a href="about-us.php">About Us</a></li>
                                                <li><a href="blog.php">News</a></li>
                                                <li><a href="#">Terms and conditions</a></li>
                                                <li><a href="privacy-policy.php"> Privacy policy</a></li>
                                                <li><a href="#">TheFoody free App for Android and iPhone</a></li>
                                                <li><a href="careers.php">Careers</a></li>

                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        </div>
                    </div>


                </div>
                <!-- footer area end -->

                <div class="bottom-footer">

                    <div class="container">

                        <div class="row">

                            <div class="col-sm-4 col-md-4">

                                <p class="copy-right">&#169; Copyright 2016 iGlyphic</p>

                            </div>

                            <div class="col-sm-4 col-md-4">

                                <ul class="bottom-footer-menu">
                                    <li><a href="#">Cookies</a></li>
                                    <li><a href="#">Policies</a></li>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Blogs</a></li>
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

</html>';
}
}
?>