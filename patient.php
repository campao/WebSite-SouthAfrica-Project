<?php
/* PHP Project 
Author: Camille Paoletti 20180088
Date: 16/04/2019
*/
include 'inc_functions.php';
include 'header.php';


if(isset($_GET['id'])){
	global $user;
	
	$id = $_GET['id'];
	showPatient($id);	

?>  
    <h1>Patients</h1>
    <?php foreach($user as $users) { ?>                  
        <div class="container">
          <div class="row">
            <div class="col-md-6 img">
                <i class="img-rounded" style="font-size: 72px; margin-top: 7px; Transform-origin:50 50;
        Transform:rotate(90deg); "> <img id="profile-img" class="profile-img-card" src="images/<?php echo htmlspecialchars($users['PatientImage']);?>" width="50%" /></i>
            </div>
            <div class="col-md-6 details">
              <blockquote>
                <h3><?php echo $users['FName'] . " " . $users['LName'];?></h3>
              </blockquote>
              <p><?php echo "Room number : " . $users['RoomNo'];?></p>
              <p><?php echo "Grade : " . $users['Grade_Classification']; ?></p>
              <p align="center">
                  <a href="delete.php?id=<?php echo $users['id'];?>" class="btn btn-info tip" title=""><i class="fa fa-cloud-download"></i> Delete</a>
              </p>
            </div>
          </div>
        </div>

    <?php }
    } 














