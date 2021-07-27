<?php
    $conn = new mysqli('localhost' , 'root' , '' , 'hospital_management');
     
    if($conn->connect_error){

        die('Connection Failed : ' .$conn->connect_error);
        
    }else{

        $sql = "SELECT * FROM hm_reg WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
    }