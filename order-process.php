<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title Of Site -->
    <title>Food On Demand | Checko Out</title>
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

    <link href="js/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="js/plugins/datepicker/datepicker.css" rel="stylesheet">



    <!-- CSS Custom -->
    <link href="css/style.css" rel="stylesheet">

    <!-- order online css -->
    <link href="css/order-online.css" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>


<body class="not-transparent-header style-2">


    <!-- start Container Wrapper -->
    <div class="container-wrapper">

        <!-- start Header -->
        <header id="header">
            <!-- start Navbar (Header) -->
            <nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">

                <div class="container">

                    <div class="logo-wrapper">
                        <div class="logo">
                            <a href="index.html"><img src="images/logo.png" alt="Logo" /></a>
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

<!--/.nav-collapse -->

		<!-- start Main Wrapper -->
		<div class="main-wrapper scrollspy-container">
		
			<!-- start hero-header -->
			<div class="breadcrumb-wrapper">
			
				<div class="container">
				
					<ol class="breadcrumb-list booking-step">
						<li><a href="#">Home</a></li>
						<li><span>Order Process</span></li>
					</ol>
					
				</div>
				
			</div>
			<!-- end hero-header -->
			
			<div class="section sm">

				<!-- Content Start -->
				<!-- Start order-online-->
				<div id="order-process">
					<div class="container">



						<div class="order-inner-content">
							<div class="row">
								<div class="col-md-9">
									<div class="order-process-left-side">
										<div class="order-information row">
										<?php 
                                        require"db.php";
                                        @session_start();
                                        require"db.php";
										echo	'<h4 class="section-title pb-10">Order information | Your delivery address</h4><br>
											<div class="col-sm-12 col-md-8">
<form method="post" action="checkout.php">
                                                <div class="form-group">
                                                    <label>Name:</label>
                                                    <input type="text" class="form-control" required name="deli-name" value="'.$_SESSION['name'].'" placeholder="Arabian Grill">
                                                </div>

                                            </div>
                                            <div class="clear"></div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" required name="deli-add" placeholder="254">
                                                </div>

                                            </div>

                                            <div class="col-sm-6 col-md-4">

                                                <div class="form-group">
                                                    <label>City/town</label>
                                                    <input type="text" class="form-control" required name="deli-city" placeholder="Somewhere ">
                                                </div>

                                            </div>

                                            <div class="clear"></div>

                                            <div class="col-sm-6 col-md-4">

                                                <div class="form-group">
                                                    <label>Street</label>
                                                    <input type="text" class="form-control" required name="deli-street" placeholder="Somewhere ">
                                                </div>

                                            </div>

                                            <div class="col-sm-6 col-md-4">

                                                <div class="form-group">
                                                    <label>Province/State</label>
                                                    <input type="text" class="form-control" required name="deli-state" placeholder="Paris">
                                                </div>

                                            </div>

                                            <div class="clear"></div>

                                            <div class="col-sm-6 col-md-4">

                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <input type="text" class="form-control" pattern="[7-9]{1}[0-9]{9}" required name="deli-mobile" value="'.$_SESSION['tel'].'" placeholder="+91-7087606428">
                                                </div>
                                            </div>
											<div class="col-sm-6 col-md-4">

                                                <div class="form-group">
                                                    <label>Email Id</label>
                                                    <input type="email" class="form-control" required name="deli-email" value="'.$_SESSION['username'].'" placeholder="Paris">
                                                </div>

                                            <div class="clear"></div>

                                            </div>
											</div>
									</div>
								</div>
								<!-- Sidearea Starts -->
								<div class="col-md-3 col-xs-12">
									<!-- Spacer Starts -->
									<div class="spacer-1 medium hidden-lg hidden-md"></div>
									<!-- Spacer Ends -->
									<!-- Your Order Starts -->
									<div class="side-block-order border-radius-4">
										<!-- Heading Starts -->
										<h5 class="text-center"><i class="fa fa-shopping-basket"></i> Your Orders</h5>
										<!-- Heading Ends -->
										<!-- Order Content Starts -->
										<div class="side-block-order-content">
											 <!-- Order Item List Starts -->
                                        <ul class="list-unstyled order-item-list">';
										
											 
