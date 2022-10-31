

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title> User Register</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0"> 
</head>
<div class="card text-center">
	  <div class="card-header">
	  <div class="card-footer text-muted">
		<a class="btn btn-primary" target="blank" href="http://localhost/eldb/jobcardnew/fpdf/index.php" role="button">PRINT LAST JOB</a>
		<a class="btn btn-primary" href="http://localhost/eldb/JobCardNew/spare_parts.php" role="button">ADD SPARE PARTS</a>
		<a class="btn btn-primary" href="http://localhost/eldb/JobCardNew/table.php" role="button">VIEW ALL JOBS</a>
		<a class="btn btn-primary" href="http://localhost/eldb/JobCardNew/elworkform.php" role="button">OPEN NEW JOB CARD</a>
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
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
				$phone_no= stripslashes($_REQUEST['phone_no']);
				$phone_no= mysqli_real_escape_string($con,$phone_no);
				$staff_id= stripslashes($_REQUEST['staff_id']);
				$staff_id= mysqli_real_escape_string($con,$staff_id);

		$trn_date = date("Y-m-d H:i:s");
        //$query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
		
		$query = "INSERT INTO `users`( `username`, `email`, `password`, `phone_no`,`staff_id`,`trn_date`) VALUES ('$username','$email','".md5($password)."','$phone_no','$staff_id','$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{}
?>


<div class="form">
<h3>New User Registration</h3>
<form method="POST" class="row g-3">
<!--<form name="registration" action="" method="post">-->
 <div class="col-12">
 <input type="text" name="username" placeholder="Username" class="form-control" required></div> <br /><br />
 <div class="col-12">
<input type="email" name="email" placeholder="Email" class="form-control" required />  </div> <br /><br />
 <div class="col-12">
<input type="password" name="password" placeholder="Password" class="form-control" required />  </div> <br /><br />
 <div class="col-12">
<input type="phone_no" name="phone_no" placeholder="phone_no" class="form-control" required />  </div> <br /><br />
 <div class="col-12">
<input type="staff_id" name="staff_id" placeholder="staff_id" class="form-control" required />  </div> <br /><br />
 <div class="col-12">
<input type="submit" name="submit" class="form-control" value="Register" />  </div> <br /><br />
</form>


<br /><br />

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
