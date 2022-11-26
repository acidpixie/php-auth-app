<?php

 $host = 'localhost';
 $user = 'root';
 $password = 'root';
 $database = 'library';

 $conn = mysqli_connect($host, $user, $password, $database);

 if(isset($_POST['submit'])) {

if(!empty($_POST['firstname']) && !empty($_POST['surname']) && !empty($_POST['email']) && !empty($_POST['password'])) {

// fetch values from form

    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $type = $_POST['type'];

    $query = "INSERT INTO users (firstname, surname, email, password, type) VALUES ('$firstname', '$surname', '$email', '$password', '$type')";

    $run = mysqli_query($conn,$query) or die(mysqli_error($conn));

    if($run) {
        header("Location: ../index.php");
    } else {
        echo "Form not submitted";
    }
    return $query;
    
}
}

?>