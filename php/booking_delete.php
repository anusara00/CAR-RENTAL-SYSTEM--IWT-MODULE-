<?php

	require_once("connection.php");
	
	if(isset($_GET['Del']))
	{
		
		$booking_id=$_GET['Del'];
		$query="delete from records where booking_id='".$booking_id."'";
		
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