if (!isset($_SESSION['username'])) 
{
    $total=0;
 echo '</ul>
                                        <!-- Order Item List Ends -->
                                        <!-- Order Item Total Starts -->
                                        <dl class="dl-horizontal order-item-total">
                                            <dt class="text-light">Orders Amount :</dt>
                                            <dd class="text-spl-color text-right">Rs '.$total.'</dd>
                                            <dt class="text-light">Delivery Charges :</dt>
                                            <dd class="text-spl-color text-right">Rs 0</dd>
                                            <hr>
                                            <dt class="text-bold">Total  Amount :</dt>
                                            <dd class="text-bold text-spl-color text-right">Rs '.$total.'</dd>
                                        </dl>
                                        <!-- Order Item Total Ends -->
                                        
                                        <div class="cfo-checkoutarea">
                                        <input type="hidden" name="amount" value="'.$total.'" /></input>
                                            <button type="submit" id="a" name="a"  ';if ($total ==0){  echo "disabled";  } echo ' class="btn btn-primary btn-block custom-checkout">Proceed to Checkout</button>
                                        </div>
                                    </div>
                                    <!-- Order Content Ends -->
                                </div>';
}
else{
 $user=$_SESSION['username'];
$sql3="SELECT * from cart where user='$user'";
$result = $conn->query($sql3);
$total=0;
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) 
    {
        $total+=$row['quantity']*$row['rate'];
        echo '<li class="clearfix">
                                                <div class="pull-left">
                                                    <div class="update-product">
                                                        <a title="Add a product" href="cart.php?id='.$row['id'].'&value=1"><i class="fa fa-plus-circle"></i></a>
                                                        <a title="Minus a product" href="cart.php?id='.$row['id'].'&value=0"><i class="fa fa-minus-circle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="cart-product-name pull-left">'.$row['name'].'
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['quantity'].'</div>
                                                <div class="cart-product-price pull-right text-spl-color">'.$row['rate'].'</div>
                                                <div class="cart-product-remove"><a title="Remove a product" href="cart.php?id='.$row['id'].'&value=3"><i class="fa fa-trash"></i></a></div>

                                            </li>';
    }
}
                                        echo '</ul>
                                        <!-- Order Item List Ends -->
                                        <!-- Order Item Total Starts -->
                                        <dl class="dl-horizontal order-item-total">
                                            <dt class="text-light">Orders Amount :</dt>
                                            <dd class="text-spl-color text-right">Rs '.$total.'</dd>
                                            <dt class="text-light">Delivery Charges :</dt>
                                            <dd class="text-spl-color text-right">Rs 0.00</dd>
                                            <hr>
                                            <dt class="text-bold">Total  Amount :</dt>
                                            <dd class="text-bold text-spl-color text-right">Rs '.$total.'</dd>
                                        </dl>
                                        <!-- Order Item Total Ends -->
                                        
                                        <div class="cfo-checkoutarea">
                                        <input type="hidden" name="amount" value="'.$total.'" /></input>
                                            <button type="submit" id="a" name="a"  ';if ($total ==0){  echo "disabled";  } echo ' class="btn btn-primary btn-block custom-checkout">Proceed to Checkout</button>
                                        </div>
                                    </div></form>
                                    <!-- Order Content Ends -->
                                </div>';
                                }?>
									<!-- Your Order Ends -->
								</div>
								<!-- Sidearea Ends -->
							</div>
						</div>
					</div>
					<!--.container-->
				</div>
				<!--#order-online-->
				<!--end order-online-->
				<!-- Content End -->
			
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