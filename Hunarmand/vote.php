<?php

  include('dbConnection.php');
  session_start();
  if($_SESSION["user_login"]==null)
  {
      header("Location:signin.php");
  }
 
  mysqli_select_db($conn,$db_name);

 


  ////////UNAIZAAAA
  $bidder=$_GET['BIDDER'];
  $requestid=$_GET['REQUESTID'];
  //////////////////UNAIZAAAA


 	// $vote = $_REQUEST['vote'];
  // 	$votesql = "INSERT INTO buyerreq (num_of_stars) VALUES ('$vote') WHERE requestId='$requestid' ";
	// $voteresult = mysqli_query($conn,$votesql);
 
?>


<html>
<head>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<style>
    .container{
        text-align: center;
        /* background-color: #f5f5f5; */
        margin:100px 100px 100px 100px;
      /* padding-top: 30px; */

    }

    input[type="radio"] {
  display: none;
}

label {
  display: inline-block;
}

input[type="radio"]:checked+label {
  cursor: default;
  color: red;
}
.fa-star{
  font-size:50px;
}
</style>
<script>
function getVote(int) {
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("poll").innerHTML=this.responseText;
    }
  }
  ////////////////////////////////////////
   xmlhttp.open("GET","poll_vote.php?bidder=<?php echo $bidder;?>&REQID=<?php echo $requestid;?>&vote="+int,true);

  xmlhttp.send();
  /////////////////////////////////
}
</script>

</head>
<body >

<<div class="container">
  <div class="row">
  <div class="col col-xl-8 col-lg-8 col-md-6 col-sm-4">
    
    <div id="poll" style="background-color:#f5f2f5; padding-bottom:50px; " >
      <h3 style="font-family: 'Montserrat', sans-serif; font-size:60px; padding-top:40px;">RATING!!</h3>
          <form>
            <input id="star1" name="vote" type="radio" value="1" onclick="getVote(this.value)" ><label for="star1"><i class="fa fa-star"></i></label>
            <input id="star2" name="vote" type="radio" value="2" onclick="getVote(this.value)"><label for="star2"><i class="fa fa-star"></i></label>
            <input id="star3" name="vote" type="radio" value="3" onclick="getVote(this.value)" checked><label for="star3"><i class="fa fa-star"></i></label>
            <input id="star4" name="vote" type="radio" value="4" onclick="getVote(this.value)" ><label for="star4"><i class="fa fa-star"></i></label>
            <input id="star5" name="vote" type="radio" value="5" onclick="getVote(this.value)"><label for="star5"><i class="fa fa-star"></i></label>
          </form>
        </div>
    
    </div>
  </div>
</div>

</body>
</html>