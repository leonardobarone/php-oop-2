<?php

class Product {
    private $name;
    private $description;
    private $image;
    private $price;
    
    /**
     * __construct
     *
     * @param  string $_name
     * @param  string $_description
     * @param  string $_image
     * @param  int $_price
     * @return void
     */
    function __construct($_name, $_description, $_image, $_price)
    {
        $this->name = $_name;
        $this->description = $_description;
        $this->image = $_image;
        $this->price = $_price;
    }

    public function getName() {
        return $this->name; 
    }

    public function setName($_name) {
        $this->name = $_name; 
    }
    
    public function getDescription() {
        return $this->description; 
    }

    public function setDescription($_description) {
        $this->description = $_description; 
    }

    public function getImage() {
        return $this->image; 
    }

    public function setImage($_image) {
        $this->image = $_image; 
    }

    public function getPrice() {
        return $this->price; 
    }

    public function setPrice($_price) {
        $this->price = $_price; 
    }
}

$product1 = new Product("Alexa Speaker","Lorem ipsum dolor sit amet consectetur adipisicing elit.","https://picsum.photos/200/300", 24.99);
$product2 = new Product("Tagliaunghie JeoPoom","Lorem ipsum dolor sit amet consectetur adipisicing elit.","https://picsum.photos/200/300", 12.05);
$product3 = new Product("Profumo Paco Rabanne","Lorem ipsum dolor sit amet consectetur adipisicing elit.","https://picsum.photos/200/300", 34.50);
$product4 = new Product("Acqua Levissima","Lorem ipsum dolor sit amet consectetur adipisicing elit.","https://picsum.photos/200/300", 19.99);
