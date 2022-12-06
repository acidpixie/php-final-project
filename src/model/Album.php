<?php 

namespace Models;

class Album {

    private $product_id;
    private $name;
    private $artist;
    private $price;
    private $image;
    private $released;

    public function __construct($name, $artist, $price, $image, $released) 
    {
    
        $this->name = $name;
        $this->artist = $artist;
        $this->price = $price;
        $this->image = $image;
        $this->released = $released;
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

}

?>