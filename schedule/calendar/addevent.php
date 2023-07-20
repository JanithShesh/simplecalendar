<?php
include('../db.php');
include("../auth_session.php");

$username = $_SESSION['username'];
$title = $_POST['title'];
$startDate = $_POST['startDate'];
$days = $_POST['hw_days'];
$color = $_POST['color'];


$sql = mysqli_query($con, "insert into `events` (username,title,startDate,hw_days,color) values ('$username','$title','$startDate','$days','$color')");

if ($sql) {
    // Database operation successful, display a pop-up message
    echo "<script>alert('Database operation successful!');</script>";
  }
  
header('location:view.php');

?>