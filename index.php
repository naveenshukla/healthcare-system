<!DOCTYPE html>
<html>
<head>
<title>online healthcare</title>
 <!-- Latest compiled and minified CSS --> 
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="./styles/login.css">
<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>

<video controls muted autoplay loop id="bgvid">
  <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
<source src="./videos/video3.mp4" type="video/webm">
</video>
<div class="container">
<h1 class="align-center title">
	Online Health Care Services
	</h1>
	<div class="row">
		<div class="form_bg">
			<form class="form" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
				<label class="radio-inline">
      			<input type="radio" name="optradio" value="doctor" >Doctor
    			</label>
    			<label class="radio-inline">
      			<input type="radio" name="optradio" value="patient" checked>Patient
    			</label>
    			<label class="radio-inline">
      			<input type="radio" name="optradio" value="admin" >Admin
    			</label>
				<h2 class="text-center">Login</h2>
				<br/>
				<div class="form-group">
					<input type="email" name="userid" class="form-control" id="userid" placeholder="User id">
				</div>
				<div class="form-group">
					<input type="password" name="password" class="form-control" id="pwd" placeholder="Password">
				</div>
				<div class="align-center">
					<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" id="login">Login
					</button>
				</div>
				<div class="align-center marginp smallfont">
					<a href="patientform.php"><p>Not a member? Sign Up</p></a>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>