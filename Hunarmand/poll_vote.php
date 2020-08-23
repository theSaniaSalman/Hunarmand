<?php
include('dbConnection.php');
session_start();
mysqli_select_db($conn,$db_name);

if($_SESSION["user_login"]==null)
  {
      header("Location:signin.php");
  }


  ///////////////////////////////////////////
  $bidder=$_GET['bidder'];
  $requestid=$_GET['REQID'];
  //////////////////////////////////////////
   
    
  
        $vote = $_REQUEST['vote'];

        $votesql = "INSERT INTO buyerreq (num_of_stars) VALUES ('$vote') WHERE requestId='$requestid'";
	$result = mysqli_query($conn,$votesql);

    
?>