<?php
		$host = "localhost";
		$username = "root";
		$password = "";
		$db_name = "reschurch";
		$tb_name = "announcement";

		$conn = new mysqli($host, $username, $password, $db_name);
			$con=mysql_connect($host,$username,$password)or die(mysql_error());
			mysql_select_db($db_name, $con) or die(mysql_error());
			
			
	
			$query = "update $tb_name set
			event = '".$_POST['event']."',
			msg	= '".$_POST['msg']."
			id = ".$_POST['id']."
			where
			id = ".$_POST['id'];
	
			
		$result = mysql_query($query);
		header('Location:index.php');			
?>
