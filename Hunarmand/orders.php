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
					
                        <a class="nav-link" href="#">Orders</a>
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
            <div id="in-div" style="border:1px solid black;"><div style="background-color:white; padding-left:10px;"><?php echo $_GET['REQUEST'];?></div><div></div>
            <?php  
            $bidder=$_GET['BIDDER'];
            $reqid=$_GET['REQUESTID'];
            $currentDate=date("Y-m-d");
             $check="SELECT * FROM buyerreq WHERE requestId='$reqid'";
             $executecheck=mysqli_query($conn,$check);
             $row=mysqli_fetch_array($executecheck);
             if($row['assignedTo']==NULL){   


           ?>
            <p style="padding-top:10px;">Do you really want to assign work to <?php echo $_GET['BIDDER']; ?> ?</p>
            <form action="" method="POST">
                <button id="assignOrder" name="assignOrder" width=10px;>Yes</button>
            </form>
             <?php
            
             if(isset($_POST['assignOrder'])){
             
             
            $workAssignQuery="UPDATE buyerreq SET assignedTo = '$bidder', orderStartDate='$currentDate' WHERE requestId= '$reqid'";
            $executeworkAssignQuery=mysqli_query($conn,$workAssignQuery);

            ///////UNaizaaaaaa
            $query2="UPDATE worker_rating_previous SET for_worker='$bidder'";
            $executequery2=mysqli_query($conn, $query2);

            ////////////////
           
        }
    }
    else{
        ?>
        <p style="margin-top:10px;">Work already assigned</p>
        <?php
        
            
            
        
            
            

            ?>
            
            <div style="margin-top:10px; font-weight:600;"><p>You have given this work to <?php echo " ".$row['assignedTo']." on ".$currentDate; ?></p></div><div></div>
            <p id="work-status">Work Status: <span id="status">in-progress<span><p>
            <?php
            $checkcolumn="SELECT * FROM buyerreq WHERE requestId='$reqid'";
            $executecheckcolumn=mysqli_query($conn,$checkcolumn);
            $row=mysqli_fetch_array($executecheckcolumn);
            if($row[9]==NULL){
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
                 $workcomplete="UPDATE buyerreq SET buyersStatus='TRUE' WHERE requestId='$reqid'";
                 $executeworkcomplete=mysqli_query($conn,$workcomplete);

              }
              elseif(isset($_POST['order-notcomplete']))
              {
                  $worknotcomplete="UPDATE buyerreq SET buyersStatus='FALSE' WHERE requestId='$reqid'";
                  $executeworknotcomplete=mysqli_query($conn,$worknotcomplete);
              }
              /////////Unaizaaaaaaaaaaaaaaaaa
              
               if($row[13]==NULL)        {
              ?>
              <!--<form action="" method="POST">-->
             
              <a href="vote.php?REQUESTID=<?php echo $reqid;?>&BIDDER=<?php echo $bidder;?>"><button name="giveRating"  style="margin-top:10px;" >Give/ View Rating</button>
              <!---</form>-->





              <?php
    }
              
              
              
              
              ///////Unaizaaaaaaaaaaaaaa
            
              $finalstatus="SELECT * FROM buyerreq WHERE requestId='$reqid'";
              $executefinalstatus=mysqli_query($conn,$finalstatus);
              $row2=mysqli_fetch_array($executefinalstatus);
              if($row2['buyersStatus']==TRUE && $row2['workersStatus']==TRUE)
              {
                  echo '<script type="text/javascript">document.getElementById("status")="Work Completed!</script>';
                  $complete="UPDATE buyerreq SET orderStatus='TRUE' WHERE requestId='$reqid'";
                  $executecomplete=mysqli_query($conn,$complete);
                  echo '<script type="text/javascript">document.getElementById("status").innerHTML="Work Completed!"</script>';
                  $dateofCompletion=date("Y-m-d");
                  ?>
                  <p>Completion date: <?php echo $dateofCompletion;?></p> 
                <?php
                  $insertCompletionDate="UPDATE buyerreq SET orderEndDate=' $dateofCompletion' WHERE requestId='$row[0]'";
                      $executeInsertCompletionDate=mysqli_query($conn,$insertCompletionDate);
              }
              elseif($row['buyersStatus']==NULL||$row['workersStatus']==NULL)
              {
                  echo  '<script type="text/javascript">document.getElementById("status")="Work in-progress!"</script>';
              }
              else{
                $notcomplete="UPDATE buyerreq SET orderStatus='FALSE' WHERE requestId='$reqid'";
                $executenotcomplete=mysqli_query($conn,$complete);


                echo  '<script type="text/javascript">document.getElementById("status")="Work not completed!"</script>';
              }
            }
           
        



            ?>
        
            
                  
        
        </div>
        </body>
        </html>