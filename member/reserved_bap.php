<?php
session_start();

$mname = $_POST['mname'];
$fname = $_POST['fname'];
$address = $_POST['address'];
$email= $_POST['email'];
$contact = $_POST['contact'];
$bname = $_POST['bname'];
$bage = $_POST['bage'];
$gender = $_POST['gender'];
$date = $_POST['date'];
$reception = $_POST['reception'];
	
include '../dbconnect.php';

$sql_insert = "INSERT into baptism (mname, fname, address, email, contact, bname, bage, gender, date, reception) 
VALUES ('$mname', '$fname', '$address', '$email', '$contact', '$bname', '$bage', '$gender', '$date', '$reception')";
	$addstud = mysql_query ($sql_insert) or die (mysql_error());

?>
<script>
    alert("Successfully Submitted Request.");
    window.location="index.php";
</script>