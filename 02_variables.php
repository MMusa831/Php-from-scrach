<?php
/* ----------PHP Data Types------------ */
/*

- STRING      Series of characters surrounded by quotes
- INTERGER    Whole numbers
- FLOAT       Decimal numbers
- BOOLEAN     True or false
- ARRAY       Special variables which can hold more than value
- OBJECT      A class
- NULL        Empty variable
- RESOURCE    Special variable that holds a resource

*/

/* ----------VARIABLES RULES ------------ */

/*
- Must be prefixed by $
- Must start with letter or underscore character
- Can't start with a number
- Variables are case-sensetive( $name $NAME not the same variable)

*/

$name = 'Iyad'; // String
$age = 3; // Int
$goes_to_school = true; // bool
$cash_on_hand = 13.95; // float

// var_dump($goes_to_school);
// echo $name . ' is ' . $age . ' years old ';
// echo "$name is $age years old";
// echo "${name} is ${age} years old";

// $x = '5' + '5';
// echo $x;
// var_dump($x);

define('HOST', 'localhost');
define('DB_NAME', 'php_crash');

echo HOST;