<?php 
session_start();

include __DIR__ . "/./src/database.php";

$conn = dbconnect();

$firstname = trim($_POST['firstname']);
$firstname = mysqli_real_escape_string($conn, $firstname);

$surname = trim($_POST['surname']);
$surname = mysqli_real_escape_string($conn, $surname);

$email = trim($_POST['email']);
$email = mysqli_real_escape_string($conn, $email);

$password = trim($_POST['password']);
$password = mysqli_real_escape_string($conn, $password);

$address = trim(trim($_POST['address']));
$address = mysqli_real_escape_string($conn, $address);

if(empty($firstname) || empty($surname) || empty($email) || empty($password) || empty($address)){
        header("Location:../php-final-project/signup.php?signup=empty");
}else{
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        header("Location:../php-final-project/signup.php?signup=invalidemail");
    }else{
        $findUser = "SELECT * FROM users WHERE email = '$email'";
        $findResult = mysqli_query($conn, $findUser);
        if(mysqli_num_rows($findResult)==0){
            $insertUser = "INSERT INTO users(firstname,surname,email,password,address) VALUES 
            ('$firstname','$surname','$email','$password','$address')";
            $insertResult = mysqli_query($conn, $insertUser);
            if(!$insertResult){
                echo "Can't add new user " . mysqli_error($conn);
                exit;
        }
        $user_id = mysqli_insert_id($conn);
        header("Location: login.php");
        } else {
            $row = mysqli_fetch_assoc($findResult);
            $user_id = $row['user_id'];
            header("Location: login.php");
        }
    }
}	

if(isset($conn)) {mysqli_close($conn);}