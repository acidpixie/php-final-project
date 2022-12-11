<?php 

header('Access-Control-Allow-Origin: *');

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
    $statement = $conn->query("SELECT * FROM products");
    $products = array();

    while ($row = $statement->fetch_assoc()) {
        array_push($products, $row);
    }
    $result['products'] = $products;

    echo json_encode($result);
    
}


?>