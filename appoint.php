<?php 


include 'dbconn.php';
session_start();
$patientemail=$_SESSION['email'];
//echo "$patientemail";
$spcl =$_POST['spcl'];
$details=$_POST['details'];
$date = $_POST['date'];
$sqlquery="insert into appointment (patientemail,speciality,details,status,date) values ('$patientemail','$spcl','$details','pending','$date');";

if(mysql_query("$sqlquery"))
{
$response['success'] =  1;
include 'appointsuccess.php';
}
else
{
	$response['success'] = 0;
}
?>

