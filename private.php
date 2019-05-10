<?php 
/* PHP Project 
Author: Camille Paoletti 20180088
Date: 12/04/2019
*/

include 'inc_functions.php';
include 'header.php';

if(empty($_SESSION['user']))
{
    header('location:login.php');
    exit;
}

	if(isset($_GET['id'])){
		
		$id = $_GET['id'];
		loadInfos($id);
		global $users;

		updateProfile($id);

	?>
	<body>
		<form action='#"' method="post">
		<div class="login">	
		<section class="img_overlay">        
            <div class="circle">
            	<h1><strong>My informations</strong></h1>
            </div>
			<div class="row">
				<?php 
				foreach($users as $user) { ?>					
		  		<div class="youyou">
		     		<img class="img-profil" src="images/image_profil.png" alt="photo de profil">

		        			<h1><strong></strong></h1>	
			        		<div class="info-plus"><a class='button' href='private.php?id="<?php echo $user['id'] ?>"'><?php echo htmlspecialchars($user['email']);?></a></div>

							<div class="info-plus"><a class='button' href='private.php?id="<?php echo $user['id'] ?>"'><?php echo htmlspecialchars($user['FName']);?></a></div>

							<div class="info-plus"><a class='button' href='private.php?id="<?php echo $user['id'] ?>"'><?php echo htmlspecialchars($user['LName']);?></a></div>

							<div class="info-plus"><label for="status">Status</label>
						        <select name="status" id="status">
						            <option value="user" name="user">User</option>
						            <option value="admin" name="admin">Admin</option>
						            <option value="matron" name="matron">Matron</option>
						   	    </select>
							</div>
							<div class="info-plus"><button class="btn btn-default" type="submit">Update</button></div>

		 		</div>		  
				<?php }	

	
	?>

			</div>      		
		</section>	
		</div>
	</form>
   </body>
   <?php

    }	

	
	