<?php
class Vehicle {
    public $name;
    public $speed;
    public $mileage;
    public $capacity;

    public function __construct($name, $speed, $mileage, $capacity = 50) {
        $this->name = $name;
        $this->speed = $speed;
        $this->mileage = $mileage;
        $this->capacity = $capacity;
    }

    public function fare() {
        return $this->capacity * 100;
    }
}

class Bus extends Vehicle {
    public function fare() {
        $basicFare = parent::fare();
        $maintenanceCharge = $basicFare * 0.10;
        return $basicFare + $maintenanceCharge;
    }
}

$bus = new Bus("City Bus", 60, 6);
echo "Total Bus Fare: " . $bus->fare(); 
?>
