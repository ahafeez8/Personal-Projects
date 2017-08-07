<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Member</title>
    <link rel="shortcut icon" href="icons/jw.ico" />
    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--JSP
    ==================================================== Following for google api-->
   <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
             <!-- CSS
  ================================================== -->
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
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
    <link rel="stylesheet" href="css/member.css">
    <!-- color style -->
    <link rel="stylesheet" href="css/presets/maincolor.css">
    <!-- Responsive styles-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- circle counter -->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
  </head>
  <body>

    <header id="header" >
      <nav class="navbar navbar-default navbar-fixed-top"  id="tf-menu">
      <div class="container">
        <div class="row">
          <div class="navbar-header ">
            <button class="navbar-toggle collapsed" data-tarPOST="#bs-example-navbar-collapse-1" data-toggle="collapse">
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
            </ul>
          </div>
        </div> <!-- row end -->
      </div> <!-- container end -->
      </nav> <!-- nav end -->
    </header>

  <!-- search section Start -->

  <section id="search" class="search" >
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="header-desc text-center">
            <div class="header-content">
              <h3 class="big-title">Enter Data</h3>
              <span>what i do</span>
            </div>
            <p>Add your recommendation in the following form.</p>
          </div>
        </div>
      </div>
     
       <form method="POST" action="">
       <h3> Enter the location of place </h3>
<input type="text" id="autocomplete"/>
<input type="text" id="hide-lat" name="hide-lat">
<input type="text" id="hide-long" name="hide-long"/> <h3> Enter an item and the price </h3>
  <input type="text" id="item" name="item" placeholder="Enter item name.." />
  <input type="text" id="hide-item" name="hide-item"/>
  <div class="price-slider"> Price range: 
  <input id="price" type="range" min="0" max="5000" step="1" onchange="var val = document.getElementById('price').value;
                      document.getElementById('p2').innerHTML = val;" /><br/> <span id="p2"></span></div>
                      <input type="text" id="hide-price" name="hide-price"/>
<h3> Choose a category </h3><select id="category">
                          <option value="Books">Books</option>
                          <option value="Shopping">Shopping</option>
                          <option value="Food">Food</option>
                          <option value="Grocery">Grocery</option>
                        </select>
<h3> Give your recommended rating </h3><div class="rating">
            <form>
            <input id="star5" name="star" type="radio" value="5" class="radio-btn hide" />
            <label for="star5">☆</label>
            <input id="star4" name="star" type="radio" value="4" class="radio-btn hide" />
            <label for="star4">☆</label>
            <input id="star3" name="star" type="radio" value="3" class="radio-btn hide" />
            <label for="star3">☆</label>
            <input id="star2" name="star" type="radio" value="2" class="radio-btn hide" />
            <label for="star2">☆</label>
            <input id="star1" name="star" type="radio" value="1" class="radio-btn hide" />
            <label for="star1">☆</label>
            <div class="clear"></div>
            <input type="text" id="hide-categ" name="hide-categ"/>
            <input type="text" id="hide-star" name="hide-star"/>


          <div id="push">  <input type="submit" id="submit"></form>
      </div> <!-- row end -->
    </div> <!-- container end -->
  </section>
<script src="js/member.js">       

</script>
<script>function init()
{
   var input = document.getElementById('autocomplete');
        
            var autocomplete = new google.maps.places.Autocomplete(input);
            autocomplete.addListener('place_changed', function() {
              var place = autocomplete.getPlace();
            var lat = place.geometry.location.lat();
            var lng = place.geometry.location.lng();
            document.getElementById('hide-lat').value = lat;
            document.getElementById('hide-long').value = lng;
          
            });
}
</script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5GOxNcTakzp8SRDhahyVzDt7yrad-uGc
    &libraries=places&callback=init"
        async defer></script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5GOxNcTakzp8SRDhahyVzDt7yrad-uGc
    &libraries=places&callback=init"
        async defer></script>

  <!-- search section End -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="footer-desc text-center">
            <div class="logo wow fadeInDown">Barrier</div>
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
          <div class="copyright-info jabberWalky. <span>Designed &amp; developed by- <a href="#" target="_blank">JW</a></span>
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
<?php
$servername = "localhost";
$username = "test";
$password = "";
$dbi = "jw_original";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbi);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
    echo "successful connection";


$lat = 0;
$lng = 0;
$star = 0;
$categ = 0;
$item = 0;
$price = 0;
$lat = isset($_POST['hide-lat']) ? $_POST['hide-lat'] : 0;
$lng = isset($_POST['hide-long']) ? $_POST['hide-long'] : 0;
$star = isset($_POST['hide-star']) ? $_POST['hide-star'] : 0;
$categ = isset($_POST['hide-categ']) ? $_POST['hide-categ'] : 0;
$item = isset($_POST['hide-item']) ? $_POST['hide-item'] : 0;
$price= isset($_POST['hide-price']) ? $_POST['hide-price'] : 0;

$sql = "INSERT INTO info (lat,lng, item,price,category,stars)
VALUES ($lat, $lng, '$item',$price, '$categ', $star)";

if (mysqli_query($conn, $sql)) {
    echo "Data inserted successufully successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>
  </body>
  </html>
