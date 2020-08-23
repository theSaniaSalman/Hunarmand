<?php
include("dbConnection.php");
  mysqli_select_db($conn,$db_name);
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
  $WORKCATEGORY = $row['workCategory'];	  
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
    <link href = "viewrequest.css" rel="stylesheet" type="text/css">
   

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
                        <a class="nav-link" href="allrequests.php">All Requests</a>
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
	<div id="viewreq-div">
    <?php
$requestID2=array();
$i=0;
 $requestQuery2="SELECT * FROM buyerreq WHERE category='$WORKCATEGORY'";
    $executeRequestQuery2=mysqli_query($conn,$requestQuery2);
    $num=mysqli_num_rows($executeRequestQuery2);
    while($row2=mysqli_fetch_array($executeRequestQuery2))	
    {   	
        $requestID2[$i]=$row2[0];
        $buyer2=$row2[2];
        $request2=$row2[3];
		$location2=$row2[5];
		$workDate2=$row2[4];
		$noOfBids2=$row2[6];

        ?><div id="viewreq-in-div"><a href="othersprofile.php?USERNAME=<?php echo $buyer2;?>"><?php echo $buyer2; ?></a><div></div><?php echo $request2;?> <div></div><?php echo $location2;?><div></div><?php echo $workDate2;?> <div></div> <?php echo $noOfBids2." ";?>people want to work on this.<div></div><a href="iWantToWork.php?ID=<?php echo $requestID2[$i];?>">I wish to work</a></div>
        </div>
        <!--<form action="" method="POST"><button name="bid" id="bidbutton" onClick="disableButton()" type="submit">I WANT TO WORK</button></form>-->
        <?php
        $i++;
}

    ?>
    </div>

	</body>
        </html>