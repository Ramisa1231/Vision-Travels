<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v2.5.2, http://mobirise.com -->
  
  <style type ="text/css">

body
{
/*background:url(assets/images/rental%20cars/bmw_x5_novelty_bmw_cars_mountains_side_view_93039_1920x1080.jpg) #E9E8DC no-repeat left top; */
background:url(assets/images/rental%20cars/Audi-R8_black_Car_Wallpaper1.jpg) #E9E8DC no-repeat left top;
	background-size: 100%;
}

</style>
  
  <link rel="stylesheet" href="form css/form.css"/>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v2.5.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Rental car info</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/mobirise/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
</head>
<body>
<!--<section class="engine"><a rel="nofollow" href="http://mobirise.com">Mobirise easy website builder</a></section>-->
<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse" id="menu-15">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                
                <div class="mbr-navbar__hamburger mbr-hamburger text-white"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active mbr-buttons--only-links"><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="http://localhost/travel_agency/Homepage.php">HOME</a></li><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="http://localhost/travel_agency/Destinations.php">DESTINATIONS</a></li> <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="http://localhost/travel_agency/our_services.php">OUR SERVICES</a></li> <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="http://localhost/travel_agency/about_us.php">ABOUT US</a></li><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="http://localhost/travel_agency/main_login.php">LOGIN</a></li></ul></div>
                        
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>


  <script src="assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/mobirise/js/script.js"></script>
  
  <!-- <h3 style="color : white">   </h3>-->
  <br/>
    <br/>
      <br/>
      <br/>
    <br/>
      <br/>
      
<?php
//$b=$_POST['h2'];
//echo $b;


if(isset($_POST['submit']))

	$connection = mysqli_connect("localhost","root","root","travel_agency"); 
	if (mysqli_connect_error()) 
	{
		die("Database connection failed: " . mysqli_error($connection));
	}
	$s_id=$_POST['h5'];
	//echo $s_id;
	
	 $query9="insert into hotel(service_id,hotel_name,country,checkin_date,checkout_date)values($s_id,'$_POST[hotel_name]','$_POST[country]','$_POST[checkin_date]','$_POST[checkout_date]');";

	$result = mysqli_query( $connection,$query9);
 


?>



<form action='add_rental_car.php' method='post'>
<input type=hidden name=h6 value="<?php echo $s_id; ?>" />
<fieldset class="car_info">
	<legend>Rental Car Info</legend>
    
<p>
<label for="car_name">Car Name: </label> 
<select id="car_name"  name="car_name" id="car_name" required>
  <option value="BMW">BMW</option>
  <option value="Mercedes">Mercedes</option>
  <option value="Volkswagen">Volkswagen</option>
  <option value="Audi" selected>Audi</option>
</select> 
</p>

	<p>
   <label for="pickup_place">Pick Up Place: </label>  
    <input type="varchar" name="pickup_place" id="pickup_place" size=30 required placeholder="Enter a valid pickup place"   required pattern = "[a-zA-Z][a-zA-Z0-9'/.,\s]*" /> 
    </p>
	<p>
  <label for="pickup_date">Pick Up Date: </label>   
    <input type="date" name="pickup_date" id="pickup_date" min="2015-01-01" max="2020-01-01" required ="[0-9]-[0-9]-[0-9]"/> 
    </p>
	
	
	<p>
 <label for="dropoff_place"> Drop Off Place:</label>   
     <input type="varchar" name="dropoff_place" id="dropoff_place" size=30  required placeholder="Enter a valid dropoff place"   required pattern = "[a-zA-Z][a-zA-Z0-9'/.,\s]*" /> 
     </p>
	
	
	<p>
  <label for="dropoff_date"> Drop Off Date: </label>  
    <input type="date" name="dropoff_date" id="dropoff_date"  min="2015-01-01" max="2020-01-01" required ="[0-9]-[0-9]-[0-9]"/> 
    </p>
	
<label for="submit"></label>
 <input type="submit" name="submit" id="submit" value="submit" />

</fieldset>
</form> 
	

  
</body>
</html>