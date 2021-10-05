
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

	<style type="text/css">
		body{
			background-color: #F4F9F9;
		}
		.userdata{
			background-color: #a9f1df;
			
			width: 95%;
			border-radius: 5px;
		}
		h1{
			text-align: center; 
			
		}
		p{
			font-size: 200%;
		}
		.back{
			margin-top: 1%;
			font-size: 300%;
		}
	</style>
	<title>Update Succesful</title>
</head>
<body>
	<div class="row">
<div class="back col-xs-1">
	<a href="accountpage.php"><i class="fas fa-arrow-left"></i></a>
</div>
<div class="col-xs-11 center-block">
	<h1>Account Information Updated Succesfully.</h1></div>
</div>
	<div class="userdata center-block">
	<?php

	session_start();
	$conn = mysqli_connect("localhost", "root", "", "users");

	$uname = $_SESSION["username"];
	$skills = $_POST['skills'];
	$bio = $_POST['bio'];

	if(isset($_POST["submit"])){
		
		$upd = "UPDATE userdata SET Skills='$skills', Bio='$bio' WHERE Username='$uname'";
		mysqli_query($conn, $upd);

		
	}

echo "Updated Skills Information:<p>";
		echo $_POST['skills'];
		echo "</p>";
		echo "Updated Bio Information:<p>";
		echo $_POST['bio'];
		echo "</p>";

?></div>
</body>
</html>