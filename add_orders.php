<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v2.5.2, http://mobirise.com -->
  
  <style type ="text/css">

body
{
background:url(assets/images/i1/switzerland-travel-1920x1080-wallpaper25388.jpg) #E9E8DC no-repeat left top;
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
	
	
	$query6="insert into customer(username,password,f_name,l_name,street,city,DOB,phn_no,accompany_no)values('$_POST[username]','$_POST[password]','$_POST[f_name]','$_POST[l_name]','$_POST[street]','$_POST[city]','$_POST[dob]','$_POST[phone_no]','$_POST[accompany_no]');";

	$result = mysqli_query( $connection,$query6);
 $c_id= mysqli_insert_id($connection);
  
  
	
 

	  



?>
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

  
  <form action='services_added.php' method='post'>
<input type=hidden name=h2 value="<?php echo $c_id ; ?>" />
<!--<div>
<h1 style="color : white">Add Customer Info</h1> 
</div>-->


<fieldset class="order_info">
<legend>Order Info</legend>
<p>
<label for="v_country">Visiting Country:</label> 

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
<label for="v_place">Visiting Place :</label> 
<select id="v_place" name="v_place" required></select>
</p>

<p>
<label for="order_date">Order Date :</label> 
 <input type="date" name="order_date" id="order_date" min="2015-01-01" max="2020-01-01" required ="[0-9]-[0-9]-[0-9]"/> 
</p>
<label for="submit"></label>
 <input type="submit" name="submit" id="submit" value="submit" />

</form>


</fieldset>
</form>
  
  
</body>
</html>