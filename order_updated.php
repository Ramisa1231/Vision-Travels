<?php

session_start();

if($_SESSION['a_name'])

{
 
 $connection = mysqli_connect("localhost","root","root","travel_agency"); 
	if (mysqli_connect_error()) {
		die("Database connection failed: " . mysqli_error($connection));
	}
	
	$o_id=$_POST['order_id'];
	$v_id=$_POST['v_country'];
	$p_id=$_POST['v_place'];
	$od_id=$_POST['order_date'];
	
	
	
	
	
		$query1="update orders set v_country='{$v_id}',v_place='{$p_id}',order_date='{$od_id}'  where order_id={$o_id}";
	
	
	$result1 = mysqli_query( $connection,$query1);
	if (!$result1) {
		die("Database query failed: " . mysqli_error($connection));
	}
  
  
	
	
	

	
	
	

	
$query2="select customer.username,customer.password,customer.customer_id,customer.f_name,customer.l_name,customer.street,customer.city,customer.DOB,customer.phn_no,customer.accompany_no,orders.order_id,orders.order_date,orders.v_country,orders.v_place,service.service_id,flight.flight_id,flight.flight_name,flight.dep_airport,flight.arv_country,flight.arv_airport,hotel.hotel_id,hotel.hotel_name,hotel.country,hotel.checkin_date,hotel.checkout_date,rental_car.car_agency_id,rental_car.car_name,rental_car.pickup_place,rental_car.pickup_date,rental_car.dropoff_place,rental_car.dropoff_date from customer inner join orders on customer.customer_id=orders.customer_id join service on orders.order_id=service.order_id join flight on service.service_id=flight.service_id join hotel on service.service_id=hotel.service_id join rental_car on service.service_id=rental_car.service_id;";
$result = mysqli_query( $connection,$query2);
	if (!$result) {
		die("Database query failed: " . mysqli_error($connection));
	}





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
      <th colspan="10" style="text-align:center"><h3>Customer Info</h3></th>
      <th colspan="4" style="text-align:center"><h3>Order Info</h3></th>
       <th colspan="1" style="text-align:center"><h3>Service Info</h3></th>
        <th colspan="5" style="text-align:center"><h3>Flight Info</h3></th>
         <th colspan="5" style="text-align:center"><h3>Hotel Info</h3></th>
         <th colspan="6" style="text-align:center"><h3>Rental Car Info</h3></th>
    </tr>
  </thead>

   
    
    
    
    <tr>
     <th align="center">Username</th>
      <th align="center">Password</th>
      <th align="center">Customer Id</th>
      <th align="center">First Name</th>
      <th align="center">Last Name</th>
      <th align="center">Street</th>
      <th align="center">City</th>
      <th align="center">Date Of Birth</th>
      <th align="center">Phone No</th>
      <th align="center">Accompany No</th>
      
      
      
      
      <th align="center">Order Id</th>
      <th align="center">Order date</th>
       <th align="center">Visiting Country</th>
      <th align="center">Visiting Place</th>
      
      
      <th align="center">Service Id</th>



      <th align="center">Flight Id</th>
      <th align="center">Flight Name</th>
       <th align="center">Departure Airport</th>
       <th align="center">Arrival Country</th>
      <th align="center">Arrival Airport</th>
      
      
      
      <th align="center">Hotel Id</th>
      <th align="center">Hotel Name</th>
       <th align="center">Country</th>
      <th align="center">Check-In Date</th>
       <th align="center">Check-Out Date</th>


     <th align="center">Car Agency Id</th>
      <th align="center">Car Name</th>
       <th align="center">Pickup Place</th>
       <th align="center">Pickup Date</th>
      <th align="center">Dropoff Place</th>
       <th align="center">Dropoff Date</th>


     </tr>
     
    
    
   
 
  
    
	<?php
	while ($row = mysqli_fetch_array($result)) 
	{
		echo "<tr>";
		echo "<td>".$row['username']."</td>";
		echo "<td>".$row['password']."</td>";
		echo "<td>".$row['customer_id']."</td>";
		echo "<td>".$row['f_name']."</td>";
		echo "<td>".$row['l_name']."</td>";
		echo "<td>".$row['street']."</td>";
		echo "<td>".$row['city']."</td>";
		echo "<td>".$row['DOB']."</td>";
		echo "<td>".$row['phn_no']."</td>";
		echo "<td>".$row['accompany_no']."</td>";
		
		
		
		echo "<td>".$row['order_id']."</td>";
		echo "<td>".$row['order_date']."</td>";
		echo "<td>".$row['v_country']."</td>";
		echo "<td>".$row['v_place']."</td>";
		
		echo "<td>".$row['service_id']."</td>";
		
		
		
		echo "<td>".$row['flight_id']."</td>";
		echo "<td>".$row['flight_name']."</td>";
		echo "<td>".$row['dep_airport']."</td>";
		echo "<td>".$row['arv_country']."</td>";
		echo "<td>".$row['arv_airport']."</td>";
		
		
		
		echo "<td>".$row['hotel_id']."</td>";
		echo "<td>".$row['hotel_name']."</td>";
		echo "<td>".$row['country']."</td>";
		echo "<td>".$row['checkin_date']."</td>";
		echo "<td>".$row['checkout_date']."</td>";
		
		
		
		echo "<td>".$row['car_agency_id']."</td>";
		echo "<td>".$row['car_name']."</td>";
		echo "<td>".$row['pickup_place']."</td>";
		echo "<td>".$row['pickup_date']."</td>";
		echo "<td>".$row['dropoff_place']."</td>";
		echo "<td>".$row['dropoff_date']."</td>";
		
		
		
		
		
		echo "</tr>";
	}
	
	?>
	
    
   </table>  

  
</body>
</html>