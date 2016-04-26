<?php
session_start();
if(isset($_GET['a'])) {
    $_SESSION['appid'] = $_GET['a'];
  }
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconn.php';
    $summary = $_POST['summary'];
    $precautions  = $_POST['precautions'];
    $medicines = $_POST['medicines'];
    $tests = $_POST['tests'];
    $comments = $_POST['comments'];
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
  <div class="align-center" >
    <h1 class="title">Patient's Medical Report</h1>
  </div>
  <div class="patientform center">
  <form class="form" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" data-toggle="validator" onsubmit="return myFunction()">
    <div class="form" role="form">
      <div class="form-group">
        <label for="text">Full summary of Problem</label>
        <textarea type="text" class="mdl-textfield__input" id="fName" class="smargin" name="summary" required ></textarea>
      </div>
    </div>
    <div class="form" role+"form">
    	<div class="form-group">
    		<label for="email">Precautions</label>
    		<textarea type="text" class="mdl-textfield__input" id="email" class="smargin" name="precautions" required></textarea>
    	</div>
    	<div class="form-group">
    		<label for="text">Medicines</label>
    		<textarea type="text" class="mdl-textfield__input" id="pwd" class="smargin" name="medicines" required></textarea>
    	</div>
    	<div class="form-group">
    		<label for="email">Prescribed Tests</label>
    		<textarea type="text" class="mdl-textfield__input" id="rpwd" class="smargin" name="tests" required></textarea>
    	</div>
      <div class="form-group">
        <label for="email">Other Comments</label>
        <textarea type="text" class="mdl-textfield__input" id="rpwd" class="smargin" name="comments" required></textarea>
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