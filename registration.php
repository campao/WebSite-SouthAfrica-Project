<?php 
/* PHP Project - This file is the registration view
Author: Camille Paoletti 20180088
Date: 12/04/2019
*/

include 'header.php' ;
include 'inc_functions.php';

?>

  
    <?php  
    registration(); //call the function to add into the database
    echo $message;
    
    ?>
    
    <h1>Registration </h1>
    <div class="container">
      <div class="youyou3">
      <form action="#" method="post">
          <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email" required>          
          </div>
          <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password" required>
          </div>
          <div>
            <label for="FName">FName</label>
            <input type="text" name="FName" id="FName" placeholder="First name" required>          
          </div>
          <div>
            <label for="LName">LName</label>
            <input type="text" name="LName" id="LName" placeholder="Last name" required>
            
          </div>
          <div>
            <label for="image">image</label>
            <input type="file" name="image" accept=".jpg, .jpeg, .png" id="image" />
            
          </div>
          <div>
            <label for="status">Status</label>
            <select name="status" id="status">
              <option value="user" name="user">User</option>
              <option value="admin" name="admin">Admin</option>
              <option value="matron" name="matron">Matron</option>
          </select>
          </div>
          
          <div>
            <button type="submit" class="btn btn-primary btn-block btn-large">Let's go</button>
          </div>     
        </form>
      </div>
    </div>

<?php 
