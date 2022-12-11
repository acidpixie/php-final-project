<?php 

header('Access-Control-Allow-Origin: *');

/*
namespace Process;

use Config\DbConfig;
use Models\Album;
use Models\User;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//$conn = $DbConfig->connect();
*/

$conn = new mysqli("localhost", "root", "root", "kstore");
if($conn->connect_error) {
    die("Connection Failed!" . $conn->connect_error);
}

$result = array('error'=>false);
$action = '';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

if($action == 'read') {
    $statement = $conn->query("SELECT * FROM users");
    $users = array();

    while ($row = $statement->fetch_assoc()) {
        array_push($users, $row);
    }
    $result['users'] = $users;
    
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
    
    $statement = $conn->query("INSERT INTO users (firstname, surname, email, password, address) VALUES('$firstname', '$surname', '$email', '$password', '$address'");

    if($statement) {
        $result['message'] = "User added successfully";
    } else {
        $result['error'] = true;
        $result['message'] = "Failed to add in user";
    }
}}


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
}}


$result = array('error'=>false);
$action = '';

if (isset($_POST['action'])) {
    $action = $_POST['action'];

if($action == 'delete') {
    $id = $_POST['id'];

    $statement = $conn->query("DELETE FROM users WHERE id='$id'");

    if($statement) {
        $result['message'] = "User deleted successfully";
    } else {
        $result['error'] = true;
        $result['message'] = "Failed to update user";
    }
}}

$conn->close();

echo json_encode($result);