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

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/8ad1b327a2.js"></script>
    <link rel="stylesheet" href="./css/styles.css" type="text/css">

    <title>Login Page</title>
</head>
    <body>

   <!-- Section: Design Block -->
<section class="text-center text-lg-start">
    <style>
      .cascading-right {
        margin-right: -50px;
      }
  
      @media (max-width: 991.98px) {
        .cascading-right {
          margin-right: 0;
        }
      }
    </style>
  
    <!-- Jumbotron -->
    <div class="container py-4">
      <div class="row g-0 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card cascading-right" style="
              background: hsla(0, 0%, 100%, 0.55);
              backdrop-filter: blur(30px);
              ">
            <div class="card-body p-5 shadow-5 text-center">
              <h2 class="fw-bold mb-5">Login</h2>

              <form action="./homepage.php" method="post">
                
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" name="email" id="formEmail" class="form-control" required />
                  <label class="form-label" for="formEmail">Email address</label>
                </div>
  
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" name="password" id="formPassword" class="form-control" required/>
                  <label class="form-label" for="formPassword">Password</label>
                </div>
  
                  <!-- Submit button -->
                <button type="login" name="loginBtn" class="btn btn-dark btn-block mb-4">
                  Login
                </button>

                <div>
                <!-- Register / Reset password -->
                <p>Not a member, <a href="./register.php">Register Here.</a></p>
                <p><a href="./password.php">Forgotten password</a></p>

                </div>
  

              </form>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="./images/library.jpg" class="w-100 rounded-4 shadow-4"
            alt="book staircase" />
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->

  
    
    </body>
</html>



 <!--Table with Books
    Book Id, Book Name, Year, Genre, Age Group

    Table with Authors
    Author Id, Author Name, Age, Genre, Book Id  (foreign key for book id - relational db)

    Display Books for signed in user.

    Search Bar to search through database
    members cannot search for an author
    admin role to crud on both tables
    search by word
    sort books by name, author, genre
    -->