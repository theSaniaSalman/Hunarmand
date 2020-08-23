<?php
include('dbConnection.php');
if(isset($_POST['submit'])){
	//Checking for empty values
  if(($_POST['fullname'] == "") || ($_POST['username'] == "") || ($_POST['pnumber'] == "") || ($_POST['password'] == "") || ($_POST['cnic'] == "") || ($_POST['user-type'] == "") || ($_POST['address'] == "")){
	   $regmsg = '<div class="error-msg">All fields are required';
   }
   else{
$fullName = $_POST['fullname'];
$userName = $_POST['username'];
$phoneNum = $_POST['pnumber'];
$email = $_POST['email'];
$password = $_POST['password'];
$cnic = $_POST['cnic'];
$userType = $_POST['user-type'];
$workCategory = $_POST['work-category'];
$address = $_POST['address']; 
$_SESSION["currentDate"]= date("Y");
$sql = "SELECT CNIC FROM workerregistration WHERE CNIC = '".$_POST['cnic']."'";
$sql1 = "SELECT userName FROM workerregistration WHERE userName = '".$_POST['username']."'";
$check = $conn->query($sql);
$check1 = $conn->query($sql1);
//Checking for duplicate CNIC value
  
  if($check->num_rows==1 || $check1->num_rows==1){
	   if($check->num_rows==1){
		   echo"<script>alert('An acount has already been made with this CNIC, please enter another one');</script>";
	   }
	    else if($check1->num_rows==1){
		   echo"<script>alert('An acount has already been made with this username, please enter another one');</script>";
	   }
	   }
	   
//Inserting values into database
	   else{   
$sql = "INSERT INTO workerregistration(fullName, phoneNum, email, password, CNIC, userType, workCategory, addresss, userName,currentDate) VALUES('$fullName','$phoneNum','$email','$password','$cnic','$userType','$workCategory','$address','$userName','".$_SESSION["currentDate"]."')";
//Displaying Success Message
if($conn->query($sql) == TRUE){
$regmsg = '<div class="account-msg">Account Successfully Created!</div>';
}
// UNAIZA CODE ....................111111111111/////////
$workers= "SELECT * from workerregistration where userName='$userName'";
$exeworkers = mysqli_query($conn, $workers);
$row2 = mysqli_fetch_array($exeworkers);
if($row2['userType']=="Worker"){
    $sqlcheck= "INSERT INTO worker_rating_previous(for_worker) Values ('$userName')";
    $exeyourquery = mysqli_query($conn, $sqlcheck);
    // header("Location:signin.php");
} 
else{
    header("Location:signin.php");
}//ends here ....................11111111111111111111/////////////




}
//Displaying Error Message
else{
$regmsg = '<div class="error-msg">Unable To Create Account</div>';
}
}
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Site Title-->
    <title>Sign Up | Hunarmand</title>
    <meta name="format-detection" content="telephone=no">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/tools.png" type="image/x-icon" />
    <link rel="shortcut icon" href="images/tools.png" type="image/x-icon" />

<!-- Stylesheets -->  
	<link rel="stylesheet" href="design.css" type="text/css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

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
                        <a class="nav-link" href="index.html#aboutus">About Us</a>
                    </li>
                    <li class="nav-item">
					
                        <a class="nav-link" href="index.html#service-heading">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#howitworks">How It Works</a>
                    </li>
                    
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signin.php">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sign Up</a>
                    </li>
                    </ul> 
                </form>
            </div>
        </nav>
    </div>
	
<div class="create-account">
<div class="child-div">
	<div class="create-account-heading">
	<h1>Create An Account</h1>
	</div>
	<div class="form-div">
 <form  action="" method="post" class="register-form">

    <label for="full-name">Full Name:</label><br/>
    <input type="text" id="full-name" placeholder="Ahmed Khan" name="fullname" maxlength="30" required>
	<br/>
	
	 <label for="pnumber">Phone Number:</label><br/>
    <input type="tel" id="pnumber" name="pnumber" placeholder="0300-7654231" required>
	<br/>

    <label for="email">Email Address: (Optional)</label><br/>
    <input type="email" id="email" name="email"  placeholder="ahmedkhan@gmail.com">
	<br/>
	
	 <label for="user-name">Users Name:</label><br/>
    <input type="text" id="user-name" placeholder="ahmed_khan" name="username" maxlength="30" required>
	<br/>	

	 <label for="password">Password:</label><br/>
    <input type="password" id="password" name="password" maxlength="30" required>
	<br/>
	
	 <label for="cnic">CNIC No:</label><br/>
    <input type="tel" pattern="^\d{5}-\d{7}-\d{1}$" id="cnic" name="cnic"  placeholder="42201-1234567-1" required><br/>

<label for="user-type" id="user-type-label" class="dropdown-label" style="padding-top:40px;">User Type:</label>
<select name="user-type" onchange="yesnoCheck(this);" id="user-type" required>
 <option value="Select" selected>Select</option>
  <option value="Worker">Worker</option>
  <option value="Buyer">Buyer</option>
</select>
<br/>

<div style="display: none; margin-top:20px;" id="work-category-div">
   <label for="work-category" id="category-label" class="dropdown-label">Working Category:</label>
<select name="work-category" class="working-category" id="work-category">
  <option value="Select" selected>Select</option>
  <option value="Electrician">Electrician</option>
  <option value="Plumber">Plumber</option>
  <option value="AC Technician">AC Technician</option>
  <option value="Car Mechanic">Car Mechanic</option>
  <option value="Carpenter">Carpenter</option>
  <option value="Painter">Painter</option>
  <option value="House Cleaning Service">House Cleaning Service</option>
  <option value="Mason">Mason</option>
</select>
</div>
<br/>

    <label for="address">Address:</label><br/>
    <textarea id="address" name="address" rows="3" cols="50" maxlength="60" placeholder="House No.14A, Block 9, Gulistan e Jauhar, Karachi" required></textarea>
	<br/>

<?php if(isset($regmsg)){
	echo $regmsg;
	} 
?>
     <!-- Flex Container -->
	 <div class="submit-button">
      <button type="submit" name="submit" onClick="validate()" id="signup-button-2">
         <div id="slide"></div>
       <a href="#">SIGN UP</a>
     </button>
	 </div>
  </form>
  </div>
 </div>
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
<script>
function validate(){
 var ddl = document.getElementById("user-type");
  var ddl1 = document.getElementById("work-category");
 var selectedValue = ddl.options[ddl.selectedIndex].value;
 var selectedValue1 = ddl1.options[ddl1.selectedIndex].value;
if (selectedValue == "Select"){ 
    alert("Please select a user type");
   }
  else if (selectedValue == "Worker" && selectedValue1 == "Select"){
	   alert("Please select a working category");
  }
}


</script>
<script>
function yesnoCheck(that) {
    if (that.value == "Worker") {
        document.getElementById("work-category-div").style.display = "inline-block";
    } else {
        document.getElementById("work-category-div").style.display = "none";
    }
}
</script>
    </body>
</html>
