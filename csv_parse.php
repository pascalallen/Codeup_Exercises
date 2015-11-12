<?php
// function CSV($string)
// {
// 	$csvLine = explode(',', $string);
// 	if(!is_numeric($string)){
// 		array_unshift($string, var)
// 	}
// }
function parseEmployees($filename)
{
	$handle = fopen($filename, "r");
	$fileContentsString = fread($handle, filesize($filename));
	$arrayOfStrings = explode("\n", trim($fileContentsString));
	foreach($arrayOfStrings as $info)
	{
		$personInfoArray = explode(",", $info);
		$employeeNumber = $personInfoArray[0];
		$employeeFullName = $personInfoArray[1] . $personInfoArray[2];
		$employeeSalesUnits = $personInfoArray[3];
		$employees[] = array(
			'units' => $employeeSalesUnits,
			'name' => $employeeFullName,
			'number' => $employeeNumber
			);
	};
	fclose($handle);
	return $employees;
}
var_dump(parseEmployees('report.txt'));