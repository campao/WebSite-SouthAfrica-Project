<?php 
/* PHP Project 
Author: Camille Paoletti 20180088
Date: 12/04/2019
*/
include 'config.php';
include 'header.php';

session_destroy();

header("Location:login.php");

?>
