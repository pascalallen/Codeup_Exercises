<?php

function add($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
	    return $a + $b;
	} else {
	    return "ERROR: Both arguments must be numbers\n";
	}
}

function subtract($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
        return $a - $b;
    } else {
        return "ERROR: Both arguments must be numbers\n";
    }
}

function multiply($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        return $a * $b;
    } else {
        return "ERROR: Both arguments must be numbers\n";
    }
}

function divide($a, $b)
{
    if (is_numeric($a) && is_numeric($b) && $a && $b != 0) {
        return $a / $b;
    } else {
        return "ERROR: Both arguments must be numbers AND not 0\n";
    }
}

function modulus($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
        return $a % $b;
    } else {
        return "ERROR: Both arguments must be numbers\n";
    }
}

// Add code to test your functions here
echo add(10, 2) . PHP_EOL;
echo subtract(10, 2) . PHP_EOL;
echo multiply(10, 2) . PHP_EOL;
echo divide(10, 2) . PHP_EOL;
echo modulus(10, 2) . PHP_EOL;





