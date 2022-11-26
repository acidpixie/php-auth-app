<?php

//error checking code
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "./classes/DbConnect.php";
include "./classes/Books.php";
include "./includes/books.inc.php";

$dbconnect = new DbConnect();

/* if(isset($_POST['borrow'])) {

  try { 
    borrowBook();
  } catch (Exception $error) {
    echo "Error loading Books";
  }

  foreach ($_SESSION['book'] as $books) {
    if ($books->getTitle() == $_POST['borrow']) {
      $borrow = $book;
    }
  }
} */

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

  <title>Book List</title>
</head>

<body>

  <div>
    <ul class="nav nav-tabs" style="background-color: rgba(0, 124, 158, 0.724)">
      <li class="nav-item">
        <a class="nav-link" href="./homepage.php">Books</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./profile.php">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Reading List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./logout.php">Logout</a>
      </li>
    </ul>
  </div>


  <div>

  <h2>Still need to add in data and functionality here...</h2>
  <p>once the borrow button is clicked on the homepage the book gets added onto this list.</p>



  </div>


</body>

<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 124, 158, 0.724);">
    © 2022 Copyright:
    <p>"Never trust the storyteller. Only trust the story."</p>
  </div>
  <!-- Copyright -->
</footer>

</html>