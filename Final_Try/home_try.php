<?php

session_start();
if(!isset($_SESSION['username'])){
	header('location:start_try.php');
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
	<a class="darken" href="logout_try.php">LOGOUT</a>

	<h1>Welcome <?php echo "@" . $_SESSION['username']; ?> !</h1>
	<h1> <?php echo $name ?> </h1>

	<form class="ff"  method="post">
		<input type="submit" value="" name="sub1">

		<?php
			if(isset($_POST["sub1"])){
				header("location:accountpage_try.php");
			}
		?>
	</form>
	<br>

	<a class="darken" href="user_post_try.php">POST</a>

	<h1>ALL POSTS</h1>

	<?php


	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con, 'media');

	$query = "SELECT * FROM final";
	$res = mysqli_query($con,$query);


	while($row = mysqli_fetch_array($res)){
		echo "<p>" . $row['Name'] . "</p><p>" . $row['JTitle'] . "</p><p>" . $row['JDescription'] . "</p><p>" . $row['Income'] . "</p><p>" . $row['PMethod'] . "</p><p>" . $row['CNumber'] . "</p><p>" . $row['SMedia'] . "</p><p>" . $row['Likes'] . "</p>";

		echo "<br>";
	}

	//mysqli_close();

	?>

</body>
</html>