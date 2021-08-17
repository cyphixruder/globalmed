<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
	<title>GLOBAL-MED | DASHBOARD</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta http-equiv="refresh" content="2; url= home.php">
	<meta content="" name="description" />
	<meta content="" name="author" />

    <link href="../assets/img/plus+.gif" rel="icon">
  	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        *{
            box-sizing: border-box;
            margin: 0px;
            padding: 0;
            line-height: 20px;
        }
        body{
            background: #bdbcbe;
        }
        .container{
            background-color: #fff;
            width: 35%;
            height: 45vh;
            text-align: center;
            margin-top: 10em;
            box-shadow: 0px 0px 20px 5px rgba(100, 100, 100, 0.7);
        }
        .container-fluid{
            padding-top: 50px;
        }
        h3{
            font-weight: bolder;
        }
        .piss{
            margin-top: 60px;
        }
        .spinner-2:before {
            content: "";
            box-sizing: border-box;
            position: absolute;
            top: 53%;
            left: 50%;
            width: 60px;
            height: 60px;
            margin-top: -30px;
            margin-left: -30px;
            border-radius: 50%;
            border: 2px solid transparent;
            border-top-color: coral;
            border-bottom-color: coral;
            animation: spinner 0.7s ease infinite;
        }
        @keyframes spinner {
            to {
                transform: rotate(360deg);
            }
            }


    </style>
</head>
<body>
    <div class="container">
        <div class="container_fluid">
            <div class="piss spinner-2">
                <img src="../assets/img/plus.gif" alt="" width="250px">
                <h3>Login Success!</h3>
                <p>Please wait while we redirect you.....</p>
                
            </div>
        </div>
    </div>
</body>
</html>