<html>
<head>
	<meta charset="utf-8">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<title>doctor dashboard</title>
</head>
<body>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10">
				<h1 style="margin-left: 95px">Welcome Doctor!</h1>
			</div>

			<div class="col-md-2">
				<div style="margin-top: 10px">
				<a href="#" class="btn btn-info btn-lg">
          			<span class="glyphicon glyphicon-log-out" ></span> Log out
        		</a>
        		</div>
        	</div>
        </div>
	</div>

	
	<nav class="navbar navbar-default">
  		<div class="container-fluid">
    		<ul class="nav navbar-nav">
      			<li class="active"><a href="#">Home</a></li>
      			<li><a href="#appreq">Appointment Requests</a></li>
      			<li><a href="#appconf">Confirmed Appointments</a></li>  
    		</ul>
  		</div>
	</nav>

	<div id="appreq" class="container">
		<h2>Appointment requests</h2>
		<p>Pending appointment requests</p>
		<table class="table table-hover">
			<thread>
				<tr>
					<th>Patient Name</th>
					<th>Email</th>
					<th>Symptoms</th>
					<th> </th>
				</tr>
			</thread>
			<tbody>
				<tr>
					<td>Mallu</td>
					<td>mallu@gmail.com</td>
					<td>incontinency and stomach pains</td>
					<td><button type="button" class="btn btn-default">confirm</button></td>
				</tr>
				<tr>
					<td>shuklank</td>
					<td>shuklank@gmail.com</td>
					<td>body pain</td>
					<td><button type="button" class="btn btn-default">confirm</button></td>
				</tr>
				<tr>
					<td>sarthak</td>
					<td>sarthak@gmail.com</td>
					<td>fungal infection</td>
					<td><button type="button" class="btn btn-default">confirm</button></td>
				</tr>
				<tr>
					<td>Ankush Jangid</td>
					<td>foocomer7@gmail.com</td>
					<td>insect bite</td>
					<td><button type="button" class="btn btn-default">confirm</button></td>
				</tr>
			</tbody>
		</table>
	</div>

	<div id="appconf" class="container">
		<h2>Confirmed Appointments</h2>
		<p>Your Confirmed Appointments</p>
		<table class="table table-hover">
			<thread>
				<tr>
					<th>Patient Name</th>
					<th>Email</th>
					<th>Symptoms</th>
					<th>date</th>
				</tr>
			</thread>
			<tbody>
				<tr>
					<td>yash jain</td>
					<td>yashu@gmail.com</td>
					<td>headache (potential drug abuse)</td>
					<td>21/04/16</td>
				</tr>
				<tr>
					<td>skd</td>
					<td>skd@gmail.com</td>
					<td>gupt rog</td>
					<td>23/04/16</td>
				</tr>
				<tr>
					<td>Sattu poddar</td>
					<td>sattu@gmail.com</td>
					<td>malnutrition</td>
					<td>18/04/16</td>
				</tr>
			</tbody>
		</table>
	</div>


</body>
</html>