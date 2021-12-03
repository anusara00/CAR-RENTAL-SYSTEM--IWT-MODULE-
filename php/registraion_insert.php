<?php

require_once("connection.php");
if(isset($_POST['submit']))
    {
        if(empty($_POST['firstname']) || empty($_POST['contact']) || empty($_POST['email']) || empty($_POST['idnumber']) || empty($_POST['Street_address'])  || empty($_POST['Street_address_line 2'])  || empty($_POST['City']) || empty($_POST['Province'])|| empty($_POST['pwd'])|| empty($_POST['pwd2']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $firstname = $_POST['firstname'];
            $contact = $_POST['contact'];
            $email = $_POST['email'];
			$idnumber = $_POST['idnumber'];
            $Street_address = $_POST['Street_address'];
			$Street_address_line_2= $_POST['Street_address_line_2'];
			$City= $_POST['City'];
			$Province= $_POST['Province'];
            $pwd = $_POST['pwd'];
			$pwd2 = $_POST['pwd2'];

            $query = " insert into registration(id,firstname,contact,email,idnumber,Street_address,Street_address_line_2,City,Province,pwd,pwd2) values('','$firstname','$contact','$email','$idnumber','$Street_address','$Street_address_line_2','$City','$Province','$pwd','$pwd2')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:registraion_view.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:../html/registrion.html");
    }



?>