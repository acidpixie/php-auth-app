<?php 

if(isset($_POST["registerBtn"])) {

    //get data from form input fields
    $firstname = $_POST["firstname"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];
    $type = $_POST["type"];

    //instantiate RegisterUser class
    include "../classes/dbh.class.php";
    include "../classes/register.class.php";
    include "../classes/register.contrl.class.php";

    $register = new RegisterUser($firstname, $surname, $email, $password, $password2, $type);

    //run error handles and user register
    $register->$registerUser();

    //send user back to index page
    header("location:../index.php?error=none");
}

