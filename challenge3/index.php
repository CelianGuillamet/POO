<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$bicycle = new Bicycle('blue', 1, 2);
echo $bicycle->forward();
var_dump($bicycle);

echo '<br><br>';
$car = new Car('green', 4, 6, 'electric');
$car->setNbWheels(4);
echo $car->forward();
var_dump($car);


echo '<br><br>';
$truck1 = new Truck('red', 3, 8, 100);
echo $truck1->load(10);
echo $truck1->load(90);
echo $truck1->forward();
echo $truck1->brake();
var_dump($truck1);

echo '<br><br>';

$residential = new ResidentialWay();
$residential->addVehicle($bicycle);
$residential->addVehicle($car);
$residential->addVehicle($truck1);

var_dump($residential);

$motorway = new MotorWay();
$motorway->addVehicle($car);
$motorway->addVehicle($truck1);
$car->setCurrentSpeed(200);

var_dump($motorway);
