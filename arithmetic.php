<?php

function add($a, $b)
{
	$error = errorCheck($a, $b);
	if ($error) {
	    return $a + $b;
	}
}

function subtract($a, $b)
{
	$error = errorCheck($a, $b);
	if ($error) {
        return $a - $b;
    }
}

function multiply($a, $b)
{
	$error = errorCheck($a, $b);
    if ($error) {
        return $a * $b;
    }
}

function divide($a, $b)
{
	$error = errorCheck($a, $b);
    if ($error) {
    	if($a != 0 && $b != 0){
        	return $a / $b;
        } else {
        	echo "ERROR: Cannot divide by 0\n";
    	}
    }
}

function modulus($a, $b)
{
	$error = errorCheck($a, $b);
	if ($error) {
		if($a != 0 && $b != 0 ){
        	return $a % $b;
        } else {
        	echo "ERROR: Cannot divide by 0\n";
    	}
    }
}

function errorCheck($a, $b)
{
	if(!is_numeric($a) || !is_numeric($b)){
		echo "ERROR: Both arguments must be numbers\n";
		return false;
	} else {
		return true;
	}
}

// Add code to test your functions here
echo add(10, 2) . PHP_EOL;
echo subtract(10, 2) . PHP_EOL;
echo multiply(10, 2) . PHP_EOL;
echo divide(10, 2) . PHP_EOL;
echo modulus(10, 2) . PHP_EOL;





