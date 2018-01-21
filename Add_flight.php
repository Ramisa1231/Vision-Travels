<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v2.5.2, http://mobirise.com -->
  
  <style type ="text/css">

body
{
background:url(assets/images/hotels/intercontinental%20hotel%20hong%20Kong.jpg) #E9E8DC no-repeat left top;
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
  <title>sample</title>
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



if(isset($_POST['submit']))

	$connection = mysqli_connect("localhost","root","root","travel_agency"); 
	if (mysqli_connect_error()) 
	{
		die("Database connection failed: " . mysqli_error($connection));
	}
	$s_id=$_POST['h4'];
	//echo $s_id ;
	
	 $query8="insert into flight(service_id,flight_name,dep_airport,arv_country,arv_airport)values($s_id,'$_POST[flight_name]','$_POST[dep_airport]','$_POST[arv_country]','$_POST[arv_airport]');";

	$result = mysqli_query( $connection,$query8);
 




?>
<script>
function populate(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	
	s2.innerHTML = "";
	if(s1.value == "Thailand"){
		var optionArray = ["|","Opera Hotel Bangkok|Opera Hotel Bangkok","Suvarnabhumi Hotel Bangkok|Suvarnabhumi Hotel Bangkok","Mandarin Oriental Hotel Bangkok|Mandarin Oriental Hotel Bangkok"];
	} else if(s1.value == "Malaysia"){
		var optionArray = ["|","Regency Hotel Kualalumpur|Regency Hotel Kualumpur","Sheraton Imperial Kuala Lumpur Hotel|Sheraton Imperial Kuala Lumpur Hotel","Grand Hyatt Kuala lumpur|Grand Hyatt Kuala Lumpur"];
	} else if(s1.value == "Nepal"){
		var optionArray = ["|","Hotel Annapurna|Hotel Annapurna","The Everest Hotel|The Everest Hotel","Radisson Hotel Kathmandu|Radisson Hotel Kathmandu"];
	}
	else if(s1.value == "Bhutan"){
		var optionArray = ["|","Taj Tashi Hotel Thimphu|Taj Tashi Hotel Thimphu","Uma Paro Bhutan|Uma Paro Bhutan","Amankora Thimphu|Amankora Thimphu"];
	} else if(s1.value == "Hong Kong"){
		var optionArray = ["|","Intercontinental Hong Kong|InterContinental Hong Kong","Four Seasons Hotel Hong Kong|Four Seasons Hotel Hong Kong","The Upper House|The Upper House"];
	}
	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}
</script>





	<form action='Add_hotel.php' method='post'>
    
    
<input type=hidden name=h5 value="<?php echo $s_id; ?>" />
<fieldset class="hotel_info">
	<legend>Hotel Info</legend>
	<p>
<label for="country">Visiting Country:</label> 
<select id="country" name="country" onchange="populate(this.id,'hotel_name')" required>
  <option value=""></option>
  <option value="Thailand">Thailand</option>
  <option value="Malaysia">Malaysia</option>
  <option value="Nepal">Nepal</option>
   <option value="Bhutan">Bhutan</option>
  <option value="Hong Kong">Hong Kong</option>
</select>
</p>


<p>
<label for="hotel_name"> Hotel Name:</label>
<select id="hotel_name" name="hotel_name" required></select>
</p>

	
	<p>
   <label for="checkin_date">Check-In Date: </label>  
    <input type="date" name="checkin_date" id="checkin_date" min="2015-01-01" max="2020-01-01" required ="[0-9]-[0-9]-[0-9]"/>
     </p>
	
	<p>
  <label for="checkout_date"> Check-Out Date: :</label>  
    <input type="date" name="checkout_date" id="checkout_date" min="2015-01-01" max="2020-01-01" required ="[0-9]-[0-9]-[0-9]"/> 
    </p>
	
	
	

<label for="submit"></label>
 <input type="submit" name="submit" id="submit" value="submit" />

</fieldset>

</form> 
	  

  
</body>
</html>