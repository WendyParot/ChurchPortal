<?php
include('header.php');
?>
<body>
    

    <?php
    include('db.php');

    $id = $_GET['id'];
    $sql = "SELECT * FROM 
			announcement
			 WHERE
			id = ".$id;
    $result = mysql_fetch_array(mysql_query($sql));
    

    
    ?>
    
    
    <!DOCTYPE html>
<html>
<head>
	<title>Announcement</title>
<link rel="stylesheet" type="text/css" href="../css/announcement.css">
 

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
            </div>

<div id="body">

    
    <h1 align="center" style="color:#141E30;font-family:ethno;"><font  style="vertical-align:sub;margin-left:5px;">Edit Announcement</font></h1>
    <hr style="border: 1px solid #141E30">
    <br>





    <!---------------------------------------------------------------------------------->

    <form class="form-horizontal" action="update_announcement.php" method="post">    

<table border="0" align="center" cellpadding="10" style="border: 1px solid #141E30;">


        <center>
          <br>
            


            <br>
            <h2><font color="white">Event</h2></font>
            
<input name="event" id="event" type="text" value="<?= $result['event'] ?>" />

            <h2><font color="white">Message</h2></font>
            <textarea id="msg" rows="10" cols="50" name="msg" required value="<?= $result['msg'] ?>"></textarea>

            <br>
            <br>

            <input name="id" type="hidden" value="<?= $id?>">

            <input type="submit" value="update" name="sub_post">    </center>
</table>
       	
    </form>
    <!---------------------------------------------------------------------------------->	



</div>
                     </div>
		<?php
	include 'footer.php';
	
?>
</body>
</html>