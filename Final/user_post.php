<?php
	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<script src="https://kit.fontawesome.com/766528b8cf.js" crossorigin="anonymous"></script>
	<!-- KUNG IPAPASS KO ANG NAME AND ID, PWEDENG IPOST KO PAPUNTA DITO, ILAGAY SA ISANG INPUT FIELD NA HIDDEN TAPOS ISEND YUN SA USERPOSTVALIDATE -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
	<title>REQUEST POST</title>
	<style>
		.top{
			font-family: century gothic;
			margin-top: 10px;
			margin-left:10px;
		}
		.hey{
			width:40%;
			
			margin-top:20px;
			background-color: #a9f1df;
			padding: 10px; 
			border-radius: 10px;
		}
		.back{
			margin-left:5%;
		}
		.header{
			width: 40%;
			background-color: #ffeebf;
			padding-top: 1%;
			padding-bottom: 1%;
			border-radius: 5px;
		}
		h2{
			color:black;
		}
		label{
			color:black;
		}
		body{
			background-color:#d1fff4;
		}
		h1{
			color: #800000;
		}
	</style>
</head>
<body>
	<br>
	<div class="container-fluid">
	<div class="row header text-center center-block">
		<div class="col-xs-1">
			<a href="home.php"><button><i class="fas fa-home" style="font-size: 30px;"></i></button></a>
		</div>
		<div class="col-xs-11">
			<h1 class="top">USER POST REQUEST</h1>
		</div>
	</div>
	<div class="hey center-block">
		<h2>What do you want to post?</h2>
		<form class="ff" action="userpostvalidate.php" method="post">
			<label>Name</label>
			<input type="text" name="one" class="form-control" value="<?php echo $_SESSION["name"] ?>" required><br>
			<label>Username</label>
			<input type="text" name="two" class="form-control" value="<?php echo $_SESSION["username"] ?>" readonly><br>
			<label>Project Title</label>
			<input type="text" name="three" class="form-control" required><br>
			<label>Project Description (include duration and date of start)</label>
			<input type="text" name="four" class="form-control" required><br>
			<label>Rate (ex. P50/hr or P500 - for project completion)</label>
			<input type="text" name="five" class="form-control" required><br>
			<label>Payment method (gcash, paypal, etc.)</label>
			<input type="text" name="six" class="form-control" required><br>
			<label>Contact number</label>
			<input type="text" name="seven" class="form-control" required><br>
			<label>Social Media</label>
			<input type="text" name="eight" class="form-control" required><br>
			<label>Date</label>
			<input type="date" name="nine" class="form-control" required><br>
			<!--ADD ALSO NUMBER OF LIKES, ID NUMBER-->


			<button type="submit" class="btn btn-primary btn-rounded center-block">Post</button>
		</form>
	</div>
</body>
</html>