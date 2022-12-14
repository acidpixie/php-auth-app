<?php

//error checking code
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "./classes/DbConnect.php";
include "./classes/Books.php";
include "./includes/books.inc.php";
include "./includes/sort.php";

$dbconnect = new DbConnect();

$_SESSION['book'] = loadBooks($dbconnect);
//var_dump($_SESSION['book']);



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
  <link rel="stylesheet" type="text/css" href="./css/stylesheet.css" />

  <title>Home Page</title>
</head>

<body>

  <div>
    <ul class="nav nav-tabs" style="background-color: rgba(0, 124, 158, 0.724)">
      <li class="nav-item">
        <a class="nav-link active" href="#">Books</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./profile.php">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./booklist.php">Reading List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./logout.php">Logout</a>
      </li>
    </ul>
  </div>

  <span class="heading"> Welcome to Lucien's Library, Looking to make another addition to your reading list?
  </span>

  <div class="container-fluid">

  <form method="post" action="/includes/sort.php">

    <div class="sort-functions">
      <input type="submit" class="btn btn-outline-dark p-2 m-2" name="sortAZ" value="Sort A-Z">
      <input type="submit" class="btn btn-outline-dark p-2 m-2" name="sortG" value="Sort Genre">
      <input type="submit" class="btn btn-outline-dark p-2 m-2" name="sortA" value="Sort Author">
    </div>

  </form>

    <div class="book-container">


    <?php

    foreach ($_SESSION['book'] as $books) {

      echo '

            <div class="items">
   
            <div class="card p-2 m-2" style="width: 20rem;">
            <img src= ' . $books->getImage() . ' class="card-img-top" alt="Book Thumbnail"/>
            <div class="card-body">
              <h5 class="card-title"> ' .  $books->getTitle() . ' </h5>
              <p class="card-text"> ' . $books->getAuthor() . ' </p>
              <p class="card-text"> ' . $books->getYear() . ' </p>
              <p class="card-text"> ' . $books->getGenre() . ' </p>
              <p class="card-text"> ' . $books->getAges() . ' </p>
            </div>
            <div class="card-footer">
              <small class="text-muted">
              <input type="submit" class="btn btn-outline-success btn-sm" name="borrow" value="Borrow">
              <input type="submit" class="btn btn-outline-warning btn-sm" name="return" value="Return">
              </small>
            </div>
            </div>

            </div>
            ';

            
              }

    ?>

  </div>

</body>


<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 124, 158, 0.724);">
    ?? 2022 Copyright:
    <p>"Never trust the storyteller. Only trust the story."</p>
  </div>
  <!-- Copyright -->
</footer>

</html>