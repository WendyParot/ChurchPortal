<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Baptism</title>
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
			echo '<a href="donate.php">Donate</a>';
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
		
	<img src="../photo/bappp.jpg" width="100%" height="500px" align="left">
        <center> <h2>BAPTISM</h2>
                  </center>
        </div>
            <p><center>The Catholic Sacrament of Baptism. Baptism is the one sacrament that all Christian denominations share in common.</center></p>
		
        <form name="announcement" method="POST" action="reserve_baptism.php" enctype="multipart/form-data">
					
         <center>   <button style="font-size:15pt;font-weight: bold;color:gray;input:focus{background-color:gray}">RESERVE</button></center>
           
        </form>
        <br>
        </div>
	</div> 
			
	<?php
	include 'footer.php';
	
      ?>
    </body>
</html>
