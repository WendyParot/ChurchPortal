<?php
include('../dbconnect.php');
$id=$_GET['id'];

mysql_query("delete from user where user_id='$id'")or die(mysql_error());
header( 'Location:manageuser.php' );



?>