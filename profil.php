
  <?php
/* PHP Project 
Author: Camille Paoletti 20180088
Date: 12/04/2019
*/

include 'header.php' ;
include 'inc_functions.php';
?>


<?php 

if(empty($_SESSION['user']))
{
    header('location:login.php');
    exit;
}


 LoadProfil(); 
 global $users;
 
?>  

	<h1>Profiles</h1>

<?php foreach($users as $user) { ?> 		         
<div class="container">
  <div class="row">
    <div class="col-md-6 img">
        <i class="img-rounded" style="font-size: 72px; margin-top: 7px; Transform-origin:50 50;
Transform:rotate(90deg); "> <img id="profile-img" class="profile-img-card" src="images/<?php echo htmlspecialchars($user['image']);?>" width="50%" /></i>
    </div>
    <div class="col-md-6 details">
      <blockquote>
        <h3><?php echo $user['FName'] . " " . $user['LName'];?></h3>
        <small><cite title="Source Title">Chicago, United States of America  <i class="icon-map-marker"></i></cite></small>
      </blockquote>
      <p><?php echo $user['status'];?></p>
      <p align="center">
          <a href="private.php?id=<?php echo $user['id'];?>" class="btn btn-info tip" title=""><i class="fa fa-cloud-download"></i> View</a>
      </p>
    </div>
  </div>
</div>

<?php } ?>