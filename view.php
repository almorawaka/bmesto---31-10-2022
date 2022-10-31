<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com/
*/
 
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>

<head>
<title>View</title>
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
<!-- <link rel="stylesheet" href="css/style.css" /> -->
    <!-- Required meta tags -->
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title> Job Card</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">  -->
</head>
<div class="card text-center">
  <div class="card-header">
<!-- <a class="btn btn-primary" target="blank" href="http://localhost/eldb/jobcardnew/fpdf/index.php" role="button">PRINT LAST JOB</a>
<a class="btn btn-primary" href="http://localhost/eldb/JobCardNew/spare_parts.php" role="button">ADD SPARE PARTS</a>
<a class="btn btn-primary" href="http://localhost/eldb/JobCardNew/table.php" role="button">VIEW ALL JOBS</a>
<a class="btn btn-primary" href="http://localhost/eldb/JobCardNew/elworkform.php" role="button">OPEN NEW JOB CARD</a> -->
  </div>
 <div class="card-body">
 <div class="card-header">
	  <div class="card-footer text-muted">
	  <!-- <p style= color:blue > DEPARTMENT OF HEALTH SERVICES </p>  -->
	  <p class="text-primary">DEPARTMENT OF HEALTH SERVICES</p>
	</div>
	</div>
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
<p><a href="index.php">Home</a> | <a href="insert.php">Insert New Record</a> | <a href="logout.php">Logout</a></p>
<!-- <h4>View Records</h4> -->
<!-- <table width="250%" border="1" style="border-collapse:collapse;"> -->
<div class="card-body">
<body>
<div class="container">
 <div class="row">
   <!-- <div class="col-sm-8"> -->
    <?php echo $deleteMsg??''; ?>
    <div class="row justify-content-center">
    <div class="col-auto">
    <div class="table-responsive">
      <table class="table table-bordered ">

<thead>
<tr><th><strong>Date</strong></th>
	<th><strong>Job No</strong></th>
	<th><strong>Hospital Name</strong></th>
	<th><strong>location</strong></th>
	<!-- <th><strong>Type</strong></th> -->
	<th><strong>Equipment Name</strong></th>
	<th><strong>Make</strong></th>
	<th><strong>Model</strong></th>
	<th><strong>Staff</strong></th>
	<th><strong>Spare Parts</strong></th>
	<th><strong>Edit Delete</strong></th>
	<th><strong>Print</strong></th> 
	<th><strong>Status</strong></th>  </tr>
</thead>
<tbody>
<p>Welcome You are Viewing records of <?php echo $_SESSION['username']; ?>!</p>
 <?php $currentUser = $_SESSION['username'];  ?> 

 <?php
$count=1;
$sel_query="Select * from job_card WHERE submittedby='$currentUser'  ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $row["trn_date"]; ?></td>
	<td align="center"><?php echo $row["id"]; ?></td>
	<td align="center"><?php echo $row["hospital_name"]; ?></td>
	<td align="center"><?php echo $row["location"]; ?></td>
	<!-- <td align="center"><?php echo $row["h_type"]; ?></td> -->
	<td align="center"><?php echo $row["equipment_name"]; ?></td>
	<td align="center"><?php echo $row["equipment_make"]; ?></td>
	<td align="center"><?php echo $row["equipment_model"]; ?></td>
	<td align="center"><?php echo $row["s_id"]; ?></td>
	<td align="center"> <a href="spare_parts.php?id=<?php echo $row["id"]; ?>"> ADD </a> <a href ="view_spare_parts.php?id=<?php echo $row["id"];?>"> VIEW </a></td>
	<td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>"> Edit </a> <a href="delete.php?id=<?php echo $row["id"]; ?>"> Delete </a> </td> </td>
	<td align="center"><a href="http://localhost/bmesto/fpdf/index.php?id=<?php echo $row["id"]; ?>"> PRINT </a></td>
	<td align="center"><a href="job_status.php?id=<?php echo $row["id"]; ?>"> STATUS </a> </td></tr>
	
<?php $count++; } ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>


<br /><br /><br /><br />

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
