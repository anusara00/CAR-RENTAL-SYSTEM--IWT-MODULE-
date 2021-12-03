<?php 

    require_once("connection.php");
    $booking_id = $_GET['GetID'];
    $query = " select * from booking where booking_id='".$booking_id."' ";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $booking_id = $row['booking_id'];
		$categories = $row['categories'];
		$address = $row['address'];
		$pickup_date = $row['pickup_date'];
		$pickup_time = $row['pickup_time'];
		$return_date = $row['return_date'];
		$return_time = $row['return_time'];
		$days = $row['days'];
    }

?>



<!DOCTYPE html>
<html>
	<head>
		<title>Booking</title>
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
			<form  method="post" action="booking_update.php?ID=<?php echo $booking_id ?>">
			<!--Self Drive<input type="radio" name="categories" value="Self_Drive">
			With Driver<input type="radio" name="categories" value="With_Driver">
			Airport Transfers<input type="radio" name="categories" value="Airport_Transfers">
			Taxi<input type="radio" name="categories" value="Taxi">
			Weddings<input type="radio" name="categories" value="Weddings"> -->
			<br><br>
			<table style="width:100%">
			<tr>
				<td colspan="2">CATEGORY <input class="texta" type="text" placeholder="Self Drive/With Driver/Airport Transfers/Taxi/Weddings" name="categories" value="<?php echo $categories ?>"></td>
			</tr>
			<tr>
				<td colspan="2">PICKUP LOCATION <input class="texta" type="text" placeholder="your address..." name="address" value="<?php echo $address ?>"></td>
			</tr>
			<tr>
				<td>PICKUP DATE  <input type="date" name="pickup_date" value="<?php echo $pickup_date ?>"></td>
				<td>TIME <input class="texta" type="time" name="pickup_time" value="<?php echo $pickup_time ?>"></td>
			</tr>
			<tr>
				<td>RETURN DATE <input type="date" name="return_date" value="<?php echo $return_date ?>"></td>
				<td>TIME <input class="texta" type="time" name="return_time" value="<?php echo $return_time ?>"></td>
			</tr>
			<tr>
				<th colspan="2">NUMBER OF DAYS <input class="texta" type="text"  name="days" value="<?php echo $days ?>"></th>
			</tr>
			</table>
			<!--  <center><input id="submit" class="submit" type="submit" onclick="show_alert();" value="update" name="update"></center> -->
			<center><button id="submit"class="submit" onclick="show_alert();" name="update">update</button></center>
			<!--  <input type="reset" value="Reset"> -->
			</form>
		</div>
		</br>
		</br>	
	
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