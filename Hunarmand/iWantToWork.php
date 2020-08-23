
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
    <link href="iWantToWork.css" rel="stylesheet" type="text/css">

    
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
                        <a class="nav-link" href="">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="viewrequest.php">All Requests</a>
                    </li>
                    <li class="nav-item">
					
                        <a class="nav-link" href="workerorders.php">My Orders</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="workersmsgs.php">Messages</a>
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
    <div id="">
            <div></div> 



 


         <div id="buttondiv">       
        <form action="" method="POST">
        <button name="bid" id="bidbutton" onClick="disableButton()" type="submit">I WANT TO WORK</button>
        <div id="para">
        <div style="text-decoration:underline;">Instructions:</div>
        <p>1. Work can't be canceled once taken.</p>
        <p>2. Payment will be done on the spot.</p>
        <p>3. Mark the order complete after completion.</p>
        <p>4. Give rating to work provider.</p></div>
      </div>
       <?php 
        if(isset($_POST['bid'])){
            $check="SELECT * FROM workerbid where requestId ='".$_GET['ID']."'AND workerUname='".$_SESSION['user_login']."'";
         $executecheck=mysqli_query($conn,$check);
            $sql1 = "UPDATE buyerreq SET bids = bids + 1 where requestId ='".$_GET['ID']."'";
          $sql2="INSERT INTO workerbid (requestId, workerUname) VALUES ('".$_GET['ID']."', '".$_SESSION['user_login']."')";
         if(mysqli_num_rows($executecheck)==0)
         { 
         
          if($conn->query($sql1) == TRUE) {
             
             echo"<script>alert('Your request has been sent to the buyer');</script>";
         }
         if($conn->query($sql2)==TRUE)
         {
             echo "<script>updated</script>";
         }
        }
        else{
            echo "<script>alert('You have already requested for this ');</script>";
        }
        
        
    } 
?>
</body>
</html>    



        