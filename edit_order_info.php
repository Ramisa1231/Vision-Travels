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
     
      <th colspan="6" style="text-align:center"><h3>Order Info</h3></th>
       
    </tr>
  </thead>

   
    
    
    
    <tr>
     <th style="text-align:center">Username</th>
      <th style="text-align:center">Password</th>
      
      
      
      
      <th style="text-align:center">Order Id</th>
      <th style="text-align:center">Order date</th>
       <th style="text-align:center">Visiting Country</th>
      <th style="text-align:center">Visiting Place</th>
      
      
     


     </tr>
     
    
    
   
 
  
    
	<?php
	while ($row = mysqli_fetch_array($result)) 
	{
		echo "<tr>";
		echo "<td>".$row['username']."</td>";
		echo "<td>".$row['password']."</td>";
		
		
		echo "<td>".$row['order_id']."</td>";
		echo "<td>".$row['order_date']."</td>";
		echo "<td>".$row['v_country']."</td>";
		echo "<td>".$row['v_place']."</td>";
		
		
		
		
		
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
  var optionArray = ["|","Bangkok|Bangkok","Pattaya|Pattaya","Pathum Thani|Pathum Thani"];
 } else if(s1.value == "Malaysia"){
  var optionArray = ["|","Penang|Penang","Kualalampur|Kualalampur","Langkawi|Langkawi"];
 } else if(s1.value == "Nepal"){
  var optionArray = ["|","Kathmandu|Kathmandu","Pokhara|Pokhara","Patan|Patan"];
 }
 else if(s1.value == "Bhutan"){
  var optionArray = ["|","Thimphu|Thimphu","Paro|Paro","Punakha|Punakha"];
 } else if(s1.value == "Hong Kong"){
  var optionArray = ["|","Tsuen Wan|Tsuen Wan","Sha Tin|Sha Tin","Hong Kong City|Hong Kong City"];
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






<form action="http://localhost/travel_agency/order_updated.php" method='post'>

<div style="color:white"  >
<h2>Edit Order Info</h2>

</div>
<p> <div style="color:white">Order ID:</div> <input type="number" name=order_id size=30 required /> </p>

<p>

<div style="color:white">Visiting Country:</div>
<select id="v_country" name="v_country" onchange="populate(this.id,'v_place')" required>
  <option value=""></option>
  <option value="Thailand">Thailand</option>
  <option value="Malaysia">Malaysia</option>
  <option value="Nepal">Nepal</option>
   <option value="Bhutan">Bhutan</option>
  <option value="Hong Kong">Hong Kong</option>
</select>
</p>
<p>
<div style="color:white">Visiting Place:</div>
<select id="v_place" name="v_place" required></select>
</p>

<p><div style="color:white">Order Date: </div><input type="date" name="order_date"  min="2015-01-01" max="2020-01-01" required ="[0-9]-[0-9]-[0-9]"/> </p>
<input type=submit name=submit value='submit' />


</form>

  
  
  
  
</body>
</html>