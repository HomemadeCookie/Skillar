<?php

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'media');

print_r($_POST);
?>
