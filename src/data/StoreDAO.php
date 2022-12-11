<?php

include __DIR__ . "/config.php";

class StoreDAO {

    public static function getProduct($product_id) {
        global $conn;

        $query = "SELECT * FROM products WHERE product_id=?";
        $statement = $conn->prepare($query);

        $statement->bind_param("i", $product_id);
        $statement->execute();
        $result = $statement->get_result();
        $product = $result->fetch_assoc();
        return $product;
    }

    public static function fetchAllProducts() {
        global $conn;

        $query = "SELECT product_id FROM products";
        $statement = $conn->prepare($query);
        $statement->execute();
        $result = $statement->get_result();
        $products = $result->fetch_all(MYSQLI_ASSOC);
        return $products;
    }

    public static function getBestsellers() {
        global $conn;

        $query = "SELECT product_id FROM bestsellers";
        $statement = $conn->prepare($query);
        $statement->execute();
        $result = $statement->get_result();
        $bestsellers = $result->fetch_all(MYSQLI_ASSOC);
        return $bestsellers;


    }


}