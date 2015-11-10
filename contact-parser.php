<?php
function parseContacts($filename) // function to parse contacts.txt file
{
    $handle = fopen($filename, "r"); // opens contacts.txt file and is a read only
    $fileContentsString = fread($handle, filesize($filename)); // reading to the specific length of the contacts.txt file
    $arrayOfStrings = explode("\n", trim($fileContentsString)); // takes apart each line in contacts.txt file
    foreach($arrayOfStrings as $info) // going through contacts.txt file which is an array
    {
    	$personInfoArray = explode('|', $info); // taking apart each line at the '|'. left with 2 parts, name and phone number
    	$name = $personInfoArray[0]; // assigning $name to the names before the '|'
    	$number = $personInfoArray[1]; // assigning $number to the numbers after the '|'
    	$number = substr($personInfoArray[1], 0, 3) . '-' . substr($personInfoArray[1], 3, 3) . '-' . substr($personInfoArray[1], 6, 4); // creating the phone numbers on each line with dashes
    	$contacts[] = array( // creating $contacts array
    		'name' => $name, // declaring index[0] of the $contacts array to be assigned 'name'
    		'number' => $number // declaring index[1] of the $contacts array to be assigned 'number'
    		);
    };
    fclose($handle); // closing file that was opened and read('contacts.txt')
    return $contacts; // returns newly built contacts array after the foreach loop has created it
}
var_dump(parseContacts('contacts.txt')); // dumping the contacts.txt as array