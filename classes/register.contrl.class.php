<?php 

class RegisterUser extends Register {

    private $firstname;
    private $surname;
    private $email;
    private $password;
    private $password2;
    private $type;

    public function __construct($firstname, $surname, $email, $password, $password2, $type)
    {
        $this->firstname = $firstname;
        $this->surname = $surname;
        $this->email = $email;
        $this->password = $password;
        $this->password2 = $password2;
        $this->type = $type;
    }

    public function registerUser() {
        if($this->emptyInput() == false) {
            //echo "Invalid Input!";
            header("location:../index.php?error=emptyinput");
            exit();
        }

        if($this->invalidEmail() == false) {
            //echo "Invalid Email!";
            header("location:../index.php?error=invalidemail");
            exit();
        }

        if($this->passwordMatch() == false) {
            //echo "Passwords do not match!";
            header("location:../index.php?error=passwordmatch");
            exit();
        }

        if($this->emailExists() == false) {
            //echo "Email address is already registered!";
            header("location:../index.php?error=emailtaken");
            exit();
        }

        $this->setUser($this->email, $this->password);

    }
    


    private function emptyInput() {
        $result;
        if(empty($this->firstname) || empty($this->surname) || empty($this->email) || empty($this->password) || empty($this->password2) || empty($this->type)) {
            $result = false;
        }else{
            $result = true;
        }

            
    }

    private function invalidEmail() {
        $result;
        if (!filter_var($this->email, FILTER_SANITIZE_EMAIL)) {
            $result = false;

        }else{
            $result = true;
        }
        return $result;

    }

    private function passwordMatch() {
        $result;
        if ($this->password !== $this->password2)
        {
            $result = false;
        
        }else{
            $result = true;
        }
        return $result;
    }

    private function emailExists() {
        $result;
        if (!$this->checkEmail($this->email))
        {
            $result = false;
        
        }else{
            $result = true;
        }
        return $result;
    }



}

