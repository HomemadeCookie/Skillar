<?php

	session_start();
	$conn = mysqli_connect("localhost", "root", "", "users");

	echo $_POST['skills'];
	echo $_POST['bio'];

	$uname = $_SESSION["username"];
	$skills = $_POST['skills'];
	$bio = $_POST['bio'];

	if(isset($_POST["submit"])){
		echo "Account info updated!!!";
		$upd = "UPDATE userdata SET Skills='$skills', Bio='$bio' WHERE Username='$uname'";
		mysqli_query($conn, $upd);
	}

	echo "<a href='accountpage.php'>Go Back</a>";
?>