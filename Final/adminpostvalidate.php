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
	<title>Admin Post Validate</title>
</head>
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
<body>
	<div class="row header center-block">
<div class="back col-xs-1 align-middle">
	<a href="queries.php"><i class="fas fa-arrow-left fa-3x "></i></a>
</div>
<div class="col-xs-10 center-block banner">
	<h1 class="display-1">Post Successfully Uploaded</h1>
</div>
</div>
<br>
	<div class="userdata center-block">
<?php
session_start();
//header('location:admin_post.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'media');

$one= $_POST['one'];
$two = $_POST['two'];
$three= $_POST['three'];
$four = $_POST['four'];
$five= $_POST['five'];
$six = $_POST['six'];
$seven= $_POST['seven'];
$eight = $_POST['eight'];
$nine = $_POST['nine'];

$likes=0;
$num=1;
$id=0;
while($num!=0){
	$id+=1;
	$s= "select * from final where ID = '$id'";
	$result = mysqli_query($con, $s);
	$num = mysqli_num_rows($result);
}

/*
$reg = "insert into uploads(Name, Job_title, Job_description, Income, Payment_method, Contact_num, Social_media, Date, Likes, ID) values('a','a','a','a','a','a','a','11-11-2000','0','0')";
*/

$reg = "INSERT INTO `final` (`Name`, `Username`, `JTitle`, `JDescription`, `Income`, `PMethod`, `CNumber`, `SMedia`, `Date`, `Likes`, `ID`, `Status`) VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine', '$likes', '$id', 0)";

$del = "DELETE FROM uploads WHERE Job_Title='$three' AND Job_description='$four'";

 mysqli_query($con,$reg);
 mysqli_query($con,$del);
 echo "<h3>Upload Successful</h3>";

 

?></div>
</body>
</html>