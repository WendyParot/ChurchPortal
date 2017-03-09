<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Request Certificate</title>
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
                <li class="dropdown"><a href="#" class="dropbtn">Reservation</a>
            <div class="dropdown-content">
                
                <a href="baptism.php">Baptism</a>
		<a href="wedding.php">Wedding</a>
                <a href="funeral.php">Funeral</a>
				
	</li>
		<li>
		<a href="Request.php">Request Certificate &nbsp &nbsp </a>
		</li>
                <li>
                    <a href="donate.php">Donate &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                       &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
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
            echo '<li class="dropdown"><a href="../logout.php" class="dropbtn">Log Out</a>';
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
		
	<img src="../photo/bappp.jpg" width="100%" height="500px" align="left">
        <center> <h2>BAPTISMAL</h2>
                  </center>
        </div>
            <br>
            <p><center>The Catholic Sacrament of Baptism. Baptism is the one sacrament that all Christian denominations share in common.</center></p>
		
<center>

<br><br>


<form class="paypal" action="add_baptism.php" method="post" id="paypal_form" novalidate>
<div class="boxed_item3" id="step1" >
<center><div class = "boxed_item2"><b>THE RESURRECTION PARISH <br>Request Certificates</b></div></center>

<div class="float_div">
<br><br>
<table border=0 width="450px">


<tr>
<td width="120px">
<?php

if(isset($_GET['certype']))
   {
		?>
		<input type='text' class = "input_width3" name="cert" value='<?php echo $_GET['certype'];?>' readonly/>
       <?php
   }
   else
   {
   	?>
   Certificate Requested: <label for="certificate" > </label>
   <input type="hidden" name="certificatetype" value="Baptismal">
   <?php
   }
   ?>
   </td>
   <td colspan=2>Baptismal</td>
	</tr>
	
	<tr>
		<td width="300px"><label for="depdate" name="cert">Date of Baptismal/Confirmation</label></td>

		<td colspan=2><input type="datetime-local" name="datebc"></td>
	</tr>
	
	<tr>
		<td></td>
	</tr>
	
    <tr>
		<td><label for="depdate" >Name of Child: </label></td>
		<td colspan=2><input type="text" name="nameofchild" size=26></td>
	</tr>
	
	<tr>
		<td></td>
	</tr>

	<tr>
		<td><label for="depdate" >Birthday</label></td>
		<td colspan=2><input type="datetime-local" name="bday"></td>
	</tr>
	
	<tr>
		<td></td>
	</tr>

	<tr>
		<td><label for="depdate" >Place of Birth: </label></td>
		<td colspan=2><input type="text" name="birthplace" size=26></td>
	</tr>
	
	<tr>
		<td><label for="depdate" >Present Residence: </label></td>
		<td colspan=2><input type="text" name="residence" size=26></td>
	</tr>
	
	<tr>
		<td><label for="depdate" >Name of Father: </label></td>
		<td colspan=2><input type="text" name="nameoffather" size=26></td>
	</tr>
	
	<tr>
		<td><label for="depdate" >Mother's Maiden Name: </label></td>
		<td colspan=2><input type="text" name="nameofmother" size=26></td>
	</tr>
	
	<tr>
		<td><label for="depdate" >Purpose: </label></td>
		<td colspan=2><input  type="text" name="purpose" size=26></td>
	</tr>
	
	<tr>
		<td><label for="depdate" name="book">Book #: </label></td>
		<td><input type="text" name="bookno" size=26></td>
	</tr>
	<tr>	
		<td><label for="depdate" name="page">Page #: </label></td>
		<td><input type="text" name="pageno" size=26></td>
	</tr>
	<tr>
		<td><label for="depdate" name="line">Line #: </label></td>
		<td><input type="text" name="lineno" size=26></td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td colspan=2 style="text-align: center;"><input type="submit" name="submit" value="SUBMIT" style="width: 100px; heigth: 50px;"/></td>
	</tr>
</table></center>

</div>    
		
</div>
</form>




	</div> 
		<br>	
	<?php
	include 'footer.php';
	
      ?>
    </body>
</html>
