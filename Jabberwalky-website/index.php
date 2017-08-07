<?php 
 
session_start();
  
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>JabberWalky Home</title>
    <link rel="shortcut icon" href="icons/jw.ico" />

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- CSS
  ================================================== -->
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
       <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
     <!-- Prettyphoto -->
	<link rel="stylesheet" href="css/prettyPhoto.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <!--Line icon font -->
    <link rel="stylesheet" href="css/line-icons.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Prettyphoto -->
    <link rel="stylesheet" href="css/prettyPhoto.css">
    <!-- Template styles-->
    <link rel="stylesheet" href="css/style.css">
    <!-- color style -->
    <link rel="stylesheet" href="css/presets/maincolor.css">
    <!-- Responsive styles-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- circle counter -->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
 
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    div.stars {
  width: 270px;
  display: inline-block;
  float:right;
}

input.star { display: none; }

label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: #fff;
  transition: all .2s;
}

input.star:checked ~ label.star:before {
  content: '\f005';
  color: #FD4;
  transition: all .25s;
}

input.star-5:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}

input.star-1:checked ~ label.star:before { color: #F62; }

label.star:hover { transform: rotate(-15deg) scale(1.3); }

label.star:before {
  content: '\f006';
  font-family: FontAwesome;
}
    </style>
  </head>
  <body>
    
    <!-- main coding strat -->
    <header id="header" >
    	<nav class="navbar navbar-default navbar-fixed-top"  id="tf-menu">
    	<div class="container">
    		<div class="row">
    			<div class="navbar-header ">
    				<button class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse">
    					<span class="sr-only"></span>
    					<span class="icon-bar"></span>
    					<span class="icon-bar"></span>
    					<span class="icon-bar"></span>
    				</button>
    				<a href="#" class="navbar-brand page-scroll">JabberWalky</a>
    			</div> <!-- navabr-header -->

    			<div class="collapse navbar-collapse clearfix" id="bs-example-navbar-collapse-1" role="navigation">
    				<ul class="nav navbar-nav navbar-right">
    					<li><a class="page-scroll" href="#header">Home</a></li>
    					<li><a class="page-scroll" href="#search">Search</a></li>
    					<li><a class="page-scroll" href="#process">Works</a></li>
    					<li><a class="page-scroll" href="#feature">Features</a></li>

    					<li><a class="page-scroll" href="#team">team</a></li>
    					<li><a class="page-scroll" href="#contact" >contact</a></li>
    					
    					<li><a class='page-scroll'  href='' ><?php if(isset($_SESSION['username'])) {echo $_SESSION['username'];
    					echo "<li><a class='page-scroll' id='logout' href='logout.php'> Logout </a></li>";} else echo "Sign In";?></a></li>
    				</ul>
    			</div>
    			
    </div>
  </div>
    		</div> <!-- row end -->

    	</div> <!-- container end -->
    	</nav> <!-- nav end -->

    </header>

	<!-- main slider start -->
	<section id="slider" class="slider">
		<div class="overlay"></div>
		<div id="main-slide" class="carousel slide" data-ride="carousel">

			<!-- Indicators -->
			<ol class="carousel-indicators visible-lg visible-md">
			  	<li data-target="#main-slide" data-slide-to="0" class="active"></li>
			    <li data-target="#main-slide" data-slide-to="1"></li>
			    <li data-target="#main-slide" data-slide-to="2"></li>
			</ol><!--/ Indicators end-->
			
			<!-- Carousel inner -->
			<div class="carousel-inner">
			    <div class="item active">
			    	<img class="img-responsive" src="images/slider/bg.jpg" alt="slider">
                    <div class="slider-content">
                    	<div class="col-md-12 text-center">
                    		<div class="slider-text italic">
	                        	<h2 class="animated2">Welcome to JabberWalky </h2>
	                        	<h3 class="animated3">We are your ultimate choice to find something</h3>
	                        	<h5 class="animated6">lets introduce</h5>
	                        	<a href="#search" class="animated4 page-scroll" ><i class="fa fa-angle-down"></i></a>
                        	</div>
                    	</div>
                    </div>
			    </div><!--/ Carousel item end -->

			    <div class="item">
			    	<img class="img-responsive" src="images/slider/bg7.jpg" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h2 class="animated4">We are Concerned</h2>
                            <h3 class="animated5">About continous Help</h3>	
                            <h5 class="animated2">lets introduce</h5>
                            <a href="#search" class="animated6 page-scroll"><i class="fa fa-angle-down"> </i></a>     
                        </div>
                    </div>
			    </div><!--/ Carousel item end -->
			    
			    <div class="item">
			    	<img class="img-responsive" src="images/slider/bg3.jpg" alt="slider">
                    <div class="slider-content">
                    	<div class="col-md-12">
                    		<div class="slider-text">
	                        	<h2 class="animated7">We Offer our Clients</h2>
	                        	<h3 class="animated8">An experience more than a search</h3>
                        	</div>
	                       <a href="#search" class="animated6 page-scroll"><i class="fa fa-angle-down"> </i></a>	
                    	</div>
                    </div>
			    </div><!--/ Carousel item end -->
			</div><!-- Carousel inner end-->
			
			<!-- Controllers -->
			<a class="left carousel-control" href="#main-slide" data-slide="prev">
		    	<span><i class="fa fa-angle-left"></i></span>
			</a>
			<a class="right carousel-control" href="#main-slide" data-slide="next">
		    	<span><i class="fa fa-angle-right"></i></span>
			</a>
		</div><!--/ Carousel end --> 

	</section>
	<!-- main slider end -->

	<!-- search section Start -->

	<section id="search" class="search">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="header-desc text-center">
						<div class="header-content">
							<h3 class="big-title">Search</h3>
							<span>what i do</span>
						</div>
						<p>Search a place, a shop or an outlet just through a keyword. Enter your keyword below.</p>
					</div>
				</div>
			</div>
		  <form action="#search" method="POST">
 			 <input id="search-box" type="text" name="search_item" placeholder="Search..">
             <input id="submit" style= "width: 150px;
	height: 49px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
	background-color: #e10030;
	color: white;
	font-size: 20px;"
	type="submit" value="Find"/>
         
         <a id="advance" style="font-weight: bold; font-size: 20px;"> Advanced search </a>
         <br/>
         <!-- hidden parts-->
           <div id="locationField">
	          	<input id="autocomplete" placeholder="Your Preferred Location.."  type="text"></input><br/>
	          		<input type="text" id="hide-lat" style="display:none" name="hide-lat"/>
					<input type="text" id="hide-long" style="display:none" name="hide-long"/>
	          	<div class="price-slider"><h3> Price range: </h3><input id="price" type="range" name= "price" min="0" max="5000" step="1" onchange="var val = document.getElementById('price').value;
	                  document.getElementById('p2').innerHTML = val;" /><br/> <span id="p2"></span></div>
	                   <input type="text" id="hide-price" style="display:none" name="hide-price"/>
	            <div class="category">
	            	 <h3> Choose a category: </h3>
	                        <select id="category">
	                          <option value="Books">Books</option>
	                          <option value="Shopping">Shopping</option>
	                          <option value="Food">Food</option>
	                          <option value="Grocery">Grocery</option>
	                        </select>
	            </div>           
	            <input type="text" id="hide-categ" style="display:none" name="hide-categ"/>
			</div> <!-- row end -->
			</form>    <br/>

			<p id="success"></p>
			<?php
$servername = "localhost";
$username = "test";
$password = "";
$dbi = "jw_original";
$lat = 0;
$lng = 0;
$val = 0;
$price = 0;
$lat  = isset($_POST['hide-lat']) ? $_POST['hide-lat'] : 0;
$lng = isset($_POST['hide-long']) ? $_POST['hide-long'] : 0;
$price  = isset($_POST['hide-price']) ? $_POST['hide-price'] : 0;
$categ = isset($_POST['hide-categ']) ? $_POST['hide-categ'] : 0;
$val = isset($_POST['search_item']) ? $_POST['search_item'] : 0;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbi);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
    echo "";

