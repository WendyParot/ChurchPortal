<?php include '../dbconnect.php';
ob_start();
session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Funerals</title>
        <link rel="stylesheet" type="text/css" href="../css/funrev.css">

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
	   <form class="form-horizontal" action="reserved_funeral.php" method="post"> 		<tr>
			<tr>
		<br>
		<td colspan="2" align="center">Applicant's Information<hr></b></td>
	</tr>

	<tr>
		<td>Name:</td>
		<td><input name="name" id="name" type="text" required></td>

	</tr>
	<tr>
		<td>Last Name:</td>
		<td><input name="lname" id="lname" type="text" required></td>

	</tr>
            	<tr>
		<td>Address:</td>
		<td><input name="add" id="add" type="text" required></td>

	</tr>
	<tr>
		<td>Email:</td>
		<td><input name="email" id="email" type="text" required></td>

	</tr>
            <tr>
		<td>Contact Number:</td>
		<td><input name="contact" id="contact" type="text" required></td>

	
        <tr>
		<br>
		<td colspan="2" align="center">Information Regarding Deceased
<hr></b></td>
	</tr>

	<tr>
		<td>Name:</td>
		<td><input name="dname" id="dname" type="text" required></td>

	</tr>
	<tr>
		<td>Last Name:</td>
		<td><input name="dlname" id="dlname" type="text" required></td>
                
	</tr>
            	<tr>
		<td>Relation to Applicant:</td>
		<td><input name="relationship" id="relationship" type="text" required></td>

	</tr>
	<tr>
		<td>Age:</td>
		<td><input name="age" id="age" type="text" required></td>

	</tr>
            <tr>
		<td>Date of Death:</td>
		<td><input name="death" id="death" type="date" required></td>

	</tr>
            <tr>
		<td>Location of Reception:</td>
                <td><input name="reception" id="reception" type="text" required></td>
</tr>
	<tr>
            
		<td>Date:</td>
		
                <td colspan=2><input type="date" name="date"></td>

	<center><tr>
		<td colspan=2 style="text-align: center;"><input type="submit" name="submit" value="SUBMIT" style="width: 100px; heigth: 50px;"/></td>


	</tr></center>



	

<br>

	



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
