<?php

class Rectangle
{
    public $height;
    public $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width  = $width;
    }

    public function area()
    {
        return $this->height * $this->width;
    }
}

// class Superhero extends Person
// {
//     public $pseudonym;
//     public $capeColor;

//     public function alterEgo()
//     {
//         return 'Top Secret Alternate Ego: ' . $this->fullName();
//     }

//     public function hasCape()
//     {
//         return !empty($this->capeColor);
//     }
// }