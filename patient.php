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
				
			<section class="img_overlay">
        
              <div class="circle">
                <h1><strong>Profils</strong></h1>
              </div>
		<div class="row">
			<?php 
			foreach($user as $users) {	?>					
		  <div class="youyou">
		    <div class="thumbnail">
		      <img class="img-profil" src="images/<?php echo htmlspecialchars($users['PatientImage']);?>"  height="15%" width="15%" alt="photo de profil">

		      <div class="caption">
		        
		        	<div class="info">
		        		<div class="title">

		        			<h1><strong><?php echo htmlspecialchars($users['FName']);?></strong></h1>	

			        		<div class="info-plus"><?php echo htmlspecialchars($users['LName']);?></div>

							<div class="info-plus"><?php echo htmlspecialchars($users['RoomNo']);?></div>

							<div class="info-plus"><?php echo htmlspecialchars($users['Grade_Classification']);?></div>
						</div>
					<?php
						echo "<a class='button' href='private.php?id=".$users['id']."'>Show More</a>";
					?>
					

		        		
		        	
		     		</div>

		    </div>
		  </div>

		 </div>
		  
		<?php }	?>

		</div>      		
	</section>	        	

<?php 
	

}	

?>