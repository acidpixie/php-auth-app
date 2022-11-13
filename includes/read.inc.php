<?php 



function loadBooks($libConnect) {

    //create empty array to store database info
    $bookData = [];

    //connect to DB and return connection object
    $myLibConnection = $libConnect->connectToLib();

    $statement = "SELECT * FROM books";

    if($result = $myLibConnection->query($statement)) {

        while ($obj = $result->fetch_object()) {

            $newBook = new Book($obj->book_id, $obj->title, $obj->author, $obj->author_id, $obj->genre, $obj->ages, $obj->year, $obj->image);

            array_push($bookData, $newBook);
        }

            return $bookData;
            $myLibConnection->close();

        } else {

            echo "error in database query";
            die("Connection failed: " . $myLibConnection->error);
            return false;
        }
    }
