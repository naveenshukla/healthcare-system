<html>
<head>
	<title></title>
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
</head>
<body>
 <?php
 session_start();
 ?>
 <p style="float: right; position: relative;">
        <a href="logout.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
 </p>
 <p style="font-size: 20px;"> Hi <strong style="color: blue; font-size: 20px;"><?php echo $_SESSION['name']."!" ?></strong>
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
 	for($i=0; $i <34; $i++) {  
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
</body>
</html>