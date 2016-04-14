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
    <h1 class="title">SIGN UP AS A PATIENT</h1>
  </div>
  <div class="patientform center">
  <form class="form" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" data-toggle="validator" onsubmit="return myFunction()">
    <div class="form" role="form">
      <div class="form-group">
        <label for="text">Full Name</label>
        <input type="text" class="mdl-textfield__input" id="fName" class="smargin" name="fullName" required>
      </div>
    </div>
    <div class="form-inline" role="form">
    	<div class="form-group">
        <label for="text">Birthdate</label>
        <input type="text" class="mdl-textfield__input" id="datepicker-13" class="smargin" value="dd/mm/yy" name="bDate" required>
      	</div>
      	<div class="form-group">
  			<label for="text">Sex</label>
  				<select class="form-control" id="sex" name="sex" required>
  					<option>Select</option>
    				<option>Male</option>
    				<option>Female</option>
    				<option>Other</option>
    				<option>Can't Reveal</option>
  				</select>
		</div>
      	<div class="form-group">
  			<label for="text">Blood Group</label>
  				<select class="form-control" id="bGroup" name="bGroup" required>
  					<option>Select Blood Group</option>
  					<option>A+</option>
    				<option>A-</option>
    				<option>B+</option>
    				<option>B-</option>
    				<option>O+</option>
    				<option>O-</option>
    				<option>AB+</option>
    				<option>AB-</option>
  				</select>
		</div>
    </div>
    <div class="form" role+"form">
    	<div class="form-inline" role="form">
    	<div class="form-group">
        <label for="text">State</label>
        <input type="text" class="mdl-textfield__input" class="smargin"  name="state" required>
      	</div>
      	<div class="form-group">
        <label for="text">City</label>
        <input type="text" class="mdl-textfield__input"  class="smargin"  name="city" required>
      	</div>
      <div class="form-group">
        <label for="text">Pin-Code</label>
        <input type="number" onkeypress='return (event.charCode >= 48 && event.charCode <= 57)||event.keyCode==8 ||event.keyCode==37||event.keyCode==39||event.keyCode==9' class="mdl-textfield__input"  class="smargin" name="pin" required>
      	</div>
      		<div class="form-group">
        <label for="text">Locality/Area</label>
        <input type="text" class="mdl-textfield__input" class="smargin"  name="area" required>
      	</div>
    </div>
    	<div class="form-group">
    		<label for="email">Your E-Mail</label>
    		<input type="email" class="mdl-textfield__input" id="email" class="smargin" name="eMail" required>
        <span><?php
        $alert = "alert"; 
        $style = "font-weight:bold; color:red";
        echo "<p class='$alert' style='$style'>$varify</p>"?></span>
    	</div>
    	<div class="form-group">
    		<label for="text">Your Password</label>
    		<input type="password" class="mdl-textfield__input" id="pwd" class="smargin" name="pwd" required>
    	</div>
    	<div class="form-group">
    		<label for="email">Retype Password</label>
    		<input type="password" class="mdl-textfield__input" id="rpwd" class="smargin" name="" required>
    	</div>
    </div>
      <div class="align-center form-group">
          <button type="submit" value="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" id="login" name="SignUp">SignUp
          </button>
        </div>
    </form>
  </div>
</body>
</html>