<?php include('dbconnect.php');

session_start();
// $user = $_SESSION['username'];
// $login=mysql_query("select * from user where username='$user'")or die(mysql_error());
// $row=mysql_fetch_row($login);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
<link rel="stylesheet" type="text/css" href="css/register.css">

    </head>
    <body>
      
      


<div id="wrapper"> 
	
	<div id="header"> 
	<img src="photo/res.png"  width="40%" height="100%">	
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
		
		
		</ul>
		 </nav>
		
	<div id="body">
	
	<div id="site_content">		
		
            <img src="photo/man.jpg" width="900px" height="500px" align="left">
	
	
		<div id="login">

<div class="container">
    <br>
    <br>
<center><h1>Register</h1></center>
<hr>
<form class="form-horizontal" action="insert_user.php" method="post">    


	<div class="thumbnail">
		<div class="control-group">
	<center>	
            <br>
			<label class="control-label" for="user_name">First Name: </label>&nbsp;
			<input name="fname" id="fname" type="text" required><br>
                        <br>	
			<label class="control-label" for="user_name">Last Name: </label>&nbsp;
			<input name="lname" id="lname" type="text" required><br>
                        <br>
			<label class="control-label" for="user_name">Username: </label>&nbsp;
			<input name="uname" id="user_name" type="text" required><br>
                        <br>	
			<label class="control-label" for="n_pass">Password:</label>&nbsp;&nbsp;
			<input name="upass" id="n_pass"  type="password" required><br>
                        <br>    
			<label class="control-label" for="user_level">Level:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input name="user_level" id="user_level" type="text" required placeholder="2"><br>

		<input name="user_id" type="hidden" value="<?= $id ?>" />
                </center>
	    </div>
	</div>
    <br>
    <center><input  class="btn btn-primary" type="submit" name="btn_update" value="Sign Up"/></center>
</form>

</div>
<font color="red" style=" position: relative;left: 400px;"></font>

                </div>
<?php
	include 'footer.php';
	
      ?>


</body>
</html>