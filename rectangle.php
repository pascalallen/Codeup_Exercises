<?php

class Rectangle
{
    private $height;
    private $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width  = $width;
    }

    private function setHeight($height)
    {
        $this->height = trim($height);
    }

    private function setWidth($width)
    {
        $this->width = trim($width);
    }

    public function getArea()
    {
        return $this->height * $this->width;
    }

    protected function getHeight()
    {
        return $this->height;
    }

    protected function getWidth()
    {
        return $this->width;
    }

}
