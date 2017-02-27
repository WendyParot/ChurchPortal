<?php include('../dbconnect.php');

session_start();
$user = $_SESSION['username'];
$login=mysql_query("select * from user where user_name='$user'")or die(mysql_error());
$row=mysql_fetch_row($login);
$level = $row[3];

if ($level == 2)
	{
		header('location:../member/index.php');
	}

if ($level == '')
	{
		header('location:../index.php');
	}
?>
	<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin</title>
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
                <li class="dropdown"><a href="#" class="dropbtn">Announcement     &nbsp </a>
            <div class="dropdown-content">
                
                <a href="#">Add</a>
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
                <?php 
			if(!isset($_SESSION["id"])){
            echo '<li class="dropdown"><a href="../logout.php" class="dropbtn">Log Out</a>';
            echo '<div class="dropdown-content">';
			
                     
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
