<?php
require_once 'Bicycle.php';
require_once 'Car.php';
$bike = new Bicycle();

$bike->setColor('blue');
$bike->setCurrentSpeed(0);
$bike->forward();
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

echo '<br><br>';

$car = new Car( 'green', 4, 'electric');
$car -> setEnergyLevel(100);
$car->start();
$car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';


$car2 = new Car( 'red', 4, 'electric');
$car2 -> setEnergyLevel(100);
$car2->start();
$car2->forward();
echo '<br> Vitesse de la voiture : ' . $car2->getCurrentSpeed() . ' km/h' . '<br>';
echo $car2->brake();
echo '<br> Vitesse de la voiture : ' . $car2->getCurrentSpeed() . ' km/h' . '<br>';