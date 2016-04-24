<?php
	$servername = "localhost";  
	$username = "root";
  	$password = "shukla123";
  	$conn = mysql_connect($servername,$username,$password);
  	$result = mysql_select_db('online_health',$conn);
?>
