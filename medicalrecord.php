<!DOCTYPE html>
<html>
<head>
  <title>medical record </title>
<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
<link rel="stylesheet" type="text/css" href="./styles/medicalrecord.css">
</head>
<body>
<h1>Your Medical Record</h1>
 <form role="form" class="fg " method="post" action="new.php">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="abc@xyz.com (enter as before)" required="email">
  </div>
  <div class="form-group">
    <label for="dia">diabetic:</label>
    <input type="text" class="form-control" name="diabetic" id="dia" placeholder="yes/no">
  </div>
 <div class="form-group">
    <label for="bp">Blood Pressure:</label>
    <br>
     <input type="radio" name="bp"  value="high" > high<br>
  <input type="radio" name="bp"  value="low"> low<br>
  <input type="radio" name="bp"  value="normal"> normal
  </div>
  <div class="form-group">
    <label for="op">operatons in past:</label>
    <input type="text" name="operations" class="form-control" id="op">
  </div>
  <div class="form-group">
    <label for="al">Allergies</label>
    <input type="text" class="form-control" name="allergies" id="al" placeholder="eg: skin allergy">
  </div>
  <!--  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div> -->
  <button id="demo-show-snackbar" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored bt" name="submit" type="submit" onclick="new.php">Submit</button>
<div id="demo-snackbar-example" class="mdl-js-snackbar mdl-snackbar">
  <div class="mdl-snackbar__text"></div>
  <button class="mdl-snackbar__action " type="button"></button>
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

</body>
</html>