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

$likes=0;
$num=1;
$id=0;
while($num!=0){
	$id+=1;
	$s= "select * from final where ID = '$id'";
	$result = mysqli_query($con, $s);
	$num = mysqli_num_rows($result);
	echo ". num is ";
	echo $num;
	echo "- id=";
	echo $id;
}

/*
$reg = "insert into uploads(Name, Job_title, Job_description, Income, Payment_method, Contact_num, Social_media, Date, Likes, ID) values('a','a','a','a','a','a','a','11-11-2000','0','0')";
*/

$reg = "INSERT INTO `final` (`Name`, `JTitle`, `JDescription`, `Income`, `PMethod`, `CNumber`, `SMedia`, `Date`, `Likes`, `ID`) VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$likes', '$id')";

 mysqli_query($con,$reg);
 echo "Upload Successful";

?>
