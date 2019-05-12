<?php 
/* PHP Project 
Author: Camille Paoletti 20180088
Date: 12/04/2019
*/
session_start();
?>
<!DOCTYPE html>
<html lang='en' class=''>
<head>
  <script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script>
  <script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script>
    <meta charset='UTF-8'>
    <meta name="robots" content="noindex">
      <link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
      <link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
      <link rel="canonical" href="https://codepen.io/frytyler/pen/EGdtg" />
      <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js'></script>
     
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <link rel="stylesheet" type="text/css" href="styles/style.css">

    <!------ Profile design ---------->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


      <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
          <div class="bg-dark p-4">
            <h5 class="text-white h4">Menu</h5>
            <span>Find everythings you need here !</span>
              <?php 
        //$_SESSION['user']['status'] == "admin";
        
        if(!empty($_SESSION['user'])){
          if($_SESSION['user']['status'] == "admin" || $_SESSION['user']['status'] == "mastron") {

            echo " <div><span class='text-muted'><a href='profil.php?id= ". $_SESSION['user']['id']. "'>Profiles</a></span></div>";

            echo "<div><span class='text-muted'><a href='inscription.php'>Inscription</a></span></div>";

          }

          if($_SESSION['user']['status'] == "user"){
            
            echo " <div><span class='text-muted'><a href='patient.php?id= ". $_SESSION['user']['id'] .  "'>Patient</a></span></div>";      
          }

          echo " <div><span class='text-muted'><a href='private.php?id= ". $_SESSION['user']['id']. "'>Private</a></span></div>";       

          echo "<div><span class='text-muted'><a href='disconnect.php'>Disconnect</a></span></div>";         

        }

      ?>           
          </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </nav>
      </div>


  
  <?php 
  //$_SESSION['user']['status'] == "admin";

?> 

</head>