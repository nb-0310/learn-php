<?php
class Vehicle {
    public $make;
    public $model;

    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

    public function displayInfo() {
        return "Vehicle: $this->make $this->model";
    }
}

class Motorcycle extends Vehicle {
    public $type;

    public function __construct($make, $model, $type) {
        parent::__construct($make, $model);
        $this->type = $type;
    }

    public function displayInfo() {
        return "Motorcycle: $this->make $this->model, Type: $this->type";
    }
}

$motorcycle = new Motorcycle("Harley-Davidson", "Sportster", "Cruiser");
echo $motorcycle->displayInfo();