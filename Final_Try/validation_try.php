<?php

session_start(); 

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'users');

$name= $_POST['user'];
$pass = $_POST['password'];

 
$s = " select * from userdata where Username = '$name' && Password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	/*JUST GIVING A TRY*/
	$row = mysqli_fetch_array($result);
	$_SESSION['skills'] = $row["Skills"];

	/*TIL THIS ONE*/

	$_SESSION['username'] = $name;
	header('location:home_try.php');//HOME PAGE
}else{
	header('location:start_try.php');
}


?>