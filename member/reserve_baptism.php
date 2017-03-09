<?php include '../dbconnect.php';
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Baptism Application</title>
        <link rel="stylesheet" type="text/css" href="../css/wedrev.css">

    </head>
    <body>
      
   


<div id="wrapper"> 
	
	<div id="header"> 
	<center><img src="../photo/res.png"  width="40%" height="100%"></center>	
	</div>

	
	
	
	<div id="body">
	
	<div id="sti">
	<center>
		</center>
	</div>
	<div id="one">
 <div class="row-fluid">
 
 <div class="span12">
  		
		
		<center>
		
	<table border="0" cellpadding="8%">
            <form class="form-horizontal" action="reserved_bap.php" method="post"> 		<tr>
		<br>
		<td><a colspan="2" align="center">Parent's Name<hr></b></td>
	</tr>

	<tr>
		<td>Mother's Name:</td>
		<td><input name="mname" id="mname" type="text" required></td>

	</tr>
	<tr>
		<td>Father's Name:</td>
		<td><input name="fname" id="fname" type="text" required></td>

	</tr>
            	<tr>
		<td>Address:</td>
		<td><input name="address" id="address" type="text" required></td>

	</tr>
	    <tr>
		<td>Email:</td>
		<td><input name="email" id="email" type="text" required></td>

	</tr>
                <tr>
		<td>Contact Number:</td>
		<td><input name="contact" id="contact" type="text" required></td>

	</tr>

        <tr>
		<br>
		<td colspan="2" align="center">Baby's Information<hr></b></td>
	</tr>

	<tr>
		<td>Baby's Name:</td>
		<td><input name="bname" id="bname" type="text" required></td>

	</tr>
		<tr>
		<td>Age:</td>
		<td><input name="bage" id="bage" type="text" required></td>

	</tr>
        <tr>
		<td> Gender:</td>
                <td> <input type="radio" name="gender" value="F"required>Female &nbsp;<input type="radio" name="gender" value="pm"required>Male </td>
			
	</tr>
          
	<tr>
		<td>Date:</td>
		
                <td colspan=2><input type="date" name="date"></td>

	</tr>
	
           
		<td>Location of Reception:</td>
                <td><input name="reception" id="reception" type="text" required></td>

	
	<center><tr>
		<td colspan=2 style="text-align: center;"><input type="submit" name="submit" value="SUBMIT" style="width: 100px; heigth: 50px;"/></td>


	</tr></center>
</form>


	



</table>
      </center>          
                 
               
			</div>
		</div>
            	</div>
		</div>
		
	<?php
        include 'footer.php';
        ?>
	 </body>
</html>
