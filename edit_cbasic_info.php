<?php

session_start();

if($_SESSION['a_name'])

{
 
 $connection = mysqli_connect("localhost","root","root","travel_agency"); 
	if (mysqli_connect_error()) {
		die("Database connection failed: " . mysqli_error($connection));
	}
	
	$query2="select * from customer;";

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
       <th colspan="10" style="text-align:center"><h3>Customer Info</h3></th>
      
    </tr>
  </thead>


 <tr>
     <th style="text-align:center">Username</th>
      <th style="text-align:center">Password</th>
      <th style="text-align:center">Customer Id</th>
      <th style="text-align:center">First Name</th>
      <th style="text-align:center">Last Name</th>
      <th style="text-align:center">Street</th>
      <th style="text-align:center">City</th>
      <th style="text-align:center">Date Of Birth</th>
      <th style="text-align:center" >Phone No</th>
      <th style="text-align:center">Accompany No</th>
      
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
		
			echo "</tr>";
	}
	?>
	</table>


<form action="http://localhost/travel_agency/c_updated.php" method="post">
<div style="color:white"  >
<h2>Edit Personal Info</h2>

</div>
<p><div style="color:white" > Customer ID</div> <input type="number" name=customer_id size=30 required /> </p>


<p>
<div style="color:white" >First Name </div>
<input type="varchar" name="f_name" size="30" required placeholder= "Please enter a valid first name" required pattern = "[a-zA-Z][a-zA-Z'.\s]*" />
</p>

<p><div style="color:white" >Last Name </div>
<input type="varchar" name="l_name" size="30" required placeholder= "Please enter a valid last name" required pattern= "[a-zA-Z.']{2,10}"  />
</p>
<p><div style="color:white" >Street  </div>
<input type="varchar" name="street" size="30" required placeholder= "Enter your street/address" required pattern= "[0-9]{1,4}/[0-9]{1,4} [a-zA-Z.]{2,30}|[0-9]{1,4} [a-zA-Z.]{2,30}" title="Example: 9/14 Iqbalroad or 66 Mohakhali"/>
</p>
 
<p>
<div style="color:white" > City </div>
<input type="varchar" name="city" size="30" required placeholder = "Enter your city" required pattern = "[a-zA-Z][a-zA-Z'.\s]*"  />
</p>
<p><div style="color:white" >Date of birth</div>

<input type="date" name="dob"  min="1900-01-01" max="2000-01-01" required ="[0-9]-[0-9]-[0-9]"/>
</p>
<p>
<div style="color:white" >Cellphone No  </div>
<input type="varchar" name="phone_no" size="30" required placeholder = "Enter a valid cellphone number" required pattern = "[0]{1}[1]{1}[5-9]{1}[0-9]{8}" title= "Your phone number  pattern should be 01#########"/>
</p>
<p><div style="color:white" >Accompany No </div>
<input type="number" step=0 min=0 max=100 name="accompany_no" size="30"  title = "Please enter a valid number of people you want to travel with" />
</p>


<p>
<input type="submit" name="submit" value="submit" />
</p>



</form>

  
  
  
  
  
  
  
</body>
</html>