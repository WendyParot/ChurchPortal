<?php include('../dbconnect.php');
include('header.php'); 
session_start();
include('../dbconnect.php');

$id =$_POST['id'];
$ev = $_POST['event'];
$ms = $_POST['msg'];

$sql = "insert into announcement(event,msg,date,time)
					values('$ev','$ms',CURDATE(),CURTIME())";
$addstud = mysql_query ($sql) or die (mysql_error());

header("location:index.php");
exit();

?>