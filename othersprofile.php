<?php
include("dbConnection.php");
session_start();
if($_SESSION["user_login"]==null)
  {
      header("Location:signin.php");
  }
  $USER=$_GET['USERNAME'];
  $sql = "SELECT * from workerregistration where userName='".$USER."'";

  $result = mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($result);
  $fullName =$row['fullName'];
  $phoneNum=$row['phoneNum'];
  $email=$row['email'];
  $address=$row['addresss'];
  $password=$row['password'];
  $userName=$row['userName'];
  $cnic = $row['CNIC'];
 $dateOfReg=$row['currentDate'];
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $fullName."'s"?>Profile  | Hunarmand</title>
    

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
    <!--<link href = "services.css" rel="stylesheet" type="text/css">-->
    <link href = "profilestyle.css" rel="stylesheet" type="text/css">
    

    
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
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
					
                        <a class="nav-link" href="">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Requests</a>
                    </li>
                    
                    
                    <li class="nav-item">
                        <a class="nav-link" href="">Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profilepage.php">My Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Log Out</a>
                    </li>
                    </ul> 
                </form>
                </div>
        </nav>
    </div>

    <div id="blue-div" >
        <div id="div-1">
        <div>
        <img src="http://placehold.it/150x150" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
            <!--<div></div>
    <input type="button" class="btn btn-secondary" id="btnChangePicture" value="Change" />-->
         <input type="file" style="display: none;" id="profilePicture" name="file" />
          </div>
                                
          <div style="margin-left:20px;"> <!--class="userData ml-3" style="display:inline-block;">-->
             <h2 style="font-size: 1.5rem; font-weight: bold; color: rgb(252, 62, 252);"><a href="javascript:void(0);"><?php echo $fullName;?></a></h2>
             <h6> <!--class="d-block">-->Rating :<span></span> 8/10</h6>
             <h6> <!--class="d-block">-->Jobs completed :<span>15</span></h6>
             <h6> <!--<class="d-block">-->Member since: <span><?php echo $dateOfReg; ?></span></h6>
             <h6> <!--<class="d-block">-->Experience: <span>12 yrs</span></h6>
          </div>
       </div>     
                
       <div id = "yourInfo"> 
                                         <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight: bold;">Full-Name:</label>
                                                </div>
                                            <div class="col-md-8 col-6">
                                            <p id="name"><?php echo $fullName;?></p>
                                         </div>
                                        </div>
                                        <hr/>

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Username:</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <p id="uname"><?php echo $userName;?></p>
                                            </div>
                                        </div>
                                        <hr />
                                        
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Phone number:</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                               <p id="phonenum"><?php echo $phoneNum;?></p>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Email:</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <p id="email"><?php echo $email; ?></p>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Address:</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <p id="address"><?php echo $address;?></p>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">CNIC:</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <p id="cnic"><?php echo $cnic;?></p>
                                            </div>
                                        </div>
                                        <hr />
                                       
                               </div>
                            </div>


    
    
    
                                        
                                        
                           </body>
                           </html>
    

    