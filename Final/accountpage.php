<?php
	session_start();

?>

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


	<title>Account Page</title>
	<style>
		p{
			font-size:20px;
		}
		body{
			background-color:#F4F9F9;

		}
		input{
			border-radius: 10px;
		}
		
		.banner{
				
				padding-top: 2%;
				padding-bottom: 3%;
				text-align: center;
				
		}
		.active{
			background-color: #a9f1df;
			padding-top: 0.5%;
			padding-bottom: 1%;
		}
		.content{
			width: 90%;
			
			border-radius: 5px;
			background-color: #a9f1df;
			
		}
		.inactive{
			
			padding-top: 0.5%;
			padding-bottom: 1%;
		}
		.back{
			margin-top: 3%;
			text-align: center;
		}

		i{
			font-size: 300%;
			margin-top: 10%;
					}
		.userdata{
			
			background-color:#d1fff4;
			margin-top: 2%;
			width: 95%;
			border-radius: 5px;
			padding-left: 2%;
			padding-top: 2%;

		}
		h1{
			font-family: 'Ubuntu', sans-serif;
			font-size: 280%;
			font-weight: bold;
		}
		h2{
			font-family: 'Bebas Neue', cursive;
			font-weight: bolder;
			font-size: 250%;
		}
		p{
			font-family: 'Roboto', sans-serif;
		}
		.button{
			border-radius: 5px;
			font-family: 'Bebas Neue', cursive;
			font-size: 15px;
			padding: 0;
			width: 7%;
		}
		.header{
			margin-top: 1%;
			border-radius: 5px;
			width: 90%;
			background-color: #ffeebf;
		}
		h4{
			font-weight: bold;
			font-size: 150%;
		}
		.navbar{
			background-color: #ffeebf;
			border: 2px solid #F4F9F9;
			
		}
	</style>

</head>
<body>

	<div class="row header center-block">
<div class="back col-xs-1">
	<a href="home.php"><i class="fas fa-arrow-left"></i></a>
</div>
<div class="col-xs-11 center-block banner">
	<h1>ACCOUNT PAGE</h1>
</div>
</div>
<br>
<div class="row content center-block">
	<div class="navbar">
	<div class="col-xs-2 text-center active">
	<h2>Info</h2>
</div>
<div class="col-xs-1 active text-center">
	<h2>|</h2>
</div>
<div class="col-xs-2 inactive">
	<a href="accountpage_posts.php"><h2>Posts</h2></a>
</div>
</div>
<div class="userdata center-block">	
	<?php
		$con = mysqli_connect('localhost','root','');
		mysqli_select_db($con, 'users');

		echo "<h4>Username: </h4><p>";
		echo $_SESSION['username'];
		echo "</p>";

		$hey=$_SESSION['username'];
		$query = "SELECT * FROM userdata WHERE Username = '$hey'";
		$res = mysqli_query($con,$query);
		$row = mysqli_fetch_array($res);

		$name=$row['Full_name'];
		$skills=$row['Skills'];
		$bio=$row['Bio'];

		echo "<br><h4>Full Name: </h4><p>";
		echo $name;
		echo "</p><br><form action='update_account.php' method='POST'><h4>Skills: </h4><input type='text' value='".$skills."' name='skills'>";
		echo "</p><br><h4>Bio</h4><input type='text' value='".$bio."' name='bio'><br><br>";
		echo "<input type='submit' value='update' name='submit' class='button'>";
		echo "</form><br><br><br>";
	?>
		
	</div>

	<br>

</div>
	
</body>
</html>