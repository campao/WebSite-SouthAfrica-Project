<?php 
/* PHP Project this is the registration of patient file view 
Author: Camille Paoletti 20180088
Date: 12/04/2019
*/

include 'header.php' ;
include 'inc_functions.php';

?>

    
    <?php  
    signInPatient(); // call to the php function to insert into the database 
    echo $message;
    
    ?>

      <h1>Registration patient</h1>
      <div class="container">
        <div class="youyou3">    
        <form action="#" method="post">
        <div>
          <label for="FName">FName</label>
          <input type="text" name="FName" id="FName" placeholder="First name" required>          
        </div>
        <div>
          <label for="LName">LName</label>
          <input type="text" name="LName" id="LName" placeholder="Last name" required>          
        </div>
        <div>
          <label for="roomNo">roomNo</label>
          <input type="roomNo" name="roomNo" id="roomNo" placeholder="Room Number" required>          
        </div>
        <div>
          <label for="password">Password</label>
          <input type="password" name="password" id="password" placeholder="Password" required>
        </div><div>
          <label for="address">Address</label>
          <input type="address" name="address" id="address" placeholder="Address" required>          
        </div>
        <div>
          <label for="grade">Grade</label>
          <input type="grade" name="grade" id="grade" placeholder="grade" required>
        </div>
        <div>
          <label for="image">image</label>
          <input type="file" name="image" accept=".jpg, .jpeg, .png" id="image" />          
        </div>

        
        <div>
          <button type="submit" class="btn btn-primary btn-block btn-large">Subscribe</button>
        </div>
     
    </form>
     </div>
<?php 
