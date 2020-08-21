<?php
session_start();
include('dbConnection.php');
mysqli_select_db($conn,$db_name);

if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST["password"];
    $_SESSION["user_login"]=$uname;
    
    $sql = "select * from workerregistration where userName='".$uname."'AND password='".$password."'limit 1";

    $result = mysqli_query($conn,$sql);
    

    if(mysqli_num_rows($result)==1)

    {  $_SESSION["row"]=mysqli_fetch_array($result);
        //while($_SESSION["row"]=mysqli_fetch_array($result)){
        if($_SESSION["row"][6]=="Buyer")
       { 

           header("Location:buyersdashboard.php");
		   }
       else{
           header("Location:workersdashboard.php");
       }
       
    //}
    }
    else{
        echo "Incorrect username or password!";
        exit();
    }

}  


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Site Title-->
    <title>Sign In | Hunarmand</title>
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
<div id="header" class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            
           
            <a href="index.html"><img src="images/hunarmand1.png" alt="Hunarmand Logo"></a> 
            <a class="navbar-brand" href="#"><h1 style="font-weight: 800;"></h1></a>
            
            
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent" >
            <ul class="navbar-nav mr-auto  " ></ul>
                <ul class="navbar-nav mr-auto  " >
                    <li class="nav-item active">
                        <a class="nav-link" href="#service">Services<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#howitworks">How it Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#aboutus">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#contact">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">LogIn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registration.php">SignUp</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
	
	
    <div class="create-account">
<div class="child-div">
	<div class="create-account-heading">
	<h1>Sign In Your Account</h1>
	</div>
	<div class="form-div">
 <form  action="" method="post" class="register-form">
 <label for="user-name">User Name:</label><br/>
    <input type="text" id="user-name" placeholder="ahmed_khan" name="username" maxlength="30" required>
	<br/>	

    
    <label for="password">Password:</label><br/>
    <input type="password" id="password" name="password" maxlength="30" required>
    <br/>
    <!-- Flex Container -->
	 <div class="submit-button">
      <button type="submit" name="submit" onClick="validate()" id="signup-button-2">
         <div id="slide"></div>
       <a>SIGN IN</a>
     </button>
	 </div>
  </form>
  </div>
 </div>
</div>
<section id="bottom" class="main" style="background-color: black;">
        <div id="contact" class="container" style="width: 100%; background-color: black ; margin-bottom: 0px; padding-top: 20px; padding-bottom: 25px;">
            <div class="row">
                <!-- <div class="subdiv" id="contactus"></div>
                <div class="subdiv" id="connectwithus"></div> -->
                <div class="col-sm-24 col-md-12 col-lg-6">
                    <div class="footer1">
                        <!-- <p style="font-size: 16px;">Head Office, <br />A-25, Bahadurabad Chowrangi Karachi, Pakistan</p> -->
                        <h3 style="padding-bottom: 10px; font-family: sans-serif; font-weight: bold;">Contact Us</h3>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <label>Phone: 111-729-526</label>
                        <br>
                        <label style="padding-left: 20px;">(+0092-213) 4130786-90</label>
                        <br />
                        
                       <i class="fa fa-mobile" aria-hidden="true"></i>
                        <label>CELL: 92-311-1729526</label><br>
                        <label style="padding-left: 20px;"> 92-333-0099009</label>
                        <br />
                        
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <label style="font-size: 15px; font-family: sans-serif;">info@hunarmand.com</label>
                    </div>
                </div>
                <div class="col-sm-24 col-md-12 col-lg-6">
                    <div class="footer3">
                        <h5 style="color: #ffffff; font-size: 25px; padding-bottom: 10px; font-weight: bold; font-family: sans-serif;">Connect With Us</h5>
                        <i class="fa fa-facebook-official" aria-hidden="true"></i>
                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                       <i class="fa fa-instagram" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <div class="last">
        <p style="color:#ffff; font-size: 15px; padding-left: 40px;padding-top: 10px; display: inline-block;" >Copyright © 2020 Hunarmand Pvt Ltd. All Rights Reserved. </p>
    </div>
	
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
