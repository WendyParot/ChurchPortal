<?php include('../dbconnect.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin</title>
        <link rel="stylesheet" type="text/css" href="../css/home.css">
       
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
                
            
                <li class="dropdown"><a href="add_annoucement.php" class="dropbtn">Request     &nbsp &nbsp</a>
            <div class="dropdown-content">
                
                <a href="#">Baptism</a>
		<a href="#">Wedding</a>
                <a href="#">Funeral</a>
				
	</li>
		
                <li>
                    <a href="user.php">Members &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
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
     
          		<br>
		<br>
		<div class="row-fluid">
        <div class="span12">
	<center><h1>Wedding List</h1></center>
	<hr>

	
	<div style="width:90%">
		<table cellpadding="11" cellspacing="0" border="1" color='gray' class="table table-striped table-bordered" id="example">
			<thead>
				<tr>
				<th>Groom's Name</th>
				<th>Last Name</th>
				<th>Address</th>
				<th>Age</th>
				<th>Email</th>
                                <th>Contact Number</th>
                                <th>Groom's Name</th>
				<th>Last Name</th>
				<th>Address</th>
				<th>Age</th>
				<th>Email</th>
                                <th>Contact</th>
                                <th>Date of Wedding</th>
                                <th>Reception</th>
                                <th>Actions</th>
				</tr>
			</thead>
		
			<tbody>
				<?php 
				$sql = mysql_query("SELECT * FROM wedding ");
				while($row=mysql_fetch_array($sql)){
				?>
				<tr>
					<td><?php echo $row['gname']; ?></td>
					<td><?php echo $row['lname']; ?></td>
					<td><?php echo $row['add']; ?></td>
					<td><?php echo $row['age']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
					<td><?php echo $row['contact']; ?></td>
					<td><?php echo $row['bname']; ?></td>
					<td><?php echo $row['blname']; ?></td>
					<td><?php echo $row['badd']; ?></td>
					<td><?php echo $row['bage']; ?></td>
                                        <td><?php echo $row['bemail']; ?></td>
					<td><?php echo $row['bcontact']; ?></td>
                                        <td><?php echo $row['date']; ?></td>
					<td><?php echo $row['reception']; ?></td>
					<td><a class="btn btn-success" href="#<?php echo '?id='.$row['user_id']; ?>">Confirm</a></td>
					
				</tr>
				<?php } ?>
			</tbody>
		</table>
			
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
