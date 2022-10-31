<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com/
*/
 
require('db.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from job_card where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
	<head>
	<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title> Job Card</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0"> 
	</head>
	
	<div class="card text-center">
	  <div class="card-header">
	  <div class="card-footer text-muted">
		<!-- <a class="btn btn-primary" target="blank" href="http://localhost/eldb/jobcardnew/fpdf/index.php" role="button">PRINT LAST JOB</a>
		<a class="btn btn-primary" href="http://localhost/eldb/JobCardNew/spare_parts.php" role="button">ADD SPARE PARTS</a>
		<a class="btn btn-primary" href="http://localhost/eldb/JobCardNew/table.php" role="button">VIEW ALL JOBS</a>
		<a class="btn btn-primary" href="http://localhost/eldb/JobCardNew/elworkform.php" role="button">OPEN NEW JOB CARD</a> -->
	</div>
 <div class="card-body">
		<body>
		<div id="main">
	<div id="header">
	  <div id="logo">
		<div id="logo_text">
		  <!-- class="logo_colour", allows you to change the colour of the text -->
		  <h1><a href="home.php"> <span class="logo_colour"> </span></a></h1>
		  <h2>Division of Biomedical Engineering Services</h2>
		<!-- <h3><div>DEPARTMENT OF HEALTH SERVICES &nbsp; &nbsp; &nbsp; &nbsp; <span class="a">Job Number</span> <span class="a"></span> . </div> </h3> -->
		    
		  <h4> DEPARTMENT OF HEALTH SERVICES  </h4>
		
        <div class="container overflow-hidden">
            <div class="row gx-5">
                <div class="col">
                <div class="p-3 border bg-light">
		
		<div class="form">
		<p><a href="dashboard.php">Dashboard</a> | <a href="insert.php">Insert New Record</a> | <a href="logout.php">Logout</a></p>
		<h4>Update Record</h4>
			<?php
			$status = "";
			if(isset($_POST['new']) && $_POST['new']==1)
			{
			$id=$_REQUEST['id'];
			$trn_date = date("Y-m-d H:i:s");
			$hospital_name =$_REQUEST['hospital_name'];
			$h_type =$_REQUEST['h_type'];
			$equipment_name=$_REQUEST['equipment_name'];
			$equipment_make=$_REQUEST['equipment_make'];
			$equipment_model=$_REQUEST['equipment_model'];
			$location=$_REQUEST['location'];
			$s_id=$_REQUEST['s_id'];
			
			$submittedby = $_SESSION["username"];
			$update="update job_card set trn_date='".$trn_date."', hospital_name='".$hospital_name."', h_type='".$h_type."',equipment_name='".$equipment_name."',equipment_make='".$equipment_make."',equipment_model='".$equipment_model."',location='".$location."',s_id='".$s_id."', submittedby='".$submittedby."' where id='".$id."'";
			mysqli_query($con, $update) or die(mysqli_error());
			$status = "Record Updated Successfully. </br></br><a href='view.php'>View Updated Record</a>";
			echo '<p style="color:#FF0000;">'.$status.'</p>';
			}else {
			?>
		<div>
		<form name="form" method="post" action=""> 
		<input type="hidden" name="new" value="1" />
		<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
		<p><input type="text" name="hospital_name" placeholder="Enter Name" required value="<?php echo $row['hospital_name'];?>" /></p>
		<p><input type="text" name="h_type" placeholder="Enter Age" required value="<?php echo $row['h_type'];?>" /></p>
		<p><input type="text" name="equipment_name" placeholder="Equipment Name" required value="<?php echo $row['equipment_name'];?>" /></p>
		<p><input type="text" name="equipment_make" placeholder="Equipment Make" required value="<?php echo $row['equipment_make'];?>" /></p>
		<p><input type="text" name="equipment_model" placeholder="Equipment Model" required value="<?php echo $row['equipment_model'];?>" /></p>
		<p><input type="text" name="location" placeholder="Location" required value="<?php echo $row['location'];?>" /></p>
		<p><input type="text" name="s_id" placeholder="Staff ID" required value="<?php echo $row['s_id'];?>" /></p>
		<p><input name="submit" type="submit" value="Update" /></p>
		</form>
		<?php } ?>

		<br /><br /><br /><br />
		
		</div>
		</div>
		</body>
		
		<div class="caard-text center">
	<div class="card-footer ">
	<div class="card-footer text-muted">
	
		<a class="btn btn-primary" href="dashboard.php" role="button">DASH BOARD</a>
		<!-- <a class="btn btn-primary" target="blank" href="http://localhost/eldb/jobcardnew/fpdf/index.php" role="button">PRINT LAST JOB</a> -->
		<a class="btn btn-primary" href="view.php" role="button">VIEW ALL JOBS</a>
		<a class="btn btn-primary" href="insert.php" role="button">OPEN NEW JOB CARD</a>
	</div>
	</div>
	</div>
</html>
