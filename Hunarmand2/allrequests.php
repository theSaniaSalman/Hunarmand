

  <?php
  include("dbConnection.php"); 
  mysqli_select_db($conn,$db_name);
  session_start();
  if($_SESSION["user_login"]==null)
  {
      header("Location:signin.php");
  }
  
      ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Requests | Hunarmand</title>
    

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
    <link href = "services.css" rel="stylesheet" type="text/css">
    <link href = "profilestyle.css" rel="stylesheet" type="text/css">
    <link href = "allrequests.css" rel="stylesheet" type="text/css">
    <script src="allrequests.js" type="text/javascript"></script>
    

    
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
                        <a class="nav-link" href="buyersdashboard.php">Services</a>
                    </li>
                    <li class="nav-item">
					
                        <a class="nav-link" href="">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="allrequests.php">All Requests</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="request.php">Post a Requests</a>
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



        <div id="container-div">
            <div></div> 
            <h3 class="headings">All Requests</h3>
            <button class="tablink" onclick="openPage('MyRequests', this, 'light blue')">My Requests</button>
<button class="tablink" onclick="openPage('ForElectricians', this, 'light blue')" id="defaultOpen">For Electricians</button>
<button class="tablink" onclick="openPage('ForPlumbers', this, 'light blue')">For Plumbers</button>
<button class="tablink" onclick="openPage('ForACTechnicians', this, 'light blue')"> For AC Technicians</button>
<button class="tablink" onclick="openPage('ForCarMechanics', this, 'light blue')"> For Car Mechanics</button>
<button class="tablink" onclick="openPage('ForCarpenters', this, 'light blue')"> For Carpenters</button>
<button class="tablink" onclick="openPage('For Painters', this, 'light blue')"> For Painters</button>
<button class="tablink" onclick="openPage('ForHouseCleaning', this, 'light blue')"> For House Cleaning</button>
<button class="tablink" onclick="openPage('ForEducation', this, 'light blue')"> For Education</button>




<div id="MyRequests" class="tabcontent">
    <?php
   
    $Uname=$_SESSION['user_login'];
    $requestQuery="SELECT * FROM buyerreq WHERE buyerUserName='".$Uname."'";
    $executeRequestQuery=mysqli_query($conn,$requestQuery);
    $num=mysqli_num_rows($executeRequestQuery);
    while($row=mysqli_fetch_array($executeRequestQuery))
                {   $request=$row[3];
            
                     
            ?><div id="in-div"><a href="profilepage.php"><?php echo $Uname; ?></a><div></div><?php echo $request?></div>
               <?php  
               }
     ?>
  
</div>

<div id="ForElectricians" class="tabcontent">
<?php
    $requestQuery2="SELECT * FROM buyerreq WHERE category='Electrician'";
    $executeRequestQuery2=mysqli_query($conn,$requestQuery2);
    while($row2=mysqli_fetch_array($executeRequestQuery2))
    {   $buyer2=$row2[2];
        $request2=$row2[3];
    
        ?><div id="in-div"><a href="othersprofile.php?USERNAME=<?php echo $buyer2;?>"><?php echo $buyer2; ?></a><div></div><?php echo $request2;?></div>
  <?php
  }

    ?>
    
</div>

<div id="ForPlumbers" class="tabcontent">
<?php
    $requestQuery2="SELECT * FROM buyerreq WHERE category='Plumber'";
    $executeRequestQuery2=mysqli_query($conn,$requestQuery2);
    while($row2=mysqli_fetch_array($executeRequestQuery2))
    {   $buyer2=$row2[2];
        $request2=$row2[3];
        

         
        ?><div id="in-div"><a href="othersprofile.php?USERNAME=<?php echo $buyer2;?>"><?php echo $buyer2; ?></a><div></div><?php echo $request2?></div>
   <?php
    }

    ?>
</div>

<div id="ForACTechnicians" class="tabcontent">
<?php
    $requestQuery2="SELECT * FROM buyerreq WHERE category='AC Technician'";
    $executeRequestQuery2=mysqli_query($conn,$requestQuery2);
    while($row2=mysqli_fetch_array($executeRequestQuery2))
    {   $buyer2=$row2[2];
        $request2=$row2[3];
        

         
        ?><div id="in-div"><a href="othersprofile.php?USERNAME=<?php echo $buyer2;?>"><?php echo $buyer2; ?></a><div></div><?php echo $request2?></div>
 <?php
 }

    ?>
</div>

<div id="ForCarMechanics" class="tabcontent">
<?php
    $requestQuery2="SELECT * FROM buyerreq WHERE category='Car Mechanic'";
    $executeRequestQuery2=mysqli_query($conn,$requestQuery2);
    while($row2=mysqli_fetch_array($executeRequestQuery2))
    {   $buyer2=$row2[2];
        $request2=$row2[3];
        

         
        ?><div id="in-div"><a href="othersprofile.php?USERNAME=<?php echo $buyer2;?>"><?php echo $buyer2; ?></a><div></div><?php echo $request2;?></div>
  <?php 
   }

    ?>
</div>
<div id="ForCarpenters" class="tabcontent">
<?php
    $requestQuery2="SELECT * FROM buyerreq WHERE category='Carpenter'";
    $executeRequestQuery2=mysqli_query($conn,$requestQuery2);
    while($row2=mysqli_fetch_array($executeRequestQuery2))
    {   $buyer2=$row2[2];
        $request2=$row2[3];
        

         
        ?><div id="in-div"><a href="othersprofile.php?USERNAME=<?php echo $buyer2;?>"><?php echo $buyer2; ?></a><div></div><?php echo $request2;?></div>
 <?php   
    
    
}

    ?>
</div>
<div id="ForPainters" class="tabcontent">
<?php
    $requestQuery2="SELECT * FROM buyerreq WHERE category='Painter'";
    $executeRequestQuery2=mysqli_query($conn,$requestQuery2);
    while($row2=mysqli_fetch_array($executeRequestQuery2))
    {   $buyer2=$row2[2];
        $request2=$row2[3];
        

         
        ?><div id="in-div"><a href="othersprofile.php?USERNAME=<?php echo $buyer2;?>"><?php echo $buyer2; ?></a><div></div><?php echo $request2;?></div>
 <?php   
 }

    ?>
</div>
<div id="ForHouseCleaning" class="tabcontent">
<?php
    $requestQuery2="SELECT * FROM buyerreq WHERE category='House Cleaning Service'";
    $executeRequestQuery2=mysqli_query($conn,$requestQuery2);
    while($row2=mysqli_fetch_array($executeRequestQuery2))
    {   $buyer2=$row2[2];
        $request2=$row2[3];
        

         
        ?><div id="in-div"><a href="othersprofile.php?USERNAME=<?php echo $buyer2;?>"><?php echo $buyer2; ?></a><div></div><?php echo $request2;?></div>
 <?php
 }

    ?>
</div>
<div id="ForEducation" class="tabcontent">
<?php
    $requestQuery2="SELECT * FROM buyerreq WHERE category='Education'";
    $executeRequestQuery2=mysqli_query($conn,$requestQuery2);
    while($row2=mysqli_fetch_array($executeRequestQuery2))
    {   $buyer2=$row2[2];
        $request2=$row2[3];
        

         
        ?><div id="in-div"><a href="othersprofile.php?USERNAME=<?php echo $buyer2;?>"><?php echo $buyer2; ?></a><div></div><?php echo $request2;?></div>
<?php 
}

    ?>
</div>
    </div>

	 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    </body>
    </html>


  
  
