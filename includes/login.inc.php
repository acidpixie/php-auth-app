<?php 

$host = 'localhost';
$user = 'root';
$password = 'root';
$database = 'library';

$conn = mysqli_connect($host, $user, $password, $database); 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
} else {
    echo "Connected successfully";
}

if(isset($_POST['login'])) 
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email='$email' and password='$password'";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['email'] === $email && $row['password'] === $password) {
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['id'] = $row['id'];
            header("Location: ../homepage.php");
            exit();
        }else {
        
            echo "ERROR!";
    }
    }
}
 /*   if($count>0) {
        header("Location: ../homepage.php");

    } 
    } */