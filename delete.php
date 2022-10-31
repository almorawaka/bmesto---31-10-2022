<?php
require('db.php');
$id=$_REQUEST['id'];
//$query = "DELETE FROM job_card WHERE id=$id"; 
$query = "DELETE FROM `job_card` WHERE `job_card`.`id` = $id";
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: view.php"); 
?>