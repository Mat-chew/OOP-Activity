<?php
class Vehicle {
    public $name;
    public $speed;
    public $mileage;

    public function __construct($name, $speed, $mileage) {
        $this->name = $name;
        $this->speed = $speed;
        $this->mileage = $mileage;
    }

    public function getDetails() {
        return "Vehicle Name: $this->name, Speed: $this->speed km/h, Mileage: $this->mileage kmpl";
    }
}

class Bus extends Vehicle {
    // The class buss inherits properties and methods from Vehicle
}

$bus = new Bus("School Bus", 80, 8);
echo $bus->getDetails();
?>
