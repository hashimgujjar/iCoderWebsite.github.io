<?php
include 'config.php';
session_start();
if (isset($_SESSION['user_name']) && $_SESSION['loggedin'] == true) {
  $login  = true;
} else {
  $login  = false;
}
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand mx-5" href="#">iCoder</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" id="n1" aria-current="page" href="#carouselExampleCaptions">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="n2" href="#courses">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="n3" href="#programs">Programs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="n4" href="#teachers" ">Teachers</a>
            </li> 

          <li class=" nav-item">
            <a class="nav-link" id="n4" href="#why" ">Why Choose Us</a>
            </li> 

          <li class=" nav-item">
              <a class="nav-link" id="n4" href="#contact" ">Contact Us</a>
            </li> 

          </ul>';


         if (!$login) {
          echo '<form class=" d-flex ">
          <a id="bt" type=" button" data-bs-toggle="modal" data-bs-target="#logModal">Login &nbsp; | </a>
            <a id="bt" type="button" data-bs-toggle="modal" data-bs-target="#signupModal">&nbsp;
          Register</a>
          </form>';
         }
          
         if ($login) {
           echo'<form class=" d-flex ">
           <a id="bt" type=" button" href="logout.php"> Logout </a>
           </form>';  
         }


echo ' </div>
  </div>
</nav>';
?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- Login Modal -->
<div class="modal fade" id="logModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="logModal">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <?php
        $loggedin = false;
        if (isset($_POST['login'])) {

          $name = $_POST['name'];
          $password = $_POST['password'];

          $sql = "select * from users where user_name = '$name' AND password = '$password'";
          $res = mysqli_query($con, $sql);

          if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {

              session_start();
              $_SESSION['loggedin'] = true;
              $_SESSION['user_id'] = $row['user_id'];
              $_SESSION['user_name'] = $row['user_name'];

              echo '<script>
                   swal("Success!", "You are logged in", "success");
                   </script> ';
            }
          } else {
            echo '<script>
                  swal("Fail!", "Invalid credentials!", "error");
                   </script>';
          }
        }
        ?>




        <form action="<?php $_SERVER['PHP_SELF'];  ?>" method="POST" autocomplete="off">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">User Name </label>
            <input type="text" name="name" class="form-control" id="exampdsfleInputEmail1" aria-describedby="emailHelp">
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="examplefgInputPassword1">
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="login" class="btn btn-outline-primary">Login</button>
      </div>
      </form>
    </div>
  </div>
</div>




<?php

if (isset($_POST['register'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];

  if ($password == $cpassword) {

    $sql = "INSERT INTO `users` (`user_name`, `user_email`, `password`) VALUES ('$name', '$email', '$password')";

    $res = mysqli_query($con, $sql);

    echo '<script>
                      swal("Success!", "Your account has been created !", "success");
                       </script>';
  } else {
    echo '<script>
                  swal("Fail!", "Your passwords do not match !", "error");
                   </script>';
  }
}
?>

<!-- Signup Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupModal">Register to Our website and Join us now</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="<?php $_SERVER['PHP_SELF'];  ?>" method="POST">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">User Name </label>
            <input type="text" name="name" class="form-control" id="exampleInputEmailbjngh" aria-describedby="emailHelp">
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputhkjgjEmail2" aria-describedby="emailHelp">
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleIjkhknputPassword2">
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <input type="password" name="cpassword" class="form-control" id="exampleInputPassword3">
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="register" class="btn btn-outline-primary">Register</button>
      </div>
      </form>
    </div>
  </div>
</div>