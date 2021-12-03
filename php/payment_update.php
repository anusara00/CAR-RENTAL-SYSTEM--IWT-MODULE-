<?php

	require_once("connection.php");
	
	if(isset($_POST['update']))
	{
		$payment_id = $_GET['ID'];
		$fullName = $_POST['fullname'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$number = $_POST['number'];
		$cardName = $_POST['cardName'];
		$cardNumber = $_POST['cardNumber'];
		$month = $_POST['month'];
		$date = $_POST['date'];
		$year = $_POST['year'];
		$cvc = $_POST['cvc'];
		
		$query=" update payment set fullName ='".$fullName."', email='".$email."', address='".$address."', number='".number."',cardName='".$cardName."' ,cardNumber='".$cardNumber."' ,month='".$month.",date='".$date."',year='".$year."',cvc='".$cvc."' where payment_id='".$payment_id."' ";
		$result = mysqli_query($con,$query);
		
		if($result)
        {
                header("location:payment_view.php");
        }
        else
        {
                echo 'Please Check Your Query ';
        }
		
	} 
	
	else
	{
		header("location:payment_view.php");
	}



?>