<?php 
include 'inc_functions.php';
include 'header.php';

   login(); 

	echo"<p>".$message."</p>";

	if($message=="You are connected")
	{
		header("location:private.php?id= ". $_SESSION['user']['id']);

	}
    ?>