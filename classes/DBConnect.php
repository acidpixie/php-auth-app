<?php 

class DBConnect {

private $host = 'localhost';
private $user = 'root';
private $password = 'root';
private $database = 'library';

    public function connectToDB() {

        $mysqli = new mysqli($this->host, $this->user, $this->password, $this->database);     
        
        $conn = $mysqli;

        //check if connected
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            
        } else {
            echo "Connected successfully";
            return $conn;
        }
    }

}