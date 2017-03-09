<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Donate</title>
        <link rel="stylesheet" type="text/css" href="../css/donatemem.css">
         <script src="../js/jquery.js" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8" language="javascript" src="../js/jquery.dataTabless.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="../js/DT_bootstrap.js"></script>

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
                    <a href="donate.php">Donate &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
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
		
		
		<!--</ul>-->
		 </nav>
		
	<div id="body">
	
	<div id="site_content">		
		
            <img src="../photo/donate.jpg" width="100%" height="600px" align="left">
        </div>
 <div class="row-fluid">
 
 <div class="span12">
     
           <table>
            <p><center><b></b><br>
                 <br>
Giving money to a church is often called tithing or offering. 
                                                    The definition of tithe is the tenth part of income that is set aside for the church and is sometimes seen as an obligatory part of being a church member. 
                                                                                                        An offering is any donation amount a person wants to give. 
                                                   </center></p>	

    <center><a class="btn btn-success" href="#">Donate</a></center>


</table>


</div>
     </div>
        
        <br>
        </div>
	</div> 
			
	<?php
	include 'footer.php';
	
      ?>
    </body>
</html>
