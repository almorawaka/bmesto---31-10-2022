<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com/
*/
 
require('db.php');
include("auth.php");
$id=$_REQUEST['id'];
echo $id;
?> 
<?php
 
 // Connect to database
 // mysqli_connect("servername","username","password","database_name")
 $con = mysqli_connect("localhost","root","123","bmes");


 // The following code checks if the submit button is clicked
 // and inserts the data in the database accordingly
 if(isset($_POST['submit']))
 {
     // Store the job_id in a "j_id" variable
     $j_id = mysqli_real_escape_string($con,$_POST['job_id']);
     $h_name = mysqli_real_escape_string($con,$_POST['Hbook']);
     $s_no = mysqli_real_escape_string($con,$_POST['stock_no']);
     $s_dis = mysqli_real_escape_string($con,$_POST['description']);
     $qty = mysqli_real_escape_string($con,$_POST['qty']);
     $submittedby = $_SESSION['username'];  
     echo $submittedby	 ;
 
 // Creating an insert query using SQL syntax and storing it in a variable.
     $sql_insert = "INSERT INTO `spareparts`(`job_id`,`Hbook`,`stock_no`,`description`,`qty`,`submitby`)
         VALUES ('$j_id','$h_name','$s_no','$s_dis','$qty','$submittedby')";
        
       // The following code attempts to execute the SQL query
       // if the query executes with no errors
       // a javascript alert message is displayed
       // which says the data is inserted successfully
       if(mysqli_query($con,$sql_insert))

     {
         echo '<script>alert("Spare Parts added successfully")</script>';
     }
 }
?>

<!doctype html>
<html lang="en">
  
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title> Spare Parts</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0"> 
</head>





  <div class="card text-center">
    <!-- hedder navigation buttons in card-headder  -->
    <div class="card-header">
        <!-- <a class="btn btn-primary" target="blank" href="http://localhost/eldb/jobcardnew/fpdf/index.php" role="button">PRINT LAST JOB</a>
        <a class="btn btn-primary" href="http://localhost/eldb/JobCardNew/spare_parts.php" role="button">ADD SPARE PARTS</a>
        <a class="btn btn-primary" href="http://localhost/eldb/JobCardNew/table.php" role="button">VIEW ALL JOBS</a>
        <a class="btn btn-primary" href="http://localhost/eldb/JobCardNew/elworkform.php" role="button">OPEN NEW JOB CARD</a> -->
    </div>
      <div class="card-body">
        <!-- <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
      <body>
        <div id="main">
          <div id="header">
            <div id="logo">
              <div id="logo_text">
		  <!-- class="logo_colour", allows you to change the colour of the text -->
		  <h1><a href="home.php"> <span class="logo_colour"> </span></a></h1>
		  <h2>Division of Biomedical Engineering Services</h2>
		<!-- <h3><div>DEPARTMENT OF HEALTH SERVICES &nbsp; &nbsp; &nbsp; &nbsp; <span class="a">Job Number</span> <span class="a"></span> . </div> </h3> -->
		    
		  <h4>DEPARTMENT OF HEALTH SERVICES   </h4>

      <!-- from start -->
           <form method="POST" class="row g-3">
              <div class="col-md-6">
              <label class="form-label" >Job Card No:</label> 
              <input type="text" name="job_id" placeholder="Job Card No" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label class="form-label" >Hbook:</label>
              <label for="inputAddress" class="form-label"></label>
              <input type="text" class="form-control" name="Hbook" placeholder=" H 500" required>
            </div>
            <div class="col-sm-12">
              <input type="text" class="form-control" placeholder="Description" name="description" required>
            </div>
            <div class="col-md-6">
             <input type="text" class="form-control" placeholder="Stock No" name="stock_no" required></p>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="Quentity" name="qty" required></p>
            </div>
            <!-- <div class="col-md-12"> -->
              <input type="submit" value="ADD SPARES TO THIS JOB CARD" name="submit"> 
            <!-- </div> -->
          </form>
        <!-- End of the from  -->
    </br>

<!-- Card Footer -->
  </div>
      <div class="card-footer text-muted"> 
      <!-- add navigation buttons to footer -->
      <a class="btn btn-primary" href="dashboard.php" role="button">DASH BOARD</a>
		  <!-- <a class="btn btn-primary" target="blank" href="http://localhost/eldb/jobcardnew/fpdf/index.php" role="button">PRINT LAST JOB</a> -->
		  <a class="btn btn-primary" href="view.php" role="button">VIEW ALL JOBS</a>
		  <a class="btn btn-primary" href="insert.php" role="button">OPEN NEW JOB CARD</a>
      </div>
  </div>

</html>


