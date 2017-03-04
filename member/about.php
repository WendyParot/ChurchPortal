<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>About Us</title>
        <link rel="stylesheet" type="text/css" href="../css/index.css">
       
    </head>
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
        
	
	  <li class="dropdown"><a href="#" class="dropbtn">Reservation</a>
            <div class="dropdown-content">
                
                <a href="baptism.php">Baptism</a>
		<a href="wedding.php">Wedding</a>
                <a href="funeral.php">Funeral</a>
				
	</li>
		<li>
		<a href="certificate.php">Request Certificate &nbsp &nbsp </a>
		</li>
                <li>
                    <a href="about.php">About Us &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
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
			echo '<a href="../logout.php">Log Out</a>';
			echo '<a href="../donate.php">Donate</a>';
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
		
		
		<!--</ul>-->
		 </nav>
		
	<div id="body">
	
	<div id="site_content">		
		
            <img src="../photo/prayi.jpg" width="100%" height="600px" align="left">
        <center> <h2>The Resurrection Parish Church 
Julugan Tanza, Cavite </h2>
                  </center>
        </div>
            
            <p><center><b>The Resurrection Parish Church</b><br>
                 
Email us:theresurrectionparish@yahoo.com <br>

Contact Number: <br>
Telephone:(046)437-7156 <br>
Cellphone:(Globe) 0935-616-8358 <br>
Cellphone:(Smart) 0919-458-1767 <br>
Office hours: <br>
Tuesday-Saturday 8:30 AM-11:30 AM & 2:30 PM-4:30 PM<br> 
Sunday 8:30 AM-11:30 AM (Half day only)	<br>
Monday CLOSED(No Transactions)</center></p>	









        
        <br>
        </div>
	</div> 
			
	<?php
	include 'footer.php';
	
      ?>
    </body>
</html>
