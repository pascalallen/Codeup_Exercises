<?php

$a = 5;
$b = 10;
$c = '10';

if ($a < $b) {
	echo "$a is < $b\n";
}else {
	echo "$a is > $b\n";
}

if ($b >= $c) {
	echo "$b is >= $c\n";
}else {
	echo "$b is <= $c\n";
}

if ($b == $c) {
	echo "$b is == $c\n";
}else if ($b === $c) {
	echo "$b is === $c\n";
}else if ($b != $c) {
	echo "$b is not equal to $c\n";
}else ($b !== $c) {
	echo "$b is not identical to $c\n";
}

?>