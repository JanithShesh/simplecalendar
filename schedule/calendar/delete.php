<?php
	$id=$_GET['id'];
	include('../db.php');
	$sql = mysqli_query($con,"delete from `events` where event_id='$id'");
	header('location:view.php');
?>