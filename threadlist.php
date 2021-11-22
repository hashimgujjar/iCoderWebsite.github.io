<?php
include 'nav.php';
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Thread!</title>
</head>

<body>

  

  <?php
  include 'config.php';
  $thread_id = $_GET['threadid'];
  //$sql = "select * from thread where thread_id = $thread_id";
 
  $sql = "select * from thread  join users on thread.username = users.user_id where thread.thread_id = $thread_id";

  $res = mysqli_query($con, $sql);
  while ($row = mysqli_fetch_assoc($res)) {
  ?>

    <h5 class=" my-3 text-center"> Title:- <?php echo $row['thread_title']; ?> </h5>
    <h6 class=" my-3 text-center"> Posted by:- <?php echo $row['user_name']; ?> </h6>
   

  <?php   }    ?>


  <div class="container">

    <?php
 
 $thread_id = $_GET['threadid'];

    if (isset($_POST['submit'])) {
      $description = $_POST['description'];
      $username = $_SESSION['user_id'];

      $qry = "INSERT INTO `threadlist` (`content`, `username`, `thread_id`, `date`) VALUES ('$description', '$username', '$thread_id', current_timestamp())";

      

      $result = mysqli_query($con, $qry);

      if ($result) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
         <strong>Success!</strong> Your commment has been posted.
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>';
      }
    }
    ?>

    <h5 class="mt-5">You can post your Comments here. </h5>
   
    <?php

    if ($login == true) {
      echo '<form action="" method="POST">
      <div class=" col-sm-12 mt-2">
        <input name="id" type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        <div class="mt-3">
          <label for="exampleInputPassword1" class="form-label">Post your comment</label>
          <textarea required name="description" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
        </div>

        <button name="submit" type="submit" class="btn btn-sm btn-primary mt-2">Post</button>
    </form>';
    }
    else{
      echo '<svg  xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
      </symbol>
      <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
      </symbol>
      <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
      </symbol>
    </svg>
    
    
    <div class="alert alert-danger d-flex align-items-center mt-5" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
      <div >
      Loggin first to post your comment.
      </div>
    </div';
        
    }
?>



  <?php

  $thread_id = $_GET['threadid'];
  $sql1 = "select * from threadlist  join users on threadlist.username = users.user_id where threadlist.thread_id = $thread_id";

  $res1 = mysqli_query($con, $sql1);
  if(mysqli_num_rows($res1) > 0){
    while ($row = mysqli_fetch_assoc($res1)) {
  ?>

      <div class="row mt-3">

        <div class="mt-2 col-sm-12">
          <div class="row g-0">
            <div class="col-md-1">
              <img src="img/logo.png" class="img-fluid rounded-start" alt="..." width="80px" style="margin-top: 15px;">
            </div>
            <div class="col-md-10">
              <div class="card-body">
                <a href="" class="card-title" style="text-decoration: none; color:black; font-size:large; font-weight:bold"><?php echo $row['user_name']; ?></a>
                <p class="card-text"> <?php echo $row['content']; ?> </p>
              </div>
            </div>
          </div>
        </div>

    <?php 
        } 
      }

    else{
      echo '<svg  xmlns="http://www.w3.org/2000/svg" style="display: none;">
<symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</symbol>
<symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
</symbol>
<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</symbol>
</svg>


<div class="alert alert-danger d-flex align-items-center mt-5" role="alert">
<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
<div >
No Comments yet. Be the first person to post your comment.
</div>
</div';
}
  
  ?>


 </div>


















      <!-- Optional JavaScript; choose one of the two! -->
      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
      </script>

      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>