<?php 

    require_once("connection.php");
    $query = " select * from booking ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Booking</title>
		<link rel="stylesheet" href="../css/booking_view.css">
	
		
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
				<th>booking id</th>
				<th>categories</th>
				<th>address</th>
				<th>pickup date</th>
				<th>pickup time</th>
				<th>return date</th>
				<th>return time</th>
				<th>days</th>
				<td> Edit  </td>
                <td> Delete </td>
			</tr>
			
			<?php 
                                    
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
            ?>
			  
					 <tr>
						<td><?php echo $booking_id; ?></td>
						<td><?php echo $categories; ?></td>
						<td><?php echo $address; ?></td>
						<td><?php echo $pickup_date; ?></td>
						<td><?php echo $pickup_time; ?></td>
						<td><?php echo $return_date; ?></td>
						<td><?php echo $return_time; ?></td>
						<td><?php echo $days; ?></td>
						<td><a href="booking_edit.php?GetID=<?php echo $booking_id ?>">Edit</a></td>
                        <td><a href="booking_delete.php?Del=<?php echo $booking_id ?>">Delete</a></td>
						
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