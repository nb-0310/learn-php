<?php
class Person {
    public $name;
    public $email;
    private $aadharNo;

    private function generateAadhar() {
        $randomNumber = '';
        for ($i = 0; $i < 12; $i++) {
            $randomNumber .= mt_rand(0, 9);
        }
        return $randomNumber;
    }

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function createAadhar () {
        if ($this->aadharNo) {
            throw new Exception('You already have an Aadhar!');
        }

        $this->aadharNo = $this->generateAadhar();
    }

    public function get_aadharNo() {
        return $this->aadharNo;
    }
}

$person = new Person("Nirzar", "nb@test.com");
$person->createAadhar();
echo "<pre>";
var_dump($person->get_aadharNo());
echo "</pre>";