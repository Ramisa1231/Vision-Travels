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





}


else 
die("You must be logged in");
?>




<!doctype html>
<html>
<head>
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

<title>View Customers info</title>
</head>

<body>

<!--<div><h1>Customers Info</h1></div>-->
 
 
 <table border="1" width="1000" cellpadding="5" cellspacing="1">
    
    <thead>
    <tr>
      <th colspan="10">Customer Info</th>
      <th colspan="4">Order Info</th>
       <th colspan="1">Service Info</th>
        <th colspan="5">Flight Info</th>
         <th colspan="5">Hotel Info</th>
         <th colspan="6">Rental Car Info</th>
    </tr>
  </thead>

   
    
    
    
    <tr>
     <th>Username</th>
      <th>Password</th>
      <th>Customer Id</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Street</th>
      <th>City</th>
      <th>Date Of Birth</th>
      <th>Phone No</th>
      <th>Accompany No</th>
      
      
      
      
      <th>Order Id</th>
      <th>Order date</th>
       <th>Visiting Country</th>
      <th>Visiting Place</th>
      
      
      <th>Service Id</th>



      <th>Flight Id</th>
      <th>Flight Name</th>
       <th>Departure Airport</th>
       <th>Arrival Country</th>
      <th>Arrival Airport</th>
      
      
      
      <th>Hotel Id</th>
      <th>Hotel Name</th>
       <th>Country</th>
      <th>Check-In Date</th>
       <th>Check-Out Date</th>


     <th>Car Agency Id</th>
      <th>Car Name</th>
       <th>Pickup Place</th>
       <th>Pickup Date</th>
      <th>Dropoff Place</th>
       <th>Dropoff Date</th>


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