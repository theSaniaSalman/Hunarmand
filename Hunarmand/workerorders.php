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
                        <a class="nav-link" href="viewrequest.php"> All Requests</a>
                    </li>
                    <li class="nav-item">
					
                        <a class="nav-link" href="#">My Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="workersmsgs.php">My Messages</a>
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
         $myorders="SELECT * FROM buyerreq WHERE assignedTo='".$_SESSION['user_login']."'";
         $executemyorders=mysqli_query($conn,$myorders);
         while($row=mysqli_fetch_array($executemyorders))
         {
             ?>

            <div id="in-div" style="border:1px solid black;">
            <div style="background-color:white; padding-left:10px;"><?php echo $row['descript'];?></div><div></div>
            <div style="padding-top:10px;"><p><?php echo $row['buyerUserName']." ";?>has assigned you this work on <?php echo $row['orderStartDate'];?>.<p></div><div></div>
            <div style="padding-top:10px;"><p>Work status: <span id="status">in-progress</span></p></div><div></div>
         
         
          <?php if($row[10]==NULL)
          {
              ?>
            <table>
                    <tr>
            <form action="" method="POST">
             <td><button id="complete" name="order-complete">Work Completed</button></td>
             <td><button id="complete" name="order-notcomplete">Work not Completed</button></td>
        </form>
            </tr>
            </table>
            
          
            <?php
          }
            if(isset($_POST['order-complete']))
              {
                 $workcomplete="UPDATE buyerreq SET workersStatus='TRUE' WHERE requestId='$row[0]'";
                 $executeworkcomplete=mysqli_query($conn,$workcomplete);

              }
             
                  elseif(isset($_POST['order-notcomplete']))
                  {
                      $worknotcomplete="UPDATE buyerreq SET buyersStatus='FALSE' WHERE requestId='$row[0]'";
                      $executeworknotcomplete=mysqli_query($conn,$worknotcomplete);
                  }
                  $finalstatus="SELECT * FROM buyerreq WHERE requestId='$row[0]'";
                  $executefinalstatus=mysqli_query($conn,$finalstatus);
                  $row2=mysqli_fetch_array($executefinalstatus);
                  if($row['buyersStatus']==TRUE && $row['workersStatus']==TRUE)
                  {  
                      $complete="UPDATE buyerreq SET orderStatus='TRUE' WHERE requestId='$row[0]'";
                      $executecomplete=mysqli_query($conn,$complete);
                      echo '<script type="text/javascript">document.getElementById("status").innerHTML="Work Completed!"</script>';
                     
                      $dateofCompletion=date("Y-m-d");
                      
                      ?>
                      <p>Completion date: <?php echo $dateofCompletion;?></p>
                  </div> 
                  
                      <div></div>
         
                      <?php
                      $insertCompletionDate="UPDATE buyerreq SET orderEndDate='".$dateofCompletion."' WHERE requestId='$row[0]'";
                      $executeInsertCompletionDate=mysqli_query($conn,$insertCompletionDate);
                  }
                  elseif($row['buyersStatus']==NULL||$row['workersStatus']==NULL)
                  {
                    echo  '<script type="text/javascript">document.getElementById("status").innerHTML="Work in-progress!"</script>';
                  }
                  else{
                      $notcomplete="UPDATE buyerreq SET orderStatus='False' WHERE requestId='$row[0]'";
                      $executenotcomplete=mysqli_query($conn,$notcomplete);
                    echo  '<script type="text/javascript">document.getElementById("status").innerHTML="Work not completed!"</script>';
                  }
    
    
    
               
              }
            
                ?>
               

            </div>
            
        </body>
        </html>













            