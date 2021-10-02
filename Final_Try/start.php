<!DOCTYPE html>
<html>
<head>
	<title>LOG IN</title>
	<style>
		.hey{
			position:absolute;
			height:200px;
			width:20%;
			margin-left:20%;
			margin-top:200px;
		}
		.hey2{
			position:absolute;
			height:200px;
			width:20%;
			margin-left:50%;
			margin-top:200px;
			background-color:blue;
		}
		h2{
			color:black;
		}
		label{
			color:black;
		}
	</style>
</head>
<body>

	<div class="hey">
		<h2>Login here</h2>
		<form class="ff" action="validation.php" method="post">
			<label>Username</label>
			<input type="text" name="user" class="form-control" required>
			<label>Password</label>
			<input type="password" name="password" class="form-control" required>
			<button type="submit">Log in</button>
		</form>
	</div>

	<a href="signup.php">SIGN UP</a>

<!--
	<div class="hey2">
		<h2>Register here</h2>
		<form class="ff" action="registration.php" method="post">
			<label>Full Name</label>
			<input type="text" name="name" class="form-control" required>
			<label>Username</label>
			<input type="text" name="user" class="form-control" required>
			<label>Batch</label>
			<input type="text" name="batch" class="form-control" required>
			<label>Password</label>
			<input type="password" name="password" class="form-control" required>

			<button type="submit">Sign up</button>
		</form>
	</div>
-->

	<!--
	<?php
	/*
		$sn="localhost";
		$un="root";
		$pw="";
		$db="hey";
		$conn=mysqli_connect($sn,$un,$pw);
		mysqli_select_db($conn,$db);
		//$new=$_POST['add'];
		//if(isset($new)){
			$query="INSERT INTO 'hey'('name','age','gender','nickname') VALUES('m','6','d','g')";
			mysqli_query($conn,$query);
		//}
		$conn->close();
		*/
	?>
	-->
</body>
</html>
