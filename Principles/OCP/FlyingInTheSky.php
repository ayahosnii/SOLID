<?php

namespace SOLID\OCP;

class FlyingInTheSky implements IVehicle
{
    public function move(): string
    {
        return 'I am flying in the sky';
    }
}