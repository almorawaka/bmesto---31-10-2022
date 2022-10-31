<?php 
require('db.php');
include("auth.php");

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$bes_unit   = $_REQUEST["bes_unit"];
$trn_date = date("Y-m-d H:i:s");
$hospital_name =$_REQUEST['hospital_name'];
$h_type = $_REQUEST['h_type'];
$equipment_name = $_REQUEST['equipment_name'];
$equipment_make = $_REQUEST['equipment_make'];
$equipment_model = $_REQUEST['equipment_model'];
$location    = $_REQUEST['location'];
$s_id		 = $_REQUEST['s_id'];
$submittedby = $_SESSION["username"];


$ins_query="insert into job_card (`bes_unit`,`trn_date`,`hospital_name`,`h_type`,`equipment_name`,`equipment_make`,`equipment_model`,`location`,`s_id`,`submittedby`) values ('$bes_unit','$trn_date','$hospital_name','$h_type','$equipment_name','$equipment_make','$equipment_model','$location','$s_id','$submittedby')";
mysqli_query($con,$ins_query) or die(mysql_error());
$status = "New Job Card Added Successfully.</br></br><a href='view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<link rel="stylesheet" href="style.css" />
<!-- <link rel="stylesheet" href="css/style.css" /> -->
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
	  <!-- <p style= color:blue > DEPARTMENT OF HEALTH SERVICES </p>  -->
	  <p class="text-primary"><strong> DEPARTMENT OF HEALTH SERVICES</strong></p>
	</div>
 <div class="card-body">
<body>
<div id="main">
	<div id="header">
	  <div id="logo">
		<div id="logo_text">
		  <!-- class="logo_colour", allows you to change the colour of the text -->
		  <h1><a href="home.php"> <span class="logo_colour"> </span></a></h1>
		  <!-- <h2> <p style= color:blue > Division of Biomedical Engineering Services</p> </h2> -->
		  <h3><p class="text-dark">Division of Biomedical Engineering Services</p> </h3>
		<!-- <h3><div>DEPARTMENT OF HEALTH SERVICES &nbsp; &nbsp; &nbsp; &nbsp; <span class="a">Job Number</span> <span class="a"></span> . </div> </h3> -->
		    
		  <!-- <h4> DEPARTMENT OF HEALTH SERVICES  </h4> -->
		  <p></p>
		  <p></p>
		
		  <div class="container overflow-hidden">
            <div class="row gx-5">
                <div class="col">
                <div class="p-3 border bg-light">
                <?php	  
                //$con = mysqli_connect("localhost","root","123","eldb");
                $result = mysqli_query($con, "SELECT id FROM job_card ORDER BY id DESC LIMIT 1 ");
                if ($result->num_rows > 0) {
			    // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "Job Number:   EL / " . (str_pad($row["id"],4,0,STR_PAD_LEFT)+1). " / 22 / W     ";
                }
                } else {
                    echo "0 results";
		                }	?>
                </div>
                </div>

                <div class="col">
                <div class="p-3 border bg-light">

                <?php
                $result = mysqli_query($con, "SELECT trn_date FROM job_card ORDER BY trn_date DESC LIMIT 1 ");
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo " &nbsp;&nbsp;Date  : " . $row["trn_date"];
                    }
                } else {
                    echo "0 results";
                }	?>
                </div>
                </div>
            </div>
        </div>
		<p></p>
<!-- <div class="form"> -->

<!-- <h1>Insert New Record</h1> -->

<form name="form" method="post" action="" class="row g-3"> 

<input type="hidden" name="new" value="1" />
<div class="col-md-6">
<label class="form-label" >Institute Name</label>
<p><input type="text" name="hospital_name" placeholder="Enter Hospital Name" class="form-control" required /></p>
</div>

<!-- <p><input type="text" name="h_type" placeholder="Type" required /></p> -->
<div class="col-md-2">
                <label for="inputState" class="form-label">Type</label>    
                <select name="h_type" class="form-select">       
                    <option selected>Choose...</option>
                    <option> TH   </option>
                    <option> GH   </option>
                    <option> BH   </option>
                    <option> DGH   </option>
                </select>
</div>

<div class="col-md-2">  
<label class="form-label" >Location</label>
<p><input type="text" name="location" placeholder="Location" class="form-control" required /></p>
</div>

<div class="col-12">
<label for="inputAddress" class="form-label"></label>
<p><input type="text" name="equipment_name" placeholder="Equipment Name" class="form-control" required /></p>
</div>

<div class="col-sm-7">
<p><input type="text" name="equipment_make" placeholder="Equipment Make" class="form-control"  required /></p>
</div>

<div class="col-sm">
<p><input type="text" name="equipment_model" placeholder="Equipment Model" class="form-control" required /></p>
</div>
<div class="col-sm">
                <!-- <input type="text" class="form-control" placeholder="Serial No" aria-label="Zip"> -->
            </div>
        
            <div class="col-md-8">
            </div>

            <div class="col-md-2">
                <!-- <label for="inputState" class="form-label"></label>
                <select id="inputState" class="form-select">
                <option selected>Massage recived by</option>
                <option> TH            </option>
                <option> GH           </option>
                </select> -->
            </div>
<!-- <p><input type="text" name="s_id" placeholder="Staff_ID" required /></p> -->
<div class="col-md-2">
            <label for="inputState" class="form-label"> </label>
                <select name="s_id" class="form-select">
                    <option selected>staff</option>
                    <option> 882        </option>
                    <option> 902         </option>
                    <option> 597         </option>
                    <option> 602         </option>
                    <option> 655         </option>
                    <option> 807         </option>
                    <option> N/A         </option>
                </select>
               <!-- connect to DB  -->
 </div>
                
 <div class="col-md-2">
            <label for="inputState" class="form-label"> </label>
                <select name="bes_unit" class="form-select">
                    <option selected>MN</option>
                    <option>  XR     </option>
                    <option>  LB         </option>
                    <option> N/A         </option>
                </select>
               <!-- connect to DB  -->
 </div>

<p><input name= "<strong> Submit </strong>" type="submit" class="form-control" value="Submit" /></p>
</form>

<h4 style="color:#00CC00;"><?php echo $status; ?></h4>

<br /><br /><br /><br />

</div>
</div>
</body>
<div class="caard-text center">
	<div class="card-footer ">
	<div class="card-footer text-muted">
	<!-- <p><a href="dashboard.php">Dashboard</a> | <a href="view.php">View Records</a> | <a href="logout.php">Logout</a></p> -->
	
         <a class="btn btn-primary" href="dashboard.php" role="button">DASH BOARD</a>
		<!-- <a class="btn btn-primary" target="blank" href="http://localhost/eldb/jobcardnew/fpdf/index.php" role="button">PRINT LAST JOB</a> -->
		<a class="btn btn-primary" href="view.php" role="button">VIEW ALL JOBS</a>
		<a class="btn btn-primary" href="insert.php" role="button">OPEN NEW JOB CARD</a>
        <a class="btn btn-primary" target="blank" href="http://localhost/eldb/jobcardnew/fpdf/index.php" role="button">PRINT LAST JOB</a>
	</div>
	</div>
	</div>
</html>
