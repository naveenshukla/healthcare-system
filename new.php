<?php 


$db_name="onlinehealth";
$server_name="localhost";
$mysql_pass="root";
$mysql_user="root";

$con = mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);
if(!$con){
	echo "Connection Error ...".mysqli_connect_error();
}
else{
	echo "<h3>Database Conncection Success..</h3>";
}
$email =$_POST['email'];
$diabetic =$_POST['diabetic'];
$operations=$_POST['operations'];
$allergies=$_POST['allergies'];
$bp =$_POST['bp'];
$sqlquery="insert into record (email,diabetic,operations,allergies,bp) values ('$email','$diabetic','$operations','$allergies','$bp');";

if(mysqli_query($con,$sqlquery))
{
$response['success'] =  1;
header("Location:newapp.html");
}
else
{
$response['success'] = 0;
//echo" <h3>insertionfailure</h3>".mysqli_error($connect);
}

echo json_encode($response);
?>

