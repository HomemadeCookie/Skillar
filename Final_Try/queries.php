<!DOCTYPE html>
<html>
<head>
	<title>ADMIN QUERIES</title>
	<style>
		h1{
			font-family: century gothic;
		}
		a{
			font-size:30px;
		}
	</style>
</head>
<body>
<h1>ADMIN</h1>
<?php


$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'media');

$query = "SELECT * FROM uploads";
$res = mysqli_query($con,$query);

echo "<table>";

echo "<tr><td>Name</td><td>Job Title</td><td>Job Description</td><td>Income</td><td>Payment method</td><td>Contact Number</td><td>Social Media</td><td>Likes</td><td>ID</td><td>Post</td></tr>";

while($row = mysqli_fetch_array($res)){
	echo "<form action='admin_post_try.php' method='post'><tr><td><input type='text' value='" . $row['Name'] . "' name='Name'></td><td><input type='text' value='" . $row['Job_Title'] . "' name='Job_Title'></td><td><input type='text' value='" . $row['Job_description'] . "' name='Job_description'></td><td><input type='text' value='" . $row['Income'] . "' name='Income'></td><td><input type='text' value='" . $row['Payment_method'] . "' name='Payment_method'></td><td><input type='text' value='" . $row['Contact_num'] . "' name='Contact_num'></td><td><input type='text' value='" . $row['Social_media'] . "' name='Social_media'></td><td><input type='text' value='" . $row['Likes'] . "' name='Likes'></td><td><input type='text' value='" . $row['ID'] . "' name='ID'></td><td><input type='submit' name='submit' value='Post'>" . "</td></tr></form>";
}

echo "</table>";

//mysqli_close();

?>
<br><br><br>
</body>
</html>