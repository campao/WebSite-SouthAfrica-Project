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
    <h1>inscription</h1>
    <?php  
    signIn();
    echo $message;
    
    ?>
    
    <p>inscription</p>
    <form action="#" method="post">
        <div>
          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="Email">          
        </div>
        <div>
          <label for="password">Password</label>
          <input type="password" name="password" id="password" placeholder="Password">
        </div>
        <div>
          <label for="FName">FName</label>
          <input type="text" name="FName" id="FName" placeholder="First name">          
        </div>
        <div>
          <label for="LName">LName</label>
          <input type="text" name="LName" id="LName" placeholder="Last name">
          
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
          <button type="submit" class="btn btn-primary btn-block btn-large">Subscribe</button>
        </div>
     
    </form>
     </div>
    <script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
    </script>
</body>
</html>