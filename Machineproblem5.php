<?php
class Vehicle {
    public static $type = "Land Transport";

    public function getType() {
        return self::$type;
    }
}

class Bus extends Vehicle {
}

class Car extends Vehicle {
}

$bus = new Bus();
$car = new Car();

echo "Bus Type: " . $bus->getType();
echo "<br>Car Type: " . $car->getType();
?>
