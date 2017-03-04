<?php
session_start();

$gname = $_POST['gname'];
$lname = $_POST['lname'];
$add = $_POST['add'];
$age = $_POST['age'];
$email= $_POST['email'];
$contact = $_POST['contact'];
$bname = $_POST['bname'];
$blname = $_POST['blname'];
$badd = $_POST['badd'];
$bemail = $_POST['bemail'];
$bcontact = $_POST['bcontact'];
$date = $_POST['date'];
$time = $_POST['time'];
$reception = $_POST['reception'];
	
include '../dbconnect.php';

$sql_insert = "INSERT into wedding (gname, lname, add, age, email, contact, bname, blname, badd, bemail, bcontact, date, time, reception) 
VALUES ('$gname', '$lname', '$add', '$age', '$email', '$contact', '$bname', '$blname', '$badd', '$bemail', '$bcontact', '$date', '$time', '$reception')";
	$addstud = mysql_query ($sql_insert) or die (mysql_error());


 echo'gname';    


?>