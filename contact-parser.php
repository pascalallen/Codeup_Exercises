<?php
function parseContacts($filename) // function to parse contacts.txt file
{
    $handle = fopen($filename, "r"); // opens contacts.txt file and is a read only
    $fileContentsString = fread($handle, filesize($filename)); // reading to the specific length of the contacts.txt file
    $arrayOfStrings = explode("\n", trim($fileContentsString)); // takes apart each line in contacts.txt file
    foreach($arrayOfStrings as $info) {
    	$name = explode('|', $info);
    	$number = substr($name[1], 0, 3) . '-' . substr($name[1], 3, 3) . '-' . substr($name[1], 6, 4);
    	$contacts[] = array(
    		'name' => $name[0], 
    		'number' => $number
    		);
    };
    fclose($handle);
    return $contacts;
}
var_dump(parseContacts('contacts.txt'));