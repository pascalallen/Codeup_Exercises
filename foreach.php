<?php
$things = array(
	'Sgt. Pepper',
	"11",
	null,
	array(
		1,
		2,
		3
	),
	3.14,
	"12 + 7",
	false,
	(string) 11
);
foreach ($things as $value) {
    if (is_string($value)) {
        echo "{$value} is a string\n";
    } else if (is_null($value)) {
        echo "{$value} is null\n";
    } else if (is_array($value)) {
    	foreach($value as $element){
    		echo "{$element} is part of the array\n";
    	}
    } else if (is_float($value)) {
        echo "{$value} is a float\n";
    } else if (is_bool($value)) {
        echo "{$value} is a boolean\n";
    } else if (is_scalar($value)) {
        echo "{$value} is scalar\n";
    }
}