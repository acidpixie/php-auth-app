<?php

//error checking code
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/8ad1b327a2.js"></script>
    <link rel="stylesheet" href="./css/styles.css" type="text/css">

    <title>Home Page</title>
</head>
<body>

<div>
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" href="#">Books</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Reading List</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Logout</a>
    </li>
  </ul>
</div>   

<span class="heading"> Welcome Back Nikita!
  Looking to make another addition to your reading list?
</span>

    <div class="container-fluid">
      
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/044.webp" class="card-img-top" alt="Skyscrapers"/>
            <div class="card-body">
              <h5 class="card-title">Book Name</h5>
              <p class="card-text">Author</p>
              <p class="card-text">Year</p>
              <p class="card-text">Genre</p>
              <p class="card-text">Ages</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">
                <button>Borrow</button>
                <button>Return</button>

              </small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/043.webp" class="card-img-top" alt="Los Angeles Skyscrapers"/>
            <div class="card-body">
              <h5 class="card-title">Book Name</h5>
              <p class="card-text">Author</p>
              <p class="card-text">Year</p>
              <p class="card-text">Genre</p>
              <p class="card-text">Ages</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">
                <button>Borrow</button>
                <button>Return</button>
              </small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/042.webp" class="card-img-top" alt="Palm Springs Road"/>
            <div class="card-body">
              <h5 class="card-title">Book Name</h5>
              <p class="card-text">Author</p>
              <p class="card-text">Year</p>
              <p class="card-text">Genre</p>
              <p class="card-text">Ages</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">
              <button>Borrow</button>
              <button>Return</button>
              </small>
            </div>
          </div>
        </div>
      </div>

    </div>
    
</body>
</html>