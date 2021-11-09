<?php
	session_start();

?>

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


	<title>Account Page</title>
	<style>
		p{
			font-size:20px;
		}
		body{
			background-color:#F4F9F9;

		}
		input{
			border-radius: 10px;
		}
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
			padding-left: 2%;
			padding-top: 2%;
			padding-bottom: 2%;
		}
		
		.content{
			width: 90%;
			border-radius: 10px;
			
		}

		i{
			font-size: 300%;
			margin-top: 10%;
					}
		h1{
			font-family: 'Ubuntu', sans-serif;
		}
		h2{
			font-family: 'Bebas Neue', cursive;
		}
		p{
			font-family: 'Roboto', sans-serif;
		}
		.button{
			border-radius: 15px;
			font-family: 'Bebas Neue', cursive;
			font-size: 15px;
			padding: 0;
			width: 7%;
		}
	</style>

</head>
<body>
	<div class="row header center-block">		
<div class="back col-xs-1">
	<a href="home.php"><i class="fas fa-arrow-left"></i></a>
</div>
<div class="col-xs-10 center-block text-center banner">
	<h1>Instructions page</h1>
</div>
</div>
<br>
	<div class="userdata center-block">
	<h2>How to use the website</h2>
	<p>
		Scroll through feed to see available projects<br>
		If you see an available project that match your skills, contact the author using the handle/username provided in the post<br>
		To filter posts based on your preference, simply type a category or date you are interested in in the search bar<br>

		<br><br>
		To make a post, simply click the icon at the lower left of the screen<br>
		Put all the necessary details (make sure it is complete and true, incomplete details will not be accepted)<br>
		All posts considered as academic dishonesty will not be tolerated, any caught students not abiding by the PSHS Code of Conduct will be held liable for sanctions/offense<br>
		After all the details are filled, simply click post and wait until admin approves of it<br>
		Once it is approved, the post can now be seen in the public feed<br>
		You can also see all your posts in your account page<br>
		If one of your posts are already done/taken, you can remove it from the public feed by simply clicking the checkbox in the post at your account page.
	</p>
</div>
</body>
</html>