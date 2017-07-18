#contains pending and confirmed appointments with date
#if this page is getting request through get request, then find the appid in get request and update appointment status to fixed
#with doctor email and appid
#while doctor logs in, the speaciality of doctor is saved in session variable. So the 
#appointment table is checked for the particular speciality and which are not assigned any doctor, the come in pending appointments.
#similarly the appointment table is checked for the current doctor's email, which are confirmed so they 
#come in confirmed appointments

<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    if(isset($_GET['a'])) {
    	include 'dbconn.php';
    	$email  = $_SESSION['email'];
    	$appid = $_GET['a'];
    	$query = "update appointment set status='fixed',doctoremail='$email' WHERE appid='$appid'";
    	mysql_query("$query");
  	} 
?>
<html>
<head>
	<meta charset="utf-8">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<title>doctor dashboard</title>
</head>
<body>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10">
				<h1 style="margin-left: 95px">Welcome <?php echo $_SESSION['name'] ?>!</h1>
			</div>

			<div class="col-md-2">
				<div style="margin-top: 10px">
				<a href="logout.php" class="btn btn-info btn-lg">
          			<span class="glyphicon glyphicon-log-out" ></span> Log out
        		</a>
        		</div>
        	</div>
        </div>
	</div>

	
	<nav class="navbar navbar-default">
  		<div class="container-fluid">
    		<ul class="nav navbar-nav">
      			<li class="active"><a href="#">Home</a></li>
      			<li><a href="#appreq">Appointment Requests</a></li>
      			<li><a href="#appconf">Confirmed Appointments</a></li>  
    		</ul>
  		</div>
	</nav>

	<div id="appreq" class="container">
		<h2>Appointment requests</h2>
		<p>Pending appointment requests</p>
		<table class="table table-hover">
			<thread>
				<tr>
					<th>Appid</th>
					<th>Patient Name</th>
					<th>Email</th>
					<th>Symptoms</th>
					<th>Date</th>
					<th></th>
				</tr>
			</thread>
			 <?php
   			 include 'dbconn.php';
    		$email = $_SESSION['email'];
    		$speciality  = $_SESSION['speciality'];
   			$var = "select * from appointment where speciality='$speciality' and status='pending'";
   			$result = mysql_query("$var");
   			$num = mysql_num_rows($result);
   	 $success = 'success';
    $danger = 'danger';
    $info = 'info';
    $appid = array();
    $speciality = array();
    $problem=array();
    $date = array();
    $patientemail  = array();
    $status=array();
    if(mysql_num_rows($result)){
			while($row=mysql_fetch_row($result)){
				$appid[] = $row[0];
				$patientemail[] = $row[1];
				$date[] = $row[6];
				$speciality[] = $row[3];
				$problem[]=$row[4];
				$status[]=$row[5];
			}
		}
		else{
 			echo "no appointments yet :-(";
		}
  for($i=0; $i <$num; $i++) {
  	$var = "select fullname from patient where email='$patientemail[$i]'";
  	$result = mysql_query("$var");
  	$row = mysql_fetch_row($result);
  	$patientname = $row[0];
  	$confirm = 'doctor_login.php'.'?'.'a='.$appid[$i];
  	  if($i%2==0){  
      echo "<tbody>
      <tr class='$info'>
        <td>$appid[$i]</td>
        <td>$patientname</td>
        <td>$patientemail[$i]</td>
        <td>$problem[$i]</td>
        <td>$date[$i]</td>
        <td><a href='$confirm' style='text-decoration:none' class='mdl-button mdl-js-button mdl-button--raised mdl-button--colored'>Confirm</a></td>
		</tr>
    </tbody>";
	}
	else{
		echo "<tbody>
      <tr class='$danger'>
        <td>$appid[$i]</td>
        <td>$patientname</td>
        <td>$patientemail[$i]</td>
         <td>$problem[$i]</td>
        <td>$date[$i]</td>
        <td><a href='$confirm' style='text-decoration:none' class='mdl-button mdl-js-button mdl-button--raised mdl-button--colored'>Confirm</a></td>
      </tr>
    </tbody>";	
	}
    }
    ?>
		</table>
	</div>

	<div id="appconf" class="container">
		<h2>Confirmed Appointments</h2>
		<p>Your Confirmed Appointments</p>
		<table class="table table-hover">
			<thread>
				<tr>
					<th>Appid</th>
					<th>Patient Name</th>
					<th>Email</th>
					<th>Symptoms</th>
					<th>Date</th>
				</tr>
			</thread>
			 <?php
   			 include 'dbconn.php';
    		$email = $_SESSION['email'];
    		$speciality  = $_SESSION['speciality'];
   			$var = "select * from appointment where doctoremail='$email' and status='fixed'";
   			$result = mysql_query("$var");
   			$num = mysql_num_rows($result);
   	 $success = 'success';
    $danger = 'danger';
    $info = 'info';
    $appid = array();
    $speciality = array();
    $problem=array();
    $date = array();
    $patientemail  = array();
    $status=array();
    if(mysql_num_rows($result)){
			while($row=mysql_fetch_row($result)){
				$appid[] = $row[0];
				$patientemail[] = $row[1];
				$date[] = $row[6];
				$speciality[] = $row[3];
				$problem[]=$row[4];
				$status[]=$row[5];
			}
		}
		else{
 			echo "no appointments yet :-(";
		}
  for($i=0; $i <$num; $i++) {
  	$var = "select fullname from patient where email='$patientemail[$i]'";
  	$result = mysql_query("$var");
  	$row = mysql_fetch_row($result);
  	$patientname = $row[0];
  	$confirm = 'doctor_login.php'.'?'.'a='.$appid[$i];
	//$invoice = 'invoice.php'.'?'.'a='.$appid[$i];
  	if($i%2==0){  
      echo "<tbody>
      <tr class='$info'>
        <td>$appid[$i]</td>
        <td>$patientname</td>
        <td>$patientemail[$i]</td>
        <td>$problem[$i]</td>
        <td>$date[$i]</td>
		</tr>
    </tbody>";
	}
	else{
		echo "<tbody>
      <tr class='$danger'>
        <td>$appid[$i]</td>
        <td>$patientname</td>
        <td>$patientemail[$i]</td>
         <td>$problem[$i]</td>
        <td>$date[$i]</td>
      </tr>
    </tbody>";	
	}
    }
    ?>
		</table>
	</div>


</body>
</html>
