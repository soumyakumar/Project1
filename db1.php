<?php
$host="localhost";
$username="root";
$password="123456";
$connection=mysqli_connect("localhost","root","123456");
if(!$connection){
	echo "connection failed".mysqli_connect_error();
}

?>

