<?php 

header('Access-Control-Allow-Origin: *');

$conn = new mysqli("localhost", "root", "root", "kstore");
if($conn->connect_error) {
    die("Connection Failed!" . $conn->connect_error);
}

$result = array('error'=>false);
$action = '';

if (isset($_POST['action'])) {
    $action = $_POST['action'];

if($action == 'create') {
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    
    $statement = $conn->query("INSERT INTO users (firstname, surname, email, password, address) VALUE ('$firstname', '$surname', '$email', '$password', '$address'");

    if($statement) {
        $result['message'] = "User added successfully";
    } else {
        $result['error'] = true;
        $result['message'] = "Failed to add in user";
    }
}
}