<?php

session_start();

if(isset($_POST['sortAZ'])) {
    $query = "SELECT * FROM books ORDER BY title";
    $result = sortBooks($query);
    
} 
elseif(isset($_POST['sortG'])) {
    $query = "SELECT * FROM books ORDER BY genre";
    $result = sortBooks($query);
  
}
elseif(isset($_POST['sortA'])) {
    $query = "SELECT * FROM books ORDER BY author";
    $result = sortBooks($query);
    
}
else {(
    $query = "SELECT * FROM books"
    
);
}

function sortBooks($query) { 

$host = 'localhost';
$user = 'root';
$password = 'root';
$database = 'library';

$conn = mysqli_connect($host, $user, $password, $database);
$result = mysqli_query($conn, $query);
return $result;
}

?>