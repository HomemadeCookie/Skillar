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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
	<title>REQUEST POST</title>
	<script src="https://kit.fontawesome.com/766528b8cf.js" crossorigin="anonymous"></script>
		<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">

</head>
<style>
	.logo{
		background-color: black;
		height: 15vh;
	}
	.search{
		background-color: #ffeebf;
		height: 15vh;
	}
	.search_bar{
		height: 40px;
		font-size: 30px;
		width: 80%;
		border-radius: 10px;
		border: none;
		margin-top: 30px;
		margin-left: 7vw;
	}
	.logout_holder{
			background-color: #ffeebf;
			margin-left: 6vw;
	}
	.instruction_holder{
			background-color: #ffeebf;
	}
	.logout{
			margin:30px;
			background-color: #800000;
			border: none;
			color: white;
			border-radius: 10px;
			font-size: 35px;
	}
	.instruction{
			margin:30px;
			background-color: white;
			border: none;
			color: #800000;
			border-radius: 10px;
			font-size: 35px;
	}
	.account{
		background-color: #8FDDDF;
		height: 85vh;
	}
	.user_holder{
		text-align: center;
		margin-top: 1vh;
		margin-bottom: 1vh;
		font-size: 8vh;
	}
	.username{
		text-align: center;
	}
	.userpost{
		margin-top: 30vh;
		text-align: center;
	}
	.post{
		background-color: #d1fff4;
		height: 85vh;
		overflow-y: auto;
	}
	.post_item{
		margin-top: 0%;
		margin-left: 3%;
		margin-right: 3%;
		margin-bottom: 5%;
		padding: 5%;
	}
	.article-box{
		background-color: #a9f1df;
		margin-bottom: 5%;
		padding: 3%;
	}
</style>

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-2 logo">
				<br>
				<h1 style="color: white; text-align: center; font-family: 'Ubuntu', sans-serif;">Skillar</h1>

			</div>
			<div class="col-xs-10 search">
				<div class="row">
					<div class="col-xs-9">
						<form action="home.php" method="POST">
						<input type="text" name="search" placeholder="Search..." class="search_bar">
						<button type="submit" name="submit-search" style="background-color:#800000; "><i class="fas fa-search" style="font-size:30px;color: white; "></i></button>
						</form>
					</div>
					<div class="col-xs-1 logout_holder">
						<a href="instructions.php"><i class="fas fa-question-circle instruction"></i></a>
					</div>
					<div class="col-xs-1 instruction_holder">
						<a href="logout.php"><button class="logout"><i class="fas fa-sign-out-alt logout_icon"></i></button></a>
					</div>
					
				</div>
				
			</div>

		</div>
		<div class="row">
			<div class="col-xs-2 account">
				<h1 class="username"> <?php echo $name ?> </h1>
				<div class="user_holder">
					<i class="fas fa-user" style="text-align: center;color: white"></i>
				</div>
				<form class="ff"  method="post">
				<div style="text-align: center;">
					<input type="submit" value="Profile" name="sub1">
					<?php
						if(isset($_POST["sub1"])){
						header("location:accountpage.php");
						}
						?>
				</div>
				</form>		
				<h1 style="text-align: center; font-size: 2vh;"><?php echo "@" . $_SESSION['username']; ?></h1>
				<!--POST BUTTON-->
				<div class="userpost">
				<a class="darken" href="user_post.php"><button><i class="fas fa-pen" style="font-size: 30px;"></i></button></a>

				<br><br>
				<!--INSTRUCIONS-->
				
				</div>
			</div>
			<div class="col-xs-10 post">
				<div class="post_item">
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
					<h3><b>".$row["Name"]."</b></h3>
					<p>@".$row["Username"]."</p>
					<div class='row'>
					<div class='col-xs-5'>
					<p><b style='color:#800000'>Job Title:</b> ".$row["JTitle"]."</p>
					</div>
					<div class='col-xs-5'>
					<p><b style='color:#800000'>Income:</b> ".$row["Income"]."(".$row["PMethod"].")</p>
					</div>
					</div>
					<br>
					<p><b style='color:#800000'>Description: </b> ".$row["JDescription"]."</p>
					
					<br>
					<p><b style='color:#800000'>Contact me at:</b></p>
					<div class='row'>
					<div class='col-xs-5'>
					<p>".$row["CNumber"]."</p>
					</div>
					<div class='col-xs-5'>
					<p>".$row["SMedia"]."</p>
					</div>
					</div>
					<br>
					<p>".$row["Date"]."</p>
					<br>
					</div>";
				}
			} else {
				echo "There are no results matching your search.";
			}
		} else {
			$sql = "SELECT * FROM final WHERE Status=0";
			$res = mysqli_query($conn, $sql);
			$queryResults = mysqli_num_rows($res);

			if($queryResults > 0){
				while ($row = mysqli_fetch_assoc($res)) {
					echo "<div class='article-box'>
					<h3><b>".$row["Name"]."</b></h3>
					<p>@".$row["Username"]."</p>
					<div class='row'>
					<div class='col-xs-5'>
					<p><b style='color:#800000;'>Job Title:</b> ".$row["JTitle"]."</p>
					</div>
					<div class='col-xs-5'>
					<p><b style='color:#800000'>Income:</b> ".$row["Income"]."(".$row["PMethod"].")</p>
					</div>
					</div>
					<br>
					<p><b style='color:#800000'>Description: </b> ".$row["JDescription"]."</p>
					
					<br>
					<p><b style='color:#800000'>Contact me at:</b></p>
					<div class='row'>
					<div class='col-xs-5'>
					<p>".$row["CNumber"]."</p>
					</div>
					<div class='col-xs-5'>
					<p>".$row["SMedia"]."</p>
					</div>
					</div>
					<br>
					<p>".$row["Date"]."</p>
					<br>
					</div>";
				}
			}
		}

	?>
					
				</div>
			</div>


		</div>
		
	</div>
</body>
</html>
