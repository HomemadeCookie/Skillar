<!DOCTYPE html>
<html>
<head>
	<title>search bar</title>
</head>
<body>
<form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit">

</form>


<?php

$con = new PDO("mysql:host=localhost;dbname=users",'root','');

/*
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'users');
*/

if(isset($_POST["submit"])){
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM 'usertable' WHERE name = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();
	
	if($row = $sth->fetch()){
	?>
	<br><br><br>
	<table>
		<tr>
			<th>Name</th>
			<th>Description</th>
		</tr> 
		<tr>
			<td><?php echo $row->name; ?></td>
			<td><?php echo $row->password; ?></td>
	</table>
	<?php
	}
	
	else{
		echo $sth->fetch();
		echo " name Does not exist";
	}
}

?>
</body>
</html>

<!--
<?php
/*
//$con = new PDO("mysql:host=localhost;dbname=CodeFlix",'root'');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'users');

if(isset($_POST["submit"])){
	$str = $_POST["search"];
	$s = " select * from usertable where name = '$str'";
	$result = mysqli_query($con, $s);
	$num = mysqli_num_rows($result);



	if($num==1){
		?>
		<p><?php 
			while($que=mysqli_fetch_rows($result)){
				echo $que;
				echo " + ";
			}
		 ?></p>
		<?php
	}
	else{
		?>
		<p><?php echo"No result" ?></p>
		<?php
	}

}
*/
?>
-->

