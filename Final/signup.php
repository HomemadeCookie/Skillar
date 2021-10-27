<!DOCTYPE html>
<html>
<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
	<title>SIGN UP</title>
	<style>
		
		body{
			background-color:#F4F9F9;
		}
		.hi{
			position: absolute;
			width: 90%;
			background-color: #d8e3e7;
			height: 83%;
			left: 5%;
			margin-top: 3%;
			border-radius: 1%;
			background-image: url("https://hips.hearstapps.com/rbk.h-cdn.co/assets/16/31/4000x2667/gallery-1470366429-gettyimages-509581070.jpg?resize=980:*");
			background-size: cover;
			background-repeat: no-repeat;
		}
		.hey{
			position:absolute;
			height:85%;
			width:25%;
			right: 5%;
			margin-top:3%;
			background-color: #a9f1df;
			border-radius: 1%;
			box-shadow: 7px 7px 30px 2px inset #94ebcd;
		}
		.hey2{
			position:absolute;
			margin-left: 65%;
			width: 30%;
			margin-top:1%;
			padding: 1%;
			background-color: #a9f1df;
			border-radius: 1%;
			box-shadow: 2px 2px 5px 2px gray;
		}
		input{
			left: 20%;
		}
		
		label{
			margin-left: 5%;
			color:black;
			font-family: 'Bebas Neue', cursive;
		}
		.hometext{
			height: 20%;
			width: 100%;
			font-family: 'Bebas Neue', cursive;
			color:#810034;
			margin-top: 25%;
			font-size: 300%;
			text-align: center;
		}
		h2{
			margin-left: 5%;
			font-family: 'Bebas Neue', cursive;
			font-size: 200%;
			color: #810034;
			margin-top: 2%;
			margin-bottom: 2%;
		}
		h3{
			text-align: center;
			font-family: 'Ubuntu', sans-serif;
			font-size: 230%;
		}
		h4{
			text-align: center;
			font-family: 'Bebas Neue', cursive;
			font-size: 170%;
			color: #810034;
			margin-top: -1%;
		}
		h5{
			margin-left: 5%;
			font-family: 'Bebas Neue', cursive;
			font-size: 170%;
			color: #810034;
			margin-top: -10%;
			margin-bottom: 2%;			
		}
		h6{
			text-align: center;
			font-family: 'Bebas Neue', cursive;
			font-size: 95%;
			color: #810034;
			margin-left: 4%;
			margin-right: 4%;
			margin-top: 0%;
			margin-bottom: 2%;	
		}
		input{
			position: absolute;
			left: 30%;
			width: 50%;
			border-radius: 15px;

		}
		button{
			border-radius: 15px;
			margin-left: 35%;
			margin-top: 7%;
			font-family: 'Bebas Neue', cursive;
			font-size: 15px;
			padding: 0;
			width: 30%;
			text-align: center; 
		}
		#signup{
			font-size: 130%;
			padding: 2%;
			margin-top: 0;
		}
	</style>
</head>
<body>
<div class="hi">
	<div class="hey2">
		<h2>Register here</h2>
		<form class="ff" action="registration.php" method="post">
			<label>Full Name</label>
			<input type="text" name="name" class="form-control" required><br><br>
			<label>Username</label>
			<input type="text" name="user" class="form-control" required><br><br>
			<label>Batch</label>
			<input type="text" name="batch" class="form-control" required><br><br>
			<label>Password</label>
			<input type="password" name="password" class="form-control" required><br><br>
			<label>Skills; <br>separate by<br> comma</label>
			<input type="type" name="skills" class="form-control" required><br>

			<button type="submit">Sign up</button>
</form>
			<h6>Important: by signing up for an account, you agree to our <a href="agreement.php">terms of service</a></h6>
			<h4>____________</h4>
		<h5>Already Have an Account?</h5>
		<h6>Log in and join the community and help and get help from fellow scholars!</h6>
		
    <a href="start.php"><button>Log in</button></a>

		
		
	</div>
</div>



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
