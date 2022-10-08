<?php

/*
  <       Less than
  >       Greater than
  <=      Less than or equal to
  >=      Graeter than or equal to
  ==      Equal to
  ===     Identical to
  !=      Not equal to
  !==     Not identical to

  ----------- If Statement -------
  ** If statement Syntax
  if(condition) {
     the code to be executed if condition is true
  };
*/

// $age = 15;

// if($age >= 18) {
//     echo 'Congratulation! you can have a drive licence!';
// }else {
//     echo 'Sorry, you are not old enough!';
// }

// $t = date("H");

// if($t < 12) {
//     echo 'Good morning';
// }elseif($t < 18 ) {
//     echo 'Good Afternoon';
// }else {
//     echo 'Good evening';
// }
 
$posts = ['First Post'];

// if(!empty($posts)) {
//     echo $posts[0];
// }else {
//     echo 'No posts';
// }

// echo !empty($posts) ? $posts[0] : 'No Posts';
// $firstPost = !empty($posts) ? $posts[0] : 'No Posts';

// $firstPost = !empty($posts) ? $posts[0] : null;

// $firstPost = $posts[0] ?? null;
// echo $firstPost;

$favcolor = 'black';

switch($favcolor) {
    case 'red':
        echo "Your favorite color is red";
        break;

    case 'blue':
        echo "Your favorite color is blue";
        break;   
    case 'green':
        echo "Your favorite color is green";  
        break;   
    default:
    echo "Your favorite color is not found!";    
}
