<?php
session_start();

$name = $_POST['name'];
$lname = $_POST['lname'];
$add = $_POST['add'];
$age = $_POST['age'];
$email= $_POST['email'];
$contact = $_POST['contact'];
$dname = $_POST['dname'];
$dlname = $_POST['dlname'];
$relationship = $_POST['relationship'];
$stories = $_POST['stories'];
$scripture = $_POST['scripture'];
	
include '../dbconnect.php';

$sql_insert = "INSERT into funeral (name, lname, add, age, email, contact, dname, dlname, relationship, stories, scripture) 
VALUES ('$name', '$lname', '$add', '$age', '$email', '$contact', '$dname', '$dlname', '$relationship', '$stories', '$scripture')";
	$addstud = mysql_query ($sql_insert) or die (mysql_error());


 echo'name';    


?>