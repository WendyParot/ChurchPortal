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
$weddate = $_POST['weddate'];
$reception = $_POST['reception'];
	
include '../dbconnect.php';

$sql_insert = "INSERT into wedding (gname, lname, `add`, age, email, contact, bname, blname, badd, bage, bemail, bcontact, weddate, reception)
VALUES ('$gname', '$lname', '$add', '$age', '$email', '$contact', '$bname', '$blname', '$badd','$bage', '$bemail', '$bcontact', '$weddate', '$reception')";
	$addstud = mysql_query ($sql_insert) or die (mysql_error());


    


?>
<script>
    alert("Successfully Submitted Request.");
    window.location="index.php";
</script>