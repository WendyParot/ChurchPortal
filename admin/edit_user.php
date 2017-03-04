<?php 
include('header.php');
?>
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
	
	
          		<br>
		<br>

<div class="container">
    &nbsp &nbsp<h1>Update User</h1>
<hr>
<?php
include('../dbconnect.php');

	$id=$_GET['id'];
	$sql = "SELECT * FROM 
			user 
			 WHERE
			 user_id = $id
			 ";
	$result = mysql_fetch_array(mysql_query($sql));

	if(!empty($_GET['error']) && $_GET['error']== '101'){
		$error = "The password did not match!";
	}else{
		$error = "";
	}

	?>
<form class="form-horizontal" action="update_user.php" method="post">    


	<div class="thumbnail">
		<div class="control-group">
	    	<label class="control-label" for="user_name"><b>Username</b> </label>&nbsp;
			<input name="user_name" id="user_name" type="text" value="<?= $result['user_name'] ?>" /><br>
			
			<label class="control-label" for="user_name"><b>First Name</b> </label>&nbsp;
			<input name="fname" id="fname" type="text" value="<?= $result['fname'] ?>" /><br>
			
			<label class="control-label" for="user_name"><b>Last Name</b> </label>&nbsp;
			<input name="lname" id="lname" type="text" value="<?= $result['lname'] ?>" /><br>
				
			<label class="control-label" for="n_pass"><b>New Password</b></label>&nbsp;
			<input name="n_pass" id="n_pass"  type="password"/><br>

			<label class="control-label" for="c_pass"><b>Confirm Password</b></label>&nbsp;
			<input name="c_pass" id="c_pass" type="password" /><br>

			<label class="control-label" for="user_level"><b>Level</b></label>&nbsp;
			<input name="user_level" id="user_level" type="text" value="<?php echo $result['user_level'] ?>" /><br>

		<input name="user_id" type="hidden" value="<?= $id ?>" />
	    </div>
	</div>
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;<input  class="btn btn-success" type="submit" name="btn_update" value="update"/>
</form>
</div>
<font color="red" style=" position: relative;left: 400px;"><?=$error?></font>
</div>
<?php
	include 'footer.php';
	
      ?>
</body>
</html>