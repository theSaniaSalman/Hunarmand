<?php
include('dbConnection.php');
session_start();
if($_SESSION["user_login"]==null)
  {
      header("Location:signin.php");
  }

if(isset($_REQUEST['submit']))
{
	if(($_REQUEST['Date'] == "") || ($_REQUEST['Area'] == "") || ($_REQUEST['category'] == "") ||  ($_REQUEST['request'] == "")){
		 	   $regmsg = '<div class="error-msg">All fields are required';
	$msg = " <div class= ' alert alert-warning col-sm-6 ml-5 mt-2 '> Fill all Fields </div>";
}
else{
$rdate =$_REQUEST['Date'];
$rloc =	$_REQUEST['Area'];
$rcategory =$_REQUEST['category'];
$rreq =	$_REQUEST['request'];
$uname=$_SESSION['user_login'];
$sql = "INSERT INTO buyerreq(buyerUserName,dateofwork, loc_, category, descript) VALUES ('$uname','$rdate', '$rloc', '$rcategory', '$rreq')";
if($conn->query($sql)== TRUE ){
    $msg = " <div class= 'alert alert-success col-sm-6 ml-5 mt-2 '> Request Posted </div>";
    
}
else 
{
    $msg = " <div class= 'alert alert-danger col-sm-6 ml-5 mt-2 '> Unable to Post </div>";
    
}

}
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Site Title-->
    <title>Post a Request | Hunarmand</title>
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
    <link href = "C:\xampp\htdocs\Hunarmand\services.css" rel="stylesheet" type="text/css">
</head>
<body>
    </head>
    <body>
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
					
                        <a class="nav-link" href="buyersdashboard.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="allrequests.php">Requests</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="buyersmsgs.php">My Messages</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="request.php">Post a Request</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profilepage.php">My Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    
                    </ul> 
                </form>
            </div>
        </nav>
	<div class="create-account">
<div class="child-div">
	<div class="create-account-heading">
	<h1>Post Your Request</h1>
	</div>
	<div class="form-div">
 <form  action="" method="POST" class="register-form">

    <label for="workdate">Date Of Work:</label><br/>
   	<input id="workdate" type="date" name="Date" placeholder="Enter date">
	<br/>
	<br/>
	
	 <label for="location">Location:</label><br/>
   	<input id="location" type="text" name="Area" placeholder="Valid for only Karachi">
	<br/>
	<br/>
	 <label for="work-category" id="category-label" class="dropdown-label">Working Category:</label>
<select name="category" class="working-category" id="work-category">
  <option value="Select" selected>Select</option>
  <option value="Electrician">Electrician</option>
  <option value="Plumber">Plumber</option>
  <option value="AC Technician">AC Technician</option>
  <option value="Car Mechanic">Car Mechanic</option>
  <option value="Carpenter">Carpenter</option>
  <option value="mason">mason</option>
  <option value="House Cleaning Service">House Cleaning Service</option>
  <option value="Mason">Mason</option>
</select>
<br/>
<br/>

    <label for="requestdescription">Request Description:</label><br/>
    	<textarea id="requestdescription" name="request" placeholder="Enter your request description here..."></textarea>
	<br/>
	<br/>

     <!-- Flex Container -->
	 <div class="submit-button">
      <button type="submit" name="submit" onclick="validate()" id="signup-button-2">
         <div id="slide"></div>
       <a href="#">POST REQUEST</a>
     </button>
	 </div>
  </form>
  
  <?php if(isset($regmsg)){
	echo $regmsg;
	} 
?>


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

