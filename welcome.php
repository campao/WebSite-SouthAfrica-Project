<?php 
/* PHP Project 
Author: Camille Paoletti 20180088
Date: 12/04/2019
*/
include 'header.php' ;

if(empty($_SESSION['user']))
{
    header('location:login.php');
    exit;
}
?>

<h1>Welcome ! </h1>