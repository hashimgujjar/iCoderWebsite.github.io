<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital@0;1&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

  <title>iCoder - Heaver for Programmers !</title>
</head>

<body>

<?php    include 'navbar.php';   ?>

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
        aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/4.jpg" class="d-block w-100" alt="">
        <div class="carousel-caption d-none d-md-block">
          <h5>Logo Deisgn Course</h5>
          <p class="mb-4">Best online teaching Assistant Course and Stirve for Excellent</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/5.png" class="d-block w-100" alt="">
        <div class="carousel-caption d-none d-md-block">
          <h5>Machine Learning </h5>
          <p>We Hire Top Professionals and Best Teachers in the World</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/2.jpg" class="d-block w-100" alt="">
        <div class="carousel-caption d-none d-md-block">
          <h5>Web Development</h5>
          <p>PHP Object Oriented Programming and JS Programming Language</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/3.jpg" class="d-block w-100" alt="">
        <div class="carousel-caption d-none d-md-block">
          <h5>Learn form Experts</h5>
          <p>Study Law of Physics and Expand your Knowledge</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container containersss">
    <hr class="hr-text">
  </div>

 
  
  <?php   include 'categories.php';   ?>
    

  <div class="container containersss">
    <hr class="hr-text">
  </div>

  <?php    include 'programs.php';   ?>
  

  <div class="container containersss">
    <hr class="hr-text">
  </div>


  <?php    include 'teachers.php';   ?>
  

   <?php  include 'contactform.php';     ?>

   <?php  include 'footer.php';     ?>


    

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
      crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>