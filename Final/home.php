<?php

session_start();
if(!isset($_SESSION['username'])){
	header('location:start.php');
}

?>
<?php
	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con, 'users');

	$hey=$_SESSION['username'];
	$query = "SELECT * FROM userdata WHERE Username = '$hey'";
	$res = mysqli_query($con,$query);
	$row = mysqli_fetch_array($res);

	$name=$row['Full_name'];

	$_SESSION["name"]=$name;

?>

<html>
<head>
	<title>Home page</title>
</head>
<style>
	body{
		background-color:blue;
	}
	h1{
		color:white;
	}
	.darken{
		color:white;
		font-family:century gothic;
		font-style:bold;
	}
	p{
		font-family:century gothic;
		color:white;
	}
</style>
<body>
	<a class="darken" href="logout.php">LOGOUT</a>

	<h1>Welcome <?php echo "@" . $_SESSION['username']; ?> !</h1>
	<h1> <?php echo $name ?> </h1>


	<!--ACCOUNT PFP BUTTON-->
	<form class="ff"  method="post">
		<input type="submit" value="ACCOUNT" name="sub1">

		<?php
			if(isset($_POST["sub1"])){
				header("location:accountpage.php");
			}
		?>
	</form>
	<br>


	<!--POST BUTTON-->
	<a class="darken" href="user_post.php">POST</a>
	<br><br><br>


	<!--SEARCH BAR-->
	<form action="home.php" method="POST">
		<input type="text" name="search" placeholder="Search...">
		<button type="submit" name="submit-search">Search</button>
	</form>


	<h1>ALL POSTS:</h1>
	<div>
	<?php

	/*
	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con, 'media');

	$query = "SELECT * FROM final WHERE Status=0";
	$res = mysqli_query($con,$query);


	while($row = mysqli_fetch_array($res)){
		echo "<p>" . $row['Name'] . "</p><p>" . $row['JTitle'] . "</p><p>" . $row['JDescription'] . "</p><p>" . $row['Income'] . "</p><p>" . $row['PMethod'] . "</p><p>" . $row['CNumber'] . "</p><p>" . $row['SMedia'] . "</p><p>" . $row['Likes'] . "</p><p>" . $row['Date'] . "</p>";

		echo "<br>";
	}

	//mysqli_close();
	*/
	$conn = mysqli_connect("localhost", "root", "", "media");
	if (isset($_POST["submit-search"])) {
			$search = mysqli_real_escape_string($conn, $_POST['search']);
			$sql = "SELECT * FROM final WHERE (Name LIKE '%$search%' OR Username LIKE '%$search%' OR JTitle LIKE '%$search%' OR JDescription LIKE '%$search%' OR Income LIKE '%$search%' OR PMethod LIKE '%$search%' OR CNumber LIKE '%$search%' OR SMedia LIKE '%$search%') AND Status=0";
			$res = mysqli_query($conn, $sql);
			$queryResult = mysqli_num_rows($res);

			if($queryResult > 0){
				while($row = mysqli_fetch_assoc($res)){
					echo "<div class='article-box'>
					<h3>".$row["Name"]."</h3>
					<p>".$row["Username"]."</p>
					<p>".$row["JTitle"]."</p>
					<p>".$row["JDescription"]."</p>
					<p>".$row["Income"]."</p>
					<p>".$row["PMethod"]."</p>
					<p>".$row["CNumber"]."</p>
					<p>".$row["SMedia"]."</p>
					<p>".$row["Date"]."</p>
					</div>";
				}
			} else {
				echo "There are no results matching your search";
			}
		} else {
			$sql = "SELECT * FROM final WHERE Status=0";
			$res = mysqli_query($conn, $sql);
			$queryResults = mysqli_num_rows($res);

			if($queryResults > 0){
				while ($row = mysqli_fetch_assoc($res)) {
					echo "<div class='article-box'>
					<h3>".$row["Name"]."</h3>
					<p>".$row["Username"]."</p>
					<p>".$row["JTitle"]."</p>
					<p>".$row["JDescription"]."</p>
					<p>".$row["Income"]."</p>
					<p>".$row["PMethod"]."</p>
					<p>".$row["CNumber"]."</p>
					<p>".$row["SMedia"]."</p>
					<p>".$row["Date"]."</p>
					</div>";
				}
			}
		}

	?>
	</div>
</body>
</html>
