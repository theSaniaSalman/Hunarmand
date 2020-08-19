<?php
include("dbConnection.php");
session_start();
session_destroy();
header("Location:signin.php");
?>
