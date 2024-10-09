<?php
class      Vehicle {
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

$vehicle = new Vehicle("Car", 120, 15);
echo $vehicle->getDetails();
?>
