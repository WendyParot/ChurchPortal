<?php
session_start();

$category = $_POST['certificatetype'];
$datebc = $_POST['datebc'];
$nameofchild = $_POST['nameofchild'];
$birthday = $_POST['bday'];
$birthplace = $_POST['birthplace'];
$residence = $_POST['residence'];
$father = $_POST['nameoffather'];
$mother = $_POST['nameofmother'];
$purpose = $_POST['purpose'];
$book = $_POST['bookno'];
$page = $_POST['pageno'];
$line = $_POST['lineno'];
	
include '../dbconnect.php';

$sql_insert = "INSERT into certificates (category, datebc, nameofchild, birthday, birthplace, residenceaddress, nameoffather, nameofmother, purpose, bookno, pageno, lineno) 
VALUES ('$category', '$datebc', '$nameofchild', '$birthday', '$birthplace', '$residence', '$father', '$mother', '$purpose', $book, $page, $line)";
	$addstud = mysql_query ($sql_insert) or die (mysql_error());


    header("Location:index.php");    


?>