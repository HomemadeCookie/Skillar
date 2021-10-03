<?php

	$conn = mysqli_connect("localhost", "root", "", "media");

	echo $_POST["id"]."<br>";

	$ID = $_POST["id"];

	if(isset($_POST["status"]) && $_POST["status"]=="yes"){
		echo "This post is now hidden from the feed";
		$upd = "UPDATE final SET Status=1 WHERE ID='$ID'";
	}
	else{
		echo "This post is visible in the feed";
		$upd = "UPDATE final SET Status=0 WHERE ID='$ID'";
	}
	mysqli_query($conn, $upd);

?>