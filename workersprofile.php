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
  $WORKCATEGORY = $row['workCategory'];
	  
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
		  $WORKCATEGORY = $_POST['workcategory'];
		  	  	  
		  $sql = "UPDATE workerregistration SET fullName = '$fullname', phoneNum = '$PHONENUMBER', email = '$EMAIL', addresss = '$ADDRESS', password = '$PASSWORD', workCategory = '$WORKCATEGORY' WHERE userName='".$_SESSION['user_login']."'";
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
					
                        <a class="nav-link" href="">Requests</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">My Orders</a>
                    </li>
                    
                    
                    <li class="nav-item">
                        <a class="nav-link" href="">Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="workersprofile.php">My Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
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
         <input type="file" style="display: none;" id="profilePicture" name="file" />
          </div>
                                
          <div style="margin-left:20px;"> <!--class="userData ml-3" style="display:inline-block;">-->
           <h1 style="color:#2E77BB; font-size:2.5em; font-weight:bold;"><?php echo $_SESSION['row']['userName'];?></h1>
             <h6> <!--class="d-block">-->Rating :<span></span> 8/10</h6>
             <h6> <!--class="d-block">-->Jobs completed :<span>15</span></h6>
             <h6> <!--<class="d-block">-->Member since <span>2019</span></h6>
             <h6> <!--<class="d-block">-->Experience: <span>12 yrs</span></h6>
          </div>
       </div>     
       <form action="" method="POST">             
     
    <input type="button" class="btn btn-secondary" id="btnChangePicture" value="Change" />
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
                                                <input type="text"  name="usertype" value="<?php echo $USERTYPE ?>" style="border:none" readonly>
                                            </div>
                                        </div>
                                        <hr />
										
										
										 
										  <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Phone number:</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input type="text"  name="pnumber" value="<?php echo $PHONENUMBER ?>" style="border:none">
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
                                                <label style="font-weight:bold;">Working Category:</label>
                                    </div>
                                          <div class="col-md-8 col-6">   
											<select name="workcategory" style="width:180px;">
  <option value="Electrician" <?php if($row["workCategory"]=='Electrician'){echo "selected";}?>>Electrician</option>
  <option value="Plumber" <?php if($row["workCategory"]=='Plumber'){echo "selected";}?>>Plumber</option>
  <option value="AC Technician" <?php if($row["workCategory"]=='AC Technician'){echo "selected";}?>>AC Technician</option>
  <option value="Car Mechanic" <?php if($row["workCategory"]=='Car Mechanic'){echo "selected";}?>>Car Mechanic</option>
  <option value="Carpenter" <?php if($row["workCategory"]=='Carpenter'){echo "selected";}?>>Carpenter</option>
  <option value="Painter" <?php if($row["workCategory"]=='Painter'){echo "selected";}?>>Painter</option>
  <option value="House Cleaning Service" <?php if($row["workCategory"]=='House Cleaning Services'){echo "selected";}?>>House Cleaning Service</option>
  <option value="Education" <?php if($row["workCategory"]=='Education'){echo "selected";}?>>Education</option>
</select>
     </div>
                                        </div>
                                        <hr/>
										
                                     
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

                                        <a href="javascript:void(0);"><button type="submit" class="btn btn-secondary" name ="updatebutton" id="updateButton">UPDATE</button></a>
										</div>
										</form>
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
	</section>
										</body>
										</html>
										