<?php

	$conn = mysqli_connect("localhost", "root", "", "media");

	echo $_POST["id"]."<br>";

	$ID = $_POST["id"];

	if(isset($_POST["status"]) && $_POST["status"]=="yes"){
		//echo "This post is now hidden from the feed";
		$upd = "UPDATE final SET Status=1 WHERE ID='$ID'";
	}
	else{
		echo "This post is visible in the feed";
		$upd = "UPDATE final SET Status=0 WHERE ID='$ID'";
	}
	mysqli_query($conn, $upd);

?>
<!DOCTYPE html>
<html>
<head>
	<script src="https://kit.fontawesome.com/766528b8cf.js" crossorigin="anonymous"></script>
	<title>Post Status</title>
	<style>
		h1{
			font-family: century gothic;
			font-size: 25px;
			color: black;
		}
		.content{
			background-color: #1FB25F;
			height: 200px;
			width: 40%;
			border-radius: 10px;
			padding: 10px;
		}
		body{
			color: white;
		}
	</style>
</head>
<body>
	<div class="content">
	<h1>This post is now hidden from the public feed.</h1>
	<br><br><br>
	<a href="accountpage.php"><button><i class="fas fa-user" style="font-size: 25px;"></i></button></a>
	</div>
</body>
</html>