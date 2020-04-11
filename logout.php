<?php
session_start()
var_dump($_SESSION);
if ($_SESSION['loggedOn'] == false) 
{
	header("Location: index.php");	
} 
else
{
	session_destroy();
	header("Location: index.php");	
}
?>
