<?php

include __DIR__ . "/config.php";

class CartDAO {

    public static function createOrder() {
        global $conn;

        $user_id = $_SESSION['LoggedIn']['user_id'];
        $order_id = $_SESSION['Cart'];
        $total_price = '';
        $order_date = date('y/m/d');
        

        $query = "INSERT INTO orders (order_id, user_id, total_price, order_date) VALUES (?,?)";
        $statement = $conn->prepare($query);
        $statement->bind_param("ss", $order_id, $order_date);
        $statement->execute();

    }

}