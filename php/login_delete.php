<?php 

        require_once("connection.php ");

        if(isset($_GET['Del']))
        {
            $login_id = $_GET['Del'];
            $query = " delete from records where login_id = '".$login_id."'";
            $results = mysqli_query($con,$query);

            if($results)
            {
                header("location:login_view.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:login_view.php");
        }

?>
