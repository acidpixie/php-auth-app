<?php 
session_start();
$title = "User Register";

include_once "./classes/User.php";

//$connectedToDb = $DBConnect->connectToDB();

$firstname = trim($_POST['firstname']);
$firstname = mysqli_real_escape_string($connectedToDb, $firstname);

$surname = trim($_POST['surname']);
$surname = mysqli_real_escape_string($connectedToDb, $surname);

$email = trim($_POST['email']);
$email = mysqli_real_escape_string($connectedToDb, $email);

$password = trim($_POST['password']);
$password = mysqli_real_escape_string($connectedToDb, $password);

$type = trim($_POST['type']);
$type = mysqli_real_escape_string($connectedToDb, $type);

if (empty($firstname) || empty($surname) || empty($email) || empty($password) || empty($type)) {
    header("Location:../php-auth-app/register.php?register=empty");

} else {
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location:../php-auth-app/register.php?register=invalidEmail");
    }else{
        $findUser = "SELECT * FROM users WHERE email = '$email'";
        $findresult = mysqli_query($connectedToDb, $findUser);
        if(mysqli_num_rows($findresult)==0){
            $insertUser = "INSERT INTO users(firstname, surname, email, password, type) VALUES ('$firstname', '$surname', '$email', '$password', '$type')";

            $insertResult = mysqli_query($connectedToDb,$insertUser);
            if (!$insertResult) {
                echo "Can't add new user " . mysqli_error($connectedToDb);
                exit;
            }
            $id = mysqli_insert_id($connectedToDb);
            header("Location: register.php");
        } else {
            $row = mysqli_fetch_assoc($findresult);
            $id = $row['id'];
            header("Location: register.php");
        }
    }
}





?>