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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
<section class="book">
    <div clas="container">
    <div class="container-fluid bg-gradient p-5">
      <div class="row m-auto text-center w-75">
        
        <div class="col-md-4 princing-item " style="margin-top:10px;">
          <div class="pricing-divider green">
              <h3 class="text-light">ECONOMY</h3>
            <p class="my-0 display-2 text-light font-weight-normal mb-3"><span class="h3">INR</span> 55,000/- </p>
             <svg class='pricing-divider-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
          <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
	H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
          <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
        </svg>
          </div>
          <div class="card-body bg-white mt-0 shadow">
            <ul class="list-unstyled mb-5 position-relative">
                <li><b>Group Number :</b> 32</li>
              <li><b>Starting Date :</b> 29/02/2019</li>
                 <li><b>Returning Date :</b> 29/02/2019</li>
              <li><b>Accomodation</b> within 350 mts from haram</li>
              <li><b>Ziyarah -</b>Mecca, Madinah, Taif  </li>
              <li><b>South Indian Cuisine</b></li>
            </ul>
            <input type="submit" value="Book Trip Now" class="waves-effect waves-light tourz-sear-btn v2-ser-btn">
          </div>
        </div>
       

        
        
        <div class="col-md-4 princing-item " style="margin-top:10px;">
          <div class="pricing-divider blue">
              <h3 class="text-light">5 STAR</h3>
                 <p class="my-0 display-2 text-light font-weight-normal mb-3"><span class="h3">INR</span> 55,000/- </p>
             <svg class='pricing-divider-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
          <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
	H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
          <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
        </svg>
          </div>

                  <div class="card-body bg-white mt-0 shadow">
            <ul class="list-unstyled mb-5 position-relative">
                <li><b>Group Number :</b> 33</li>
              <li><b>Starting Date :</b> 29/02/2019</li>
                 <li><b>Returning Date :</b> 29/02/2019</li>
              <li><b>Accomodation</b> within 350 mts from haram</li>
              <li><b>Ziyarah -</b>Mecca, Madinah, Taif  </li>
              <li><b>South Indian Cuisine</b></li>
            </ul>
            <input type="submit" value="Book Trip Now" class="waves-effect waves-light tourz-sear-btn v2-ser-btn">
          </div>
        </div>
               
        
  
        
        
         
        <div class="col-md-4 princing-item " style="margin-top:10px;">
          <div class="pricing-divider ">
              <h3 class="text-light">RAMADHAAN</h3>
                <p class="my-0 display-2 text-light font-weight-normal mb-3"><span class="h3">INR</span> 70,000/- </p>
             <svg class='pricing-divider-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
          <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
	H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
          <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
        </svg>
          </div>

         <div class="card-body bg-white mt-0 shadow">
            <ul class="list-unstyled mb-5 position-relative">
                <li><b>Group Number :</b> 34</li>
              <li><b>Starting Date :</b> 29/02/2019</li>
                 <li><b>Returning Date :</b> 29/02/2019</li>
              <li><b>Accomodation</b> within 350 mts from haram</li>
              <li><b>Ziyarah -</b>Mecca, Madinah, Taif  </li>
              <li><b>South Indian Cuisine</b></li>
            </ul><input type="submit" value="Book Trip Now" class="waves-effect waves-light tourz-sear-btn v2-ser-btn">
          
          </div>
          </div>      
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
    <style>.bg-gradient {
background: #C9D6FF;
background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF); 
background: linear-gradient(to right, #E2E2E2, #C9D6FF);
} 
ul li {
  margin-bottom:1.4rem;
}
.pricing-divider {
border-radius: 20px;
background: #C64545;
padding: 1em 0 4em;
position: relative;
}
.blue .pricing-divider{
background: #2D5772; 
}
.green .pricing-divider {
background: #1AA85C; 
}
.red b {
  color:#C64545
}
.blue b {
  color:#2D5772
}
.green b {
  color:#1AA85C
}
.pricing-divider-img {
	position: absolute;
	bottom: -2px;
	left: 0;
	width: 100%;
	height: 80px;
}
.deco-layer {
	-webkit-transition: -webkit-transform 0.5s;
	transition: transform 0.5s;
}
.btn-custom  {
  background:#C64545; color:#fff; border-radius:20px
}

.img-float {
  width:50px; position:absolute;top:-3.5rem;right:1rem
}

.princing-item {
  transition: all 150ms ease-out;
}
.princing-item:hover {
  transform: scale(1.05);
}
.princing-item:hover .deco-layer--1 {
  -webkit-transform: translate3d(15px, 0, 0);
  transform: translate3d(15px, 0, 0);
}
.princing-item:hover .deco-layer--2 {
  -webkit-transform: translate3d(-15px, 0, 0);
  transform: translate3d(-15px, 0, 0);
}</style>
</body>

</html>