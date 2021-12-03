<?php 

        require_once("connection.php ");

        if(isset($_GET['Del']))
        {
            $payment_id = $_GET['Del'];
            $query = " delete from records where payment_id = '".$payment_id."'";
            $results = mysqli_query($con,$query);

            if($results)
            {
                header("location:payment_view.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:payment_view.php");
        }

?>