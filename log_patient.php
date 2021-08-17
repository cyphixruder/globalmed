<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli('localhost' , 'root' , '' , 'hospital_management');
// Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
} 

// Define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // Check if username is empty
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter your email.";
    } else{
        $email = trim($_POST["email"]);
    }   
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    // Validate credentials
    if(empty($email_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT * FROM hm_reg WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0)  {
            //die('sql sdfdfdatement correct');
            // output data of each row
            $row = mysqli_fetch_assoc($result);
           //to verify password
            $dbpassword = $row['password'];
            if($dbpassword ==  md5($password)){
                $_SESSION['email'] = $row['email'];
                $_SESSION['firstname'] = $row['firstname'];
                $_SESSION['lastname'] = $row['lastname'];
                header("location: master/landing.php");
            }else{
                echo "<script>alert('Incorrect password')</script>";
                header("location: patients-sign-in.php");
            }
            
        }else{
            echo "<script>alert('Incorrect email')</script>";
            header("location: patients-sign-in.php");
          }
          $conn->close();
    
       
    }
    
    // Close connection
    
}
?>