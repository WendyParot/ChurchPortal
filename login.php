<?php include('dbconnect.php'); 

$login=mysql_query("select * from user")or die(mysql_error());
$row=mysql_fetch_row($login);
$level = $row[3];

session_start();
session_destroy();
session_start();			
if (isset($_SESSION['username'])){
	if ($level == 1)
		{
			header('location:admin/index.php');
		}
						
	if ($level == 2)
		{
			header('location:member/index.php');
		}
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Log In</title>
<link rel="stylesheet" type="text/css" href="css/log.css">

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
                    <a href="about.php">About Us &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
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
		
            <img src="photo/prayer.jpeg" width="900px" height="500px" align="left">
	</div>
	<div class="row-fluid">
 
 <div class="span12">

		<div id="login">
                    
                    
                    <br>
                                        <br>
                                                            <br>
<hr>
                    <br>
                    <center><b>
			<form method="post"> 
			<table>
				<tr>
					<td><label>User Name</label></td>
                                </tr>        
					<td><input type="text" id="username" name="username" placeholder="" required></td>
			
				
				<tr>
					<td><label>Password</label></td>
                                   </tr>    
					<td><input type="password" id="password" name="password" placeholder="" required></td>
				
                                <br>
                         
				<br>
				<tr>
					
                                <br>
					<td><button type="submit" id="submit" name="submit" class="btn btn-success">Login</button></td>
				</tr>
				
			
			</table>
                            <br>
                            <br>
                            <a href="forgot.php">Forgot Password?</a>&emsp;&emsp;&emsp;
			Not yet registered?&nbsp;<a href="register.php">Sign Up!</a>
			</form>
                        </b>
			</center>
			<?php
				if (isset($_POST['submit'])){
				$username=$_POST['username'];
				$password=($_POST['password']);
				
				$login=mysql_query("select * from user where user_name='$username' and user_password='$password'")or die(mysql_error());
				$count=mysql_num_rows($login);
				
				$row=mysql_fetch_row($login);
				$level = $row[3];
				
				
				if ($count > 0){
				
				$_SESSION['username']=$row[1];
					if ($level == 1)
						{
							header('location:admin/index.php');
						}
						
					if ($level == 2)
						{
							header('location:member/index.php');
						}

				}
				
				else{ ?>
				<script type="text/javascript">
					alert("Error Login! Wrong Combination of Username and Password!");
				</script>
				<!--<div class="alert alert-error">Error login! Please check your username or password</div>
				--><?php
				}}
				?>
			</div>	
				
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