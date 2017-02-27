<?php include('../dbconnect.php');

session_start();

$user = $_SESSION['username'];
$login=mysql_query("select * from user where user_name='$user'")or die(mysql_error());
$row=mysql_fetch_row($login);
$_SESSION['userid'] = $row[0];
$level = $row[3];
$name = $row[1];

?>
	<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Account</title>
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
                <li>
                    <a href="#">Announcements &nbsp &nbsp </a>
		</li>
		 <li class="dropdown"><a href="#" class="dropbtn">Reservation</a>
            <div class="dropdown-content">
                
                <a href="rebaptism.php">Baptism</a>
		<a href="rewedding.php">Wedding</a>
                <a href="refuneral.php">Funeral</a>
				
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
                    &nbsp &nbsp
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</a>
		</li>
                <?php 
			if(!isset($_SESSION["id"])){
            echo '<li class="dropdown"><a href="#" class="dropbtn">Get Involved</a>';
            echo '<div class="dropdown-content">';
			echo '<a href="#">Donate</a>';
                        echo '<a href="../logout.php">Log Out</a>';
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
	
	<div id="site_content">		
		
            <img src="../photo/cnf.jpg" width="100%" height="500px" align="left">
        </div>
           

	</div> 
			
	<?php
	include 'footer.php';
	
      ?>
    </body>
</html>
