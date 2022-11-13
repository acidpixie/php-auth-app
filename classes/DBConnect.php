<?php 

class DBConnect {

private $host = 'localhost';
private $user = 'root';
private $password = 'root';
private $database = 'library';

/* public function __construct($host, $user, $password, $database)
{
    $this->host = $host;
    $this->user = $user;
    $this->password = $password;
    $this->database = $database;
} */

    public function connectToDB() {

        $mysqli = new mysqli($this->host, $this->user, $this->password, $this->database);

        //check if connected
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
            
        } else {
            echo "Connected successfully";
            return $mysqli;
        }
    }

}