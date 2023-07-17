<?php


use PHPUnit\Framework\TestCase;
use SOLID\LSP\Square;

class SquareTest extends TestCase
{
    private $square;
    public function setUp() : void
    {
        $this->square = new \SOLID\LSP\Rectangle();
        $this->square->setWidth(5);
        $this->square->setHeight(10);
    }

    public function test_that_area_is_valid()
    {
        $this->assertEquals(50, $this->square->calculateArea());
    }
}
