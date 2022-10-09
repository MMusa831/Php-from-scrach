<?php

/* ----------For Loop ---------*/

/*
** For loop syntax
for (initialize; condition; increment) {
    // code to be executed
}
*/

// for ($i = 0; $i <= 10; $i++) {
//     echo 'Number ' . $i*2 . '<br>';
// }


/* ----------While Loop ---------*/

/*
** While loop syntax
while (condition) {
    // code to be executed
}
*/
// $i = 1;
// while($i <= 15) {
//     echo 'Number ' . $i  . '<br>';
//     $i++;
// }

/* ----------Do While Loop ---------*/

/*
** Do While loop syntax
do {

} while (condition);

Do ... while loop will always execute the block of code once,
even tne condition is false.
*/

// $i = 0;
// do {
//      echo 'Number ' . $i  . '<br>';
//      $i++;
// } while($i <= 12);


/* ----------Foreach Loop ---------*/

/*
** Foreach loop syntax
 
 foreach ($array as $value) {
    // code to be executed!
 }

*/

$posts = ['1st Post', '2nd Post', '3rd Post'];

// for($x = 0; $x < count($posts); $x++) {
//     echo '- ' . $posts[$x] . '<br>';
// };

// foreach($posts as $post) {
//     echo '- ' . $post . '<br>';
// }

// foreach($posts as $index => $post) {
//     echo $index + 1 . ' - ' . $posts . '<br>';
// }

$person = [
    'first_name' => 'iyad',
    'last_name' => 'musa',
    'email' => 'mail@iyad.com'
];

foreach($person as $key => $value) {
    echo "$key - $value <br>"; 
}