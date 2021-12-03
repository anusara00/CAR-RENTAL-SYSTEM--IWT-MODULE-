<?php 

    require_once("connection.php");
    $query = " select * from login ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="../css/login_view.css">
	
		
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
				<th>username</th>
				<th>password</th>
				<td> Edit  </td>
                <td> Delete </td>
			</tr>
			
			<?php 
                                    
					while($row=mysqli_fetch_assoc($result))
					{
						$username = $row['username'];
						$password = $row['password'];
            ?>
			  
					 <tr>
						<td><?php echo $username; ?></td>
						<td><?php echo $password; ?></td>
                        <td><a href="login_delete.php?Del=<?php echo $login_id ?>">Delete</a></td>
						
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