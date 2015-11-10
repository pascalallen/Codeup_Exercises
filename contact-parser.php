<?php
$filename = 'contacts.txt';
function parseContacts($filename)
{
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$contactsArray = explode(PHP_EOL, $contents);
    $contacts = array();
    foreach($contactsArray as $key => $contact) {
    	$innerArray['name'] = explode('|', $contact)[0];
    	$innerArray['number'] = explode('|', $contact)[1];
    	array_push($contacts, $innerArray);
    };
    fclose($handle);
    return $contacts;
}

var_dump(parseContacts('contacts.txt'));
