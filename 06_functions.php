<?php

// function addUser($name) {
//     echo "$name  added";
// }

// addUser('iyad');

function sum($n1, $n2) {
    return $n1 + $n2;
};

// echo sum(5, 7);

$multiply = function($n1, $n2) {
    return $n1 * $n2;
};

// echo $multiply(3, 4);

// ARROW FUNCTION

$multiply = fn($n1, $n2) =>
$n1 * $n2;

echo $multiply(3, 5);