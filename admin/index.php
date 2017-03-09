<?php include('db.php');

?>
	<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin</title>
        <link rel="stylesheet" type="text/css" href="../css/manage.css">
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
                
                <a href="bapreservelist.php">Baptism</a>
                <a href="wedreservelist.php">Wedding</a>
                <a href="funreservelist.php">Funeral</a>
				
	</li>
		
                <li>
                    <a href="users.php">Members &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
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
<div class="row-fluid">
 
 <div class="span12">
	
	<h1 align="center" >ANNOUNCEMENT</font></h1>
			<hr style="border: 1px solid gray">
			<br>

		
			<div style="width:90%">
		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
	
				<tr>
					<th align="center" >ID</th>
					<th align="center" >Event</th>
					<th align="center" >Message</th>
		
                                        <th align="center" >Date</th>
					<th align="center" >Time</th>
					<th align="center" >Edit</th>
					<th align="center" >Delete</th>
		
				</tr>

				<?php
					$loadtb = $db->query("select * from announcement");
					$count = $loadtb->rowCount();					
				?>

				<?php if($count>0): ?>
					<?php  foreach($loadtb as $record): ?>
					<tr>
					<td align="center"><?php echo $record['id']; ?></td>
					<td align="center"><?php echo $record['event']; ?></td>
					<td align="center"><?php echo $record['msg']; ?></td>
					
                                        <td align="center"><?php echo $record['date']; ?></td>
					<td align="center"><?php echo $record['time']; ?></td>
					
					<td><a class="btn btn-success" href="edit_announcement.php<?php echo '?id='.$row['id']; ?>">Edit</a></td>
					<td><a class="btn btn-danger" href="delete_announcement.php<?php echo '?id='.$row['id']; ?>">Delete</a></td>
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
                     
		</div>	
                    
		</div>	
    	<?php
	include 'footer.php';
	
      ?>
    </body>
</html>
