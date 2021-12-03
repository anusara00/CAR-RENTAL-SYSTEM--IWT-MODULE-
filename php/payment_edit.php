<?php 

    require_once("connection.php");
    $payment_id = $_GET['GetID'];
    $query = " select * from payment where payment_id='".$payment_id."' ";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $payment_id = $row['payment_id'];
		$fullName = $row['fullName'];
		$email = $row['email'];
		$address = $row['address'];
		$number= $row['number'];
		$cardName = $row['cardName'];
		$cardNumber = $row['cardNumber'];
		$month     =$row['month'];
		$date    =$rwo['date'];
		$year    =$row['year'];
		$cvc    =$row['cvc'];
    }

?>



<!DOCTYPE html>
<html>
	<head>
		<title>Payment</title>
		<link rel="stylesheet" href="../css/booking.css">
	
		<script type="text/javascript" src="../js/self_drive.js"></script>
	</head>
	<body>
		<ul class="navi">
				
	<li><a class="the" href="home.html">Home</a></li>
				<li><a href="Learn.html">Learn</a></li>
				<li><a href="serve.html">Our Services</a></li>
				<li><a href="login.html">Login</a></li>
				<li><a href="booking.html">Booking</a></li>
				<li><a href="customize.html">Customize</a></li>
				<li><a href="contact_us3.html">About Us</a></li>
				<li><a href="useraccount.html">User Account</a></li>
				<li><a href="contactus.html">Contact Us</a></li>
				<li><a href="offers.html">Offers </a></li>
				<li><div class="logo" href="#"><img src="../images/rsz_logo.jpg"></div></li>
			</ul>
		

		</br>
		</br>		
		</br>	
	
		<div class="form">
			<form  method="post" action="payment_update.php?ID=<?php echo $payment_id ?>">
			
			<h2>Payment Form</h2>

<div class="row">
  <div class="col-75">
    <div class="container">
    <form  method="post" action="../php/payment_insert.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Customer Details</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="fullName" >
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" ">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" ">
            <label for="number"><i class="fa fa-phone"></i>Phone Number</label>
            <input type="number" id="number" name="number" >


              </div>
             
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment Details</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardName" placeholder="">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardNumber" placeholder="">
            <label for="expmonth">Month</label>
            <input type="text" id="month" name="month" placeholder="October">
            <div class="row">
              <div class="col-50">
			   <label for="date">Date</label>
                <input type="text" id="date" name="date" placeholder="23">
              </div>
			   <div class="col-50"
			   <label for="year">Year</label>
                <input type="text" id="year" name="year" placeholder="2020">
              </div>
              
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
       
        <input type="submit" value="Finish payment" class="btn" style="background-color:darkblue;">
      </form>
    </div>
  </div>
  <br> <br> <br>
	
	
		</br>		
		<div class="footer">
			<form method="post">
			<div>
				<p class="copyRSing">Copyright &#169; 2020 - Royal Car Rental - All Right Reserved</p>
			</div>	
			<div class="SocialLogos">
				<a href="http://facebook.com" ><img src="../Images/FBLogo.png" alt="Facebook"></a> 
				<a href="http://instagram.com" ><img src="../Images/InstaLogo.png" alt="Instagram"></a> 
				<a href="http://twitter.com" ><img src="../Images/TwitterLogo.png" alt="Twitter"></a> 
				<a href="http://google+.com" ><img src="../Images/G+Logo.png" alt="GooglePlus"></a> 
			</div>
			</form>
		</div>
		
	
	</body>	
</html>