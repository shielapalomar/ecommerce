<?php

    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con, 'myecommerce');
    $sql = "SELECT * FROM products WHERE featured=3";
    $featured = $con->query($sql);
   

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shiela Design</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="https://ajax.com.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid"> 
  <a class="navbar-brand" href="index.php">Shiela Design.com</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-2">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Design
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
         <li><a class="dropdown-item" href="product-dress.php">Dress</a></li>
         <li><hr class="dropdown-divider"></li>
         <li><a class="dropdown-item" href="product-swimsuit.php">Swimsuit</a></li>
         <li><hr class="dropdown-divider"></li>
         <li><a class="dropdown-item" href="product-short.php">Short</a></li>
         <li><hr class="dropdown-divider"></li>
         <li><a class="dropdown-item" href="product-top.php">Top</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>

<div class="col-md-8">
    <div class="row">
        <h2 class="text-center">Top Designs</h2> <br> <br>
        <?php
            while($product = mysqli_fetch_assoc($featured)):
        ?>
        <div class="col-md-5">
            <h4> <?= $product['title'];?></h4>
            <img src="<?= $product['image'];?>" alt="<?=$product['title'];?>"/>
            <p class="lprice">Rs <?= $product['price'];?></p>
            <a href="details.php">
                <button type="button" class= "btn btn-success" data-toggle="modal" data-target="#details-1">More</button>
            </a>
        </div>
        <div>
          <br>
        </div>
        <?php endwhile; ?>
        </div>
    </div>
</body>
</html>