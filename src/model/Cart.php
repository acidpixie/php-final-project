<?php 

include __DIR__ . "/../data/CartDAO.php";

class Cart {

    private $user_id;
    private $product_id;
    private $cart_id;
    private $product_name;
    private $product_price;
  
    public function __construct($user_id, $product_id, $cart_id, $product_name, $product_price)
    {
        $this->user_id = $user_id;
        $this->product_id = $product_id;
        $this->cart_id = $cart_id;
        $this->product_name = $product_name;
        $this->product_price = $product_price;
    }

    public function getUser_id()
    {
        return $this->user_id;
    }

    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;
        return $this;
    }

    public function getProduct_id()
    {
        return $this->product_id;
    }

    public function setProduct_id($product_id)
    {
        $this->product_id = $product_id;
        return $this;
    }

    public function getCart_id()
    {
        return $this->cart_id;
    }

    public function setCart_id($cart_id)
    {
        $this->cart_id = $cart_id;
        return $this;
    }

    public function getProduct_name()
    {
        return $this->product_name;
    }

    public function setProduct_name($product_name)
    {
        $this->product_name = $product_name;
        return $this;
    }

    public function getProduct_price()
    {
        return $this->product_price;
    }

    public function setProduct_price($product_price)
    {
        $this->product_price = $product_price;
        return $this;
    }


    public static function addToCart() {
        $product_id = $_POST['product_id'];
        if (!in_array($product_id, $_SESSION['Cart'])) {
            array_push($_SESSION['Cart'], $product_id);
        }
        header("Location:../cart.php");
        exit();
    }
    
    public static function showCart() {
        if (empty($_SESSION['Cart'])) {
            echo " You do not have any items in your cart";
        } else {
            return ($_SESSION['Cart']);
        }
    }

    public static function delete() {
        $product_id = $_POST['product_id'];
        $index = array_search($product_id, $_SESSION['Cart']);
        unset($_SESSION['Cart'][$index]);
        header("Location: ../cart.php");
        exit();
    }

    public static function clear() {
        $_SESSION['Cart'] = [];
        header("Location: ../cart.php");
        exit();
    }
}