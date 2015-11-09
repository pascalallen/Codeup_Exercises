<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function arrayHasValue($name){
	if($count($name) != 0){
		return true;
	}else{
		return false;
	}
}