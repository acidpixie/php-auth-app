<?php 

class Register extends Dbh {

    protected function setUser($email, $password) {
        $stmt = $this->connect()->prepare('INSERT INTO users (users_email, users_password) VALUES (?, ?);');

        //hashed password before saving
        $hashedPassword = md5($password);

        if(!$stmt->execute(array($email, $hashedPassword))) {
            $stmt = null;
            header("location:../index.php?error=stmtfailed");
            exit();
        }
        $stmt = null;

        }

    protected function checkEmail($email) {
        $stmt = $this->connect()->prepare('SELECT users_email FROM users WHERE users_email = ?;');

        if(!$stmt->execute($email)) {
            $stmt = null;
            header("location:../index.php?error=stmtfailed");
            exit();
        }

        $resultCheck;
        if($stmt->rowCount() > 0) {
            $resultCheck = false;
        } 
        else {
            $resultCheck = true;
        }

        return $resultCheck;
}
}