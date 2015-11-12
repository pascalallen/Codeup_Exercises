<?php

function logMessage($logLevel, $message)
{
	$logDate = date("Y-m-d");
    $filename = "log-{$logDate}.log";
    $fullMessage = date("Y-m-d H:i:s ") . $logLevel . $message;
	$handle = fopen($filename, 'a');
	fwrite($handle, $fullMessage . PHP_EOL);
	fclose($handle);
}


function logInfo($message) 
{
	logMessage("INFO", $message);
}

function logError($message)
{
	logMessage("ERROR", $message);
}

logInfo(" This is an info message.");
logError(" This is an error message.");