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
		<script src="https://kit.fontawesome.com/766528b8cf.js" crossorigin="anonymous"></script>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,300;0,400;1,800&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Heebo&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Dongle&family=Heebo&display=swap" rel="stylesheet">
</head>
<style>
	/* top nav */
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
		width: 70%;
		border-radius: 10px;
		border: none;
		margin-top: 3.3vh;
		margin-left: 3vh;

	}
	.instruction_holder{
			background-color: #ffeebf;
			text-align: right;
	}
	.logout_holder{
			background-color: #ffeebf;
			margin-left: 0vw;
	}
	.logout{
			margin:30px;
			background-color: #800000;
			border: none;
			color: #ffeebf;
			border-radius: 30%;
			font-size: 35px;
	}
	.logout:hover{
			color: white;

	}
	.instruction{
			margin:30px;
			background-color: white;
			border: none;
			color: #800000;
			border-radius: 10px;
			font-size: 35px;
	}
	.side-btn{
		font-size: 25px;
	}
	/* side nav */
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
	.prof_btn{
		text-decoration-style: none;
		font-family: 'Red Hat Mono', monospace; 
		color: white;
	}
	.prof_btn >a:hover{
		text-decoration-style: none;
	}
	.username{
		text-align: center;
		font-family: 'Fira Sans', sans-serif;
	}
	.userpost{
		margin-top: 30vh;
		text-align: center;
	}
	/*  */
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
		box-shadow: 8px 8px 5px 3px gray;
	}
	.article-box >h3{
		font-family: 'Heebo', sans-serif;
	}
	@media screen and (max-width: 1024px) {
    .account {
        display: none !important;
   	 }
	}
	@media screen and (max-width: 1024px) {
    .logo {
        display: none !important;
   	 }
	}
	@media screen and (max-width: 1024px) {
    .search {
        width: 100%;
        height: 10%;
   	 }
	}
	@media screen and (max-width: 1024px) {
    .search_bar {
        margin-left: 5vw;
   	 }
	}
	@media screen and (max-width: 1024px) {
    .search_btn {
        height: 10%;
   	 }
	}
	@media screen and (max-width: 1024px) {
    .post {
        width: 100%;
   	 }
	}
	@media screen and (max-width: 1024px) {
    .logout {
        display: none;
   	 }
	}
	.sidenav {
  		height: 100%;
  		width: 0;
  		position: fixed;
  		z-index: 1;
  		top: 0;
  		left: 0;
  		background-color: #111;
  		overflow-x: hidden;
  		transition: 0.5s;
  		padding-top: 60px;
  		z-index: 100;
	}
	.sidenav span{
		margin-left: 2vw;
	}
	.sidenav a {
 		padding: 8px 8px 8px 32px;
 		text-decoration: none;
 		font-size: 25px;
 		color: #818181;
 		display: block;
  		transition: 0.3s;

	}
	.sidenav a:hover {
 		color: #f1f1f1;
	}

	.sidenav .closebtn {
 		position: absolute;
  		top: 0;
  		right: 25px;
  		font-size: 36px;
  		margin-left: 50px;
	}

	#main {
 		transition: margin-left .5s;
 		padding: 16px;
	}

	@media screen and (max-height: 450px) {
   	 	.sidenav {padding-top: 15px;}
  		.sidenav a {font-size: 18px;}
	}
	@media screen and (max-width : 1920px){
 		.navbut{
 		 	visibility: hidden;
  		}
  		.sidenav {
  			visibility: hidden;
  		}
	}	
	@media screen and (max-width : 1024px){
 		.navbut{
 		 	visibility: visible;
  		}
  		.sidenav{
  			visibility: visible;
  		}
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
					<div class="col-xs-1">
							<div id="main" class="navbut">
  								<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
							</div>
					</div>
					<div class="col-xs-8 search_bar">
						<div id="mySidenav" class="sidenav">
  							<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  							<a href="accountpage.php"><i class="fas fa-user"></i><span>Profile</span></a>
  							<a href="user_post.php"><i class="fas fa-pen"></i><span>Post</span></a>
  							<a href="instructions.php"><i class="fas fa-question"></i><span>Help</span></a>
  							<a href="logout.php"><i class="fas fa-sign-out-alt"></i><span>Sign Out</span></a>
						</div>
						<form action="home.php" method="POST">
							<div class="input-group">
      							<input type="text" class="form-control" placeholder="Search" name="search">
     								 <div class="input-group-btn">
       								 	<button class="btn btn-default search_btn" type="submit" name="submit-search"><i class="glyphicon glyphicon-search" style="font-size: 2.2vh; background-color: "></i></button>
      								 </div>
    						</div>
						</form>						
					</div>
					<div class="col-xs-1 instruction_holder">
						<a href="instructions.php"><button class="logout btn"><i class="fas fa-question-circle side-btn"></i></button></a>
					</div>
					<div class="col-xs-1 logout_holder">
						<a href="logout.php"><button class="logout btn"><i class="fas fa-sign-out-alt side-btn"></i></button></a>
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
				<div class="prof_btn">
					<a href="accountpage.php"><button class="btn" style="margin-left: 34%;margin-right: 34%; background-color: white;">Profile</button></a>
				</div>
				<!--
				<form class="ff"  method="post">
				<div style="text-align: center;">
					<input type="submit" value="Profile" name="sub1" class="btn">
					<?php
						if(isset($_POST["sub1"])){
						header("location:accountpage.php");
						}
						?>
				</div>
				</form>		
				-->
				<h1 style="text-align: center; font-size: 2vh; font-family: 'Heebo', sans-serif;"><?php echo "@" . $_SESSION['username']; ?></h1>
				<div class="userpost">
					<a class="darken" href="user_post.php"><button style="border-radius: 50%; height: 4vw; width: 4vw;" class="post_btn"><i class="fas fa-pen btn" style="font-size: 30px;"></i></button></a>

					<br><br>
				
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
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>	
</body>
</html>
