<?php include('db.php');

?>
	<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin</title>
        <link rel="stylesheet" type="text/css" href="../css/admin.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <script src="../js/jquery.js" type="text/javascript"></script>
<script src="../js/bootstrap.js" type="text/javascript"></script>

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
                <li class="dropdown"><a href="add_annoucement.php" class="dropbtn">Announcement     &nbsp </a>
            <div class="dropdown-content">
                
                
		 <li class="dropdown"><a href="#" class="dropbtn">Request     &nbsp &nbsp</a>
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
   
        </div>
<br>
	<h1 align="center" style="color:#141E30;font-family:ethno;">ANNOUNCEMENT</font></h1>
			<hr style="border: 1px solid gray">
			<br>

		
			<table border=1 cellpadding=4 cellspacing=5 align=center  style="border: 1px solid #141E30; width:750px;">
	
				<tr>
					<th align="center" style="color:#141E30;font-family:rng; font-size:15px;">ID</th>
					<th align="center" style="color:#141E30;font-family:rng; font-size:15px;">Event</th>
					<th align="center" style="color:#141E30;font-family:rng; font-size:15px;">Message</th>
		
                                        <th align="center" style="color:#141E30;font-family:rng; font-size:15px;">Date</th>
					<th align="center" style="color:#141E30;font-family:rng; font-size:15px;">Time</th>
					<th align="center" style="color:#141E30;font-family:rng; font-size:15px;">Edit</th>
					<th align="center" style="color:#141E30;font-family:rng; font-size:15px;">Delete</th>
		
				</tr>

				<?php
					$loadtb = $db->query("select * from announcement");
					$count = $loadtb->rowCount();					
				?>

				<?php if($count>0): ?>
					<?php  foreach($loadtb as $record): ?>
					<tr>
					<td align="center" style="color:#141E30;font-family:rng; font-size:15px;"><?php echo $record['id']; ?></td>
					<td align="center" style="color:#141E30;font-family:rng; font-size:15px;"><?php echo $record['event']; ?></td>
					<td align="center" style="color:#141E30;font-family:rng; font-size:15px;"><?php echo $record['msg']; ?></td>
					
                                        <td align="center" style="color:#141E30;font-family:rng; font-size:15px;"><?php echo $record['date']; ?></td>
					<td align="center" style="color:#141E30;font-family:rng; font-size:15px;"><?php echo $record['time']; ?></td>
					
					<td align="center" style="color:#141E30;font-family:rng; font-size:15px;"><a href="edit_announcement.php
					<?php echo '?id='.$record['id']; ?>">Edit</a></td>
                                        <td align="center" style="color:#141E30;font-family:rng; font-size:15px;"><a href="delete_announcement.php
					<?php echo '?id='.$record['id']; ?>" onClick="return confirm('Delete This Announcement?')">Delete</a></td>
					</tr>
					<?php endforeach; ?>

				<?php else: ?>
				<td colspan="7" align="center" style="color:#141E30;font-family:rng; font-size:15px;">No Record</td>
				<?php endif; ?>

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
