<?php
	include '../dbconnect.php';
session_start();


$sql = "UPDATE user SET
		msg = '".$_POST['msg']."' ,
		event = '".$_POST['event']."',
                    id = '".$_POST['id']."'
		WHERE
		id = ".$_POST['id'] ;
$result = mysql_query($sql);
	
	header( 'Location:index.php' ) ;
?>
<script>
    alert("<?php echo $result; ?>");
    </script>