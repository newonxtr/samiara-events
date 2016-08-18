<?php
$conn_error="could not connect to database";

	$servername="localhost";
	$username="tabrez";
	$password="tabrez@123";
	$mysql_db="Talent16";

	$conn=mysqli_connect($servername,$username,$password) or die('error');

	mysqli_select_db($conn,$mysql_db) or die($conn_error);
?>