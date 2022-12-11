<?php

include __DIR__ . "/config.php";

class StoreDAO {

    public static function getProduct($product_id) {
        global $conn;

        $query = "SELECT * FROM products WHERE product_id=?";
        $statement = $conn->prepare($query);

        $statement->bind_param("i", $product_id);





    }
}