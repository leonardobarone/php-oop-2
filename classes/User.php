<?php

class User {
    private $name;
    private $surname;
    private $mail;
    private $date_of_birth;
    
    /**
     * __construct
     *
     * @param  string $_name
     * @param  string $_surname
     * @param  string $_mail
     * @param  string $_date_of_birth
     * @return void
     */
    function __construct($_name, $_surname, $_mail, $_date_of_birth)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->mail = $_mail;
        $this->date_of_birth = $_date_of_birth;
    }

    public function getName() {
        return $this->name; 
    }

    public function setName($_name) {
        $this->name = $_name; 
    }
    
    public function getSurname() {
        return $this->surname; 
    }

    public function setSurname($_surname) {
        $this->surname = $_surname; 
    }

    public function getMail() {
        return $this->mail; 
    }

    public function setMail($_mail) {
        $this->mail = $_mail; 
    }

    public function getDateOfBirth() {
        return $this->date_of_birth; 
    }

    public function setDateOfBirth($_date_of_birth) {
        $this->date_of_birth = $_date_of_birth; 
    }
}

$user1 = new User("Leonardo", "Barone", "leonardobarone@gmail.com", "26-01-1993");
$user2 = new User("Samuele", "Scotto", "samuelescotto@gmail.com", "14-011-1984");
$user3 = new User("Alfonso", "Gasperini", "alfonsogasperini@gmail.com", "04-01-1995");
$user4 = new User("Martina", "Corona", "martinacorona@gmail.com", "21-09-1997");
