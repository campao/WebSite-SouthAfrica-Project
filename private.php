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
		
		<h1>My informations</h1>
		<div class="container">	

	            <div class="youyou">
	            	<form action='#"' method="post">
					<?php foreach($users as $user) { ?>				  		
			     		
			     				<div>
			     					<img class="img-profil omg" src="images/<?php echo $user['image'];?>" alt="photo de profil" width="40%">				     					
			     				</div>
				        		<div>
				        			<input class ="youyou1" type="text" name="FName" value="<?php echo htmlspecialchars($user['FName']);?>">
				        		</div>
				        		<div>
				        			<input class ="youyou1" type="text" name="LName" value="<?php echo htmlspecialchars($user['LName']);?>">
				        		</div>								
								<div class="info-plus"><label for="status">Status</label>
							        <select name="status" id="status" >
							        	<option><?php echo htmlspecialchars($user['status']);?></option>
							      		<option>  </option>
							            <option value="user" name="user">User</option>
							            <option value="admin" name="admin">Admin</option>
							            <option value="matron" name="matron">Matron</option>
							   	    </select>
								</div>
									<button class="btn btn-primary btn-block btn-large youyou2" type="submit">Update</button>
								 				  
					<?php }	?>
				</div>			    		
		</div>
	</form>
 
   <?php

    }	

	
	