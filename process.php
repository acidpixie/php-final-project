<?php

 session_start();

	require_once __DIR__ . "/./src/database.php";

    $conn = dbconnect();

		$firstname = trim($_POST['firstname']);
		$firstname = mysqli_real_escape_string($conn, $firstname);
		
		$surname = trim($_POST['surname']);
		$surname = mysqli_real_escape_string($conn, $surname);
		
		$address = trim(trim($_POST['address']));
		$address = mysqli_real_escape_string($conn, $address);


	// find customer
	$user = getUserByEmail($_SESSION['email']);
	$id=$user['id'];
	$query="UPDATE users set firstname='$firstname', surname='$surname' , address='$address' where user_id='$user_id'";
	mysqli_query($conn, $query);
	$date = date("Y-m-d H:i:s");

	insertIntoCart($conn, $id['id'],$date);

	// take orderid from order to insert order items
	// $orderid = getOrderId($conn, $user_id['user_id']);
	$Cartid = getCartId($conn, $id['id']);

	foreach($_SESSION['cart'] as $id => $qty){
		$price = getPrice($id);
		$query = "INSERT INTO cartItems(cart_id,user_id,quantity) VALUES 
		('$cart_id', '$id', '$qty')";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Insert value false!" . mysqli_error($conn);
			exit;
		}
	}

	unset($_SESSION['total_price']);
	unset($_SESSION['cart']);
	unset($_SESSION['total_items']);

?>
	<p class="lead text-success" id="p">Your order has been processed sucessfully..</p>
   <script>
   	
		window.setTimeout(function(){

		window.location.href = "http://localhost/php-final-project/index.php";

		}, 3000);
	
   </script>

<?php
	if(isset($conn)){
		mysqli_close($conn);
    }

?>