$sql = "SELECT lat, lng, stars, category from info where item = '".$val."' OR category = '".$categ."' or price <=".$price;


$result = $conn->query($sql);
$lat_arr = array();
$long_arr = array();
$star_arr = array();
$cat_arr = array();
$cnt = 0;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc())
    {
        $lat_arr[] = $row["lat"];
        $long_arr[] = $row["lng"];
        $star_arr[] = $row["stars"];
        $cat_arr[] = $row["category"];
        $cnt = $cnt + 1;

    }
}
?>
<!-- ONLY KEEP THIS FOR HCI!!!!!!-->

			<div id="map_canvas" style="width: 100%; height: 600px; margin-top:10%"></div>
		</div> <!-- container end -->
	</section>

<!-- search section End -->
	<!-- Work process start -->
   


<script>

var map;
var global_markers = [];
var infowindow = new google.maps.InfoWindow({});

function initialize(){
    geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(30.375321, 69.34511599999996);
    var myOptions = {
        zoom: 6,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var input = document.getElementById('autocomplete');
        
            var autocomplete = new google.maps.places.Autocomplete(input);
            autocomplete.addListener('place_changed', function() {
              var place = autocomplete.getPlace();
               var lat = place.geometry.location.lat();
               var lng = place.geometry.location.lng();
              document.getElementById('hide-lat').value = lat;
              document.getElementById('hide-long').value = lng;

            });
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
  addmarker();


}

function addmarker(){

    var lati =<?php echo json_encode($lat_arr) ?>;
    var longi =<?php echo json_encode($long_arr) ?>;
    var star = <?php echo json_encode($star_arr) ?>;
    var cat = <?php echo json_encode($cat_arr) ?>;
    
   for (var i = 0; i < 7; i++) {
        // obtain the attribues of each marker
        var lat = lati[i];
        var lng = longi[i]; 
    
        var myLatlng = new google.maps.LatLng(lat, lng);
            var marker = new google.maps.Marker({
                  position: myLatlng,
                  map: map,
                  title: " lat: " + lat + "Recommended rating: " + star[i] + " ☆"
            });
             var contentString = "<html><body><div><p><h4> Member Rating: " + star[i] + "☆ <br/>Category: "+cat[i]+" </h4></p></div></body></html>";
             var infowindow = new google.maps.InfoWindow({
              content: contentString
            });
        marker['infowindow'] = contentString;
       
        global_markers[i] = marker;

        google.maps.event.addListener(global_markers[i], 'click', function() {
            infowindow.setContent(this['infowindow']);
            infowindow.open(map, this);
        });
        }

 
}
  
  

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5GOxNcTakzp8SRDhahyVzDt7yrad-uGc
    &libraries=places&callback=initialize"
        async defer></script>

	<section id="process" class="process parallax2">
		<div class="parallax-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="sub-heading text-center">
						<h4 >How it works?</h4>
						<div class="line"></div>
						<p>simply follow these steps on the app above</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="process-desc">
						<div class="process-timeline"></div>
						<div class="process-none text-center">
							<div >
								<i class="fa fa-user"></i>
							</div>
							<h4>concept</h4>
						</div>
						<div class="single-process text-center">
							<div class="process-icon">
								<i class="fa fa-angle-right"></i>
							</div>
							<h4>Enter item</h4>
						</div>

						<div class="single-process text-center">
							<div class="process-icon">
								<i class="fa fa-lightbulb-o"></i>
							</div>
							<h4>Set options</h4>
						</div>
						<div class="single-process text-center">
							<div class="process-icon">
								<i class="fa fa-search"></i>
							</div>
							<h4>press find</h4>
						</div>
						<div class="single-process text-center">
							<div class="process-icon">
								<i class="fa fa-location-arrow"></i>
							</div>
							<h4>locate places</h4>
						</div>
						<div class="single-process text-center">
							<div class="process-icon">
								<i class="fa fa-star"></i>
							</div>
							<h4>see recommendations</h4>
						</div>
					</div>
				</div>
			</div> <!-- row end -->
		</div>
	</section>
	<!-- Work process end -->
	
	<!-- features quality start -->
	<section id="feature">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="header-desc text-center">
						<div class="header-content">
							<h3 class="big-title">Features</h3>
							<span>how dedicated i am</span>
						</div>
						
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-6 wow fadeInLeft" data-wow-delay=".4s">
					<div class="feature-img">
						<img src="images/feature.png" alt="" class="img-responsive">
					</div>
				</div>

				<div class="col-md-6">
					<div class="main-fetaure">
						<div class="feature-desc wow fadeInRight" data-wow-delay=".2s">
							<div class="feature-icon"><i class="fa fa-thumbs-o-up"></i></div>
							<div class="feature-content">
								<h4> Well-formed recommendations</h4>
								<p>Each customer on the basis of his category is provided with helpful and considerate recommendations; whether it be price range, locality etc, any aspect</p>
							</div>
						</div>
						<div class="feature-desc wow fadeInRight" data-wow-delay=".4s">
							<div class="feature-icon"><i class="icon icon-flag"></i></div>
							<div class="feature-content">
								<h4> Fresh and Clean UI</h4>
								<p>It has a good user interface. Our design facilitates the user in finishing the task at hand without drawing unmecessary attention to itself.</p>
							</div>
						</div>
						<div class="feature-desc wow fadeInRight" data-wow-delay=".8s">
							<div class="feature-icon"><i class="icon icon-adjustments "></i></div>
							<div class="feature-content">
								<h4> Easy to Use</h4>
								<p>It has a user friendly environment but also benefits the user in using it effectively and in minimum possible time. </p>
							</div>
						</div>
						<div class="feature-desc wow fadeInRight" data-wow-delay="1.1s">
							<div class="feature-icon"><i class="icon icon-hourglass"></i></div>
							<div class="feature-content">
								<h4> Rapid Customer support </h4>
								<p>Each customer chooses the options of his choice and the web app proves successful in facilitating them in the best way possible</p>
							</div>
						</div>
					</div> <!-- main feature end -->
				</div> <!-- col-md-8 end -->
			</div> <!-- row end -->
		</div> <!-- conatainer end -->
	</section>
	<!-- features quality end -->
	
	

	
	<!-- video background section start -->

	 <section id="video" class="hero landing hero-section">
        <div class="video-background-container">
            <video preload="auto" autoplay loop muted class="video-background">
                <source type="video/mp4" src="videos/google.mp4" />
                <source type="video/ogg" src="videos/google.ogv" />
                <source type="video/webm" src="videos/google.webm" />
            </video>
        </div> 

        <div class="parallax-overlay"></div>

        <div class="container">
            <div class="hero-content text-center">
                <div class="hero-text" >
                    <h2 class="hero-title">Are you intrested ? Want to give recommendations !</h2>
                    <p class="hero-description">Enter your feedbacks here</p>
                    <button class="btn btn-primary page-scroll" ><?php if(isset($_SESSION['username'])) echo "<a href='member-2.php'>Get in Touch</a>"?></button>
                </div><!--/ Hero text end -->
            </div><!--/ Hero content end -->
        </div><!--/ Container end -->
    </section><!--/ Home end -->

	<!-- video background section end -->

	<!-- TEAM section strat -->
	<section id="team" class="team">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="header-desc text-center">
						<div class="header-content">
							<h3 class="big-title">Our Members</h3>
							<span>our expert team</span>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui nulla omnis eos pariatur quidem at alias rerum tempora. </p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="team-mebers">
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".3s">
						<div class="single-member">
							<img src="images/team/i.jpg" alt="" class="img-responsive">
							<div class="member-overlay">
								<h4> Memeber details</h4>	
								<div class="line"></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas magni, laborum ipsa. Magnam natus incidunt explicabo excepturi.</p>
								<div class="member-desc">
									<h4>Darn Oscar</h4>
									<h5>web designer</h5>
								</div>
							</div>

							<div class="member-content">
								<div class="member-desc">
									<h4>Darn Oscar</h4>
									<h5>web designer</h5>
								</div>
								<div class="member-socail">
									<ul class="list-inline">
										<li> <a href="#"><i class="fa fa-facebook"></i> </a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-behance"></i></a></li>
										<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div> <!-- col-md-3 end -->
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".6s">
						<div class="single-member">
							<img src="images/team/m.jpg" alt="" class="img-responsive">
							<div class="member-overlay">
								<h4> Memeber details</h4>	
								<div class="line"></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas magni, laborum ipsa. Magnam natus incidunt explicabo excepturi.</p>
								<div class="member-desc">
									<h4>Darn Oscar</h4>
									<h5>web designer</h5>
								</div>
							</div>
							<div class="member-content">
								<div class="member-desc">
									<h4>Darn Oscar</h4>
									<h5>web designer</h5>
								</div>
								<div class="member-socail">
									<ul class="list-inline">
										<li> <a href="#"><i class="fa fa-facebook"></i> </a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-behance"></i></a></li>
										<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div> <!-- col-md-3 end -->
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".9s">
						<div class="single-member">
							<img src="images/team/i.jpg" alt="" class="img-responsive">
							<div class="member-overlay">
								<h4> Memeber details</h4>	
								<div class="line"></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas magni, laborum ipsa. Magnam natus incidunt explicabo excepturi.</p>
								<div class="member-desc">
									<h4>Darn Oscar</h4>
									<h5>web designer</h5>
								</div>
							</div>
							<div class="member-content">
								<div class="member-desc">
									<h4>Darn Oscar</h4>
									<h5>web designer</h5>
								</div>
								<div class="member-socail">
									<ul class="list-inline">
										<li> <a href="#"><i class="fa fa-facebook"></i> </a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-behance"></i></a></li>
										<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div> <!-- col-md-3 end -->
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="1.1s">
						<div class="single-member">
							<img src="images/team/z.jpg" alt="" class="img-responsive">
							<div class="member-overlay">
								<h4> Memeber details</h4>	
								<div class="line"></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas magni, laborum ipsa. Magnam natus incidunt explicabo excepturi.</p>
								<div class="member-desc">
									<h4>Darn Oscar</h4>
									<h5>web designer</h5>
								</div>
							</div>

							<div class="member-content">
								<div class="member-desc">
									<h4>Darn Oscar</h4>
									<h5>web designer</h5>
								</div>
								<div class="member-socail">
									<ul class="list-inline">
										<li> <a href="#"><i class="fa fa-facebook"></i> </a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-behance"></i></a></li>
										<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div> <!-- col-md-3 end -->
				</div>
			</div> <!-- row end -->
		</div> <!-- container end -->
	</section>
	<!-- TEAM section strat -->
<!-- Counter start -->
	<section id="counter-area">
        <div class="container" style="margin-left: 15%;">
             <div class="facts">
                <div class="col-md-3 col-xs-12 col-sm-6 columns">
                    <div class="facts-wrap">
	                     <div class="icon-box"><i class="fa fa-thumbs-o-up fw"></i></div>
	                    <div class="fact-content">
	                    	<h6>Users</h6>
	                     	<div class="facts-wrap-num">
	                            <span class="counter" style="color: #dc002f"><?php

 //add count of user database when created         
$sql = "SELECT * from pginfo";


$result = $conn->query($sql);
$cnt = 0;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc())
    {
       $cnt =$cnt +1;

    }
}
echo $cnt;

                ?></span>
	                        </div>
	                    </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-6 columns">
                    <div class="facts-wrap">
                    	<div class="icon-box"><i class="fa fa-gift fw"></i></div>
	                     <div class="fact-content">
	                     	<h6>Rating</h6>
	                     	<div class="facts-wrap-num" ><span class="counter" style="color: #dc002f"> <?php

          
