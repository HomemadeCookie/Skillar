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
	<script src="https://kit.fontawesome.com/766528b8cf.js" crossorigin="anonymous"></script>

</head>
<style>
	body{
		background-color:#C9F5D9;
		margin: 0px;
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
	.container{
		display: grid;
		grid-template-columns: 2fr 8fr;
		grid-template-rows: 15vh 85vh;
		grid-gap: 0px;
		grid-template-areas: "sidebar header" "sidebar content";
	}
	.one{
		grid-area: sidebar;
	}
	.two{
		grid-area: header;
		display: grid;
		grid-template-columns: 8.5fr 1.5fr;
		grid-gap: 0px;
	}
	.search_holder{
			background-color: #A9EED1;
			text-align: center;
	}
	.search_bar{
			height: 40px;
			font-size: 30px;
			width: 80%;
			border-radius: 10px;
			border: none;
			margin-top: 30px;
	}
	.search_button{
		font-size: 30px;
	}
	.logout_holder{
			background-color: #A9EED1;
	}
	.logout{
			margin: 30px 30px;
			background-color: #800000;
			border: none;
			color: white;
			border-radius: 10px;
			font-size: 35px;
	}
	#logo{
			font-size: 50px;
			text-align: center;
		}

	.three{
		background-color: red;
		grid-area: sidebar;

		/* grid */
		display: grid;
		grid-template-rows: 15% 25% 10% 25% 25%;
	}
	.logo_holder{
			background-color: black;
		}
		.prof_pic_holder{
			background-color: #8FDDDF;
		}
	
		.username_holder{
			background-color: #8FDDDF;
		}
		.username{
			margin-top: -5px;
			font-size: 35px;
			text-align: center;
		}
		.extra_space{
			background-color: #8FDDDF;
		}
		.post_holder{
			background-color: #8FDDDF;
			text-align: center;
		}
		.post_button{
			margin-left: 10px;
			margin-top: 10px;
			height: 100px;
			width: 100px;
			background-color: white;
			border-radius: 50%;
			text-align: center;
		}
		.fa-pen-bigger{
			font-size: 60px;
			/*manual vertical center*/
			margin-top: 15%;
		}
		.accpage{
			display: grid;
			grid-template-rows: 7fr 3fr;
			text-align: center;
		}

	.four{
		grid-area: content;
		display: grid;
		grid-template-rows: 1fr 9fr;

	}
	.four > div{
		padding: 5px;

	}
	.allpost{
		overflow-y: auto;
		background-color: #3CD184;
		display: grid;
		grid-template-rows: auto;
	}
	.article-box{
		border-style: solid;
		border-color:#3CD184; 
		margin-bottom: 10px;
		padding: 5px;
	}
	.article-box >p{
		font-family: calibri;	
		font-size: 15px;
	}
	.article-box >h3{
		color: #820000;
		font-family: century gothic;
		font-size: 20px;
	}
	.uname{
		color: yellow;
	}
	.postitem{
		margin-top: 2%;
		margin-left: 5%;
		margin-right: 5%;
		margin-bottom: 5%;
		background-color: #1FB25F;
	}
</style>
<body>
	<div class="container">
		<div class="one">
			
		</div>
		<div class="two">
			<!--SEARCH BAR-->
			<div class="search_holder">
				<form action="home.php" method="POST">
				<input type="text" name="search" placeholder="Search..." class="search_bar">
				<button type="submit" name="submit-search" style="background-color:#800000; "><i class="fas fa-search" style="font-size:30px;color: white; "></i></button>
				<!--<button type="submit" class="search_button"><i class="fas fa-search" name="submit-search"></i></button>-->
				</form>
			</div>
			<div class="logout_holder">
				<a href="logout.php"><button class="logout"><i class="fas fa-sign-out-alt logout_icon"></i></button></a>
			</div>
		</div>

		<div class="three">
			<div class="logo_holder">
			
				<h1 id="logo">Skillar</h1>
				
			</div>
			<div class="prof_pic_holder">
				<h1 style="text-align: center; font-size: 4vh;">Welcome <?php echo "@" . $_SESSION['username']; ?> !</h1>
				<form class="ff"  method="post">
			<div class="accpage">
					<div>
					<i class="fas fa-user" style="text-align: center; font-size:5vh;color: white"></i>
					</div>
					<div>
					<input type="submit" value="Profile" name="sub1">
					</div>
			</div>
			<?php
				if(isset($_POST["sub1"])){
				header("location:accountpage.php");
				}
			?>
			</form>
			</div>
			<div class="username_holder">
				<!--<h2 class="username">@username</h2>-->
				<h1 class="username"> <?php echo $name ?> </h1>
			</div>
			<div class="extra_space"></div>
			<div class="post_holder">
				<!--<div class="post_button"><i class="fas fa-pen fa-pen-bigger"></i></div>-->
				<!--POST BUTTON-->
				<a class="darken" href="user_post.php"><button><i class="fas fa-pen" style="font-size: 30px;"></i></button></a>

			</div>
		</div>
		<div class="four">
			<div style="text-align: center;" class="postdiv">
			<h1 style="color: black;"><i class="fas fa-globe" style="margin-right: 2px; "></i>Public Feed</h1>
			</div>
			<div class="allpost">
				<div class="postitem">
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
					<h3>Name: ".$row["Name"]."</h3>
					<p>Username: ".$row["Username"]."</p>
					<p>Job Title: ".$row["JTitle"]."</p>
					<p>Description: ".$row["JDescription"]."</p>
					<p>Rate: ".$row["Income"]."</p>
					<p>Method of Payment: ".$row["PMethod"]."</p>
					<p>Contact No.: ".$row["CNumber"]."</p>
					<p>Social Media: ".$row["SMedia"]."</p>
					<p>Date: ".$row["Date"]."</p>
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
					<h3>Name: ".$row["Name"]."</h3>
					<p>Username: ".$row["Username"]."</p>
					<p>Job Title: ".$row["JTitle"]."</p>
					<p>Description: ".$row["JDescription"]."</p>
					<p>Income: ".$row["Income"]."</p>
					<p>Method of Payment: ".$row["PMethod"]."</p>
					<p>Contact No.: ".$row["CNumber"]."</p>
					<p>Social Media: ".$row["SMedia"]."</p>
					<p>Date: ".$row["Date"]."</p>
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
