<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{
  private $storageCapacity;
  private $CurrentLoad = 0;
  public function changeWheel()
  {
    return 'change wheel';
    $this->setNbWheels(6);
  }
  public function __construct(string $color, int $nbSeats, string $nbWheels, int $storageCapacity)
  {
    parent::__construct($color, $nbSeats, $nbWheels);
    $this->storageCapacity = $storageCapacity;
  }

  public function getStorageCapacity(): int
  {
    return $this->storageCapacity;
  }
  public function GetCurrentLoad(): int
  {
    return $this->CurrentLoad;
  }

  public function load(int $quantity): string
  {
    $sentence = "";
    if ($this->CurrentLoad + $quantity < $this->storageCapacity) {
      $this->CurrentLoad += $quantity;
      $sentence .= 'in filling ';
    } else if ($this->CurrentLoad + $quantity == $this->storageCapacity) {
      $sentence .= 'full ';
      $this->CurrentLoad += $quantity;
    } else {
      $sentence .= 'overload ';
    }
    return $sentence;
  }
}
