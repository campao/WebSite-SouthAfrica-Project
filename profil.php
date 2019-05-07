<?php
/* PHP Project 
Author: Camille Paoletti 20180088
Date: 12/04/2019
*/

include 'header.php' ;
include 'inc_functions.php';

if(empty($_SESSION['user']))
{
    header('location:login.php');
    exit;
}


 LoadProfil(); 
 global $users;
 
?>  
				
			<section class="img_overlay">
        
              <div class="circle">
                <h1><strong>Profils</strong></h1>
              </div>
		<div class="row">
			<?php 
			foreach($users as $user) {	?>					
		  <div class="youyou">
		    <div class="thumbnail">
		      <img class="img-profil" src="images/<?php echo htmlspecialchars($user['image']);?>"  height="15%" width="15%" alt="photo de profil">

		      <div class="caption">
		        
		        	<div class="info">
		        		<div class="title">

		        			<h1><strong><?php echo htmlspecialchars($user['FName']);?></strong></h1>	

			        		<div class="info-plus"><?php echo htmlspecialchars($user['LName']);?></div>

							<div class="info-plus"><?php echo htmlspecialchars($user['status']);?></div>
						</div>
					<?php
						echo "<a class='button' href='private.php?id=".$user['id']."'>Voir plus</a>";
					?>
					

		        		
		        	
		     		</div>

		    </div>
		  </div>

		 </div>
		  
		<?php }	?>

		</div>      		
	</section>	        	
	
	



	