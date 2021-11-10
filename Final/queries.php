<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
	<title>ADMIN QUERIES</title>
	<style>
		h1{
			font-family: century gothic;
		}
		a{
			font-size:30px;
		}
		body{
			background-color:#d1fff4;
			margin: 0;
		}
		hr{
			background-color: black;
			height: 3px;
		}
		span{
			color: black;
			margin-right: 10px;
		}
		.container{
			display: grid;
			grid-template-columns: 10% 110%;
		}
		.skillar{
			text-align: center;
			color: white;
			background-color: black;
		}
		.admin{
			text-align: center;
			color: #800000;
			background-color: #ffeebf;
		}
		.items{
			overflow-x: scroll;
			margin-left: 1%;
			background-color: #a9f1df;
		}
		.items >tr{
			margin-left: 2%;
		}
	</style>
</head>
<body>
<div class="container-fluid">
	<div class="row">
	<div class="col-xs-2 skillar">	
		<h1>SKILLAR</h1> 
	</div>
	<div class="col-xs-10 admin">
		<h1>Admin Queries</h1>
	</div>
</div>	
</div>
<br><br><br>
<div class="items">
<?php


$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'media');

$query = "SELECT * FROM uploads";
$res = mysqli_query($con,$query);

echo "<table>";

echo "<tr><td>Name</td><td>Username</td><td>Job Title</td><td>Job Description</td><td>Income</td><td>Payment method</td><td>Contact Number</td><td>Social Media</td><td>Likes</td><td>ID</td><td>Post</td></tr>";

while($row = mysqli_fetch_array($res)){
	echo "<form action='admin_post.php' method='post'><tr><td><input type='text' value='" . $row['Name'] . "' name='Name'></td><td><input type='text' value='" . $row['Username'] . "' name='Username'></td><td><input type='text' value='" . $row['Job_Title'] . "' name='Job_Title'></td><td><input type='text' value='" . $row['Job_description'] . "' name='Job_description'></td><td><input type='text' value='" . $row['Income'] . "' name='Income'></td><td><input type='text' value='" . $row['Payment_method'] . "' name='Payment_method'></td><td><input type='text' value='" . $row['Contact_num'] . "' name='Contact_num'></td><td><input type='text' value='" . $row['Social_media'] . "' name='Social_media'></td><td><input type='text' value='" . $row['Likes'] . "' name='Likes'></td><td><input type='text' value='" . $row['ID'] . "' name='ID'></td><td><input type='submit' name='submit' value='Post' >" . "</td></tr></form>";
}

echo "</table>";

//mysqli_close();

?>
<br><br><br>
</div>
</body>
</html>