

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
	<title>Update Succesful</title>
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
			border-radius: 5px;
			padding: 2%;
		}
		
		h1{
			font-family: 'Ubuntu', sans-serif;
			font-weight: bold;
		}
		h2{
			font-family: 'Roboto', sans-serif;
		}
		h3{
			font-family: 'Roboto', sans-serif;
			text-align: center;
			font-weight: bold;
		}
		body{
			background-color: #F4F9F9;
		}
		
		
		
	</style>
</head>
<body>
	<div class="row header center-block">
<div class="back col-xs-1 align-middle">
	<a href="accountpage_posts.php"><i class="fas fa-arrow-left fa-3x "></i></a>
</div>
<div class="col-xs-10 center-block banner">
	<h1 class="display-1">Post Status Updated Succesfully!</h1>
</div>
</div>
<br>
	<div class="userdata center-block">
<?php

	$conn = mysqli_connect("localhost", "root", "", "media");

	

	$ID = $_POST["id"];

	if(isset($_POST["status"]) && $_POST["status"]=="yes"){
		echo "<h3>This post is now hidden from the feed.</h3>";
		$upd = "UPDATE final SET Status=1 WHERE ID='$ID'";
	}
	else{
		echo "<h3>This post is visible in the feed</h3>";
		$upd = "UPDATE final SET Status=0 WHERE ID='$ID'";
	}

	
	mysqli_query($conn, $upd);

?></div>
</body>
</html>
