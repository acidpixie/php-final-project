<?php

include __DIR__ . "/config.php";

class UserDataAccessObject
{

    public static function signup()
    {
        global $conn;

        //get form inputs
        $firstname = $_POST['firstnameReg'];
        $surname = $_POST['surnameReg'];
        $email = $_POST['emailReg'];
        $password = $_POST['passwordReg'];
        $address = $_POST['addressReg'];

        $query = "INSERT INTO users (firstname, surname, email, password, address) VALUES (?, ?, ?, ?, ?)";
        $statement = $conn->prepare($query);

        $statement->bind_param("sssss", $firstname, $surname, $email, $password, $address);

        if ($statement->execute() === TRUE) {
            $result = $conn->query($query);

            if ($result->num_rows == 1) {
                $user = $result->fetch_assoc();

                mysqli_close($conn);
                return $user;
            }
        }
    }
    public static function getUser($id)
    {
        global $conn;

        $query = $conn->prepare("SELECT * FROM users WHERE id = ?");;

        $query->bind_param("i", $id);
        $query->execute();
        $result = $query->get_result();
        $user = $result->fetch_assoc();
        return $user;
    }

    public static function loggedin()
    {
        global $conn;

        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE password = ?";
        $statement = $conn->prepare($query);

        $statement->bind_param("s", $password);
        $statement->execute();
        $result = $statement->get_result();
        $login = $result->fetch_assoc();

        mysqli_close($conn);
        return $login;
    }
}
