<?php

$file = 'extras/users.txt';

if (file_exists($file)) {
    // echo readfile($file);
    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
} else {
    $handle = fopen($file, 'w');
    $contents = 'Iyad' . PHP_EOL . 'Khalid' . PHP_EOL . 'Shemaa';
    fwrite($handle, $contents);
    fclose($handle);
}
