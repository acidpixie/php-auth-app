<?php 

function create($DbConnect, $firstname, $surname, $email, $password, $type) {

    $connectedToDb = $DbConnect->connectToDB();

    $statement = "INSERT INTO users (firstname, surname, email, password, type) VALUES ('$firstname, $surname, $email, $password, $type)";

    if ($result = $connectedToDb->query($statement)) {

        return $result;
        $connectedToDb->close();

    } else {
        die("Connection failed: " . $connectedToDb->error);
    }

}