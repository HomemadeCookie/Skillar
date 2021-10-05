<?php

session_start();
header('location:start.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'users');

$name= $_POST['name'];
$username = $_POST['user'];
$batch = $_POST['batch'];
$pass = $_POST['password'];
$skills = $_POST['skills'];
$bio = $_POST['bio'];

 
$s = " select * from userdata where Username = '$username'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo"Username Already Taken";
}else{
	$reg = "insert into userdata(Full_name, Username, Batch, Password, Skills, Posts, Bio) values('$name', '$username', '$batch','$pass', '$skills', '', '$bio')";
	mysqli_query($con,$reg);
	echo" Registration Successful";
}


?>
