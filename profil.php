
  <?php
/* PHP Project 
Author: Camille Paoletti 20180088
Date: 12/04/2019
*/

include 'header.php' ;
include 'inc_functions.php';
?>
      <!------ Profile design ---------->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<?php 

if(empty($_SESSION['user']))
{
    header('location:login.php');
    exit;
}


 LoadProfil(); 
 global $users;
 
?>  

	<h1>Profils</h1>
		<?php foreach($users as $user) { ?>	

			<div class="container">
	<div class="row">
       <p></p>
		<div class="stats-buttons-grid">
       <div class="row">
        <div class="col-lg-4 ">
                <div class="thumbnail" align="center">

                    <div class="icon green">
                        <i class="fa fa-file-text-o" style="font-size: 72px; margin-top: 7px; Transform-origin:50 50;
Transform:rotate(90deg); "> <img id="profile-img" class="profile-img-card" src="images/<?php echo htmlspecialchars($user['image']);?>" width="50%" /></i>
                    </div>
                    <div class="caption">
                        <h3><?php echo $user['FName'] . " " . $user['LName'];?></h3>
                        <p><?php echo $user['status'];?></p>
                        <p align="center">
                           <a href="private.php?id=<?php echo $user['id'];?>" class="btn btn-info tip" title=""><i class="fa fa-cloud-download"></i> View</a>
                        </p>
                    </div>
                </div>
            </div>
    
    </div>
</div>
	</div>
</div>




		  
		<?php }	?>

		        	
	
	



	