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
$bage = $_POST['bage'];
$bemail = $_POST['bemail'];
$bcontact = $_POST['bcontact'];
$date = $_POST['date'];
$reception = $_POST['reception'];
	
include '../dbconnect.php';

$sql = "INSERT into wedding 
VALUES ('$gname', '$lname', '$add', '$age', '$email', '$contact', '$bname', '$blname', '$badd','$bage', '$bemail', '$bcontact', '$date', '$reception')";
	$addstud = mysql_query ($sql) or die (mysql_error());


 echo'gname';    


?>