<?php
function parseContacts($filename) // function to parse contacts.txt file
{
    $handle = fopen($filename, "r"); // opens contacts.txt file and is a read only
    $fileContentsString = fread($handle, filesize($filename)); // reading to the specific length of the contacts.txt file
    $arrayOfStrings = explode("\n", trim($fileContentsString)); // takes apart each line in contacts.txt file
    foreach($arrayOfStrings as $info) // going through contacts array
    {
    	$name = explode('|', $info); // taking apart each line at the '|' to end up with the name as index name[0] and the number as index name[1]
    	$number = substr($name[1], 0, 3) . '-' . substr($name[1], 3, 3) . '-' . substr($name[1], 6, 4); // creating the phone numbers on each line with dashes
    	$contacts[] = array( // renaming name[0] to 'name' and name[1] to number and pushing it to contacts[]
    		'name' => $name[0], 
    		'number' => $number
    		);
    };
    fclose($handle); // closing file that was opened and read('contacts.txt')
    return $contacts; // returns newly built contacts array after the foreach loop has created it
}
var_dump(parseContacts('contacts.txt')); // dumping the contacts.txt as arrays