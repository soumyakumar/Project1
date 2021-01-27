<?php
$connection=mysqli_connect("localhost","root","123456");
if(!$connection){
	echo "connection failed".mysqli_connect_error();
}
$username=$_POST['username'];
$password=$_POST['password'];

      
  
   
   mysql_close($conn);
?>
