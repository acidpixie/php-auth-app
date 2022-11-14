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
    <link rel="stylesheet" type="text/css" href="./css/stylesheet.css"/>
    
    <title>Register</title>

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
              <h2 class="fw-bold mb-5">Register New User</h2>
              <form>


                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="regName" name="firstname" class="form-control" required />
                      <label class="form-label" for="regName">First name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="regSurname" name="surname" class="form-control" required />
                      <label class="form-label" for="regSurname">Last name</label>
                    </div>
                  </div>
                </div>
  
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="regEmail" name="email" class="form-control" required />
                  <label class="form-label" for="regEmail">Email address</label>
                </div>
  
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="regPassword" name="password" class="form-control" required />
                  <label class="form-label" for="regPassword">Password</label>
                </div>

                <!-- User Type Selection -->
                <div class="form-outline mb-4">
                  <input type="radio" value="0" id="radioOne" name="type" checked/>
                  <label for="radioOne" class="radio">User</label>
                  <input type="radio" value="1" id="radioTwo" name="type" />
                  <label for="radioTwo" class="radio">Librarian</label>
                </div>  
       
  
                <!-- Submit button -->
                <button type="submit" name="registerBtn" class="btn btn-dark btn-block mb-4">
                  Sign up
                </button>

                <p><a href="./index.php">Back</a></p>
  
              </form>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="./images/book.jpg" class="w-100 rounded-4 shadow-4"
            alt="book" />
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->
</body>

    
</head>
</html>