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
  	include 'dbconn.php';
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
			echo "<script>window.open('newapp.php','_self')</script>";
		}
		else{
			include 'warning.php';
			include 'index.php';
		}
  	}
  	elseif($type=='admin'){
  		
      $var = "select * from admin where email='$email' and password='$pwd'";
      $json = array();
      $result = mysql_query("$var");
      if(mysql_num_rows($result)){
        while($row=mysql_fetch_row($result)){
          $json[]=$row;
      }
      $admin = $json[0][2];
      session_start();
      $_SESSION['email'] = $email;
      $_SESSION['name'] = $admin;
      echo "<script>window.open('admin.php','_self')</script>";
      }
      else{
        include 'warning.php';
        include 'index.php';
      }
    }
  }
  else
  include 'index.php';
?>