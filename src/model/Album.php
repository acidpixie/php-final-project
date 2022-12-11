<?php 

include __DIR__ . "/../data/StoreDAO.php";

class Album {

    private $product_id;
    private $name;
    private $artist;
    private $price;
    private $image;
    private $released;

    public function __construct($product_id) 
    {

        $product = StoreDAO::getProduct($product_id);

        $this->product_id = $product['product_id'];    
        $this->name = $product['name'];
        $this->artist = $product['artist'];
        $this->price = $product['price'];
        $this->image = $product['image'];
        $this->released = $product['released'];
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

    public function getName() 
    {
        return $this->name;
    }

    public function setName($name) 
    {
        $this->name = $name;
        return $this;
    }

    public function getArtist() 
    {
        return $this->artist;
    }

    public function setArtist($artist) 
    {
        $this->artist = $artist;
        return $this;
    }

    public function getPrice() 
    {
        return $this->price;
    }

    public function setPrice($price) 
    {
        $this->price = $price;
        return $this;
    }

    public function getImage() 
    {
        return $this->image;
    }

    public function setImage($image) 
    {
        $this->image = $image;
        return $this;
    }

    public function getReleased() 
    {
        return $this->released;
    }

    public function setReleased($released) 
    {
        $this->price = $released;
        return $this;
    }

    public static function filter() {
        $products = StoreDAO::fetchAllProducts();
        $sortItems = [];

        if (isset($_POST['sort'])) {
            $query = "SELECT * FROM products ORDER BY name";
            }
        elseif (isset($_POST['price'])) {
            $query = "SELECT * FROM products ORDER BY price";
    } else {
        return [];
    }
    return $sortItems;
}
    public static function getBestsellers() {
        return StoreDAO::getBestsellers();
    }

}