$sql = "SELECT AVG(pstar) as avg from pginfo";


$result = $conn->query($sql);
$cnt = 0;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc())
    {
       $cnt = $row['avg'];

    }
}
echo $cnt;

                ?></span></div>
	                    </div>
                    </div>
                </div>
                

                <div class="col-md-3 col-xs-12 col-sm-6 columns">
                    <div class="facts-wrap style="width: 307px;">
                    	<div class="icon-box"><i class="fa fa-check-square-o fw"></i></div>
                        <div class="fact-content">
                        	<h6>Recommendations</h6>
	                        <div class="facts-wrap-num"><span class="counter" style="color: #dc002f"><?php

          
$sql = "SELECT * from info";


$result = $conn->query($sql);
$cnt = 0;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc())
    {
        $cnt = $cnt+1;

    }
}
echo $cnt;

                ?></span></div>
                        </div>
                        
                    </div>
                </div>
                
            </div> <!-- Conatainer End -->
           
        </div>	<!-- Fact div ENd -->
        <div style="float: left; position :relative; margin-left:36%"><h2 style="margin-left: 30%;">Rate us:</h2>
        	 <div class="stars">

  <form action="" method="POST">

    <input class="star star-5" id="star-5" type="radio" name="stars" value = "5"/>

    <label class="star star-5" for="star-5"></label>

    <input class="star star-4" id="star-4" type="radio" name="stars" value = "4"/>
    <label class="star star-4" for="star-4"></label>

    <input class="star star-3" id="star-3" type="radio" name="stars" value="3"/>

    <label class="star star-3" for="star-3"></label>

    <input class="star star-2" id="star-2" type="radio" name="stars" value="2"/>

    <label class="star star-2" for="star-2"></label>

    <input class="star star-1" id="star-1" type="radio" name="stars" value="1"/>
    <label class="star star-1" for="star-1"></label>
