<?php
require_once "rectangle.php";

class Square extends Rectangle
{

    public function perimeter()
    {
        return $this->height * 4;
    }

    public function area()
    {
    	return $this->width * $this->height;
    }

    public function __construct($side)
    {
		parent::__construct($side, $side);
	}

}