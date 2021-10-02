<!DOCTYPE html>
<html>
<head>
	<title>POSTING TRY</title>
	<style>
		body{
			background-color:green;
		}
		.hey{
			position:absolute;
			height:200px;
			width:20%;
			margin-left:20%;
			margin-top:200px;
			background-color:blue;
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
			color:white;
		}
		label{
			color:white;
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

	<div class="hey2">
		<h2>Register here</h2>
		<form class="ff" action="registration.php" method="post">
			<label>Username</label>
			<input type="text" name="user" class="form-control" required>
			<label>Password</label>
			<input type="password" name="password" class="form-control" required>
			<button type="submit">Sign up</button>
		</form>
	</div>
</body>
</html>
