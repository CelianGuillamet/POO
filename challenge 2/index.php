<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';


$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

echo '<br><br>';
$car = new Car('green', 4, 'electric');
$car->setNbWheels(4);
echo $car->forward();
var_dump($car);


echo '<br><br>';
$truck1 = new Truck('red', 3, 'fuel', 100);
$truck1->setNbWheels(8);
echo $truck1->load(10);
echo $truck1->load(90);
echo $truck1->forward();
echo $truck1->brake();
var_dump($truck1);
