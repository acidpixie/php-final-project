<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//connect to database
if (!function_exists("dbconnect")) {

    function dbconnect() {
        $conn = mysqli_connect("localhost", "root", "root", "kstore");
        if (!$conn) {
            echo "Error! Can not connect to the Database " . mysqli_connect_error($conn);
            exit;
        }
        return $conn;
    }
}

//get bestsellers
if (!function_exists("fetchBestsellers")) {
    function fetchBestsellers($conn) {
        $row = array();
        $query = "SELECT product_id, image, FROM products ORDER BY product_id DESC";
        $result = mysqli_query($conn, $query);
        if(!$result) {
            echo "Error! Cannot retrieve info " . mysqli_error($conn);
            exit;
        }
        for ($i = 0; $i < 4; $i++) {
            array_push($row, mysqli_fetch_assoc($result));
        }
        return $row;
    }
}

//get product
if (!function_exists("getAlbumId")){
    function getAlbumId($conn, $product_id){
        $query = "SELECT name, artist, price from products WHERE product_id = '$product_id'";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            echo "Error! Cannot retrieve info " . mysqli_error($conn);
            exit;
        }
        return $result;
    }
}

//get cart id
if (!function_exists("getCartId")){
	function getCartId($conn, $user_id){
		$query = "SELECT user_id FROM cart WHERE user_id = '$user_id'";
		$result = mysqli_query($conn, $query);
		if (!$result) {
            echo "Error! Cannot retrieve info " . mysqli_error($conn);
            exit;
		}
		$row = mysqli_fetch_assoc($result);
		return $row['user_id'];
	}
}

//insert into cart
if (!function_exists("insertIntoCart")){
	function insertIntoCart($conn, $user_id, $date){
		$query = "INSERT INTO cart(user_id,date) VALUES('$user_id','$date') ";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Insert Cart failed " . mysqli_error($conn);
			exit;
		}
	}
}

//get product price
if (!function_exists("getPrice")){
	function getPrice($product_id){
		$conn = dbconnect();
		$query = "SELECT price FROM products WHERE product_id = '$product_id'";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "get product price failed! " . mysqli_error($conn);
			exit;
		}
		$row = mysqli_fetch_assoc($result);
		return $row['price'];
	}
}

//get user by id
if (!function_exists("getUserId")){
	function getUserId($firstname, $surname){
		$conn = dbconnect();
		$query = "SELECT user_id from users WHERE 
		firstname = '$firstname' AND 
		surname = '$surname'
        ";
		$result = mysqli_query($conn, $query);

    // remove user if user already exists
		if($result){
			$row = mysqli_fetch_assoc($result);
			return $row['user_id'];
		} else {
			return null;
		}
	}
}

//get user by email
if (!function_exists("getUserByEmail")){
	function getUserByEmail($email){
		$conn = dbconnect();
		$query = "SELECT * from users WHERE 
		email = '$email'";
		$result = mysqli_query($conn, $query);

	// remove user if user already exists
		if($result){
			$row = mysqli_fetch_assoc($result);
			return $row;
		} else {
			return null;
		}
	}
}

//fetch all products
if (!function_exists("getAllProducts")){
	function products($conn){
		$query = "SELECT * from products ORDER BY product_id DESC";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Error! Cannot retrieve info " . mysqli_error($conn);
			exit;
		}
		return $result;
	}
}