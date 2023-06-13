<?php
define('DS', DIRECTORY_SEPARATOR);

use SOLID\OCP\Car;
use SOLID\OCP\MovingOnTheRoads;
use SOLID\OCP\Trip;
use SOLID\OCP\Bus;
use SOLID\OCP\Driver;
use SOLID\OCP\Route;

require_once __DIR__ . DS . 'vendor' . DS . 'autoload.php';


$aya = new Driver('aya', 25, 'SA73846', 'Cairo');
$route80 = new Route('Cairo', 'Alexandria', 302);
$route90 = new Route('Alexandria', 'Aswan', 1000);

$bus = new Bus(201);
$bus->setDriver($aya);
$bus->setColor('red');
$bus->setDoors(2);
$bus->setMaximumSpeed(200);

//$bus->addRoute($route80);
//$bus->addRoute($route90);
echo '<pre>';
$bus->setMovable(new MovingOnTheRoads());

$trip = new Trip($bus, 'R230', '60', '120');
echo $trip->move();