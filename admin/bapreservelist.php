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
	<center><h1>Baptism List</h1></center>
	<hr>

	<center>
	<div style="width:90%">
		<table cellpadding="11" cellspacing="0" border="1" color='gray' class="table table-striped table-bordered" id="example">
			<thead>
				<tr>
				<th>Mother's Name</th>
				<th>Father's Last Name</th>
				<th>Address</th>
				<th>Email</th>
                                <th>Contact Number</th>
                                <th>Baby's Name</th>
				<th>Age</th>
				<th>Gender</th>
				<th>Date</th>
                                <th>Reception</th>
                                <th>Actions</th>
				</tr>
			</thead>
		
			<tbody>
				<?php 
				$sql = mysql_query("SELECT * FROM baptism ORDER BY id DESC");
                                
				while($row=mysql_fetch_array($sql)){
				?>			<tr>
					<td><?php echo $row['mname']; ?></td>
					<td><?php echo $row['fname']; ?></td>
					<td><?php echo $row['address']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['contact']; ?></td>
					<td><?php echo $row['bname']; ?></td>
					<td><?php echo $row['bage']; ?></td>
                                        <td><?php echo $row['gender']; ?></td> 
                                        <td><?php echo $row['date']; ?></td>
					<td><?php echo $row['reception']; ?></td>
					<td><a class="btn btn-success" href="#<?php echo '?id='.$row['user_id']; ?>">Confirm</a></td>
					
				</tr>
				<?php } ?>
			</tbody>
		</table>
			</center>
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
