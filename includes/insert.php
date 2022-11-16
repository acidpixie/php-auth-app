<?php

include "./classes/DbConnect.php";

if($conn === false) {
    die("ERROR: Could not connect." . mysqli_connect_error());

}

$firstname = $_REQUEST['firstname'];
$surname = $_REQUEST['surname'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$type = $_REQUEST['type'];

$sql = "INSERT INTO users VALUES ($firstname, $surname, $email, $password, $type)";

if(mysqli_query($conn, $sql)) {
    echo "<h3>Data stored in database successfully</h3>";

} else{
    echo "ERROR: Something went wrong! $sql. "
        . mysqli_error($conn);
}
mysqli_close($conn);

?>