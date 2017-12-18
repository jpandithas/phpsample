<?php
/**
 * Date: 18-Dec-17
 * Time: 6:44 PM
 */


$vehicle  = new Vehicle("loco", "blue", "DB");
echo $vehicle->Start();

echo "<hr>";

$car1 = new Car("Saloon", "Blue", "Jeep");
echo $car1->Start();
$car2 = new Car("Sport", "Red", "Ferrari");
$car2::$sound = "Sound1";

echo "<br>".$car1::$sound;

$copier  = new Machine();
echo $copier->Start();

interface iPrintable
{
    public function PrintData();
}

class Machine
{
    public function Start()
    {
        return "Machine started";
    }

    public function Stop()
    {
        return "Machine Stopped";
    }
}

class Vehicle implements iPrintable
{
    public $type;
    public $color;
    public $brand;

    public function __construct($type, $color, $brand)
    {
        $this->type = $type;
        $this->color = $color;
        $this->brand = $brand;
    }

    public function PrintData()
    {
        echo "I am printing";
    }

    public function Start()
    {
        return "Started!";
    }

    public function Stop()
    {
        return "Stopped!";
    }

}

class Car extends Vehicle implements iPrintable
{

    public static $sound;

    public function Start()
    {
        return "the ".$this->type." has ".parent::Start();
    }

}

?>


