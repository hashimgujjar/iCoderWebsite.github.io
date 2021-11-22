<?php
include 'config.php';
session_start();
if (isset($_SESSION['user_name']) && $_SESSION['loggedin'] == true) {
  $login  = true;
} else {
  $login  = false;
}

echo '<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand mx-5" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
          </ul>';

          if ($login) {
              echo '<form class=" d-flex ">
              <p  style="margin-right: 40px; margin-bottom: 0px; font-size:16px; font-weight:bold; " > Hi &nbsp;&nbsp; '.   $_SESSION["user_name"]  .'  </p>
              You can logout by clicking here
              <a style="margin-left: 16px;" id="bt" type=" button" href="logout.php">Logout</a>
        </form>';
          }

          echo '
    </div>
  </div>
</nav>';
?>