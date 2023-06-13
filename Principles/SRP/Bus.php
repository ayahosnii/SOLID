<?php

namespace SOLID\SRP;

class Bus
{
    /**
     * @var int
     */
    private $busNumber;

    /**
     * @var int
     */
    private $numberOfPassengers;

    /**
     * @var string
     */
    private $color;

    /**
     * @var int
     */
    private $maximumSpeed;

    /**
     * @var int
     */
    private $doors;

    /**
     * @var Driver
     */
    private $driver;

    /**
     * @var array
     */
    private $routes = [];


    /**
     * Bus constructor.
     * @param $busNumber
     */
    public function __construct($busNumber)
    {
        $this->setBusNumber($busNumber);
    }

    /**
     * @return int

    /**
     * @param int $busNumber
     */
    public function setBusNumber(int $busNumber): void
    {
        $this->busNumber = $busNumber;
    }

    /**
     * @return int
     */
    public function getNumberOfPassengers(): int
    {
        return $this->numberOfPassengers;
    }

    /**
     * @param int $numberOfPassengers
     */
    public function setNumberOfPassengers(int $numberOfPassengers): void
    {
        $this->numberOfPassengers = $numberOfPassengers;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getMaximumSpeed(): int
    {
        return $this->maximumSpeed;
    }

    /**
     * @param int $maximumSpeed
     */
    public function setMaximumSpeed(int $maximumSpeed): void
    {
        $this->maximumSpeed = $maximumSpeed;
    }

    /**
     * @return int
     */
    public function getDoors(): int
    {
        return $this->doors;
    }

    /**
     * @param int $doors
     */
    public function setDoors(int $doors): void
    {
        $this->doors = $doors;
    }

    /**
     * @return Driver
     */
    public function getDriver(): Driver
    {
        return $this->driver;
    }

    /**
     * @param Driver $driver
     */
    public function setDriver(Driver $driver): void
    {
        $this->driver = $driver;
    }

    /**
     * @return array
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }

    /**
     * @param array $routes
     */
    public function setRoutes(array $routes): void
    {
        $this->routes = $routes;
    }

    /**
     * @return int
     */
    public function addRoute(Route $route) : void
    {
        $this->routes[] = $route;
    }

    /**
     * @return int
     */
    public function getBusNumber(): int
    {
        return $this->busNumber;
    }

    /**
     * @param int $busNumber
     */

    /**
     * @return string
     */
    public function move() :string
    {
        $output = '';
        foreach ($this->getRoutes() as $route) {
            $output .= 'I\'m moving now from ' . $route->getSource() . ' To ' . $route->getDestination()
            .'at maximum speed of ' . $this->getMaximumSpeed();

        }
        return $output;
    }

}