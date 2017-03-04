<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Wedding Application</title>
        <link rel="stylesheet" type="text/css" href="../css/reserve.css">

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
		
		
		<center>
		
	<table border="0" cellpadding="8%">
	 <form name="wedding" method="POST" action="reserved_wed.php" enctype="multipart/form-data">
			<tr>
		<br>
		<td colspan="2" align="center">Groom's Information<hr></b></td>
	</tr>

	<tr>
		<td>Groom's Name:</td>
		<td><input type="text" name="gname" size="30" required></td>

	</tr>
	<tr>
		<td>Last Name:</td>
		<td><input type="text" name="lname" size="30" required></td>

	</tr>
            	<tr>
		<td>Address:</td>
		<td><input type="text" name="add" size="30" required></td>

	</tr>
	<tr>
		<td>Age:</td>
		<td><input type="text" name="age" size="30" required></td>

	</tr>
            <tr>
		<td>Email:</td>
		<td><input type="text" name="email" size="30" required></td>

	</tr>
                <tr>
		<td>Contact Number:</td>
		<td><input type="text" name="contact" size="30" required></td>

	</tr>

        <tr>
		<br>
		<td colspan="2" align="center">Bride's Information<hr></b></td>
	</tr>

	<tr>
		<td>Bride's Name:</td>
		<td><input type="text" name="bname" size="30" required></td>

	</tr>
	<tr>
		<td>Last Name:</td>
		<td><input type="text" name="blname" size="30" required></td>

	</tr>
            	<tr>
		<td>Address:</td>
		<td><input type="text" name="badd" size="30" required></td>

	</tr>
	<tr>
		<td>Age:</td>
		<td><input type="text" name="bage" size="30" required></td>

	</tr>
            <tr>
		<td>Email:</td>
		<td><input type="text" name="bemail" size="30" required></td>
                
	</tr>
                <tr>
		<td>Contact Number:</td>
		<td><input type="text" name="bcontact" size="30" required></td>

	</tr>

            <br>
		<td colspan="2" align="center">Wedding Information<hr></b></td>
	</tr>

	<tr>
		<td>Date:</td>
		
                <td colspan=2><input type="datetime-local" name="date"></td>

	</tr>
	
           
		<td>Location of Reception:</td>
                <td><input type="text" name="reception" size="30" required></td>

	
	<tr>
		<td><button style="font-size:15pt;font-weight: bold;color:gray;input:focus{background-color:gray}">RESERVE</button></td>
           

	</tr>



	



</table>
      </center>          
                 
               
			</div>
		</div>
		
	<?php
        include 'footer.php';
        ?>
	 </body>
</html>
