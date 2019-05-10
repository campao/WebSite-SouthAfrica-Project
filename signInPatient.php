<?php 
/* PHP Project 
Author: Camille Paoletti 20180088
Date: 12/04/2019
*/

include 'header.php' ;
include 'inc_functions.php';

?>

<body>
  <div class="login">
    <h1>inscription Patient</h1>
    <?php  
    signInPatient();
    echo $message;
    
    ?>
    
    <p>inscription Patient</p>
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
    <script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
    </script>
</body>
</html>