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
	 <form name="wedding" method="POST" action="reserved_funeral.php" enctype="multipart/form-data">
			<tr>
		<br>
		<td colspan="2" align="center">Applicant's Information<hr></b></td>
	</tr>

	<tr>
		<td>Name:</td>
		<td><input type="text" name="name" size="30" required></td>

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
		<td>Email:</td>
		<td><input type="text" name="email" size="30" required></td>

	</tr>
            <tr>
		<td>Contact Number:</td>
		<td><input type="text" name="contact" size="30" required></td>

	
        <tr>
		<br>
		<td colspan="2" align="center">Information Regarding Deceased
<hr></b></td>
	</tr>

	<tr>
		<td>Name:</td>
		<td><input type="text" name="dname" size="30" required></td>

	</tr>
	<tr>
		<td>Last Name:</td>
		<td><input type="text" name="dlname" size="30" required></td>
                
	</tr>
            	<tr>
		<td>Relation to Applicant:</td>
		<td><input type="text" name="relationship" size="30" required></td>

	</tr>
	<tr>
		<td>Age:</td>
		<td><input type="text" name="bage" size="30" required></td>

	</tr>
            <tr>
		<td>Special stories/anecdotes or themes to be included as part of ceremony
:</td>
		<td><input type="text" name="stories" size="40" required></td>
                
	</tr>
                <tr>
		<td>
Special scripture to include in ceremony, if any:</td>
		<td><input type="text" name="scripture" size="40" required></td>

	</tr>

            <tr>
		<td>Location of Reception:</td>
                <td><input type="text" name="reception" size="30" required></td>
</tr>
	<tr>
            
		<td>Date:</td>
		
                <td colspan=2><input type="datetime-local" name="date"></td>

	<center><tr>
		<td>  <a class="btn btn-success" href="reserve_funeral.php">Reserve</a></td>
  

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