<input type="text" class="page-star" style="display:none"/>
  </form>

</div>

        </div>
	</section>
	<!-- Counter end -->



	<!-- Section testimonial start -->
	<section id="testimonial" class="parallax1">
		<div class="parallax-overlay"></div>
			<div class="container">
				<div class="row">
					<div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators visible-lg visible-md">
						  	<li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
						    <li data-target="#testimonial-carousel" data-slide-to="1"></li>
						    <li data-target="#testimonial-carousel" data-slide-to="2"></li>
						</ol><!--/ Indicators end-->

						<div class="carousel-inner">
							<div class="item active text-center">
								<div class="row">
									<div class="col-md-12">
										<div class="testimonial-thumb">
										<img src="images/team/team1.jpg" alt="" class="img-responsive">
										</div>
										<div class="testimonial-content">
											<p>I must say it proves a blessing in disguise. i was unable to find a hospital near my locality. but with jabberwalky things were so easy! effort much appreciated.</p>
											<h3>Jimmi Carter</h3>
											<span>Tourist</span>
										</div>
									</div>
								</div>
							</div>
							<div class="item text-center">
								<div class="row">
									<div class="col-md-12">
										<div class="testimonial-thumb">
										<img src="images/team/team2.jpg" alt="" class="img-responsive">
										</div>
										<div class="testimonial-content">
											<p>It was a great experiance. I just shifted to Islamabad and didn't knew what and where the fast food restaurants are, Jabberwalky helped me alot in doing so, saved alot of my time.</p>
											<h3>Charol</h3>
											<span>Student</span>
										</div>
									</div>
								</div>
							</div>

							<div class="item text-center">
								<div class="row">
									<div class="col-md-12">
										<div class="testimonial-thumb">
										<img src="images/team/team1.jpg" alt="" class="img-responsive">
										</div>
										<div class="testimonial-content">
											<p>It was a great experiance. I just shifted to Islamabad and didn't knew what and where the fast food restaurants are, Jabberwalky helped me alot in doing so, saved alot of my time.</p>
											<h3>Kaila</h3>
											<span>Traveller</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- testimonial-carousel end -->
				</div> <!-- row end -->
			</div> <!-- container end -->
	</section>
	<!-- Section testimonial end -->
	
	
	
	

	<!-- section contact start -->

	<section id="contact" class="contact parallax4">
		<div class="parallax-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="header-desc text-center">
						<div class="header-content">
							<h3 class="big-title">contact</h3>
							<span>my online dairy</span>
						</div>
						<p>Contact us in case of any queries or message </p>
					</div>
				</div>
			</div> <!-- 1st row end -->

			<div class="row">
				<div class="col-md-12">
					<div class="contact-desc">
						<form method="post" role="form" id="contact-form">
							<div class="row">
								<div class="col-md-4 wow fadeInLeft" data-wow-delay=".2s">
									<div class="form-group">
										<label> Name</label>
										<input class="form-control" name="name" placeholder="name" type="text" required>
									</div>
								</div>

								<div class="col-md-4 wow fadeInDown" data-wow-delay=".5s">
									<div class="form-group">
										<label> Email</label>
										<input class="form-control" name="name" placeholder="email" type="text" required>
									</div>
								</div>

								<div class="col-md-4 wow fadeInRight" data-wow-delay=".8s">
									<div class="form-group">
										<label>Subject</label>
										<input class="form-control" name="name" placeholder="subject" type="text">
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-12 wow fadeInUp" data-wow-delay="1.1s">
									<div class="form-group">
										<label > Message</label>
										<textarea cols="30" rows="10" class="form-control"  placeholder="message"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 wow fadeInUp" data-wow-delay="1.3s">
									<div class="text-left  m20">
										<button class="btn btn-white">Submit</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div> <!-- col-md-6 end -->
			</div> <!-- row end -->
		</div> <!-- container end -->
	</section>
	<!-- section contact end -->
	
	<!-- Map start here -->
	<section id="map-wrapper" class="no-padding">
		<div class="container">
			<div class="contact-info-inner wow fadeInUp">
    			<h3>Contact Info</h3>
	    		<div><i class="fa fa-map-marker pull-left"></i>  
	    			<p><strong>Address</strong>1102 Saint Marys, Junction City, KS</p>
	    		</div>
	    		<div><i class="fa fa-phone pull-left"></i>  
	    			<p><strong>Phone</strong>+(785) 238-4131</p>
	    		</div>
	    		<div><i class="fa fa-envelope-o pull-left"></i>  
	    			<p><strong>Email</strong>info@barrierinco.com</p>
	    		</div>
	    		<div><i class="fa fa-compass pull-left"></i>  
	    			<p><strong>Office Hours</strong>Mon - Friday, 9:00 - 5:00</p>
	    		</div>

			</div>
	    </div>
		<div class="map" id="map"></div>
	</section><!--/ Map end here -->

	<!-- footer start -->

	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="footer-desc text-center">
						<div class="logo wow fadeInDown">JabberWalky</div>
						<ul class="socail-list list-inline">
							<li><a href="#"><i class="fa fa-facebook wow fadeInLeft" data-wow-delay=".2s"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter wow fadeInLeft" data-wow-delay=".4s"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus wow fadeInLeft" data-wow-delay=".6s"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin wow fadeInLeft" data-wow-delay=".8s"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble wow fadeInLeft" data-wow-delay="1s"></i></a></li>
							<li><a href="#"><i class="fa fa-rss wow fadeInLeft" data-wow-delay="1.1s"></i></a></li>
						</ul>
					</div>
				</div>
			</div><!-- row end -->
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="copyright-info m20">
         			 &copy; Copyright 2015 JW. <span>Designed &amp; developed by- <a href="#" target="_blank">Themeturn</a></span>
        			</div>
				</div>
			</div><!--/ Row end -->

			<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
			 	<a href="#slider" class="page-scroll">
					<button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
				</a>
			</div>
		</div><!-- container end -->
	</footer>
	<!-- footer end -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- initialize jQuery Library -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <!-- Wow Animation -->
    <script type="text/javascript" src="js/wow.min.js"></script>
    <!-- SmoothScroll -->
    <script type="text/javascript" src="js/smooth-scroll.js"></script>
    <!-- prettyphoto -->
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <!-- Eeasing -->
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <!-- Counter -->
    <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
    <!-- Waypoints -->
    <script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
    <!-- Google Map API Key Source -->
   <!-- <script src="http://maps.google.com/maps/api/js?sensor=false"></script>-->
    <!-- Google Map  Source -->
    <script type="text/javascript" src="js/gmaps.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
     <script type="text/javascript">

$(function() {
    $( "#search-box" ).autocomplete({
        source: 'data.php'
    });
});

      
    </script>
    	
<script>
$('input[type=radio][name=stars]').change(function() {
       
        st = this.value;
         console.log(st);
         $(".page-star").val(st);
        $.ajax({url: "page-data.php?pstar="+st, success: function(){
      
    }});
    
});

</script>
  </body>
</html>