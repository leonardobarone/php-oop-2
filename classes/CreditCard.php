<?php

class CreditCard {
    public $number;
    public $validThru;
    public $cvv;
    
    /**
     * __construct
     *
     * @param  int $_number
     * @param  string $_validThru
     * @param  int $_cvv
     * @return void
     */
    function __construct($_number, $_validThru, $_cvv)
    {
        $this->number = $_number;
        $this->validThru = $_validThru;
        $this->cvv = $_cvv;
    }
}

$carta_di_credito_1 = new CreditCard(4815162342, "00/99", 345);
$carta_di_credito_2 = new CreditCard(1234567890, "22/88", 123);

