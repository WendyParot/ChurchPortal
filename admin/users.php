<?php include('../dbconnect.php');
 include 'header.php';
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
        <link rel="stylesheet" type="text/css" href="../css/manage.css">
      
       
</head>


<?php include('../dbconnect.php'); ?>	
   
   
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
                
            
                <li class="dropdown"><a href="add_annoucement.php" class="dropbtn">Request     &nbsp &nbsp</a>
            <div class="dropdown-content">
                
                <a href="#">Baptism</a>
		<a href="#">Wedding</a>
                <a href="#">Funeral</a>
				
	</li>
		
                <li>
                    <a href="manageuser.php">Members &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
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
	
	
<div class="container">
      <img src="../photo/team.jpg" width="100%" height="500px" align="left">
   
          		<br>
		<br>
		<div class="row-fluid">
        <div class="span12">
	<center><h1>Manage User</h1></center>
	<hr>

	<center>
	<div style="width:90%">
		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			<thead>
				<tr>
				<th>Username</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>User level</th>
				</tr>
			</thead>
		
			<tbody>
				<?php 
				$sql = mysql_query("SELECT * FROM user ");
				while($row=mysql_fetch_array($sql)){
				?>
				<tr>
					<td><?php echo $row['user_name']; ?></td>
					<td><?php echo $row['fname']; ?></td>
					<td><?php echo $row['lname']; ?></td>
					<td><?php echo $row['user_level']; ?></td>
					<td><a class="btn btn-success" href="edit_user.php<?php echo '?id='.$row['user_id']; ?>">Edit</a></td>
					<td><a class="btn btn-danger" href="delete_user.php<?php echo '?id='.$row['user_id']; ?>">Delete</a></td>

				</tr>
				<?php } ?>
			</tbody>
		</table>
			
		</div>
	</center>	
        
	
</div>
      
            </div>
            </div>
                     </div>


			
	<?php
	include 'footer.php';
	
      ?>
    </body>
</html>
