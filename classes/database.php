<?php

session_start();

// Storing our mysqli class parameters in variables
$servername = "localhost";
$username = "root";
$password = "root";
$name = "authapp";

$errors = array();

// Using the above variables as parameter values
$conn = new mysqli($servername, $username, $password, $name); // Create connection

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


//register users

if (isset($_POST['registerBtn'])) {

    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $surname = mysqli_real_escape_string($conn, $_POST['surname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $password2 = mysqli_real_escape_string($conn, $_POST['password2']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    
    
    //form validation
    
    if (empty($firstname)) array_push($errors, "firstname is required");
    if (empty($surname)) array_push($errors, "surname is required");
    if (empty($email)) array_push($errors, "email is required");
    if (empty($password)) array_push($errors, "password is required");
    if ($password != $password2) array_push($errors, "passwords do not match");

    
    
    //check email does not exist in db
    
    $user_check_query = "SELECT * from users WHERE email = '$email' LIMIT 1";
    
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if($user) {
    if(($user['email']) === $email){ array_push($errors, "Email Address is already registered. Please login.");}
    }
    
    //register user if no error is found
    
    if(count($errors) == 0){
    
        $hashedPassword = md5($password); //encrypting passwords
        $query = "INSERT INTO users (firstname, surname, email, hashedPassword, type) VALUES ('$firstname', '$surname', '$email', '$hashedPassword','$type')";
    
        mysqli_query($conn, $query);
        $_SESSION['email'] = $email;
        $_SESSION['success'] = "You are logged in";
    
        header('location: homepage.php');
    }
    
    //login user
    
    if(isset($POST['loginBtn'])) {
    
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
    
        if(empty($email)) (
            array_push($errors, "Email is required"))
        ;
    
        if(empty($password)) (
            array_push($errors, "Password is required"))
        ;
    
        if(count($errors) == 0 ) (
    
            $password = md5($password));
            $query = "SELECT * FROM users WHERE email = '$email' AND password= '$password'";
            $results = mysqli_query($db, $query);
    
            if(mysqli_num_rows($results)) {
    
                $_SESSION['email'] = $email;
                $_SESSION['success'] = "Logged in successfully";
                header('location: homepage.php');
            }else{
                array_push($errors, "Wrong Email/Password combination entered");
    
    
    }
    }
}
    
?>