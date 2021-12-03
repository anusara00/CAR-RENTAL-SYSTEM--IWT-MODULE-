<?php

require_once("connection.php");

if(isset($_POST['update']))
    {
        
			$id = $_GET['id'];
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

            $query = " update registraion set firstname='".$firstname."',contact='".$contact."',email='".$email."',idnumber='".$idnumber."',Street_address='".$Street_address."',Street_address_line_2='".$Street_address_line_2."',City='".$City."',Province='".$Province."',pwd='".$pwd."',pwd2='".$pwd2."'
			where id='".$id."' ";
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