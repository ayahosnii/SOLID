<?php

class Rectangle
{
    /**
     * @var int
     */
    private $width;
    /**
     * @var int
     */
    private $height;


    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
    }


    /**
     * Calculate the area of the rectangle
     * @return int
     */
    public function calculateArea() :int
    {
        return $this->getWidth() * $this->getHeight();
    }

}