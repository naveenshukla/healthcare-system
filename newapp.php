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
<img src = "http://www.docmeet.in/images/banner-4.jpg" id="myimg">
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
      <ul class = "menu">
               <li class="c1"><a class="a1" href = "#">Home</a></li>
               <li class="c1"><a class="a1" href = "#">About</a></li>
               <li class="c1"><a class="a1" href = "#">Help</a></li>
 	</ul>
 	</div>
   </div>
   </div>
   <div class="col-md-4">
   </div>
 </nav>
 <p style="font-size: 20px;"> Hi <strong style="color: blue; font-size: 20px;"><?php echo $_SESSION['name']."!" ?></strong>
 <table>
 	<h1>New consultation</h1>
 	<p align="center">For details on posting new consultation requests for the first time and on how to enter problems, tips and guidelines, click<a href="#"> Help</a>.</p> 
 	<ol>
 		<li><a class="tab1" href="medicalrecord.html">Update Medical Record</a>(Having an up-to-date health record will help in diagnosis.)</li>

 		<li>Choose a speciality</li>
 		 <form role="form">
  <div class="form-group">
     <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Speciality
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">HTML</a></li>
    <li><a href="#">CSS</a></li>
    <li><a href="#">JavaScript</a></li>
  </ul>
</div>
  </div>
  <div class="form-group">
    <label for="pwd">Summary about the problem :</label>
    <textarea type="text" class="form-control" id="summ"></textarea>
  </div>  
  <button id="demo-show-snackbar" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="button">Submit</button>
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
      </tr>
    </thead>
    <?php
    $success = 'success';
    $danger = 'danger';
    $info = 'info';
  for($i=0; $i <3; $i++) {  
      echo "<tbody>
      <tr class='$success'>
        <td>John</td>
        <td>Doe</td>
        <td>Something</td>
        <td>john@example.com</td>
      </tr>
      <tr class='$danger'>
        <td>Mary</td>
        <td>Something</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr class='$info'>
        <td>July</td>
        <td>Something</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>";
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