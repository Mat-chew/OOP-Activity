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
    public function seatingCapacity($capacity = 50) {
        return "The seating capacity of the bus is $capacity.";
    }
}

$bus = new Bus("School Bus", 80, 8);
echo $bus->getDetails();
echo "<br>" . $bus->seatingCapacity();
?>
