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
	<h2>Info</h2>
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
		echo "</p><br><h4>Bio</h4><input type='text' value='".$bio."' name='bio'>";
		echo "<input type='submit' value='update' name='submit'>";
		echo "</form><br><br><br>";
	?>
	<br>
	<h2>Posts</h2>

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
				echo "<div class='article-box'>
					<h3>".$row["JTitle"]."</h3>
					<p>".$row["JDescription"]."</p>
					<p>".$row["Income"]."</p>
					<p>".$row["PMethod"]."</p>
					<p>".$row["CNumber"]."</p>
					<p>".$row["SMedia"]."</p>
					<p>".$row["Date"]."</p><form action='post_status_validate.php' method='POST'>
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
				<input type='submit' name='submit' value='submit'></form></div>";
			}
		}

	?>

	<br><br><br>


	<a href="home.php">Go Back</a>
</body>
</html>
