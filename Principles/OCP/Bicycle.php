<?php

namespace SOLID\OCP;

use SOLID\OCP\Vehicle;

class Bicycle extends Vehicle
{
    public function move(): string
    {
        return 'I am moving on the roads';
    }
}