<?php 

class DBConnect {

private $host = 'localhost';
private $user = 'root';
private $password = 'root';
private $db = 'library';

    public function connectToDB() {

        $mysqli = new mysqli($this->host, $this->user, $this->password, $this->db);

        //check if connected
        if ($mysqli->connect_error) {
            die("Connection failed" . $mysqli->connect_error);
        } else {
            echo "Connected successfully";
            return $mysqli;
        }
    }

}


