<?php 
    session_start();
	if(isset($_SESSION['value']) && !empty($_SESSION['value'])) {
    	session_unset();
    	session_destroy();
       include 'loggedout.php';
	}
    if($_SERVER["REQUEST_METHOD"] == "POST"){
  	$type = $_POST['optradio'];
  	$email =  $_POST['userid'];
  	$pwd = $_POST['password'];
  	$servername = "localhost";  
	$username = "root";
  	$password = "shukla123";
  	$conn = mysql_connect($servername,$username,$password);
  	$result = mysql_select_db('online_health',$conn);
  	if ($type == 'doctor') {
  	}
  	elseif ($type=='patient') {
  		$var = "select * from patient where email='$email' and password='$pwd'";
  		$json = array();
  		$result = mysql_query("$var");
		if(mysql_num_rows($result)){
			while($row=mysql_fetch_row($result)){
				$json[]=$row;
			}
			$patient = $json[0][1];
			session_start();
			$_SESSION['email'] = $email;
			$_SESSION['name'] = $patient;
			echo "<script>window.open('patientwelcome.php','_self')</script>";
		}
		else{
			include 'warning.php';
			include 'index.php';
		}
		//print(json_encode($json));
		/*$var = $json[0][0];
		echo "$var";*/
  	}
  	elseif($type=='admin')
  		echo "admin is selected";
  }
  else
  include 'index.php';
?>