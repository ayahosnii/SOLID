<?php
namespace SOLID\LSP;

class Square extends Rectangle
{
    public function setHeight(int $height): void
    {
        $this->height = $height;
        $this->width = $height;
    }

    public function setWidth(int $width): void
    {
        $this->width = $width;
        $this->height = $width;
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