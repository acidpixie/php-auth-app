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
    
    <title>Reset Password</title>
</head>
<body>


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
        <div class="container">
          <div class="row g-0 align-items-center">
   
              <div class="card" style="
                  background: hsla(0, 0%, 100%, 0.55);
                  backdrop-filter: blur(30px);
                  ">
                <div class="card-body p-5 shadow-5 text-center">
                  <h2 class="fw-bold mb-5">Reset Password</h2>
                  <form>
                    
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
                    <button type="login" name="resetBtn" class="btn btn-dark btn-block mb-4">
                    Reset
                    </button>

    
                    <div>
                    <!-- Register / Reset password -->
                    <p>Not a member, <a href="./register.php">Register Here.</a></p>
                    <p><a href="./index.php">Back to Login</a></p>
    
                    </div>
      
    
                  </form>
              </div>
            </div>
   
         </div>
        </div>
      </section>
    
</body>
</html>