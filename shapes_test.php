<?php

require_once "rectangle.php";
require_once "square.php";

$rectangle = new Rectangle(15, 5);
$square = new Square(10);
echo $rectangle->area() . PHP_EOL;
echo $square->area() . PHP_EOL;
echo $square->perimeter() . PHP_EOL;