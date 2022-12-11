<?php 

$conn = new mysqli("localhost", "root", "root", "kstore");
if($conn->connect_error) {
    die("Connection Failed!" . $conn->connect_error);
}

$result = array('error'=>false);
$action = '';

if (isset($_POST['action'])) {
    $action = $_POST['action'];

if($action == 'update') {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    
    $statement = $conn->query("UPDATE users SET firstname = '$firstname', surname='$surname', email='$email', password='$password', address='$address' WHERE id='$id'");

    if($statement) {
        $result['message'] = "User updated successfully";
    } else {
        $result['error'] = true;
        $result['message'] = "Failed to update user";
    }
}
}