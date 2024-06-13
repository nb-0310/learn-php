<?php
class Car {
    public $make;
    public $model;
    public $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function displayInfo() {
        return "Car: $this->year $this->make $this->model";
    }
}

$car1 = new Car("Toyota", "Corolla", 2020);
echo $car1->displayInfo();