<?php 

include __DIR__ . "/../data/UserDAO.php";

class User {

    private $user_id;
    private $firstname;
    private $surname;
    private $email;
    private $password;
    private $address;

    public function ___construct($firstname, $surname, $email, $password, $address) 
    {

    $this->firstname = $firstname;
    $this->surname = $surname;
    $this->email = $email;
    $this->password = $password;
    $this->address = $address;

    }

    public function getUser_id()
    {
        return $this->user_id;
    }

    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;
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

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }


    public static function login() {
        $login = UserDAO::loggedin();

        if ($login == true) {
            $_SESSION['loggedIn'] = $login;
            $_SESSION['Cart'] = [];

            echo "Successfully Logged In";
            header("Location: ../products.php");
            exit();
        } else {

            echo "Error, Something went wrong!";
            header("Location: ../products.php");
            exit();
        }

    }

    public static function logout() {
        if (session_destroy()) {
            header("Location: ./index.php");
        }
    }

    public static function signupMember() {
        $result = UserDAO::signup();

        if ($result) {
            $_SESSION['loggedIn'] = $result;
            $_SESSION['Cart'] = [];

            header("Location: ../products.php");
            exit();
        }
    }




}
