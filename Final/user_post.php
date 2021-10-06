<?php
	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<script src="https://kit.fontawesome.com/766528b8cf.js" crossorigin="anonymous"></script>
	<!-- KUNG IPAPASS KO ANG NAME AND ID, PWEDENG IPOST KO PAPUNTA DITO, ILAGAY SA ISANG INPUT FIELD NA HIDDEN TAPOS ISEND YUN SA USERPOSTVALIDATE -->
	<title>REQUEST POST</title>
	<style>
		.top{
			font-family: century gothic;
			margin-top: 10px;
			margin-left:10px;
		}
		.hey{
			height:400px;
			width:40%;
			margin-left:5%;
			margin-top:20px;
			background-color: #1FB25F;
			padding: 10px; 
			border-radius: 10px;
		}
		.back{
			margin-left:5%;
		}
		h2{
			color:black;
		}
		label{
			color:black;
		}
		body{
			background-color: #3CD184;
		}
		h1{
			color: #800000;
		}
	</style>
</head>
<body>
	<br>
	<h1 class="top">USER POST REQUEST</h1>
	<div class="hey">
		<h2>What do you want to post?</h2>
		<form class="ff" action="userpostvalidate.php" method="post">
			<label>Name</label>
			<input type="text" name="one" class="form-control" value="<?php echo $_SESSION["name"] ?>" required><br>
			<label>Username</label>
			<input type="text" name="two" class="form-control" value="<?php echo $_SESSION["username"] ?>" readonly><br>
			<label>Job Title</label>
			<input type="text" name="three" class="form-control" required><br>
			<label>Job Description (include duration and date of start)</label>
			<input type="text" name="four" class="form-control" required><br>
			<label>Income (ex. P50/hr or P500 - for project completion)</label>
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


			<button type="submit">Post</button>
		</form>
	</div>
	<div>
		<a href="home.php"><button><i class="fas fa-home" style="font-size: 30px;"></i></button></a>
	</div>
</body>
</html>
