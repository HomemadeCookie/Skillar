<!DOCTYPE html>
<html>
<head>
	<script src="https://kit.fontawesome.com/766528b8cf.js" crossorigin="anonymous"></script>
	<title>ADMIN POST</title>
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
			padding: 15px; 
			border-radius: 10px;
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
	<?php
	$con = mysqli_connect('localhost','root','');

	mysqli_select_db($con, 'media');

	?>
	<br>
	<h1 class="top">ADMIN POST</h1>
	<div class="hey">
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


			<button type="submit">Post</button>
		</form>
	</div>
	<div>
		<a href="queries.php"><button style="font-size: 30px;"><i class="fas fa-arrow-left"></i></button></a>
	</div>
</body>
</html>
