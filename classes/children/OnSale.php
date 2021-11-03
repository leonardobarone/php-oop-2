<?php
 
require_once __DIR__ . '/../Product.php';

class OnSale extends Product {
    private $isOnSale;

    function __construct($_name, $_description, $_image, $_price, $_isOnSale)
    {
        parent::__construct($_name, $_description, $_image, $_price);
        $this->isOnSale = $_isOnSale;
    }
   
    public function getIsOnSale() {
        return $this->isOnSale;
    }

    public function setIsOnSale($_isOnSale) {
        $this->isOnSale = $_isOnSale;
    }
}

$on_sale_1 = new OnSale("Tastiera Black", "descrizione e e ella e ella", "path-image", 57, true);