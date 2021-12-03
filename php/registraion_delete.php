<?php 

        require_once("connection.php ");

        if(isset($_GET['Del']))
        {
            $booking_id = $_GET['Del'];
            $query = " delete from records where id = '".$id."'";
            $results = mysqli_query($con,$query);

            if($results)
            {
                header("location:registraion_view.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:registraion_view.php");
        }

?>
