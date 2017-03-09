<html>
<head>
<TITLE>FORGOT PASSWORD</TITLE>
<link rel="stylesheet" type="text/css" href="../css/forgot.css">
<br>	
 <div id="reg">	

<img src= "../photos/res.png" width="500px" height ="150px" >

	<form action="" name="form_sub" method="POST" enctype="multipart/form-data">

		<center><h1>Forgot Password</h1>

	
		<table>
		<tr> 
		<b>
		Email <br>
		<input type="email" name="email" size="30" required><b>
		<br>
		<br>
		</tr>
		<tr>
	

		<center><br><input type="submit" onclick="sub()" name="forgot_sub" value="SUBMIT" class="btn-login"></center></a>

	</form>

</div>
</body>
</html>
</head>

<?php
include 'dbconnect.php';
require_once('../PHPMailer/class.phpmailer.php');
require '../PHPMailer/PHPMailerAutoload.php';

if(isset($_POST['forgot_sub']))
{

	$email = $_POST['email'];
	$sql_select = "SELECT * from users where email='$email'";
	$stmt = $con->prepare($sql_select);
	$stmt->execute();
	$rowc = $stmt->rowCount();

	if($rowc != 0)
	{
		$row = $stmt->fetch( PDO::FETCH_ASSOC );


			$mail = new PHPMailer;
			$mail->isSMTP();
			$mail->SMTPDebug = 0;
			$mail->SMTPOptions = array(
					'ssl' => array(
					'verify_peer' => false,
					'verify_peer_name' => false,
					'allow_self_signed' => true
					)
					);
			$mail->Debugoutput = 'html';
			$mail->Host = 'smtp.gmail.com';
			$mail->Port = 465;
			$mail->SMTPSecure = 'ssl';
			$mail->SMTPAuth = true;
			$mail->Username = "reschurch83@yahoo.com";
			$mail->Password = "julugan1983";
			$mail->setFrom('reschurch83@yahoo.com', 'Lucky Day');
			$mail->addAddress($row["email"]);
			$mail->Subject = 'Forgot Password - The Resurrection Parish Julugan';
			$mail->Body      = "Hi \n\n".
								"Your password is: {$row['pword']}\n\n".
								"Please dont forget your password next time.";
			$mail->send();
	?>
			<script>
			alert("Please check your email to retrieved");
			window.location.href =  "http://localhost/churchportal/login.php";
			</script>
		<?php
	}else
	{
		?>
		<script>
		alert("Invalid Email")
		</script>
		<?php
	}

}

?>
