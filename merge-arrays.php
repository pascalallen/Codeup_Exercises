<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function getName($person, $names){
	$result = array_search($person, $names);
	if($result === false){
		return 'FALSE';
	}else{
		return 'TRUE';
	}
}

echo getName('Tina', $names) . PHP_EOL;
echo getName('Bob', $names) . PHP_EOL;

function compareArray($compare, $names){
	$commonItems = 0;
	foreach ($names as $key => $value) {
		$check = array_search($value, $compare);
		if($check !== false){
			$commonItems++;
		}
	}
	return "These arrays have {$commonItems} things in common" . PHP_EOL;
}

echo compareArray($compare, $names) . PHP_EOL;

function combine_arrays($value1, $value2){
	$newArray = array();
	for($i = 0; $i < count($value1); $i++){
		if($value1[$i] !== $value2[$i]){
			array_push($newArray, $value1[$i], $value2[$i]);
		}else{
			array_push($newArray, $value1[$i]);
		}
	}
	return $newArray;
}

print_r(combine_arrays($names, $compare));


