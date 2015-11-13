<?php

$inputFile = 'movies.txt';
$outputFile = 'sorted_movies.txt';

function readLines($inputFile)
{
	$handle = fopen($inputFile, 'r');
	$contents = fread($handle, filesize($inputFile));
	$lines = explode(PHP_EOL, trim($contents));
	fclose($handle);
	return $lines;
}

function writeLines($outputFile, $lines)
{
	$handle = fopen($outputFile, 'w');
	fwrite($handle, implode(PHP_EOL, $lines));
	fclose($handle);
}

function randomMovie($movies)
{
	$key = array_rand($movies);
	return $movies[$key];
}

$movies = readLines($inputFile);

echo "Let's watch " . randomMovie($movies) . "!\n";

sort($movies);

writeLines($outputFile, $movies);