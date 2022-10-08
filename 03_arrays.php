<?php
// Simple array
$numbers = [1, 3, 25, 47 ];
$fruits = array('apple', 'banana', 'orange');

// var_dump($numbers);
// echo $fruits[0];

// Associative Array

$colors = [
    0 => 'blue',
    1 => 'red',
    2 => 'green'
];

// echo $colors[0];

$hex = [
    'red' => '#00f',
    'blue' => '#0f0',
    'green' => '#f00'
];

// echo $hex['blue'];

$person = [
    'first_name' => 'Iyad',
    'last_name' => 'Musa',
    'email' => 'iyad@gmail.com'
];

// echo $person['email'];

$people = [
    [
    'first_name' => 'Iyad',
    'last_name' => 'Musa',
    'email' => 'iyad@gmail.com'
    ],
    [
    'first_name' => 'Mohmoud',
    'last_name' => 'Musa',
    'email' => 'Mohamed@gmail.com'
    ],
    [
    'first_name' => 'Shemaa',
    'last_name' => 'Musa',
    'email' => 'Shemaa@gmail.com'
    ]
];

// echo $people[1]['first_name'];
var_dump(json_encode($people));