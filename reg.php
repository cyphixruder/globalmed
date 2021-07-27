<?php
	    $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        
    $conn = new mysqli('localhost' , 'root' , '' , 'hospital_management');
    
    if($conn->connect_error){

        die('Connection Failed : ' .$conn->connect_error);

        }else{
            //die('fdfdf');
            
            if ($password == $cpassword) {
                # code...


            $password = md5($password); //to encrypt and save the password as
            $cpassword = md5($cpassword); //to encrypt and save the password as 
            $sqlstr = "INSERT INTO hm_reg (firstname, lastname, email, `password`, cpassword) VALUES('$firstname', '$lastname', '$email', '$password', '$cpassword')";
            //die('i got dddhere');
            //to prevent empty field
            
            if($result = $conn->query($sqlstr)){
                //echo 'Success';
                
                echo "<script> alert('Registration successful!');</script>";
                echo "<script> window.location.assign('patients-sign-in.php'); </script>";
                

            }else{
                echo "<script> alert('Registration failed!');</script>";
                // header("location: home.php?error=unknown error occurred&$user_data");
            }
            }else{
            echo "password incorrect, try again";
        }

    }
?>
