<link href = "C:\xampp\htdocs\Hunarmand\services.css" rel="stylesheet" type="text/css">
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Site Title-->
    <title>Services | Hunarmand</title>
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
    <link href = "C:\xampp\htdocs\Hunarmand\services.css" rel="stylesheet" type="text/css">
</head>
<body>
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
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
					
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="allrequests.php">Requests</a>
                    </li>
                    
                    
                    <li class="nav-item">
                        <a class="nav-link" href="">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="request.php">Post a Request</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profilepage.php">My Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    
                    </ul> 
                </form>
            </div>
        </nav>


        <div id="mainDiv">
            <div class="child"></div> 
            <div class="services" id="service" style="margin-bottom: 30px;">
        <div id="service-heading" style="background-color: #d300ff;color:white; margin: 30px 0px 10px 0px; height: auto; width: 100%;">
            <h2 style="text-align: center; font-family: 'Montserrat', sans-serif; margin-top: 30px; background-color: #d300ff;">SERVICES</h2>
        </div>
        <div class="services8">
            <div class="box"  onclick="location.href='allservices.php?work-category=<?php echo 'Electricia';  ?>';">
                <img src="images/icons8-plug-64.png" style="height: 80px;">
                <h4>ELECTRICIAN</h4>
            </div>
            <!-- if you want to open a page linked to the service -->
            <div class="box" onclick="location.href='allservices.php?work-category=<?php echo 'Plumber';  ?>';" >  
                <img src="images/icons8-water-tap-96.png"  style="height: 100px;">
                <h4>PLUMBER</h4>
            </div>
            <div class="box" onclick="location.href='allservices.php?work-category=<?php echo 'ACtechnician';  ?>';">
                <img src="images/icons8-air-conditioner-96.png">
                <h4>AC TECHNICIAN</h4>
            </div>
            <div class="box" onclick="location.href='allservices.php?work-category=<?php echo 'CarMechanic';  ?>';">
                <img src="images/icons8-car-service-64.png" >
                <h4>CAR MECHANIC</h4>
            </div>
            <div class="box"  onclick="location.href='allservices.php?work-category=<?php echo 'Carpenter';  ?>';">
                <img src="images/icons8-saw-100.png">
                <h4>CARPENTER</h4>
            </div>
            <div class="box"  onclick="location.href='allservices.php?work-category=<?php echo 'Painter';  ?>';">
                <img src="images/icons8-paint-bucket-128.png" style="height: 100px;">
                <h4>PAINTER</h4>
                </div>
             <div class="box" onclick="location.href='allservices.php?work-category=<?php echo 'HouseCleaningService';  ?>';">
                <img src="images/icons8-housekeeping-200.png" style="height: 100px;" >
                <h5>HOUSE CLEANING SERVICE</h5>
             </div>
             <div class="box" onclick="location.href='allservices.php?work-category=<?php echo 'Education';  ?>';">
                <img src="https://www.saylaniwelfare.com/public_html/images/saylani/icons/education.png">
                <h4>EDUCATION</h4>
             </div>
          </div>
        </div>
    </div>
    


        </div>
    </body>
</html>
  
  