<?php
require_once 'HighWay.php';
final class ResidentialWay extends HighWay
{
  public function __construct()
  {
    parent::__construct(2, 50);
    $this->currentVehicles = [];
  }

  public function addVehicle(Vehicle $vehicle)
  {
    if ($vehicle instanceof Car || $vehicle instanceof Truck || $vehicle instanceof Bicycle) {
      $this->currentVehicles[] = $vehicle;
    }
  }
}
