<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if( empty($_POST['fullName']) || empty($_POST['email']) || empty($_POST['address']) || empty($_POST['number']) || empty($_POST['cardName'])  || empty($_POST['cardNumber'])  || empty($_POST['month']) || empty($_POST['date']) || empty($_POST['year']) || empty($_POST['cvc']) )
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
           
            $fullName = $_POST['fullName'];
            $email = $_POST['email'];
			$address = $_POST['address'];
            $number = $_POST['number'];
			$cardName = $_POST['cardName'];
			$cardNumber = $_POST['cardNumber'];
			$month = $_POST['month'];
			$date = $_POST['date'];
			$year = $_POST['year'];
			$cvc = $_POST['cvc'];
			
            $query = " insert into payment (payment_id,,fullName,email,address,number,cardNamee,cardNumber,month,date,year,cvc) values('','$fullName','$email','$address','$number','$cardName','$cardNumber','$month','$date','$year','$cvc')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:payment_view.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:../html/payment.html");
    }



?>