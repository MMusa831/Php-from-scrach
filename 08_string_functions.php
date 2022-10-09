<?php

$string = 'Hello World';

// GET STRING LENGTH
 echo strlen($string) . '<br>';

 // FIND THE POSITION OF THE FIRST ELEMENT IN THE STRING
 echo strpos($string, 'o') . '<br>';

 // FIND THE POSITION OF THE LAST ELEMENT IN THE string
 echo strrpos($string, 'o') . '<br>';

 // REVERSE A STRING
 echo strrev($string) . '<br>';

 // CONVERT ALL CHARACTERS TO LOWER CASE
 echo strtolower($string) . '<br>';

// CONVERT ALL CHARACTERS TO UPPER CASE
echo strtoUPPer($string) . '<br>';

// UPPERCASE THE FIRST CHARACTER OF EACH WORD
echo ucwords($string) . '<br>';

// STRING REPLACE
echo str_replace('World', 'Everyone', $string) . '<br>';

// RETURN PORTION OF STRING SPECIFIED BY THE OFFSET AND LENGTH
echo substr($string, 0, 5) . '<br>';
echo substr($string, 5) . '<br>';

// // STARTS WITH
// if(str_starts_with($string, 'Hello')) {
//     echo 'YES';
// };

// // END WITH
// if (str_ends_with($string, 'ld')) {
//     echo 'YES';
// };

printf('%s likes to %s', 'Iyad', 'Watch Tv');

