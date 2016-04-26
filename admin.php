<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./styles/patientwelcome.css">
  <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./styles/newapp.css">

<!-- Latest compiled and minified CSS -->
<title>New consultation</title>
</head>
<body>
 <?php
 session_start();
 ?>
<p style="float: right; position: fixed;z-index: 100;top: 0;right: 0;">
        <a href="logout.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
 </p>
 <p style="font-size: 20px;"> Hi <strong style="color: blue; font-size: 20px;"><?php echo $_SESSION['name']."!" ?></strong>
 <table>
  <form role="form"> 
  <div class="container">
  <h2 style="text-align: center">Appointments</h2>
  <p style="text-align: center"><i style="color:black"><?php echo $_SESSION['name']."! "?></i>All appointments appear here</p>            
  <table class="table container">
    <thead>
      <tr>
        <th>Appointment Id</th>
        <th>Speciality</th>
        <th>Problem</th>
        <th>Status</th>
        <th>Report</th>
        <th>Invoice</th>
      </tr>
    </thead>
    <?php
    include 'dbconn.php';
    $email = $_SESSION['email'];
   	$var = "select * from appointment";
   	$result = mysql_query("$var");
   	$num = mysql_num_rows($result);
    $success = 'success';
    $danger = 'danger';
    $info = 'info';
    $appid = array();
    $speciality = array();
    $problem=array();
    $status=array();
    if(mysql_num_rows($result)){
			while($row=mysql_fetch_row($result)){
				$appid[] = $row[0];
				$speciality[] = $row[3];
				$problem[]=$row[4];
				$status[]=$row[5];
			}
		}
		else{
 			echo "no appointments yet :-(";
		}
  for($i=0; $i <$num; $i++) {
  	$report = 'report.php'.'?'.'a='.$appid[$i];
	$invoice = 'invoice.php'.'?'.'a='.$appid[$i];
  	if($i%2==0){  
      echo "<tbody>
      <tr class='$info'>
        <td>$appid[$i]</td>
        <td>$speciality[$i]</td>
        <td>$problem[$i]</td>
        <td>$status[$i]</td>
        <td><a href='$report'>Update Report</a></td>
        <td><a href='$invoice'>Update Invoice</a></td>
      </tr>
    </tbody>";
	}
	else{
		echo "<tbody>
      <tr class='$danger'>
        <td>$appid[$i]</td>
        <td>$speciality[$i]</td>
        <td>$problem[$i]</td>
        <td>$status[$i]</td>
        <td><a href='$report'>Update Report</a></td>
        <td><a href='$invoice'>Update Invoice</a></td>
      </tr>
    </tbody>";	
	}
    }
    ?>
  </table>
</div>
<div id="demo-snackbar-example" class="mdl-js-snackbar mdl-snackbar">
  <div class="mdl-snackbar__text"></div>
  <button class="mdl-snackbar__action" type="button"></button>
</div>
<script>
(function() {
  'use strict';
  var snackbarContainer = document.querySelector('#demo-snackbar-example');
  var showSnackbarButton = document.querySelector('#demo-show-snackbar');
  var handler = function(event) {
    showSnackbarButton.style.backgroundColor = '';
  };
  showSnackbarButton.addEventListener('click', function() {
     'use strict';
     //showSnackbarButton.style.backgroundColor = '#0000ff'; 
    var data = {
      message: 'Your form has been submitted ',
      timeout: 2000,
      actionHandler: handler,
      actionText: 'ok'
    };
    snackbarContainer.MaterialSnackbar.showSnackbar(data);
  });
}());
</script>
  </form>
 </table>

</body>
</html>