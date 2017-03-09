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
$death = $_POST['death'];
$reception = $_POST['reception'];
$date = $_POST['date'];
	
include '../dbconnect.php';

$sql_insert = "INSERT into funeral (fname, lname, appaddress, age, email, contact, dname, dlname, relation, death, reception, dateoffuneral) 
VALUES ('$name', '$lname', '$add', '$age', '$email', '$contact', '$dname', '$dlname', '$relationship', '$death', '$reception','$date')";
	$addstud = mysql_query ($sql_insert) or die (mysql_error());


 

?>

<script>
    alert("Successfully Submitted Request.");
    window.location="index.php";
</script>