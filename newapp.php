<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconn.php';
    include 'appoint.php';
 }
?>
<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./styles/newapp.css">
  <link rel="stylesheet" type="text/css" href="./styles/patientwelcome.css">

<!-- Latest compiled and minified CSS -->
<title>New consultation</title>
</head>
<body>
 <?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<p style="float: right; position: fixed;z-index: 100;top: 0;right: 0;">
        <a href="logout.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
 </p>
<nav class = "navbar" role = "navigation">
   <div class="col-md-4">
   </div>
   <div class="col-md-4">
   <div class = "navbar-header" >
      
      <div = "footer">
 	</div>
   </div>
   </div>
   <div class="col-md-4">
   </div>
 </nav>
 <p style="font-size: 20px"> Hi <strong style=" font-size: 20px;"><?php echo $_SESSION['name']."!" ?></strong></p>
 <table>
 	<ol>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <h1>New Appointment</h1>
  <p align="center">For details on posting new consultation requests for the first time and on how to enter problems, tips and guidelines, click<a href="#"> Help</a>.</p> 
  <ol>
    <li style=""><a class="tab1" href="medicalrecord.php">Update Medical Record</a>(Having an up-to-date health record will help in diagnosis.)</li>

    <li style="">Choose a speciality</li>
    <!--  <form role="form">
  <div class="form-group">
     <div class="dropdow -->
 <!--  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
  <span class="caret"></span></button> -->
 <select class="spcl" name="spcl" id="spcl" style="width: 125px; padding: 5px">
  <option  value="physician">physician</option>
  <option value="orthopaedic">orthopaedic</option>
  <option value="cardiology">cardiology</option>
  <option value="gynaecology">gynaecology</option>
  <option  value="dermatology">dermatology</option>
  <option value="neurology">neurology</option>
  <option value="psychiatry‎">psychiatry‎</option>
</select>
<div class="form-group" style="padding: -2px;"><br>
    <label for="pwd">Summary about the problem :</label>
    <textarea type="text" class="form-control" id="summ" name="details" required></textarea>
  </div>
  <div class="form-group" style="padding: -2px;"><br>
    <label for="">Date of Appointment</label>
    <input type="text" class="form-control" id="summ" name="date" style="width: 200px; height: 30px" required>
  </div>  
  <button id="demo-show-snackbar" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit" onclick="appoint.php">Submit</button>
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
<!-- </form> -->
  </ol>
 </form>
  <!-- <div class="form-group">
     <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Speciality
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">HTML</a></li>
    <li><a href="#">CSS</a></li>
    <li><a href="#">JavaScript</a></li>
  </ul>
</div> -->
  </div>
  <div class="container">
  <h2>Your Appointments</h2>
  <p><i style="color:grey"><?php echo $_SESSION['name']."! "?></i> Your appointments will appear here, click on the appointments for more details</p>            
  <table class="table">
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
    $var = "select * from appointment where patientemail='$email'";
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
    $report = 'medicalreport.php'.'?'.'a='.$appid[$i];
    $target = '_blank';
    $invoice = 'invoicepage.php'.'?'.'a='.$appid[$i];
    if($i%2==0){  
      echo "<tbody>
      <tr class='$info'>
        <td>$appid[$i]</td>
        <td>$speciality[$i]</td>
        <td>$problem[$i]</td>
        <td>$status[$i]</td>
         <td><a href='$report' target= '$target'>View Report</a></td>
        <td><a href='$invoice' target= '$target'>View Invoice</a></td>
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
         <td><a href='$report' target= '$target'>View Report</a></td>
        <td><a href='$invoice' target= '$target'>View Invoice</a></td>
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
 	</ol>
 </table>

</body>
</html>