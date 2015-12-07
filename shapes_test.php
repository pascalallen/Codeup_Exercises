<?php

require_once "rectangle.php";
require_once "square.php";

$rectangle = new Rectangle(15, 5);
$square = new Square(10);
echo $rectangle->getArea() . PHP_EOL;
echo $square->getArea() . PHP_EOL;
echo $square->getPerimeter() . PHP_EOL;