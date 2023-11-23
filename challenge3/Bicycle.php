<?php
require_once 'Vehicle.php';
class Bicycle extends Vehicle
{

  public function __construct(string $color, int $nbSeats, int $nbWheels)
  {
    parent::__construct($color, $nbSeats, $nbWheels);
  }
  public function changeWheel()
  {
    return 'change wheel';
    $this->setNbWheels(3);
  }
}
