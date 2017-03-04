<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Request Certificate</title>
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
		<a href="Request.php">Request Certificate &nbsp &nbsp </a>
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
		
	<img src="../photo/wed.jpg" width="100%" height="500px" align="left">
	<center><h2>WEDDING</h2></center>
	
</div>
         
            <p><center>Marriage in the Catholic Church, also called matrimony, is the "covenant by which a man and a woman establish between themselves a partnership of the whole of life
		 and which is ordered by its nature to the good of the spouses and the procreation and education of offspring",
		 and which "has been raised by Christ the Lord to the dignity of a sacrament between the baptised." Catholic matrimonial law,
		 based on Roman law regarding its focus on marriage as a free mutual agreement or contract, became the basis for the marriage law of all European countries, at least up to the Reformation.</center></p>
	
         <form name="announcement" method="POST" action="reserve_wedding.php" enctype="multipart/form-data">
					
         <center>   <button style="font-size:15pt;font-weight: bold;color:gray;input:focus{background-color:gray}">RESERVE</button></center>
        <br>
        </div> 
            
            
			
	<?php
	include 'footer.php';
	
      ?>
    </body>
</html>
