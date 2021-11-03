<?php
 
require_once __DIR__ . '/../User.php';

class Premium extends User {
    private $isPrime;

    function __construct($_name, $_surname, $_mail, $_date_of_birth, $_isPrime)
    {
        parent::__construct($_name, $_surname, $_mail, $_date_of_birth);
        $this->isPrime = $_isPrime;
    }
   
    public function getIsPrime() {
        return $this->isPrime;
    }

    public function setIsPrime($_isPrime) {
        $this->isPrime = $_isPrime;
    }
}

$premium1 = new Premium("Paolino", "Paperino", "paolinopaperino@gmail.com", "01-01-1970", "ciao");