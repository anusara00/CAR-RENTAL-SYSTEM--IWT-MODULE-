<?php 

    require_once("connection.php");
    $query = " select * from booking ";
    $result = mysqli_query($con,$query);

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Payment</title>
		<link rel="stylesheet" href="../css/payment_view.css">
	
		
	</head>
	<body>
		<ul class="navi">
				
	<li><a class="the" href="../html/home.html">Home</a></li>
				<li><a href="../html/Learn.html">Learn</a></li>
				<li><a href="../html/serve.html">Our Services</a></li>
				<li><a href="../html/login.html">Login</a></li>
				<li><a href="../html/booking.html">Booking</a></li>
				<li><a href="../html/customize.html">Customize</a></li>
				<li><a href="../html/contact_us3.html">About Us</a></li>
				<li><a href="../html/useraccount.html">User Account</a></li>
				<li><a href="../html/contactus.html">Contact Us</a></li>
				<li><a href="../html/offers.html">Offers </a></li>
				<li><div class="logo" href="#"><img src="../images/rsz_logo.jpg"></div></li>
			</ul>
		

		</br>
		</br>		
		</br>	
	
		<div class="form">
			<form>
			
			<table style="width:100%">
			<tr>
				<th>payment id</th>
				<th>fullName</th>
				<th>email</th>
				<th>address</th>
				<th>number</th>
				<th>cardName</th>
				<th>cardNumber</th>
				<th>month</th>
				<th>date</th>
				<th>year</th>
				<th>cvc</th>
				<td> Edit  </td>
                <td> Delete </td>
			</tr>
			
			<?php 
                                    
					while($row=mysqli_fetch_assoc($result))
					{
						$payment_id = $row['payment_id'];
						$fullName = $row['fullName'];
						$email= $row['email'];
						$address = $row['address'];
						$number = $row['number'];
						$cardName = $row['cardName'];
						$cardNumber = $row['cardNumber'];
						$money_format = $row['month'];
						$date = $row['date'];
						$year = $row['year'];
						$cvc = $row['cvc'];
            ?>
			  
					 <tr>
						<td><?php echo $payment_id; ?></td>
						<td><?php echo $fullName; ?></td>
						<td><?php echo $email; ?></td>
						<td><?php echo $address; ?></td>
						<td><?php echo $number; ?></td>
						<td><?php echo $cardName; ?></td>
						<td><?php echo $cardNumber; ?></td>
						<td><?php echo $month; ?></td>
						<td><?php echo $date; ?></td>
						<td><?php echo $year; ?></td>
						<td><?php echo $cvc; ?></td>
						<td><a href="payment_edit.php?GetID=<?php echo $payment_id ?>">Edit</a></td>
                        <td><a href="payment_delete.php?Del=<?php echo $payment_id ?>">Delete</a></td>
						
					 </tr> 
				<?php 
					}
				?>
			
			
			
			
			</form>
		</div>
		</br>
		</br>	
	
		</br>		
		<div class="footer">
			<form method="post">
			
			</form>
		</div>
		
	
	</body>	
</html>