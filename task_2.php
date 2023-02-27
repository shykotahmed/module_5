<?php

//Task 02

class Person {
    private $name, $email;

    function __construct( $name, $email ) {
        $this->name = $name;
        $this->email = $email;
    }

    public function setName( $name ) {
        $this->name = $name;
    }

    public function setEmail( $email ) {
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function DisplayPerson() {
        echo "Person's Name is: {$this->name}\n";
        echo "Person's Email is: {$this->email}\n";

        
    }
}

$singlePerson = new Person( 'Saikot', 'saikot@gmail.com' );
$singlePerson->DisplayPerson();


echo "==============\n";

$singlePerson->setName('Saikot');
$singlePerson->setEmail('saikot@gmail.com');
$singlePerson->DisplayPerson();