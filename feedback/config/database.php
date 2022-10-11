<?php
  define('DB_HOST', 'localhost');
  define('DB_USER', 'Iyad');
  define('DB_PASS', 'Soudan11@');
  define('DB_NAME', 'php_from_scratch');
   
 // Create  connection
 
 $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

 // Check connection
 if($conn->connect_error) {
    die('Connection failed ' . $connect_error);
    
 }

