<?php
 
 
$date_journey=$_POST['date_journey'];

$package=$_POST['package'];

$adults=$_POST['adults'];

$children=$_POST['children'];

$date_end=$_POST['date_end'];

$group_id=$_POST['groupid'];

$price=$_POST['price'];


?>
<html lang="en">
<head>
    <title>The Travel - Tour Travel</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- FAV ICON -->
    <link rel="shortcut icon" href="images/logo.png">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:400,500,700" rel="stylesheet">
    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mob.css">
    <link rel="stylesheet" href="css/animate.css">
    
</head>

<body>
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <!-- MOBILE MENU -->
    <section>
        <div class="ed-mob-menu">
            <div class="ed-mob-menu-con">
                <div class="ed-mm-left">
                    <div class="wed-logo">
                        <a href="index.html"><img src="images/logo.png" style="width:50px;height:60px;" alt=""><span>Al Malik</span>
						</a>
                    </div>
                </div>
                <div class="ed-mm-right">
                    <div class="ed-mm-menu">
                        <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                        <div class="ed-mm-inn">
                            <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                           
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="#about">About Us</a></li>
                                <li><a href="guide.html">Haj Guide</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#packages">Packages</a></li>
                                <li><a href="price-list.html">Gallery</a></li>
                                <li><a href="404.html">Blog</a></li>
                                <li><a href="faq.html" target="_blank">FAQ</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--HEADER SECTION-->
    <section>
        <!-- TOP BAR -->
        <div class="ed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ed-com-t1-left">
                            <ul>
                                <li><a href="#">Contact: Sindhur Plaza, #42, Montieth Road, Egmore, Chennai - 600008.</a>
                                </li>
                                <li><a href="#">Phone: +91 044 32000042</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-right">
                            <ul>
                                <li><a href="login.html">Sign In</a>
                                </li>
                                <li><a href="register.html">Sign Up</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- LOGO AND MENU SECTION -->
        <div class="top-logo" data-spy="affix" data-offset-top="250">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wed-logo">
                            <a href="index.html"><span style="font-size:22px;color:#000000;"><img src="images/logo.png" style="width:50px;height:60px;" alt=""> Al Malik</span></a>
                        </div>
                        <div class="main-menu">
                              <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="#about">About Us</a></li>
                                <li><a href="guide.html">Haj Guide</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#packages">Packages</a></li>
                                <li><a href="price-list.html">Gallery</a></li>
                                <li><a href="404.html">Blog</a></li>
                                <li><a href="faq.html" target="_blank">FAQ</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
		<div class="tr-register">
			<div class="tr-regi-form v2-search-form">
				<h4>Booking is so <span>simple</span></h4>
				<p>No Hidden Chrages Applicable !</p>
				<form action="Confirm.php" method="post" >
								    
								    <input type="hidden" name="date_journey" value="<?php echo($date_journey) ?>">
								    <input type="hidden" name="date_end" value="<?php echo($date_end) ?>">
								    <input type="hidden" name="adults" value="<?php echo($adults) ?>">
								    <input type="hidden" name="children" value="<?php echo($children) ?>">
								    <input type="hidden" name="price" value="<?php echo($price) ?>">
								    
								    <input type="hidden" name="groupid" value="<?php echo($group_id) ?>">
								    
								    <input type="hidden" name="package" value="<?php echo($package) ?>">
								    
							<div class="alert alert-success contact__msg" style="display: none" role="alert">
								Thank you for arranging a wonderful trip for us! Our team will contact you shortly!
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input type="text" class="validate" name="name" required="">
									<label>Enter your name</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<input type="number" class="validate" name="phone" required="">
									<label>Enter your phone</label>
								</div>
								<div class="input-field col s6">
									<input type="email" class="validate" name="email" required="">
									<label>Enter your email</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input type="text" id="select-city-1" class="autocomplete validate" name="city">
									<label for="select-city-1">Select City or Place</label>
								</div>
							</div>
						
							<div class="row">
								<div class="input-field col s12">
									<input type="submit" value="Book Now" class="waves-effect waves-light tourz-sear-btn v2-ser-btn">
								</div>
							</div>
						</form>
			</div>
		</div>
                </section>
       <section>
        <div class="rows">
            <div class="footer">
                <div class="container">
                    <div class="foot-sec2">
                        <div>
                            <br><br>
                            <div class="row">
                                <div class="col-sm-3 foot-spec foot-com">
                                    <h4><span>Hajj</span> Travel Package</h4>
                                    <p>India's Leading Haj Travel Services over 10 Million Sucessful Customers and keep increasing every year by Numerous Amount.</p>
                                </div>
                                <div class="col-sm-3 foot-spec foot-com">
                                    <h4><span>Corporate Address</span></h4>
                                    <p>Sindhur Plaza, #42, Montieth Road, Egmore, Chennai - 600008</p>
                                    <p> <span class="strong">Phone: </span> <span class="highlighted"> +91 044 32000042</span> </p>
                                </div>
                                <div class="col-sm-3 col-md-3 foot-spec foot-com">
                                    <h4><span>Quick SUPPORT</span> Links</h4>
                                    <ul class="two-columns">
                                        <li> <a href="#about">About Us</a> </li>
                                        <li> <a href="#faq">FAQ</a> </li>
                                        <li> <a href="blog.html">Blog </a> </li>
                                        <li> <a href="#service">Services</a> </li>
                                        <li> <a href="#package">Packages</a> </li>
                                        <li> <a href="#">Contact Us</a> </li>
                                    </ul>
                                </div>
                                <div class="col-sm-3 foot-social foot-spec foot-com">
                                    <h4><span>Follow</span> us</h4>
                                    <p>Join us on all the below social media accounts for instant updates.</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== FOOTER - COPYRIGHT ==========-->
    <section>
        <div class="rows copy">
            <div class="container">
                <p>Copyrights © 2019 Al Malik Travel Company. All Rights Reserved</p>
            </div>
        </div>
    </section>
    <section>
       
    </section>
    <!--========= Scripts ===========-->
  <script src="js/jquery-latest.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>