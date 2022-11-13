<?php 

class User {

    private $id;
    private $firstname;
    private $surname;
    private $email;
    private $password;
    private $type;

    public function __construct($id, $firstname, $surname, $email, $password, $type)
    {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->surname = $surname;
        $this->email = $email;
        $this->password = $password;
        $this->type = $type;
        
    }

    //getters and setters

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

   //convert obj to string and concatenate it
    public function __toString()
    {
        return $this->id . " - " .  $this->firstname . " - " . $this->surname . " - " . $this->email . " - " . $this->password . " - " . $this->type;
    }
}