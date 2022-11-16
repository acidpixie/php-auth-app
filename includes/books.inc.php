<?php

function loadBooks($DbConnect) {

    $dbBooks = []; //temp array to store data from the database

$connectedToDb = $DbConnect->connectToDB();

//sql statement to get info from DB table
$myBooks = "SELECT * FROM books";

if ($result = $connectedToDb->query($myBooks)) {

    while ($data = $result->fetch_object()) {

        $newBook = new Book($data->book_id, $data->title, $data->author, $data->author_id,
        $data->genre, $data->ages, $data->year, $data->image);
        array_push($dbBooks, $newBook);
    }

    return $dbBooks;
    $connectedToDb->close();

} else {

    die("Connection Failed: " . $connectedToDb->error);
}

//sort

function sort($DbConnect,$dbBooks) {

    $connectedToDb = $DbConnect->connectToDB();

if (isset($_POST['sortAZ'])) {
    $dbBooks = "SELECT * FROM books ORDER BY title";

} elseif(isset($_POST['sortG'])) {
    $dbBooks = "SELECT * FROM books ORDER BY genre";

}elseif(isset($_POST['sortA'])) {
    $dbBooks = "SELECT * FROM books ORDER BY author";

}else{
    $dbBooks = "SELECT * FROM books";
}

$result = mysqli_query($connectedToDb,$dbBooks);
    
}}