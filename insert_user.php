<?php include('dbconnect.php');
include('header.php'); 
session_start();
include('dbconnect.php');

$fn = $_POST['fname'];
$ln = $_POST['lname'];
$un = $_POST['uname'];
$up = $_POST['upass'];
$lvl = $_POST['user_level'];

$sql = "insert into user(user_name,user_password,user_level,fname,lname)
					values('$un','$up','$lvl','$fn','$ln')";
$addstud = mysql_query ($sql) or die (mysql_error());

header("location:login.php");
exit();

?>