<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Request Certificate</title>
        <link rel="stylesheet" type="text/css" href="../css/funn.css">

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
                    <a href="../donate.php">Donate &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                      &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
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
            echo '<li class="dropdown"><a href="../logout.php" class="dropbtn">Log Out</a>';
           
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
		
	<img src="../photo/diedd.jpg" width="100%" height="500px" align="left">
	<center><h2>FUNERAL</h2></center>
	
</div>
   <div class="row-fluid">
 
 <div class="span12">
                   
            <p><center> "At the death of a Christian, whose life of faith was begun in the waters of Baptism and strengthened at the Eucharistic table, <br>
		the Church intercedes on behalf of the deceased because of its confident belief that death is not the end, nor does it break the bonds forged in life. <br>
		The Church also ministers to the sorrowing and consoles them in the funeral rites with the comforting Word of God and the Sacrament of the Eucharist."<br>
		
		(Order of Christian Funerals, no. 4)</center></p>
                
                <center><a class="btn btn-success" href="reserve_funeral.php">Reserve</a></center>
        <br>
       	</div>
       	</div>
            	</div>
			
	<?php
	include 'footer.php';
	
      ?>
    </body>
</html>
