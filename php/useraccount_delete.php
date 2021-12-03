<?php 

        require_once("connection.php ");

        if(isset($_GET['Del']))
        {
            $useraccount_id = $_GET['Del'];
            $query = " delete from records where useraccount_id = '".$useraccount_id."'";
            $results = mysqli_query($con,$query);

            if($results)
            {
                header("location:useraccount_view.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:useraccount_view.php");
        }

?>
