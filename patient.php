<?php
/* PHP Project 
Author: Camille Paoletti 20180088
Date: 16/04/2019
*/
include 'inc_functions.php';
include 'header.php';

?>
      <!------ Profile design ---------->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<?php 


if(isset($_GET['id'])){
	global $user;
	
	$id = $_GET['id'];
	showPatient($id);

	

?>  

    <h1>Patient</h1>
        <a href="signInPatient.php"><img src="equilateral.png" alt="un triangle dont tous les côtés sont égaux" srcset="images/logo.svg" width="3%" /></a>
        <?php foreach($user as $users) { ?> 

            <div class="container">
    <div class="row">
       <p></p>
        <div class="stats-buttons-grid">
       <div class="row">
        <div class="col-lg-4 ">
                <div class="thumbnail" align="center">

                    <div class="icon green">
                        <i class="fa fa-file-text-o" style="font-size: 72px; margin-top: 7px; Transform-origin:50 50;
Transform:rotate(90deg); "> <img id="profile-img" class="profile-img-card" src="images/<?php echo $users['PatientImage'];?>" width="50%" /></i>
                    </div>
                    <div class="caption">
                        <h3><?php echo $users['FName'] . " " . $users['LName'];?></h3>
                        <p><?php echo $users['RoomNo'];?></p>
                        <p><?php echo $users['Grade_Classification']; ?></p>
                        <p align="center">
                           <a href="private.php?id=<?php echo $users['id'];?>" class="btn btn-info tip" title=""><i class="fa fa-cloud-download"></i> View</a>
                        </p>
                    </div>
                </div>
            </div>
    
    </div>
</div>
    </div>
</div>




          
        <?php } 
	

}	

?>