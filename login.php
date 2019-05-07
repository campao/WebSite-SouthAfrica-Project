<?php 
/* PHP Project 
Author: Camille Paoletti 20180088
Date: 12/04/2019
*/
    //include 'config.php';
   // include 'header.php' ;
    include 'inc_functions.php';
?>

<link rel="stylesheet" type="text/css" href="styles/style.css">
<body>
    <div class="login">
    <h1>Login</h1>
    
   
    

    <form action="GoLogin.php" method="post">
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email" required>            
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password">            
        </div>
        <div>
            <button type="submit"  class="btn btn-primary btn-block btn-large">Let me in.</button>
        </div>
    </form>
</div>
    <script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>


</body>
</html>
<?php 
include 'footer.php';