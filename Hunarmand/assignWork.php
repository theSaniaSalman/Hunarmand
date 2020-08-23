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
    <title>I Want to Work| Hunarmand</title>
    

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
    <link href = "profilestyle.css" rel="stylesheet" type="text/css">
   <!-- <link href = "allrequests.css" rel="stylesheet" type="text/css">
    <script src="allrequests.js" type="text/javascript"></script>-->
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
                        <a class="nav-link" href="request.php">Post a Requests</a>
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
    <div id="container-div" style=" width:80%; margin-left:auto; margin-right:auto; margin-top:5%;">
            <div></div>
            <?php
            $biddersquery="SELECT * FROM workerbid WHERE requestId='".$_GET['REQUESTID']."'";
            $executebiddersquery=mysqli_query($conn,$biddersquery);
            ?>
 
            <div id="in-div" style="border:1px solid black;"><?php echo $_GET['REQUEST'];?><div></div>
            
            <table>
            <?php
            

            while($row=mysqli_fetch_array($executebiddersquery))
            {
                $bidder=$row[1];
                ?>
                <div style="padding-top:30px;"></div>
                <tr>
                <td><a href="othersprofile.php?USERNAME=<?php echo $bidder;?>"><?php echo $bidder?></a></td>
                <td><a><button id="chatbutton"  name="chat" style="margin-left:20px;">Start Chat</button></a></td>
                <td><a href="orders.php?REQUEST=<?php echo $_GET['REQUEST'];?>&BIDDER=<?php echo $bidder;?>&REQUESTID=<?php echo $_GET['REQUESTID'];?>"><button id="orderbutton" target="_blank" name="work"  style="margin-left:20px;">Start work with him</button></a></td>
                <div></div>
            </tr>
            </table>

            
            
            <?php
            }
            ?>
            </div>



      
</div>
        </body>
        </html>



 

