

<!DOCTYPE html>
<html>
<head>
	<title>Announcement</title>
<link rel="stylesheet" type="text/css" href="../css/announcement.css">
 

<body>


<div id="wrapper"> 
	
	<div id="header"> 
	<img src="../photo/res.png"  width="40%" height="100%">	
	</div>

	
	
	
	<div id="nav">
		 <nav>
		<ul>
		<b><li>
		<a href="index.php">Home &nbsp &nbsp </a>
		</li>
                <li class="dropdown"><a href="#" class="dropbtn">Announcement     &nbsp </a>
            <div class="dropdown-content">
                
                <a href="add_annoucement.php">Add</a>
		<a href="#">Edit</a>
                <a href="#">Delete</a>
                
		 <li class="dropdown"><a href="#" class="dropbtn">Request     &nbsp &nbsp</a>
            <div class="dropdown-content">
                
                <a href="#">Baptism</a>
		<a href="#">Wedding</a>
                <a href="#">Funeral</a>
				
	</li>
		
                <li>
                    <a href="#">Members &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    &nbsp &nbsp      &nbsp &nbsp     &nbsp &nbsp
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</a>
		</li>
            </div>

	<div id="body">
	
<h1 align="center" style="color:white;font-family:arial;"><font  style="vertical-align:sub;margin-left:5px;">Announcement</font></h1>
			
			<br>
			
					<form name="announcement" method="POST" action="insert_announcement.php" enctype="multipart/form-data">
					<table border="0" align="center" cellpadding="10" style="border: 1px solid #141E30;">
						
						<th style="color:white;font-family:arial;font-size:20px; text-align:left;">Event</th>								
						<tr>
							<td align="left"><input type="text" name="event" size="65" required></td>
						</tr>
						
						<th style="color:white;font-family:arial;font-size:20px; text-align:left;">Message</th>
						
						<tr>
							<td>
							<textarea rows="15" cols="80" name="msg" required></textarea>
							</td>
						</tr>
						<tr>
							<td align="right"><input type="submit" value="Submit"></td>
						</tr>


					</table>
					</form>
				

</div>
	
	
	
	
	
	
</div>
		<?php
	include 'footer.php';
	
      ?>
	
	
	</body>
</html>