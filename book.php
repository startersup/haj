 <?php
 
 
$date_journey=$_POST['date_journey'];

$package=$_POST['package'];

$adults=$_POST['adults'];

$children=$_POST['children'];



if($package=="15")

{ $date_end = date("m/d/Y", strtotime($date_journey . ' +15 day'));
}
 
 if($package=="30")

{ $date_end = date("m/d/Y", strtotime($date_journey . ' +30 day'));
}

//echo("dsd");
//echo($package);

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
                        <a href="index.html"><span style="color:black;"><img src="images/logo.png" style="width:50px;height:60px;" alt=""></span>
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
                                <li><a href="packages.html">Packages</a></li>
                                <li><a href="price-list.html">Gallery</a></li>
                                <li><a href="404.html">Blog</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

	<!--====== EVENTS ==========-->
	<section>
		<div class="rows inn-page-bg com-colo">
			<div class="container inn-page-con-bg events events-1 tb-space" id="inner-page-title">
				<!-- TITLE & DESCRIPTION -->
<div class="spe-title spe-title-1" style="margin-top:-30px;">
                    <h2>Booking <span>Quotes</span> </h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                </div>
				<div class="col-md-12">
					<table id="myTable">
						<tbody>
							<tr>
								<th>Group Id</th>
                                 <th class="e_h1">Package</th>
                                <th class="e_h1">Starting Date</th>
								<th class="e_h1">Returning Date</th>
                                <th class="e_h1">Seats Filled</th>
								<th class="e_h1">Seats Availabilty</th>
                                <th class="e_h1">Net Amount</th>
                              	<th>Book</th>
							</tr>
						
							<tr>
								<td>23</td>
								<td><?php echo($package) ?> days Package </td>
								<td class="e_h1"><?php echo($date_journey) ?></td>
								<td class="e_h1"><?php echo($date_end) ?></td>
								<td class="e_h1">10</td>
                                <td class="e_h1" ><span class="db-not-done">Less Availability</span></td>
                                <th class="e_h1">₹ 12,500</th>
								<td>
								    
								    <form action="booking.php" method="post" >
								    
								    <input type="hidden" name="date_journey" value="<?php echo($date_journey) ?>">
								    <input type="hidden" name="date_end" value="<?php echo($date_end) ?>">
								    <input type="hidden" name="adults" value="<?php echo($adults) ?>">
								    <input type="hidden" name="children" value="<?php echo($children) ?>">
								    <input type="hidden" name="price" value="12500">
								    
								    <input type="hidden" name="groupid" value="23">
								    
								    <input type="hidden" name="package" value="<?php echo($package) ?>">
								    <button class="link-btn"> Book Now</button>
								    
								   </form> 
								   
								   </td>
							</tr>
						<tr>
								<td>23</td>
									<td><?php echo($package) ?> days Package </td>
								<td class="e_h1"><?php echo($date_journey) ?></td>
								<td class="e_h1"><?php echo($date_end) ?></td>
								<td class="e_h1">10</td>
                            <td class="e_h1" ><span class="db-done">Available Now</span></td>
                                <th class="e_h1">₹ 12,500</th>
								<td>
								<form action="booking.php" method="post" >
								    
								    <input type="hidden" name="date_journey" value="<?php echo($date_journey) ?>">
								    <input type="hidden" name="date_end" value="<?php echo($date_end) ?>">
								    <input type="hidden" name="adults" value="<?php echo($adults) ?>">
								    <input type="hidden" name="children" value="<?php echo($children) ?>">
								    <input type="hidden" name="price" value="12500">
								    
								    <input type="hidden" name="groupid" value="23">
								    
								    <input type="hidden" name="package" value="<?php echo($package) ?>">
								    <button class="link-btn"> Book Now</button>
								    
								   </form> 
								
								</td>
							</tr>
                           <tr>
								<td>23</td>
									<td><?php echo($package) ?> days Package </td>
								<td class="e_h1"><?php echo($date_journey) ?></td>
								<td class="e_h1"><?php echo($date_end) ?></td>
								<td class="e_h1">10</td>
                               <td class="e_h1" ><span class="db-done">Available Now</span></td>
                                <th class="e_h1">₹ 12,500</th>
								<td>
								
								<form action="booking.php" method="post" >
								    
								    <input type="hidden" name="date_journey" value="<?php echo($date_journey) ?>">
								    <input type="hidden" name="date_end" value="<?php echo($date_end) ?>">
								    <input type="hidden" name="adults" value="<?php echo($adults) ?>">
								    <input type="hidden" name="children" value="<?php echo($children) ?>">
								    <input type="hidden" name="price" value="12500">
								    
								    <input type="hidden" name="groupid" value="23">
								    
								    <input type="hidden" name="package" value="<?php echo($package) ?>">
								    <button class="link-btn"> Book Now</button>
								    
								   </form> 
								
								</td>
							</tr>
                            
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	 <!--====== FOOTER 2 ==========-->
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