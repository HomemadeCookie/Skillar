
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
	<style type="text/css">

		.header{
			margin-top: 1%;
			border-radius: 5px;
			width: 90%;
			background-color: #ffeebf;
		}
		.banner{
			display: flex;
 			justify-content: center;
  			align-items: center;
			height: 20%;	
		}
		.back{
			display: flex;
 			justify-content: center;
  			align-items: center;
			height: 20%;
		}
		.userdata{
			background-color:#d1fff4;
			width: 90%;
			height: 30%;
			border-radius: 5px;
			padding-left: 2%;
			padding-top: 2%;
		}
		
		h1{
			font-family: 'Ubuntu', sans-serif;
			margin-right: 5%;
			font-weight: bold;
		}
		h2{
			font-family: 'Roboto', sans-serif;
		}
		body{
			background-color: #F4F9F9;
		}
		
		h3{
			font-family: 'Roboto', sans-serif;
			font-weight: bolder;
		}
		
		
	</style>
	<title>Update Succesful</title>
</head>
<body>
	<div class="row header center-block">
<div class="col-xs-1 back">
	<a href="accountpage.php"><i class="fas fa-arrow-left fa-3x"></i></a>
</div>
<div class="col-xs-10 center-block banner">
	<h1>Account information succefully updated!</h1>
</div>
</div>
<br>
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

echo "<h2> Updated Skills Information:</h2><h3>";
		echo $_POST['skills'];
		echo "</h3><br>";
		echo "<h2>Updated Bio Information:</h2><h3>";
		echo $_POST['bio'];
		echo "</h3>";

?></div>
</body>
</html>