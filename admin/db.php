<?php

ini_set('display_errors','On');


$db = new PDO('mysql:host=localhost;dbname=reschurch','root','');
if(session_status() == PHP_SESSION_NONE) 
{
	session_start();
}


?>