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
			font-weight: bold;
			font-size: 150%;
		}
		body{
			background-color:#F4F9F9;	
		}
		.back{
			margin-top: 3%;
			text-align: center;
		}
		.button{
			border-radius: 15px;
			font-family: 'Bebas Neue', cursive;
			font-size: 15px;
			padding: 0;
			width: 7%;
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
			background-color: #a9f1df;
			border-radius: 10px;
			
		}
		.inactive{
			
			text-align: center;
			padding-top: 0.5%;
			padding-bottom: 1%;
		}
		.userdata{
			
			background-color:#d1fff4;
			margin-top: 2%;
			width: 95%;
			border-radius: 5px;
			padding-top: 1%;
			padding-bottom: 1%;
			padding-left: 2%;
		}
		i{
			font-size: 300%;
			margin-top: 10%;
		}
		h1{
			font-family: 'Ubuntu', sans-serif;
		}
		h2{
			font-family: 'Bebas Neue', cursive;
			font-weight: bolder;
			font-size: 250%;
		}
		p{
			font-family: 'Roboto', sans-serif;
		}
		.header{
			margin-top: 1%;
			border-radius: 5px;
			width: 90%;
			background-color: #ffeebf;
		}
		h3{
			font-weight: bolder;
			font-size: 200%;
		}
		h1{
			font-family: 'Ubuntu', sans-serif;
			font-size: 280%;
			font-weight: bold;
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
<div class="col-xs-11 center-block text-center banner">
	<h1>ACCOUNT PAGE</h1>
</div>
</div>

<br>
<div class="row content center-block ">
	<div class="navbar">
	<div class="col-xs-2 inactive">
	<a href="accountpage.php"><h2>Info</h2></a>
</div>
<div class="col-xs-1 active text-center">
	<h2>|</h2>
</div>
<div class="col-xs-2 active">
	<h2>Posts</h2>
</div>
</div>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "media";

		$conn = mysqli_connect($servername, $username, $password, $dbname);



		$uname = $_SESSION["username"];

		$sql = "SELECT * FROM final WHERE Username='$uname'";
		$res = mysqli_query($conn, $sql);
		$queryResults = mysqli_num_rows($res);

		if($queryResults > 0){
			while ($row = mysqli_fetch_assoc($res)) {
				echo "<div class='userdata center-block'>
					<h3>Job title: ".$row["JTitle"]."</h3>
					<p>Job description: ".$row["JDescription"]."</p>
					<p>Income: ".$row["Income"]."</p>
					<p>Payment method: ".$row["PMethod"]."</p>
					<p>Contanct number: ".$row["CNumber"]."</p>
					<p>Social media: ".$row["SMedia"]."</p>
					<p>Date: ".$row["Date"]."</p><form action='post_status_validate.php' method='POST'>
						<label>Is this done?</label>";
				$ID=$row["ID"];
				$q = "SELECT * FROM final WHERE ID='$ID'";
				$riz = mysqli_query($conn,$q);
				$ans = mysqli_fetch_assoc($riz);
				if($ans["Status"]==0){
					echo "<input type='checkbox' name='status' value='yes'>";
				}
				else{
					echo "<input type='checkbox' name='status' value='yes' checked>";
				}
				echo "<input type='hidden' name='id' value='".$ID."'>
				<input type='submit' name='submit' value='submit' class='button'></form></div>";
			}
		}

	?>


	<br><br>
</div>
</body>
</html>