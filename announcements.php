<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
<link rel="stylesheet" type="text/css" href="css/index.css">

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
                <li>
                    <a href="announcements.php">Announcements &nbsp &nbsp </a>
		</li>
		 <li class="dropdown"><a href="#" class="dropbtn">Reservation</a>
            <div class="dropdown-content">
                
                <a href="#">Baptism</a>
		<a href="#">Wedding</a>
                <a href="#">Funeral</a>
				
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
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</a>
		</li>
                <?php 
			if(!isset($_SESSION["id"])){
            echo '<li class="dropdown"><a href="#" class="dropbtn">Get Involved</a>';
            echo '<div class="dropdown-content">';
			echo '<a href="GetInvolved/login.php">Log In</a>';
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
	
		
	
	
</div>

	</div> 
			
	<?php
	include 'footer.php';
	
      ?>
    </body>
</html>
