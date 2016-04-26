<?php
session_start();
if(isset($_GET['a'])) {
    $_SESSION['appid'] = $_GET['a'];
  }
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconn.php';
    $appid = $_SESSION['appid'];
    $treatment = $_POST['treatment'];
    $medicine  = $_POST['medicine'];
    //$medicines = $_POST['test'];
    $test = $_POST['test'];
    $payment = $_POST['payment'];
    $sql_insert = "INSERT INTO invoice
   VALUES ('$appid','$treatment','$medicine','$test','$payment')";
   mysql_query("$sql_insert");
 }
?>
<html>
<head>
	<title>Online Healthcare</title>
  	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
	<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
	<link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="./styles/mystyle.css">
  	<link rel="stylesheet" type="text/css" href="./styles/login.css">
  	<script type="text/javascript" src="./scripts/myscript.js"></script>
  	<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
</head>
<body>
  <p style="float: right; position: fixed;z-index: 100;top: 0;right: 0;">
        <a href="logout.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
 </p>
  <div class="align-center" >
    <h1 class="title">Invoice</h1>
  </div>
  <div class="patientform center">
  <form class="form" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" data-toggle="validator" onsubmit="return myFunction()">
    <div class="form" role="form">
      <div class="form-group">
        <label for="text">Treatment Cost</label>
        <input type="text" class="mdl-textfield__input" id="fName" class="smargin" name="treatment" required >
      </div>
    </div>
    <div class="form" role+"form">
    	<div class="form-group">
    		<label for="email">Medicine</label>
    		<input type="text" class="mdl-textfield__input" id="email" class="smargin" name="medicine" required>
    	</div>
<!--     	<div class="form-group">
    		<label for="text">Medicines</label>
    		<input type="text" class="mdl-textfield__input" id="pwd" class="smargin" name="medicines" required>
    	</div> -->
    	<div class="form-group">
    		<label for="email">Test</label>
    		<input type="text" class="mdl-textfield__input" id="rpwd" class="smargin" name="test" required>
    	</div>
      <div class="form-group">
        <label for="email">Payment Method</label>
        <input type="text" class="mdl-textfield__input" id="rpwd" class="smargin" name="payment" required>
      </div>
    </div>
      <div class="align-center form-group">
          <button type="submit" value="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" id="login" name="SignUp">Submit
          </button>
        </div>
    </form>
  </div>
</body>
</html>