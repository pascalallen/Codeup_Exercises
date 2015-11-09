 <?php

 // Converts array into list n1, n2, ..., and n3
 function humanizedList($array, $sorting = false) {
   // Your solution goes here!
 	if($sorting){
 		sort($array);
 	}
 	$lastItem = ' and ' . array_pop($array);
 	$array = implode(', ', $array) . $lastItem;
 	return $array;
 }

 // List of famous peeps
 $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

 // TODO: Convert the string into an array
 $physicistsArray = explode(', ', $physicistsString);

 // Humanize that list
 $famousFakePhysicists = humanizedList($physicistsArray);

 // Output sentence
 echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;