<div class="container" id="courses">
    <h2 class="mt-5 mb-1" style="text-align: center;"><strong>Categories</strong></h2>
    <h5 class="mt-0 mb-5" style="text-align: center;">Ask your Queries related to these catogories</h5>
    
     <div class="row row-cols-1 row-cols-md-3 g-4">
       
       <?php
        include 'config.php';
        $sql = "select * from categories";
        $res = mysqli_query($con,$sql);
        while($row = mysqli_fetch_assoc($res)){    
          ?>
     
     <div class="col">
    <div class="card h-100">
      <img src="img/<?php echo $row['category_name']?>.jpg" class="card-img-top" alt="..." height="235px">
      <div class="card-body">
        <h5 class="card-title text-center fw-bold"><?php echo $row['category_name']; ?></h5>
        <p class="card-text">
          <?php
          $concat = substr($row['category_description'] , 0 , 120);
          $concat .= '.........';

           echo $concat;   ?>
        
        </p>
      </div>
      <div class="card-footer">
            <a class="btn btn-outline-danger btn-sm" href="thread.php?cid=<?php echo $row['category_id']; ?>"> Read More</a>      
      </div>
    </div>
  </div>

      <?php    }   ?>
      
</div>
</div>