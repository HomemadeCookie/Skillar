<!DOCTYPE html>
<html>
<head>
	<script src="https://kit.fontawesome.com/766528b8cf.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
	<title>ADMIN POST</title>
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
			padding: 15px; 
			border-radius: 5px;
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
	<?php
	$con = mysqli_connect('localhost','root','');

	mysqli_select_db($con, 'media');

	?>
	<br>
	<div class="container-fluid">
		<div class="row header center-block text-center">
			<div class="col-xs-1">
				<a href="queries.php"><button style="font-size: 30px;"><i class="fas fa-arrow-left"></i></button></a>
			</div>
			<div class="col-xs-11">
				<h1 class="top">ADMIN POST</h1>
			</div>
		</div>
	<div class="hey center-block">
		<h2>What do you wanna post, admin?</h2>
		<form class="ff" action="adminpostvalidate.php" method="post">
			<label>Name</label>
			<input type="text" name="one" class="form-control" value="<?php echo $_POST["Name"] ?>" required><br>
			<label>Username</label>
			<input type="text" name="two" class="form-control" value="<?php echo $_POST["Username"] ?>" required><br>
			<label>Job Title</label>
			<input type="text" name="three" class="form-control" value="<?php echo $_POST["Job_Title"] ?>" required><br>
			<label>Job Description (include duration and date of start)</label>
			<input type="text" name="four" class="form-control" value="<?php echo $_POST["Job_description"] ?>" required><br>
			<label>Income (ex. P50/hr or P500 - for project completion)</label>
			<input type="text" name="five" class="form-control" value="<?php echo $_POST["Income"] ?>" required><br>
			<label>Payment method (gcash, paypal, etc.)</label>
			<input type="text" name="six" class="form-control" value="<?php echo $_POST["Payment_method"] ?>" required><br>
			<label>Contact number</label>
			<input type="text" name="seven" class="form-control" value="<?php echo $_POST["Contact_num"] ?>" required><br>
			<label>Social Media</label>
			<input type="text" name="eight" class="form-control" value="<?php echo $_POST["Social_media"] ?>" required><br>
			<label>Date</label>
			<input type="date" name="nine" class="form-control" required><br>
			<!--ADD ALSO NUMBER OF LIKES, ID NUMBER-->


			<button type="submit" class="btn btn-primary btn-rounded center-block">Post</button>
		</form>
	</div>

		
	
	</div>
</body>
</html>