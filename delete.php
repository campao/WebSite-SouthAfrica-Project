<?php /* PHP Project - This file is the patient delete file
Author: Camille Paoletti 20180088
Date: 28/04/2019
*/
include 'inc_functions.php';
include 'header.php';

$id = $_GET['id'];
deletePatient($id);

header("Location:patient.php?id= ". $_SESSION['user']['id'] );