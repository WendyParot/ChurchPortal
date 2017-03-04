<?php
include('../dbconnect.php');
$id=$_GET['id'];

mysql_query("delete from announcement where id='$id'")or die(mysql_error());
header( 'Location:index.php' );



?>