<?php

session_start();
//header('location:user_post.php');

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
	$s= "select * from uploads where ID = '$id'";
	$result = mysqli_query($con, $s);
	$num = mysqli_num_rows($result);
	/*
	echo ". num is ";
	echo $num;
	echo "- id=";
	echo $id;
	*/
}

/*
$reg = "insert into uploads(Name, Job_title, Job_description, Income, Payment_method, Contact_num, Social_media, Date, Likes, ID) values('a','a','a','a','a','a','a','11-11-2000','0','0')";
*/

$reg = "INSERT INTO `uploads` (`Name`, `Username`, `Job_title`, `Job_description`, `Income`, `Payment_method`, `Contact_num`, `Social_media`, `Date`, `Likes`, `ID`) VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine', '$likes', '$id')";

 mysqli_query($con,$reg);
 //echo "Upload Successful";

?>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
	<script src="https://kit.fontawesome.com/766528b8cf.js" crossorigin="anonymous"></script>
	<style>
		h1{
			font-family: Calibri;
			font-size: 35px;
			color: #800000;
		}
		h2{
			font-family: century gothic;
			font-size: 25px;
			color: black;
		}
		.content{
			background-color: #1FB25F;
			height: 300px;
			width: 40%;
			border-radius: 10px;
			padding: 10px;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="content">
			<h1>Post Request Sent Successfully</h1>
			<h2>Processing will take somewhere around 1-3 days.</h2>
			<br><br><br>
			<a href="user_post.php"><button><i class="fas fa-arrow-left" style="font-size: 20px;"></i></button></a>
		</div>
	</div>
</body>
</html>