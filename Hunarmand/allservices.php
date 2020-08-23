 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "All " .$_GET["work-category"]."s" ?> | Hunarmand</title>
    

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
                        <a class="nav-link" href="allrequests.php">All Requests</a>
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
                        <a class="nav-link" href="logout.php">Log Out</a>
                    </li>
                    </ul> 
                </form>
            </div>
        </nav>
    </div>
    
      <div id="blue-div" >
        <div id="div-1">
         <?php
         include('dbconnection.php');
         mysqli_select_db($conn,$db_name);
         $countQuery="SELECT * FROM workerregistration WHERE workCategory='".$_GET["work-category"]."'";
         $executeCountQuery=mysqli_query($conn,$countQuery);
         $num=mysqli_num_rows($executeCountQuery);
         $USERNAME=array();
         $i=0;
        
        
         
         
             if($_GET['work-category']=='Electricia')
             { 
                echo '<h2 class="headings">All Electricians</h2>';
                $i=0;
                while($row=mysqli_fetch_array($executeCountQuery))
                {   $FULLNAME=$row[1];
                    
                    $USERNAME[$i]=$row[9];
                    $i+1;
                    ?> <div id="in-div"><a href="othersprofile.php?USERNAME=<?php echo $USERNAME[$i]?>"><?php echo $FULLNAME?></a></div>
                    <div></div>
                    <?php

                }
            }


                 if($_GET['work-category']=='Plumber')
             {
                echo '<h2 class="headings">All Plumbers</h2>';
                $i=0;
                while($row=mysqli_fetch_array($executeCountQuery))
                {   $FULLNAME=$row[1];
                    
                    $USERNAME[$i]=$row[9];
                    $i+1;
                    ?> <div id="in-div"><a href="othersprofile.php?USERNAME=<?php echo $USERNAME[$i]?>"><?php echo $FULLNAME?></a></div>
                    <div></div>
                    <?php


                 }
                }
             if($_GET['work-category']=='ACtechnician')
             {
                echo '<h2 class="headings">All AC Technicians</h2>';
                $i=0;
                while($row=mysqli_fetch_array($executeCountQuery))
                {   $FULLNAME=$row[1];
                    
                    $USERNAME[$i]=$row[9];
                    $i+1;
                    ?> <div id="in-div"><a href="othersprofile.php?USERNAME=<?php echo $USERNAME[$i]?>"><?php echo $FULLNAME?></a></div>
                    <div></div>
                    <?php
                }

             }
             if($_GET['work-category']=='CarMechanic')
             {
                echo '<h2 class="headings">All Car Mechanics</h2>';
                $i=0;
                while($row=mysqli_fetch_array($executeCountQuery))
                {   $FULLNAME=$row[1];
                    
                    $USERNAME[$i]=$row[9];
                    $i+1;
                    ?> <div id="in-div"><a href="othersprofile.php?USERNAME=<?php echo $USERNAME[$i]?>"><?php echo $FULLNAME?></a></div>
                    <div></div>
                    <?php
                }

             }
             if($_GET['work-category']=='Carpenter')
             {  echo '<h2 class="headings">All Carpenters</h2>';
                $i=0;
                while($row=mysqli_fetch_array($executeCountQuery))
                {   $FULLNAME=$row[1];
                    
                    $USERNAME[$i]=$row[9];
                    $i+1;
                    ?> <div id="in-div"><a href="othersprofile.php?USERNAME=<?php echo $USERNAME[$i]?>"><?php echo $FULLNAME?></a></div>
                    <div></div>
                    <?php

                 }
             }
             if($_GET['work-category']=='Painter')
             {
                echo '<h2 class="headings">All Painters</h2>';
                $i=0;
                while($row=mysqli_fetch_array($executeCountQuery))
                {   $FULLNAME=$row[1];
                    
                    $USERNAME[$i]=$row[9];
                    $i+1;
                    ?> <div id="in-div"><a href="othersprofile.php?USERNAME=<?php echo $USERNAME[$i]?>"><?php echo $FULLNAME?></a></div>
                    <div></div>
                    <?php

                 }
             }
             if($_GET['work-category']=='HouseCleaningService')
             {
                echo '<h2 class="headings">All House Cleaning</h2>';
                $i=0;
                while($row=mysqli_fetch_array($executeCountQuery))
                {   $FULLNAME=$row[1];
                    
                    $USERNAME[$i]=$row[9];
                    $i+1;
                    ?> <div id="in-div"><a href="othersprofile.php?USERNAME=<?php echo $USERNAME[$i]?>"><?php echo $FULLNAME?></a></div>
                    <div></div>
                    <?php

             }
            }
             if($_GET['work-category']=='Mason')
             {
                echo '<h2 class="headings">All Masons</h2>';
                $i=0;
                while($row=mysqli_fetch_array($executeCountQuery))
                {   $FULLNAME=$row[1];
                    
                    $USERNAME[$i]=$row[9];
                    $i+1;
                    ?> <div id="in-div"><a href="othersprofile.php?USERNAME=<?php echo $USERNAME[$i]?>"><?php echo $FULLNAME?></a></div>
                    <div></div>
                    <?php
                }

             }
            
            ?>
</div>
            </div>
            </body>
            </html>
