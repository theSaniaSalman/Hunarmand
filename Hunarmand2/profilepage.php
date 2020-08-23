<?php
include("dbConnection.php");
session_start();
if($_SESSION["user_login"]==null)
  {
      header("Location:signin.php");
  }
  $sql = "SELECT * from workerregistration where userName='".$_SESSION['user_login']."'";
  $result = $conn->query($sql);
  if($result->num_rows == 1){
	  $row = $result->fetch_assoc();
  $fullname = $row['fullName'];
  $USERTYPE = $row['userType'];
  $PHONENUMBER = $row['phoneNum'];
  $EMAIL = $row['email'];
  $PASSWORD = $row['password'];
  $ADDRESS = $row['addresss'];
  $CNIC =  $row['CNIC'];
  }
  if(isset($_POST['updatebutton'])){
	  if(($_POST['fullname'] == "" || $_POST['pnumber'] == "" || $_POST['email'] == "" || $_POST['address'] == "" || $_POST['password'] == "")){
		   echo"<script>alert('Empty fields are not allowed');</script>";
	  }
	  else{
		  $fullname = $_POST['fullname'];
		  $PHONENUMBER = $_POST['pnumber'];
		  $EMAIL = $_POST['email'];
		  $ADDRESS = $_POST['address'];
		  $PASSWORD = $_POST['password'];
		  	  	  
		  $sql = "UPDATE workerregistration SET fullName = '$fullname', phoneNum = '$PHONENUMBER', email = '$EMAIL', addresss = '$ADDRESS', password = '$PASSWORD' WHERE userName='".$_SESSION['user_login']."'";
		  if($conn->query($sql) == TRUE){
			  echo"<script>alert('Successfully Updated');</script>";
		  }
		  else{
			  echo"<script>alert('Failed to update');</script>";
		  }
	  }
  }

?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page | Hunarmand</title>
    <link href = "profilestyle.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <link rel="icon" href="images/tools.png" type="image/x-icon" />
      <!--stylesheets-->
    <link rel="shortcut icon" href="images/tools.png" type="image/x-icon" />
    <link rel="stylesheet" href="design.css" type="text/css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href = "C:\xampp\htdocs\Hunarmand\services.css" rel="stylesheet" type="text/css">
    <!--<link href = "C:\xampp\htdocs\Hunarmand\profilestyle.css" rel="stylesheet" type="text/css">-->

    <!-- -->
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
    
      <div id="blue-div" >
        <div id="div-1">
          <div > <!--class="image-container">-->                           
     <img src="http://placehold.it/150x150" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
            <!--<div></div>
    <input type="button" class="btn btn-secondary" id="btnChangePicture" value="Change" />-->

          </div>
                                
          <div style="margin-left:20px;"> <!--class="userData ml-3" style="display:inline-block;">-->
           <h1 style="color:#2E77BB; font-size:2.5em; font-weight:bold;"><?php echo $_SESSION['row']['userName'];?></h1>
             <h6> <!--class="d-block">-->Rating :<span></span> 8/10</h6>
             <h6> <!--class="d-block">-->Jobs completed :<span>15</span></h6>
             <h6> <!--<class="d-block">-->Member since <span>2019</span></h6>
             <h6> <!--<class="d-block">-->Experience: <span>12 yrs</span></h6>
          </div>
       </div>     
       <form action="profilepage.php" method="POST">             
     
            <input type="file" id="profilePicture" name="profilepic" accept="image/*" />
       <div id = "yourInfo"> 
                                       
                                          <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Full Name:</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                              <input type="text" id="name" name="fullname" value="<?php echo $fullname ?>" style="border:none;">
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Username:</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input type="text"  name="username" value="<?php echo $_SESSION['row']['userName'] ?>" style="border:none" readonly>
                                            </div>
                                        </div>
                                        <hr />
										 <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">User Type:</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input type="text"  name="usertype" value="<?php echo $USERTYPE?>" style="border:none" readonly>
                                            </div>
                                        </div>
                                        <hr />
									
										  <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Phone number:</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input type="text"  name="pnumber" value="<?php echo $PHONENUMBER?>" style="border:none">
                                            </div>
                                        </div>
                                        <hr />
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Email:</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input type="email"  name="email" value="<?php echo $EMAIL ?>" style="border:none">
                                            </div>
                                        </div>
                                        <hr />
                                        
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Address</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input type="text" name="address" value="<?php echo $ADDRESS ?>" style="border:none">
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Password:</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input type="password"  name="password" value="<?php echo $PASSWORD ?>" style="border:none">
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">CNIC:</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input type="tel" pattern="^\d{5}-\d{7}-\d{1}$" name="cnic" value="<?php echo $CNIC ?>" style="border:none" readonly>
                                            </div>
                                        </div>
                                        <hr />

                                        <a href="javascript:void(0);"><button type="submit" class="btn btn-secondary" name ="updatebutton" id="updateButton" style="position:left;">UPDATE</button></a>
										</form>
	       
	        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

										</body>
										</html>
