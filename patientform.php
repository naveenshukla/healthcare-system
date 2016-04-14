<?php
$varify = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fullName = $_POST['fullName'];
  $bloodgroup = $_POST['bGroup'];
  $bDate = $_POST['bDate']; 
  $sex = $_POST['sex'];
  $state = $_POST['state'];
  $city  = $_POST['city'];
  $pin = $_POST['pin'];
  $area = $_POST['area'];
  $eMail = $_POST['eMail'];
  $pwd = $_POST['pwd'];
  $servername = "localhost";  
  $username = "root";
  $password = "shukla123";
  $conn = mysql_connect($servername,$username,$password);

 /* if($conn->connect_error){
    die("connection failed : ".$conn->connect_error);
  }*/
  //echo "connected successfully";
  $result = mysql_select_db('online_health',$conn);
  if($result === FALSE){
  //echo "no such db exists ";
  $sql = "CREATE DATABASE online_health";
  mysql_query("$sql");
  }
  $result = mysql_select_db('online_health',$conn);
  if($result === FALSE){
  //echo "failed ";
  } 
  else{
   //echo "passed ";
  }
  $val = mysql_query('select 1 from `patient` LIMIT 1');
  $sql_insert = "INSERT INTO patient
  VALUES ('$eMail','$fullName','$sex','$bloodgroup','$bDate','$state','$city','$pin','$area','$pwd')";
  if($val !== FALSE)  
    {
   //DO SOMETHING! IT EXISTS!

    $check_email = "select * from patient where eMail ='$eMail'";
    $result = mysql_query("$check_email");
    if(mysql_num_rows($result)!=0){
      $varify = "Email already exists!!!";
      include 'patient.php';
    }
    else{
      mysql_query($sql_insert,$conn);
      include 'success.php';
      include 'index.php';
    }
    //echo "it exists!!!!";
    }
    else{
    $sql = "CREATE TABLE Patient(
    email VARCHAR(30) PRIMARY KEY,
    fullname VARCHAR(30) NOT NULL,
    sex VARCHAR(5) NOT NULL,
    bloodgroup VARCHAR(3),
    birthdate VARCHAR(10),
    state VARCHAR(15),
    city VARCHAR(25),
    pincode INTEGER(6),
    locality VARCHAR(50),
    password VARCHAR(50)
    )";
    mysql_query($sql,$conn);
    mysql_query($sql_insert,$conn);
  }

}
else include 'patient.php'; 
?>