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
	//echo ". num is ";
	echo $num;
	//echo "- id=";
	echo $id;
}

/*
$reg = "insert into uploads(Name, Job_title, Job_description, Income, Payment_method, Contact_num, Social_media, Date, Likes, ID) values('a','a','a','a','a','a','a','11-11-2000','0','0')";
*/

$reg = "INSERT INTO `final` (`Name`, `Username`, `JTitle`, `JDescription`, `Income`, `PMethod`, `CNumber`, `SMedia`, `Date`, `Likes`, `ID`, `Status`) VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine', '$likes', '$id', 0)";

$del = "DELETE FROM uploads WHERE Job_Title='$three' AND Job_description='$four'";

 mysqli_query($con,$reg);
 mysqli_query($con,$del);
// echo "Upload Successful";

// echo "<a href='queries.php'>Go Back</a>"

?>
<html>
<head>
	<script src="https://kit.fontawesome.com/766528b8cf.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
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
		body{
			color: white;
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
			<h1>Post Successful</h1>
			<h2>Selected post will now appear on public feed.</h2>
			<br><br><br>
			<a href="queries.php"><button><i class="fas fa-arrow-left" style="font-size: 20px;"></i></button></a>
		</div>
	</div>
</body>
</html>
