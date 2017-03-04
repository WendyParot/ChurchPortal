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
			id = $id";
    $result = mysql_fetch_array(mysql_query($sql));
    

    
    ?>
    <h1 align="center" style="color:#141E30;font-family:ethno;"><img src="images/icons/write2.png"  align="top" style="height:50px; width:50px;"><font  style="vertical-align:sub;margin-left:5px;">Edit Blog Post</font></h1>
    <hr style="border: 1px solid #141E30">
    <br>





    <!---------------------------------------------------------------------------------->

    <form name="createannoucement" method="POST" action="update_announcement.php">


        <center>
            <br>
            <!--<h2><font color="white">Title</h2></font>-->



            <br>
            <h2><font color="white">Event</h2></font>
            <input type="text" name="event" value="<?php echo $result['event'] ?>">



            <h2><font color="white">Message</h2></font>
            <textarea rows="10" cols="50" name="msg" required ><?php echo $result['msg'] ?></textarea>

            <br>
            <br>

            <input name="newid" type="hidden" value="<?= $id ?>">

            <input type="submit" value="update" name="sub_post">

        </center>	
    </form>
    <!---------------------------------------------------------------------------------->	



</div>
</body>
</html>