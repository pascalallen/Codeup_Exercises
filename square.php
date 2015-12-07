<?php
require_once "rectangle.php";

class Square extends Rectangle
{

    public function __construct($side)
    {
		parent::__construct($side, $side);
	}

    public function getPerimeter()
    {
        return $this->getHeight() * 4;
    }
}