<?php
	session_start();

?>

<html>
<head>
	<title>Account Page</title>
	<style>
		p{
			font-size:20px;
		}
	</style>
</head>
<body>
	<h1>ACCOUNT PAGE</h1>
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

		echo "<br><h4>Full Name: </h4><p>";
		echo $name;
		echo "</p><br><h4>Skills: </h4><p>";
		echo $skills;
		echo "</p><br><br><br>";
	?>
	<a href="home_try.php">Go Back</a>
</body>
</html>