<?php

	require_once("connection.php");
	
	if(isset($_POST['update']))
	{
		$booking_id=$_GET['ID'];
		$categories = $_POST['categories'];
		$address = $_POST['address'];
		$pickup_date = $_POST['pickup_date'];
		$pickup_time = $_POST['pickup_time'];
		$return_date = $_POST['return_date'];
		$return_time = $_POST['return_time'];
		$days = $_POST['days'];
		
		$query=" update booking set categories='".$categories."', address='".$address."', pickup_date='".$pickup_date."', pickup_time='".$pickup_time."',return_date='".$return_date."' ,return_time='".$return_time."' ,days='".$days."' where booking_id='".$booking_id."' ";
		$result = mysqli_query($con,$query);
		
		if($result)
        {
                header("location:booking_view.php");
        }
        else
        {
                echo 'Please Check Your Query ';
        }
		
	} 
	
	else
	{
		header("location:booking_view.php");
	}



?>