<?php
include('dbConnection.php');
session_start();
if($_SESSION["user_login"]==null)
  {
      header("Location:signin.php");
  }
   $sql = "SELECT * from workerregistration where userName='".$_SESSION['user_login']."'";
  $result = mysqli_query($conn,$sql);
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Site Title-->
    <title>Sign Up | Hunarmand</title>
    <meta name="format-detection" content="telephone=no">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/tools.png" type="image/x-icon" />
    <link rel="shortcut icon" href="images/tools.png" type="image/x-icon" />

<!-- Stylesheets -->  
	<link rel="stylesheet" href="design.css" type="text/css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

    <body>
	<!-- Back To Top Button -->
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i>
</button>
    <div id="header" class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div>
			<a href="index.html"><img src="images/hunarmand1.png" alt="Hunarmand Logo"></a>
            <a class="navbar-brand" href="#"><h1 style="font-weight: 800;"></h1></a>
            <!-- <img style="size:10px; background: transparent !important; height: 100px;" src="images/download (6).png" alt=""> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <ul class="navbar-nav mr-auto">
				<li class="nav-item">
                        <a class="nav-link" href="#aboutus">Services</a>
                    </li>
                    <li class="nav-item">
					
                        <a class="nav-link" href="#service-heading">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#howitworks">Requests</a>
                    </li>
                    
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">My Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registration.php">Log Out</a>
                    </li>
                    </ul> 
                </form>
            </div>
        </nav>
    </div>