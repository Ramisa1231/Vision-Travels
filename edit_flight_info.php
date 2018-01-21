 <?php

session_start();

if($_SESSION['a_name'])
{
	
	
	
	 $connection = mysqli_connect("localhost","root","root","travel_agency"); 
	if (mysqli_connect_error()) {
		die("Database connection failed: " . mysqli_error($connection));
	}
	
	$query2="select customer.username,customer.password,customer.customer_id,customer.f_name,customer.l_name,customer.street,customer.city,customer.DOB,customer.phn_no,customer.accompany_no,orders.order_id,orders.order_date,orders.v_country,orders.v_place,service.service_id,flight.flight_id,flight.flight_name,flight.dep_airport,flight.arv_country,flight.arv_airport,hotel.hotel_id,hotel.hotel_name,hotel.country,hotel.checkin_date,hotel.checkout_date,rental_car.car_agency_id,rental_car.car_name,rental_car.pickup_place,rental_car.pickup_date,rental_car.dropoff_place,rental_car.dropoff_date from customer inner join orders on customer.customer_id=orders.customer_id join service on orders.order_id=service.order_id join flight on service.service_id=flight.service_id join hotel on service.service_id=hotel.service_id join rental_car on service.service_id=rental_car.service_id;";

$result = mysqli_query( $connection,$query2);
	if (!$result) {
		die("Database query failed: " . mysqli_error($connection));
	}


	
	
   
	//echo"<div><h2> Give customer ID to delete all the information about that customer</h2></div>";
}

else 
die("You must be logged in");
?>

<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v2.5.2, http://mobirise.com -->
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
   <style>
* {font-family: Helvetica Neue, Arial, sans-serif; }

body { background-image: linear-gradient(#aaa 25%, #000);}

h1, table { text-align: center; }

table {border-collapse: collapse;  width: 70%; margin: 0 auto 5rem;}

th, td { padding: 1.5rem; font-size: 1.3rem; }

tr {background: hsl(50, 50%, 80%); }

tr, td { transition: .4s ease-in; } 

tr:first-child {background: hsla(12, 100%, 40%, 0.5); }
/**tr:nth-child(3) { background: hsla(12, 100%, 40%, 0.5); }*/ 

tr:nth-child(even) { background: hsla(50, 50%, 80%, 0.7); }

td:empty {background: hsla(50, 25%, 60%, 0.7); }



</style>
  


<title>c_basic info</title>
</head>

<body>
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
  
  
 
  
    </br>
    </br>
    </br>
    </br>
    </br>
 <table border="1" width="1000" cellpadding="5" cellspacing="1">
    
    <thead>
    <tr>
      
        <th colspan="8" style="text-align:center"><h3>Flight Info</h3></th>
         
    </tr>
  </thead>

   
    
    
    
    <tr>
  

 <th style="text-align:center">Username</th>
      <th style="text-align:center">Password</th>
    <th style="text-align:center">Service Id</th>
      <th style="text-align:center">Flight Id</th>
      <th style="text-align:center">Flight Name</th>
       <th style="text-align:center">Departure Airport</th>
       <th style="text-align:center">Arrival Country</th>
      <th style="text-align:center">Arrival Airport</th>
      
      
      

      


     </tr>
     
    
    
   
 
  
    
	<?php
	while ($row = mysqli_fetch_array($result)) 
	{
		
		echo "<tr>";
		echo "<td>".$row['username']."</td>";
		echo "<td>".$row['password']."</td>";
		
		
		echo "<td>".$row['service_id']."</td>";
		echo "<td>".$row['flight_id']."</td>";
		echo "<td>".$row['flight_name']."</td>";
		echo "<td>".$row['dep_airport']."</td>";
		echo "<td>".$row['arv_country']."</td>";
		echo "<td>".$row['arv_airport']."</td>";
		
		
		
		
		
		
		
		
		
		echo "</tr>";
	}
	
	?>
	
    
   </table>  


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










<form action="flight_updated.php" method='post'>
<div style="color:white"  >
<h2>Edit Flight Info</h2>
</div>
<p>
<div style="color:white">Service ID: </div>
<input type="number" name=service_id size=30 required/> </p>
	<p>
<p><div style="color:white">Flight Name:</div> <select id = "flight_name" name = "flight_name" required>
  <option value="United Airways">United Airways</option>
  <option value="Bangladesh Biman airlines">Bangladesh Biman airlines</option>
  <option value="Air India">Air India</option>
  
</select>
 </p>
	<p><div style="color:white">Departure Airport:</div> <select id = "dep_airport" name = "dep_airport" required>
  <option value="Hazrat Shahjalal International Airport">Hazrat Shahjalal International Airport</option>
  <option value="MAG Osmani International Airport">MAG Osmani International Airport</option>
  <option value="Shah Amanat International Airport">Shah Amanat International Airport</option>
  
</select>
   



<p>
<div style="color:white">Arrival Country:</div>
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
<div style="color:white">Arrival Airport:</div>
<select id="arv_airport" name="arv_airport" required></select>
</p>




<input type=submit name=submit value='submit' />
</form> 
	  
  
  
  
  
</body>
</html>