<?php
session_start();
if(isset($_GET['a'])) {
    $_SESSION['appid'] = $_GET['a'];
  }
 {
    include 'dbconn.php';
    $appid = $_SESSION['appid'];
    $sql_insert = "select * from medicalreport where appid='$appid'";
    $result = mysql_query("$sql_insert");
    $num = mysql_num_rows($result);
    $json = array();
    if(mysql_num_rows($result)){
      while($row=mysql_fetch_row($result)){
     	$json = $row;
      }
      $summary  = $json[1];
    $precautions = $json[2];
    $medicines = $json[3];
    $tests = $json[4];
    $comments = $json[5];
    }
    else{
    	echo "<strong>Your medical report is not ready yet, come back Later!!!</strong>";
      echo "<script>setTimeout('window.open(\'newapp.php\')', 1000)</script>" ;
      echo "<script>setTimeout('window.close()', 1000)</script>" ;
    }
  }
?>
<html>
<head>
</head>
 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="./styles/medicalreport.css">
	<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>

	

	<title>Medical Report</title>
</head>
<body>
<button style="float:right;"  onclick="myFunction()">Print this page</button>

<script>
function myFunction() {
    window.print();
}
</script>
<div class="heading" >
M&A Health Care Services</div>
<div class="subheading">Medical Report</div>
<div class="container">
	<strong>Hi <?php echo $_SESSION['name']; ?></strong><br><br><br>
	<strong>Summary:</strong>
	<p><?php echo "$summary" ?></p><br><br><br>

	<strong>Precautions:</strong>
	<p><?php echo "$precautions" ?></p><br><br><br>

	<strong>Medicines:</strong>
	<p><?php echo "$medicines" ?></p><br><br><br>

	<strong>Tests recommended:</strong>
	<p><?php echo "$tests" ?></p><br><br><br>

	<strong>Doctor's comments:</strong>
	<p><?php echo "$comments" ?></p><br><br><br>

	<img src="./images/randomsign.png"><br>
	<p class="name">Dr. Madison Ivy<br>Senior Cardiologist<br>M&A Health Care</p>

</div>

</body>


</html>