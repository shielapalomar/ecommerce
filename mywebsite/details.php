<?php

    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con, 'myecommerce');
    $sql = "SELECT * FROM products WHERE featured=1";
    $featured = $con->query($sql);
    
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid"> 
  <a class="navbar-brand" href="index.php">Shiela Design.com</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-2">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="index.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Design
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
         <li><a class="dropdown-item" href="product-dress.php">Dress</a></li><br>
         <li><hr class="dropdown-divider"></li>
         <li><a class="dropdown-item" href="product-swimsuit.php">Swimsuit</a></li><br>
         <li><hr class="dropdown-divider"></li>
         <li><a class="dropdown-item" href="product-short.php">Short</a></li><br>
         <li><hr class="dropdown-divider"></li>
         <li><a class="dropdown-item" href="product-top.php">Top</a></li><br>
        </ul>
      </li>
    </ul>
  </div>
</div>
</nav>
<div class="col-md-8">
    <div class="row">
        <h2 class="text-center">Design Details</h2> <br> <br>
        <?php
            while($product = mysqli_fetch_assoc($featured)):
        ?>
        <div class="col-md-5">
            <h4> <?= $product['title'];?></h4>
            <img src="<?= $product['image'];?>" alt="<?=$product['title'];?>"/>
            <p class="lprice">Rs <?= $product['price'];?></p>
            <p class="desc">Rs <?= $product['description'];?></p>
            <p class="bname">Rs <?= $product['brandname'];?></p>
        </div>
        <div>
          <br>
        </div>
        <?php endwhile; ?>
        </div>
    </div>
   
