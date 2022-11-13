<?php

function loadBooks($DBConnect) {

    $dbBooks = []; //temp array to store data from the database

$connectedToDb = $DBConnect->connectToDB();

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

}
?>

