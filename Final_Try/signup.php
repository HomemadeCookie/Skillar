<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<style>
		.hey{
			position:absolute;
			height:200px;
			width:20%;
			margin-left:5%;
			margin-top:50px;
		}
		h2{
			color:black;
			font-size:30px;
		}
		label{
			font-size:20px;
			color:black;
		}
	</style>
</head>
<body>

	<div class="hey">
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
			<label>Skills. What are your skills? separate by comma (ex. digital design, poetry)</label>
			<input type="type" name="skills" class="form-control" required><br>

			<button type="submit">Sign up</button>
		</form>
	</div>

	<a href="start.php">LOG IN</a>

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
