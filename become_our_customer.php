<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v2.5.2, http://mobirise.com -->
  
  <style type ="text/css">

body
{
	background:url(assets/images/become_our_customer.jpg) #E9E8DC no-repeat left top;
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
  <title>Personal Info</title>
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
  
  <form action="http://localhost/travel_agency/add_orders.php" method="post">
<!--<div>
<h1 style="color : white">Add Customer Info</h1> 
</div>-->


<fieldset class="personal_info">
<legend>Personal Info</legend>
<p>
<label for="username">Username :</label> 
<input type="varchar" name="username" size="30" id="username" required placeholder = "Enter your username" required pattern = "[a-zA-Z][a-zA-Z0-9'.\s]*"  />
</p>


<p>
<label for="username">Password :</label> 
<input type="password" name="password" size="30" id="password" required placeholder = "Please enter a valid password" required pattern = "(?=^.{5,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title= "Your password ahould contain combination of uppercase,lowercase letters and numbers" />
</p>


<p>
<label for="username">First Name :</label> 
<input type="varchar" name="f_name" id="f_name" size="30" required placeholder= "Please enter a valid first name" required pattern = "[a-zA-Z][a-zA-Z'.\s]*" />
</p>

<p>
<label for="username">Last Name :</label> 
<input type="varchar" name="l_name" id="l_name" size="30" required placeholder= "Please enter a valid last name" required pattern= "[a-zA-Z.']{2,10}"  />
</p>
<p>
<label for="username">Street :</label> 
<input type="varchar" name="street" id="street" size="30" required placeholder= "Enter your street/address" required pattern= "[0-9]{1,4}/[0-9]{1,4} [a-zA-Z.]{2,30}|[0-9]{1,4} [a-zA-Z.\s]{2,30}" title="Example: 9/14 Iqbal road or 66 Mohakhali"/>
</p>
 
<p>
<label for="username">City :</label> 
<input type="varchar" name="city" id="city" size="30" required placeholder = "Enter your city" required pattern = "[a-zA-Z][a-zA-Z'.\s]*"  />
</p>

<p>
<label for="username">Date of birth:</label> 
<input type="date" name="dob" id="dob" min="1900-01-01" max="2000-01-01" required ="[0-9]-[0-9]-[0-9]"/>
</p>

<p>
<label for="username">Cellphone No :</label> 
<input type="varchar" name="phone_no" id="phone_no" size="30" required placeholder = "Enter a valid cellphone number" required pattern = "[0]{1}[1]{1}[5-9]{1}[0-9]{8}" title= "Your phone number  pattern should be 01#########"/>
</p>

<p>
<label for="username">Accompany No:</label> 
<input type="number" step=0 min=0 max=100 name="accompany_no" id="accompany_no" size="30"  title = "Please enter a valid number of people you want to travel with" />
</p>


<p>
<label for="submit"></label> <input type="submit" name="submit" id="submit" value="submit" />
</p>


</fieldset>
</form>
  
  
</body>
</html>