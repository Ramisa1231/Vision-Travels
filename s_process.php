<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v2.5.2, http://mobirise.com -->
  
  <style type ="text/css">

body
{
background:url(assets/images/airlines/biman%20bangladesh.jpg) #E9E8DC no-repeat left top;
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


if(isset($_POST['next']))

	$connection = mysqli_connect("localhost","root","root","travel_agency"); 
	if (mysqli_connect_error()) 
	{
		die("Database connection failed: " . mysqli_error($connection));
	}
	$k=$_POST['h3'];

	
	 $query4="insert into service(order_id)values($k);";

	$result = mysqli_query( $connection,$query4);
 $s_id= mysqli_insert_id($connection);
   


	  




?>
<script>
function populate(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	
	s2.innerHTML = "";
	
	if(s1.value == "Thailand"){
		var optionArray = ["|","Suvarnabhumi International Airport|Suvarnabhumi International Airport"];
	} else if(s1.value == "Malaysia"){
		var optionArray = ["|","Kualalumpur International Airport|Kualaumpur International Airport"];
	} else if(s1.value == "Nepal"){
		var optionArray = ["|","Tribhuvan Internaional Airport|Tribhuvan International Airport"];
	}
	else if(s1.value == "Bhutan"){
		var optionArray = ["|","Paro International Airport|Paro International Airport"];
	} else if(s1.value == "Hong Kong"){
		var optionArray = ["|","Hong Kong International Airport|Hong Kong International Airport"];
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
  
  <form action='Add_flight.php' method='post'>
<input type=hidden name=h4 value="<?php echo $s_id; ?>" />
<!--<div>
<h1 style="color : white">Add Customer Info</h1> 
</div>-->


<fieldset class="flight_info">
<legend>Flight Info</legend>
<p>
<label for="flight_name">Flight Name :</label>  
<select id = "flight_name" name = "flight_name" required>
  <option value="United Airways">United Airways</option>
  <option value="Bangladesh Biman airlines">Bangladesh Biman airlines</option>
  <option value="Air India">Air India</option>
  
</select>
 </p>
	<p>
   <label for="dep_airport">Departure Airport: </label>   
    <select id = "dep_airport" name = "dep_airport" required>
  <option value="Hazrat Shahjalal International Airport">Hazrat Shahjalal International Airport</option>
  <option value="MAG Osmani International Airport">MAG Osmani International Airport</option>
  <option value="Shah Amanat International Airport">Shah Amanat International Airport</option>
  
</select>
   <!-- <p>Arrival country: <input type=varchar name=arv_country size=30 value='' /> </p>
<p>Arrival Airport: <input type=varchar name=arv_airport size=30 value='' /> </p>-->




<p>
<label for="arv_country"> Arrival Country:</label> 
<select id="arv_country" name="arv_country" onchange="populate(this.id,'arv_airport')" required>
  <option value=""></option>
  <option value="Thailand">Thailand</option>
  <option value="Malaysia">Malaysia</option>
  <option value="Nepal">Nepal</option>
   <option value="Bhutan">Bhutan</option>
  <option value="Hong Kong">Hong Kong</option>
</select>
</p>

<p>
<label for="arv_airport">Arrival Airport :</label>  
<select id="arv_airport" name="arv_airport" required></select>
</p>




<label for="submit"></label>
 <input type="submit" name="submit" id="submit" value="submit" />

</form>


</fieldset>
</form>
  
  
</body>
</html>