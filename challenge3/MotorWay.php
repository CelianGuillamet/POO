<?php
require_once 'HighWay.php';

final class MotorWay extends HighWay
{

  public function __construct()
  {
    parent::__construct(4, 130);
    $this->currentVehicles = [];
  }

  public function addVehicle(Vehicle $vehicle)
  {
    if ($vehicle instanceof Car || $vehicle instanceof Truck) {
      $this->currentVehicles[] = $vehicle;
    } else {
      throw new Error("This vehicle is not allowed on this highway");
    }
  }
}
