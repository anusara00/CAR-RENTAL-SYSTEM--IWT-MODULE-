<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['pickup_location']) || empty($_POST['dropoff_location']) || empty($_POST['pickup_date']) || empty($_POST['dropoff_date']) || empty($_POST['pickup_time'])  || empty($_POST['dropoff_time'])  )
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
          
            $pickup_location = $_POST['pickup_location'];
			$dropoff_location = $_POST['dropoff_location];
            $pickup_date = $_POST['pickup_date'];
            $dropoff_date = $_POST['dropoff_date'];
			$pickup_time = $_POST['pickup_time'];
			$dropoff_time = $_POST['dropoff_time'];

            $query = " insert into useraccount (pickup_location,dropoff_location,pickup_date,dropoff_date,pickup_time,dropoff_time) values('','$pickup_location','$dropoff_location','$pickup_date','$dropoff_date','$pickup_time',dropoff_time)";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:useraccount_view.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:../html/useraccount.html");
    }



?>