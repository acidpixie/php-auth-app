<?php 

function loadData($DBConnect) {

  $dbUsers = []; //temp array to store data from the database

$connectedToDb = $DBConnect->connectToDB();

//sql statement to get info from DB table
$statement = "SELECT * FROM  users";

if ($result = $connectedToDb->query($statement)) {

  while ($obj = $result->fetch_object()) {
      //gets rid of the stdclass
    $newUser = new User($obj->id, $obj->firstname, $obj->surname, $obj->email, $obj->password, $obj->type);
    array_push($dbUsers, $newUser);

  }

  return $dbUsers;
  $connectedToDb->close();

  } else {

  die("Connection Failed: " . $connectedToDb->error);
}
} 