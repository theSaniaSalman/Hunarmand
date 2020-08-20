
<?php
include('dbConnection.php');
session_start();
if($_SESSION['user_login']){
	$user_login = $_SESSION['user_login'];
}
else
{
	echo "<script> location.href = 'login.php' </script>";
}
if(isset($_REQUEST['submit']))
{
	if(($_REQUEST['Date'] == "") || ($_REQUEST['Area'] == "") || ($_REQUEST['category'] == "") ||  ($_REQUEST['request'] == "")){
		 	   $regmsg = '<div class="error-msg">All fields are required';
	$msg = " <div class= ' alert alert-warning col-sm-6 ml-5 mt-2 '> Fill all Fields </div>";
}
else{
$rdate =$_REQUEST['Date'];
$rloc =	$_REQUEST['Area'];
$rcategory =	$_REQUEST['category'];
$rreq =	$_REQUEST['request'];

$sql = "INSERT INTO buyerreq(dateofwork, loc_, category, descript) VALUES ('$rdate', '$rloc', '$rcategory', '$rreq')";
if($conn->query($sql)== TRUE ){
	$msg = " <div class= 'alert alert-success col-sm-6 ml-5 mt-2 '> Request Posted </div>";
}
else 
{
	$msg = " <div class= 'alert alert-danger col-sm-6 ml-5 mt-2 '> Unable to Post </div>";
}

}
}

?>




















<!DOCTYPE html>
<html lang="en">
<head>
	<title>Post Request</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="style.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Post your Request
				</span>
				
	

				<div class="wrap-input100 validate-input" data-validate = "Enter date of work: e.g.23 June 2020 ">
					<span class="label-input100">Date of Work</span>
					<input class="input100" type="date" name="Date" placeholder="Enter date">
					<span class="focus-input100"></span>
				</div> 

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Location</span>
					<input class="input100" type="text" name="Area" placeholder="Valid for only Karachi">
					<span class="focus-input100"></span>
				</div>
		

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Category</span>
					<div>
						<select class="selection-2" name="category">
							<option>Select Category</option>
							<option>Electrician</option>
							<option>Plumber</option>
                            <option>Carpenter</option>
                            <option>Painter</option>
                            <option>Technician</option>
                            <option>Mechanic</option>
                            <option>House keeper</option>
                            <option>Tutor</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Your Request</span>
					<textarea class="input100" name="request" placeholder="Your request description here..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" type= "submit" name= "submit" >
							<span>
								Post
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
			<?php if(isset($regmsg)){
	echo $regmsg;
	} 
?>
		</div>
	</div>

	<!-- CODE FOR FOOTER (UNAIZA) -->


	<section id="aboutus" >

        <h3 >ABOUT US</h3>
        <p style="font-family: sans-serif !important;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil facere doloribus, pariatur, adipisci doloremque voluptatum aut perferendis vel libero facilis consequuntur sit quasi ducimus soluta necessitatibus veritatis quis sint ab?. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum quo harum similique saepe repudiandae molestias dolorum eum. Temporibus aperiam dolores quis sit. Modi sequi nobis saepe unde officia tempore placeat.</p>
    </section>
   
    <section id="bottom" class="main" style="background-color: black;">
        <div id="contact" class="container" style="width: 100%; background-color: black ; margin-bottom: 10px; padding-top: 20px; padding-bottom: 25px;">
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
                        
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <label>CELL: 92-311-1729526</label><br>
                        <label style="padding-left: 20px;"> 92-333-0099009</label>
                        <br />
                        
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <label style="font-size: 15px; font-family: sans-serif;">info@tiffin.com</label>
                    </div>
                </div>
                <div class="col-sm-24 col-md-12 col-lg-6">
                    <div class="footer3">
                        <h5 style="color: white; font-size: 25px; padding-bottom: 10px; font-weight: bold; font-family: sans-serif;">Connect With Us</h5>
                        <i class="fa fa-facebook-official" aria-hidden="true"></i>
                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="last">
        <p style="color:black; font-size: 15px; padding-left: 40px;padding-top: 10px; display: inline-block;" >Copyright © 2020 DIHARI (Private) Limited. All Rights Reserved. </p>
        <a href="#top">
          <i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i>
        </a>
    </div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
