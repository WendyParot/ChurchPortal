<?php
include 'dbconnect.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
<link rel="stylesheet" type="text/css" href="css/home.css">
<link rel="shortcut icon" href="favicon.ico" />
    </head>
    <body>
      
      


<div id="wrapper"> 
	
	<?php
            include 'header.php';
        ?>
	
	
	
	
	<div id="nav">
		 <nav>
		<ul>
		<b><li>
		<a href="index.php">Home &nbsp &nbsp </a>
		</li>
                
		 <li class="dropdown"><a href="#" class="dropbtn">Reservation</a>
            <div class="dropdown-content">
                
                <a href="baptism.php">Baptism</a>
		<a href="wedding.php">Wedding</a>
                <a href="funeral.php">Funeral</a>
				
	</li>
		
                <li>
                    <a href="#">About Us &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
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
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                
                    &nbsp &nbsp
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</a>
		</li>
                <?php 
			if(!isset($_SESSION["id"])){
            echo '<li class="dropdown"><a href="#" class="dropbtn">Get Involved</a>';
            echo '<div class="dropdown-content">';
			echo '<a href="login.php">Log In</a>';
			echo '<a href="#">Donate</a>';
            echo '</div>';
			echo '</li>';
			}
			
			
        if(isset($_SESSION['id']))
        {
        ?>
        <li><a href="#">My Account</a></li>
        <?php
        }
        ?>
                </b>
		
		
		</ul>
		 </nav>
		
	<div id="body">
	
	<div id="image">		
		
            <img src="photo/guy.jpg" width="900px" height="500px" align="left alt="Sample"/>
           
        	 <div id="login">
            	
			<center><h1>Announcement</h1></center>
		</table>

				<div style="width:100%;">
				
			<center>	<table cellpadding="1" cellspacing="1" border="1" class="table table-striped table-bordered" id="example">

						<tr>
							<th>Event</th>
							<th>Message</th>
							
						</tr>

						<?php
						$sql = "select event,msg,date,time from announcement order by date desc";
						$query=mysql_query($sql)or die(mysql_error());
						while($row=mysql_fetch_array($query)){
						?>
						
						<tr>
						<td><?php echo $row[0]; ?></td>
						<td><?php echo $row[1]; ?></td></center>
						
						</tr>
						<?php } ?>

				</table>
				
			
</div>
	
                </div>   
</div>

	</div> 
           
	<?php
	include 'footer.php';
	
      ?>
    </body>
</html>
