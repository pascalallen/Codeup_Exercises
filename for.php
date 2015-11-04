<?php
if(!$argv[1] && !$argv[2]){
	$argv[1] = 1;
	$argv[2] = 100;
}
$start = $argv[1];
$end = $argv[2];
for ($start; $start <= $end; $start++){
	if ($start % 3 == 0 && $start % 5 == 0){
		fwrite(STDOUT, "FizzBuzz" . PHP_EOL);
	} else if ($start % 3 == 0){
		fwrite(STDOUT, "Fizz" . PHP_EOL);
	} else if ($start % 5 == 0){
		fwrite(STDOUT, "Buzz" . PHP_EOL);
	} else {
		fwrite(STDOUT, "$start" . PHP_EOL);
	}
}