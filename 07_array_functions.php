<?php

$fruits = ['apple', 'orange', 'banana'];

// GET LENGTH

// echo count($fruits);

// SEARCH IN ARRAY

// var_dump(in_array('apple', $fruits));

// ADD TO ARRAY

// $fruits[] = 'mango';
// array_push($fruits, 'melon', 'kiwi');
// array_unshift($fruits, 'some');


// // REMOVE FROM ARRAY
// /* from the the end */
//   array_pop($fruits);
// /* from the end  */
//   array_shift($fruits);
// /* specific index */
//  // unset($fruits[2]);  

//  // SLPIT INTO 2 CHUNKS

//  $chenked_array = array_chunk($fruits, 2);

// print_r($chenked_array);

$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];

// print_r($arr4);


// COMBINE ARRAY

$a = ['red', 'green', 'yellow'];
$b = ['apple', 'mango', 'banana'];

$c = array_combine($a, $b);

// print_r($c);

$numbers = range(1, 15);

$newNumbers = array_map(function($number){
    return "# {$number}";
}, $numbers);

// print_r($newNumbers);

$lessThan10 = array_filter($numbers, fn($number) => 
$number < 10);

// print_r($lessThan10);

$sum = array_reduce($numbers, fn($carry, $number) =>
  $carry + $number);

  var_dump($sum);